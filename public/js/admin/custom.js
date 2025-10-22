$(document).ready(function () {


});
function showCustomToster(selector = "", messageSelector = "", type = "", message = "") {
    var $selector = $('#' + selector);
    var $msgSelector = $('#' + messageSelector);
    if($selector.length && $msgSelector.length) {
        $selector.removeClass('d-none');
        $msgSelector.text(message);
        if(type === 'success') {
            $selector.addClass('alert-success');
        } else if(type === 'error') {
            $selector.addClass('alert-danger');
        }
    }
    setTimeout(() => {
        $selector.addClass('d-none');
        $selector.removeClass('alert-success');
        $selector.removeClass('alert-danger');
        $msgSelector.text('');
    }, 3000);
}
