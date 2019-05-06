$(function () {
    $(document).on('change keyup', '.limit-words', function () {
        let content = $(this).val();
        let max = parseInt($(this).attr('data-max'));
        max = isNaN(max) ? 500 : max;
        if (content.length > max) {
            content = content.substr(0, max);
            $(this).val(content);
        }
        $(this).next('span').text('' + content.length + '/' + max);
    });
});