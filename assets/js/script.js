; (function ($) {
    $(document).ready(function () {
        $('[data-featherlight="image"]').each( function () {
            var image = $(this).find("img").attr("src");
            $(this).attr("href", image);
        } );
    });
})(jQuery);
