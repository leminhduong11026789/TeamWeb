$(document).ready(function () {
    // jQuery.ajaxSetup({
    //     headers: { 'X-CSRF-Token' : jQuery('meta[name=_token]').attr('content') }
    // });
    //
    // CKEDITOR.replaceClass = 'ckeditor';

    jsInTrangChu();


});
function jsInTrangChu() {
    initshow();
    loadMore();
}

function initshow(){
    var productsLine2 = $('.showOder1');
    if(productsLine2.length==0){
        $('#loadMore').attr('hidden',true);
    }
    $('.showOder0').attr('hidden',false);
}

function loadMore() {
    $( "#loadMore" ).click(function() {
        var next = $(this).attr('next');
        var products = $('.showOder'+next);
        products.attr('hidden',false);

        $(this).attr('next',parseInt(next)+1);

        var products2 = $('.showOder'+(parseInt(next)+1));
        if(products2.length==0){
            $(this).attr('hidden',true);
            return;
        }
    });
}