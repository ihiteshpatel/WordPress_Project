(function (jQuery) {

    jQuery.fn.visible = function (partial) {

        var jQueryt = jQuery(this),
            jQueryw = jQuery(window),
            viewTop = jQueryw.scrollTop(),
            viewBottom = viewTop + jQueryw.height(),
            _top = jQueryt.offset().top,
            _bottom = _top + jQueryt.height(),
            compareTop = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;

        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

    };

})(jQuery);

jQuery(window).scroll(function (event) {

    jQuery(".image-block img").each(function (i, el) {
        var el = jQuery(el);
        if (el.visible(true)) {
            el.addClass("loaded");
        } else {
            //el.removeClass("loaded");
        }
    });
});