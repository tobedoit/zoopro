(function ($) {

    /* 컴택폼 연락처 새로운 마스크 (jquery.mask.min.js) */
    $('.your_phone').mask("000-0000-0000", { placeholder: "xxx-xxxx-xxxx" });

    // contact form 7 여러번 submit 방지
    // http://epsiloncool.ru/programmirovanie/preventing-multiple-submits-in-contact-form-7
    $(".wpcf7-submit").on('click', function (e) {
        if ($(".ajax-loader").hasClass('is-active')) {
            e.preventDefault();
            return false;
        }
    });

}(jQuery));