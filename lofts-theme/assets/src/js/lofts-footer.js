(function (window) {
    'use strict'; var docElem = window.document.documentElement; function getViewportH() {
        var client = docElem.clientHeight, inner = window.innerHeight; if (client < inner)
            return inner; else return client
    }
    function scrollY() { return window.pageYOffset || docElem.scrollTop }
    function getOffset(el) {
        var offsetTop = 0, offsetLeft = 0; do {
            if (!isNaN(el.offsetTop)) { offsetTop += el.offsetTop }
            if (!isNaN(el.offsetLeft)) { offsetLeft += el.offsetLeft }
        } while (el = el.offsetParent)
        return { top: offsetTop, left: offsetLeft }
    }
    function inViewport(el, h) { var elH = el.offsetHeight, scrolled = scrollY(), viewed = scrolled + getViewportH(), elTop = getOffset(el).top, elBottom = elTop + elH, h = h || 0; return (elTop + elH * h) <= viewed && (elBottom - elH * h) >= scrolled }
    function extend(a, b) {
        for (var key in b) { if (b.hasOwnProperty(key)) { a[key] = b[key] } }
        return a
    }
    function AnimOnScroll(el, options) { this.el = el; this.options = extend(this.defaults, options); this._init() }
    AnimOnScroll.prototype = {
        defaults: { minDuration: 0, maxDuration: 0, viewportFactor: 0 }, _init: function () { this.items = Array.prototype.slice.call(document.querySelectorAll('#' + this.el.id + ' > li')); this.itemsCount = this.items.length; this.itemsRenderedCount = 0; this.didScroll = !1; var self = this; imagesLoaded(this.el, function () { new Masonry(self.el, { itemSelector: 'li', transitionDuration: 0 }); if (Modernizr.cssanimations) { self.items.forEach(function (el, i) { if (inViewport(el)) { self._checkTotalRendered(); classie.add(el, 'shown') } }); window.addEventListener('scroll', function () { self._onScrollFn() }, !1); window.addEventListener('resize', function () { self._resizeHandler() }, !1) } }) }, _onScrollFn: function () { var self = this; if (!this.didScroll) { this.didScroll = !0; setTimeout(function () { self._scrollPage() }, 60) } }, _scrollPage: function () {
            var self = this; this.items.forEach(function (el, i) {
                if (!classie.has(el, 'shown') && !classie.has(el, 'animate') && inViewport(el, self.options.viewportFactor)) {
                    setTimeout(function () {
                        var perspY = scrollY() + getViewportH() / 2; self.el.style.WebkitPerspectiveOrigin = '50% ' + perspY + 'px'; self.el.style.MozPerspectiveOrigin = '50% ' + perspY + 'px'; self.el.style.perspectiveOrigin = '50% ' + perspY + 'px'; self._checkTotalRendered(); if (self.options.minDuration && self.options.maxDuration) { var randDuration = (Math.random() * (self.options.maxDuration - self.options.minDuration) + self.options.minDuration) + 's'; el.style.WebkitAnimationDuration = randDuration; el.style.MozAnimationDuration = randDuration; el.style.animationDuration = randDuration }
                        classie.add(el, 'animate')
                    }, 25)
                }
            }); this.didScroll = !1
        }, _resizeHandler: function () {
            var self = this; function delayed() { self._scrollPage(); self.resizeTimeout = null }
            if (this.resizeTimeout) { clearTimeout(this.resizeTimeout) }
            this.resizeTimeout = setTimeout(delayed, 1000)
        }, _checkTotalRendered: function () { ++this.itemsRenderedCount; if (this.itemsRenderedCount === this.itemsCount) { window.removeEventListener('scroll', this._onScrollFn) } }
    }
    window.AnimOnScroll = AnimOnScroll
})(window);
var $ = jQuery; $(document).ready(function ($) {
    if (0 < $('.back-to-top').length) { $(document).on('click', '.back-to-top a', function (e) { e.preventDefault(); $('html,body').animate({ scrollTop: 0 }, 'slow') }) }
    mywidth(); function bedroomSlider() { $('.bedroom-slider').slick({ arrows: !0, }) }
    jQuery('.ginput_container_select').append('<div class=\'scrollableList\'><span class=\'dropdown_arrow\'></span>\n' + '                <div class=\'selectedOption\'></div>\n' + '                <ul class=\'contact_options\'>\n' + '                </ul>\n' + '</div>'); var all_options = ''; $('.all_options .ginput_container_select .gfield_select option').each(function () { all_options += '<li>' + $(this).val() + '</li>' }); $('.contact_options').append(all_options); var selected_val = ''; selected_val = $('.all_options .ginput_container_select .gfield_select option:selected').text(); $('.selectedOption').text(selected_val); $('.contact_options li').on('click', function () { var selectedVal = $(this).text(); $('.selectedOption').text(selectedVal); $('.all_options select').val(selectedVal) }); if ($('body').hasClass('page-template-contact-template')) { dropdownList() }
    if ($('body').hasClass('page-template-bedroom-template')) { bedroomSlider(); dropdownList() }
    var window_width = $(document).width(); $('.gallery-sub a').toggleClass('current-menu-item'); if (window_width < 1024 && $('body').hasClass('page-template-gallery-template')) { $('#menu-item-903 a').removeClass('current-menu-item') }
    if (window_width > 1024) { $('#menu-item-45').hover(function () { $("ul li:nth-child(3) ul").toggle(); $('body').toggleClass('submenu-open'); $(this).toggleClass('menu-active') }); $('#menu-item-46').hover(function () { $("ul li:nth-child(1) ul").toggle(); $('body').toggleClass('submenu-open'); $(this).toggleClass('menu-active') }) }
    if ($('body').hasClass('page-template-gallery-template-php')) { new AnimOnScroll(document.getElementById('grid'), { minDuration: 0.4, maxDuration: 0.7, viewportFactor: 0.2 }) }
    jQuery('.entertainment').hide(); jQuery('.grocery').hide(); jQuery('.health-fitness').hide(); jQuery('.services').hide(); jQuery('.shopping').hide(); jQuery('.uncategorized').hide(); jQuery('#map-filters').on('change', 'input[type="checkbox"]', function () { var cat = jQuery(this); var catVal = jQuery(this).val(); if (jQuery(cat).is(':checked')) { jQuery('.' + catVal).show() } else { jQuery('.' + catVal).hide() } }); if ($('.faq-inner .toggle-question').hasClass('active')) { $('.faq-inner .toggle-question.active').closest('.faq-inner').find('.toggle-answer').show() }
    $('.faq-inner .toggle-question').click(function () { $(this).parent().toggleClass('active'); if ($(this).hasClass('active')) { $(this).removeClass('active').closest('.faq-inner').find('.toggle-answer').slideUp(200); $(this).find('img').css('transform', 'rotate(0deg)') } else { $(this).addClass('active').closest('.faq-inner').find('.toggle-answer').slideDown(200); $(this).find('img').css('transform', 'rotate(90deg)') } }); $('#gform_submit_button_1').on('click', function () {
        var error_flag = !1; var nameError, emailError, phoneError = !1; var full_name = $('.fl-name-box .ginput_container #input_1_6').val(); var email = $('.email-box .ginput_container #input_1_2').val(); var phone = $('.phone-box .ginput_container #input_1_3').val(); var regex_for_name = new RegExp(/^[A-Za-z\s]+$/); var regex_for_email = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/); var regex_for_phone = new RegExp(/^\d{10}$/); if (regex_for_name.test(full_name)) { nameError = !1 } else {
            if ($('.name_error').length === 0) { $('.fl-name-box .ginput_container').append('<p class="name_error">Please enter valid name</p>') } else { $('.name_error').fadeIn(1000) }
            $('.name_error').fadeOut(3000); nameError = !0
        }
        if (regex_for_email.test(email)) { emailError = !1 } else {
            if ($('.email_error').length === 0) { $('.email-box .ginput_container').append('<p class="email_error">Please enter valid email</p>'); $('.email_error').fadeOut(3000) } else { $('.email_error').fadeIn(1000) }
            $('.email_error').fadeOut(3000); emailError = !0
        }
        if (regex_for_phone.test(phone)) { phoneError = !1 } else {
            if ($('.phone_error').length === 0) { $('.phone-box .ginput_container').append('<p class="phone_error">Please enter valid phone number</p>') } else { $('.phone_error').fadeIn(1000) }
            $('.phone_error').fadeOut(3000); phoneError = !0
        }
        if (!0 === nameError || !0 === emailError || !0 === phoneError) { $('html, body').animate({ scrollTop: $('.contact-title-section').offset().top }, 1000); return !1 } else { $('#gform_1').submit(); $('html, body').animate({ scrollTop: $('.contact-title-section').offset().top }, 1000) }
    }); $('.contact-page-main .scrollableList').click(function () { $('.contact-page-main .scrollableList .contact_options').slideToggle() }); var window_height = $(document).height(); var header_outer_height = $('.menu-wrap-inner').outerHeight(); $('.site-button').on('click', function () { $('html, body').animate({ scrollTop: $('#scrolltoMap').offset().top - header_outer_height + 10 }, 2000) })
}); jQuery(document).on('gform_confirmation_loaded', function (event, formId) { $('html, body').animate({ scrollTop: $('.contact-title-section').offset().top }) }); $(window).resize(function () {
    setTimeout(mywidth, 2000); if ($('body').hasClass('page-template-contact-template')) { dropdownList() }
    if ($('body').hasClass('page-template-bedroom-template')) { bedroomSlider(); dropdownList() }
}); if ($('body').hasClass('page-template-bedroom-template')) { $(window).load(function () { $('.floorplan-loader').css('display', 'none') }) }
window.onscroll = function () { headerSticky() }; var header = document.getElementById('header_menu_wrap'); var sticky = header.offsetTop; function headerSticky() { if (window.pageYOffset > sticky) { header.classList.add('header-sticky') } else { header.classList.remove('header-sticky') } }
$('.site-header .mobile-menu-main .toggle-btn').click(function () { $('header.site-header').toggleClass('active-mobile-menu'); $('header.site-header .full-menu-section').slideToggle() }); $(window).on('scroll', function () { var scrollHeight = $(document).height(); var scrollPosition = $(window).height() + $(window).scrollTop(); if ((scrollHeight - scrollPosition) / scrollHeight === 0) { } }); function mywidth() { var containerWidth = $('.container').width(); var remain = $('body').width() - containerWidth; var marginLeft = '-' + (remain / 2) + 'px'; var marginRight = '-' + (remain / 2) + 'px'; $('.shift-left-img').css('margin-left', marginLeft); $('.shift-right-img').css('margin-right', marginRight); if ($(window).width() > 1920) { $('#content .container').css('max-width', '1920px'); $('.shift-left-img').css('margin-left', 'auto'); $('.shift-right-img').css('margin-right', 'auto') } }
function dropdownList() { $('ul li.active a').click(function (e) { e.preventDefault() }); $('.bedroom-list .arrow-icon').on('click', function () { $(this).parent().toggleClass('open-dropdown') }) }
jQuery(document).ready(function ($) { var visible = !1; $(window).scroll(function () { var scrollTop = $(this).scrollTop(); if (!visible && scrollTop > 450) { $('.back-to-top-arrow').addClass('scrollvisible'); visible = !0 } else if (visible && scrollTop <= 450) { $('.back-to-top-arrow').removeClass('scrollvisible'); visible = !1 } }); $('.back-to-top-arrow').click(function () { $('html, body').animate({ scrollTop: 0 }, 800); return !1 }); if (jQuery('.betterbot_button-wrapper').length > 0) { jQuery('.betterbot_button-wrapper').addClass('betterbot_left'); jQuery('.betterbot_button-wrapper').click(function () { jQuery('.betterbot_bot-container').addClass('betterbot_left') }) } });