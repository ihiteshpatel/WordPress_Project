(function ($) {

    /* Custom JS for slick carousel */
    class SlickCarousel {
        constructor() {
            this.initiateCarousel();
        }

        initiateCarousel() {
            $('.slick-floors').slick({
                autoplay: true,
                autoplaySpeed: 1000,
                slidesToShow: 1,
                slidesToScroll: 1,
            });
        }
    }

    new SlickCarousel();

    /* ---------------------------- */

    /* Custom JS while redirecting to Floorplans children pages */

    $(document).ready(function () {
        $(function () {
            var href = window.location.href;
            $('.nav-item a').each(function (e, i) {
                if (href.indexOf($(this).attr('href')) >= 0) {
                    $(this).parent().addClass('active');
                }
            });
        });

    });

    /* ---------------------------- */

    /* Toggle the bedroom-list dropdown menu for max-width: 767px */
    $(document).ready(function () {
        $('.arrow-icon').click(function () {
            $('.bedroom-list').toggleClass('open-dropdown');
        });
    });
    /* ---------------------------- */

})(jQuery);
