$(document).ready(function () {
    $(document).on('click', '#filterToggle', function(){
        console.log("Here1");
        $('.shop-left-sidebar').toggleClass('show');
    });
    $(document).on('click', '#filterToggleShow', function(){
        console.log("Here 2");
        $('.shop-left-sidebar').toggleClass('show');
    });
});
