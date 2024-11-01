<?php
/**
 * This was contained in an addon until version 1.0.0 when it was rolled into
 * core.
 *
 * @package    WBOLT
 * @author     WBOLT
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2019, WBOLT
 */
if ( ! defined( 'ABSPATH' ) ) exit;
class WP_Baidu_Fanyi_Admin
{
    public static $fanyi_api = 'http://api.fanyi.baidu.com/api/trans/vip/translate';
    public static $fanyi_api_timeout = 10;
    public static $name = 'wp_bdfy_pack';
    public static $optionName = 'wp_bdfy_option';
    public $token = '';


    public static function cnf($key,$default=null){
        static $_push_cnf = array();
        if(!$_push_cnf){

            $_push_cnf = get_option(self::$optionName,array());
        }
        if(isset($_push_cnf[$key])){
            return $_push_cnf[$key];
        }

        return $default;

    }


    public function __construct(){




        if(is_admin()){

            //ajax request
            add_action('wp_ajax_wp_baidu_fanyi',array($this,'wp_ajax_wp_baidu_fanyi'));

            add_action('admin_head-post.php',array(__CLASS__,'admin_head'));
            add_action('admin_head-post-new.php',array(__CLASS__,'admin_head'));

            add_action('admin_footer-post.php',array(__CLASS__,'admin_footer'));
            add_action('admin_footer-post-new.php',array(__CLASS__,'admin_footer'));


            add_action('media_buttons', array(__CLASS__, 'add_media_button'), 20);

            //插件设置连接
            add_filter( 'plugin_action_links', array($this,'actionLinks'), 10, 2 );
            add_filter('plugin_row_meta', array(__CLASS__, 'plugin_row_meta'), 10, 2);

            add_action( 'admin_menu', array($this,'admin_menu') );

            add_action( 'admin_init', array($this,'admin_init') );

            add_action('admin_enqueue_scripts',array($this,'admin_enqueue_scripts'),1);

        }


    }

    //分段

    //p,h,div






    public static function add_media_button(){
        $html = '<button id="wb-bdfanyi-btn" type="button" class="button"><span class="dashicons dashicons-translation"></span>一键翻译</button>';
        //$html .= '<button id="wb-bdfanyi2-btn" type="button" class="button"><span class="dashicons dashicons-translation"></span>内容翻译成中文</button>';
        echo $html;
		//ob_start();
		include WP_BAIDU_FANYI_PATH.'/tpl/ppo.php';
		//$html .= ob_get_clean();
    }

    public static function admin_head(){
	    wp_enqueue_style('wbui-css',plugin_dir_url(WP_BAIDU_FANYI_BASE_FILE).'assets/wbui.css', array(), WP_BAIDU_FANYI_VERSION);

        wp_enqueue_script('wbs-admin-js-bdfy', plugin_dir_url(WP_BAIDU_FANYI_BASE_FILE) . 'assets/wbp_admin_bfy.js', array(),WP_BAIDU_FANYI_VERSION,true);

        wp_enqueue_style('wbs-admin-style-bdfy',plugin_dir_url(WP_BAIDU_FANYI_BASE_FILE) . 'assets/wbp_admin_bfy.css',array(), WP_BAIDU_FANYI_VERSION);

    }


    public function admin_footer(){


    }


    function admin_enqueue_scripts($hook){
        global $wb_settings_page_hook_wpbdfy;
        if($wb_settings_page_hook_wpbdfy != $hook) return;

        wp_enqueue_style('wbs-style-bdfy', plugin_dir_url(WP_BAIDU_FANYI_BASE_FILE) . 'assets/wb_plugins_bfy.css', array(),WP_BAIDU_FANYI_VERSION);
    }

    public static function plugin_row_meta($links,$file){

        $base = plugin_basename(WP_BAIDU_FANYI_BASE_FILE);
        if($file == $base) {
            $links[] = '<a href="https://www.wbolt.com/plugins/wbfy">插件主页</a>';
            $links[] = '<a href="https://www.wbolt.com/wbfy-plugin-documentation.html">FAQ</a>';
            $links[] = '<a href="https://wordpress.org/support/plugin/wp-baidu-fanyi/">反馈</a>';
        }
        return $links;
    }

    function actionLinks( $links, $file ) {

        if ( $file != plugin_basename(WP_BAIDU_FANYI_BASE_FILE) )
            return $links;

        $settings_link = '<a href="'.menu_page_url( self::$name, false ).'">设置</a>';

        array_unshift( $links, $settings_link );

        return $links;
    }

    function admin_menu()
    {
        global $wb_settings_page_hook_wpbdfy;
        $wb_settings_page_hook_wpbdfy = add_options_page(
            'WP百度翻译设置',
            'WP百度翻译管理',
            'manage_options',
            self::$name,
            array($this, 'admin_settings')
        );
    }

    function admin_settings(){

        wp_enqueue_script('bdfanyi-setting-js',plugin_dir_url(WP_BAIDU_FANYI_BASE_FILE).'assets/setting.js',array('jquery'));
        $setting_field = self::$optionName;
        $opt_name = self::$optionName;
        $op_sets = get_option( $opt_name );
        include_once( WP_BAIDU_FANYI_PATH.'/settings.php' );
    }


    function admin_init(){
        register_setting(  self::$optionName,self::$optionName );
    }


    /**
     * 获取推送数据结果
     */
    public function wp_ajax_wp_baidu_fanyi(){


        switch ($_REQUEST['do']){


            case 'fanyi':

                $ret = array();
                //$tran = baidu_translate($r->post_title,'en','zh');

                header('content-type:text/json;');
                $txt = trim($_POST['txt']);
                $ret = $this->translate($txt,$_POST['from'],$_POST['to']);


                //$ret['appid'] = self::cnf('appid');
                //$ret['key'] = self::cnf('appkey');
                echo json_encode($ret);

                exit();

                break;



        }
    }

    /**
     * 更新post meta
     * @param $post_id
     * @param $key
     * @param $value
     */
    public function update_meta_row($post_id,$key,$value){
        global $wpdb;

        $row = $wpdb->get_row($wpdb->prepare("SELECT * FROM $wpdb->postmeta WHERE meta_key=%s AND post_id=%d LIMIT 1",$key,$post_id));
        if($row){
            $wpdb->query($wpdb->prepare("UPDATE $wpdb->postmeta SET meta_value=%s WHERE meta_id=%d",$value,$row->meta_id));
        }else{
            $wpdb->query($wpdb->prepare("INSERT INTO $wpdb->postmeta(`post_id`, `meta_key`, `meta_value`) VALUES(%d,%s,%s)",$post_id,$key,$value));
        }
    }




    //翻译入口
    public function translate($query, $from, $to)
    {

        $args = array(
            'q' => $query,
            'appid' => self::cnf('appid'),
            'salt' => rand(10000,99999),
            'from' => $from,
            'to' => $to,

        );
        $args['sign'] = $this->buildSign($query, self::cnf('appid'), $args['salt'], self::cnf('appkey'));
        $ret = $this->call(self::$fanyi_api, $args);
        $ret = json_decode($ret, true);
        return $ret;
    }

    //加密
    function buildSign($query, $appID, $salt, $secKey)
    {
        $str = $appID . $query . $salt . $secKey;
        $ret = md5($str);
        return $ret;
    }

    public function call($url, $args=null)
    {


        $http = wp_remote_post($url,array('body'=>$args));


        if(is_wp_error($http)){
            return '';
        }

        if (200 === $http ['response'] ['code']) {
            return $http ['body'];
        } else {
            return '';
        }


    }



}