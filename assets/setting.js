

var WB = window.WB || {};
WB.BFYSetting = {
    analytics: function ($) {
        var _source = $('[data-wba-source]').length && $('[data-wba-source]').data('wba-source') || window.wbaSource || document.domain;
        $('a[data-wba-campaign]').each(function () {
            var me = $(this),
                _campaign = me.data('wba-campaign'),
                _media = me.data('wba-media') || 'link',
                _url = me.attr('href');

            _url += _url.match("[\?]") ? '&' : '?';
            _url += 'utm_source=' + _source;
            _url += '&utm_media=' + _media;
            _url += '&utm_campaign=' + _campaign;

            me.attr('href',_url);
        })
    }
};

jQuery(function ($) {
    WB.BFYSetting.analytics($);

    $('#optionsframework-wrap').find('input,textarea').on('change',function () {
        $(window).on('beforeunload',function(){
            return confirm("您修改的设置尚未保存，确定离开此页面吗？");
        });

        $('#optionsframework-submit').addClass('sticky-bottom');
    });

    $('#optionsframework-submit .wbs-btn-primary').on('click',function () {
        $(window).unbind('beforeunload');
    });
})