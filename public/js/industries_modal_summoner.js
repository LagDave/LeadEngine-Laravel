function showIndustriesModal(){
    $('#industries_modal').addClass('is-active');
    $('body').addClass('stop-scrolling');
    $('html').addClass('stop-scrolling');
}
function closeIndustriesModal(){
    $('#industries_modal').removeClass('is-active');
    $('body').removeClass('stop-scrolling');
    $('html').removeClass('stop-scrolling');
}