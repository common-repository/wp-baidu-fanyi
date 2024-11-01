<?php
/*
Plugin Name: WP百度翻译插件
Plugin URI: http://wordpress.org/plugins/wp-baidu-fanyi/
Description: WP百度翻译插件是一款基于百度翻译开放平台开发的WordPress文章标题及文章内容即时翻译工具，支持多种语言之间互译。
Author: wbolt team
Version: 1.1.0
Author URI: http://www.wbolt.com/
Requires PHP: 5.3.3
*/


if ( ! defined( 'ABSPATH' ) ) exit;

define('WP_BAIDU_FANYI_PATH',dirname(__FILE__));
define('WP_BAIDU_FANYI_BASE_FILE',__FILE__);
define('WP_BAIDU_FANYI_VERSION','1.1.0');
require_once WP_BAIDU_FANYI_PATH.'/classes/admin.class.php';

new WP_Baidu_Fanyi_Admin();

