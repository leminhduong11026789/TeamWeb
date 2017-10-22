$(document).ready(function () {
    jQuery.ajaxSetup({
        headers: { 'X-CSRF-Token' : jQuery('meta[name=_token]').attr('content') }
    });

    CKEDITOR.replaceClass = 'ckeditor';


    onlySelectOne('checkboxOnlySelectOne');
    checkBoxAll();
    addDescription();
    removeDescription();
});


function addDescription(){
    $("#clickAddDescription").click(function(){
        var order = parseInt($(this).attr('order'))  ;
        var classDiv = '"elementAdd form-group col-sm-12 order'+order+'"';
        var nameInput = '"description['+order+']"';
        var description = 'Mô tả '+order;
        var html = '<div class='+classDiv+'>'
            +'<label for="description">'+description+'</label>'
            +'<input class="form-control" name='+nameInput+' type="text">'
            +'</div>';
        $(html).insertBefore('.addDescription');
        $(this).attr('order',order+1);
        $('#clickRemoveDescription').attr('order',parseInt($('#clickRemoveDescription').attr('order'))+1);
    });
}

function removeDescription() {
    $("#clickRemoveDescription").click(function(){
        var elements = $('.elementAdd');
        if(elements.length>0){
            var order = parseInt($(this).attr('order'));
            $('.order'+order).remove();
            $(this).attr('order',order-1);
            $('#clickAddDescription').attr('order',parseInt($('#clickAddDescription').attr('order'))-1);
        }
        else{
            alert('Có duy nhất 1 mô tả. Không thể xóa !');
        }
    });
}

function onlySelectOne(className) {
    var allCheckBox = $('input[type="checkbox"].'+className);
    allCheckBox.on('ifClicked', function () {
        var checked = $(this).parent('[class*="icheck"]').hasClass("checked");
        if (!checked) {
            allCheckBox.iCheck('uncheck');
            $(this).prop("checked", true);
        }
    });
}


/***********Active Obj use Id. Function default is 'actives()' in API class********************/
function action(modelName,urlElement) {
    $('.'+modelName).on('switchChange.bootstrapSwitch', function (event, state) {
        var model_id = $(this).val();
        startAjaxLoading();
        $.ajax({
            url: urlElement + model_id + '/actives',
            type: 'PATCH',
            data: {
                id: model_id
            },
            success: function (response) {
                endAjaxLoading();
                console.log(response.data);
                // console.log('Request success', response);
            },
            error: function (response) {
                endAjaxLoading();
                console.log('Request error', response);
            }
        });
    });
}

function hoverUser() {
    $('[data-toggle="tooltip"]').tooltip();
}


function startAjaxLoading() {
    $("#wait").css("display", "block");
    $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: 'none',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff'
    },
        message: '',
    });
}

function endAjaxLoading(){
    $("#wait").css("display", "none");
    $.unblockUI();
}

function delete_multi_confirm() {
    var r = confirm("Are you sure!");
    if (r == true) {
        $('#items').submit();
    }
}

function checkBoxAll() {
    var elements =  $('input[type="checkbox"].'+'check-single');
    var checkAll =  $('input[type="checkbox"].'+'check-all');
    if(elements.filter(':checked').length == elements.length) {
        if(elements.length==0){
            checkAll.prop('checked', false);
        }
        else{
            checkAll.prop('checked', true);
        }
    } else {
        checkAll.prop('checked', false);
    }
    checkAll.iCheck('update');
}
