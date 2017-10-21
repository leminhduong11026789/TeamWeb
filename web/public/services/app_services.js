$(document).ready(function () {
    jQuery.ajaxSetup({
        headers: { 'X-CSRF-Token' : jQuery('meta[name=_token]').attr('content') }
    });

    CKEDITOR.replaceClass = 'ckeditor';



    $('.active_checkbox').on('switchChange.bootstrapSwitch', function (event, state) {
        var checkbox_id = $(this).val();
        console.log('url:', 'admin/actions/' + checkbox_id + '/updateAjax');
        $.ajax({
            url: '/api/admin/actions/' + checkbox_id + '/updateActiveAttribute',
            type: 'PATCH',
            data: {
                id: checkbox_id
            },
            success: function (response) {
                console.log('Request success', response);
            },
            error: function (response) {
                console.log('Request error', response);
            }
        });
    });

    $('.check-all-row').on('ifClicked',function (event) {
        var groupId = $(this).val();
        var url;
        var checked = $(this).parent('[class*="icheck"]').hasClass("checked");
        if (!checked) {
            url = '/api/admin/groups/syncGroupMenuRelation?action=GROUP_CHECK_ALL'
        } else{
            url = '/api/admin/groups/syncGroupMenuRelation?action=GROUP_UNCHECK_ALL'
        }

        startAjaxLoading();

        $.ajax({

            url: url,
            type: 'POST',
            data: {
                group_id: groupId,
            },
            success: function(response)
            {
                endAjaxLoading();
                console.log('Check all success',response);
            },
            error: function (response) {
                endAjaxLoading();
                console.log('Request error',response);
            }
        });

    })

    $('.check-all-col').on('ifClicked',function (event) {
        var tableId = $(this).val().split('-')[0];
        var actionId = $(this).val().split('-')[1];
        var url;
        var checked = $(this).parent('[class*="icheck"]').hasClass("checked");
        if (!checked) {
            url = '/api/admin/groups/syncGroupMenuRelation?action=ACTION_CHECK_ALL'
        } else{
            url = '/api/admin/groups/syncGroupMenuRelation?action=ACTION_UNCHECK_ALL'
        }

        startAjaxLoading();

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                action_id: actionId,
                table_id: tableId,
            },
            success: function(response)
            {
                endAjaxLoading();
                console.log('Check all success',response);
            },
            error: function (response) {
                endAjaxLoading();
                console.log('Request error',response);
            }
        });
    })

    $('.check-all-table').on('ifClicked',function (event) {
        var tableId = $(this).val();
        var url;
        var checked = $(this).parent('[class*="icheck"]').hasClass("checked");
        if (!checked) {
            url = '/api/admin/groups/syncGroupMenuRelation?action=TABLE_CHECK_ALL'
        } else{
            url = '/api/admin/groups/syncGroupMenuRelation?action=TABLE_UNCHECK_ALL'
        }

        startAjaxLoading();

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                table_id: tableId,
            },
            success: function(response)
            {
                endAjaxLoading();
                console.log('Check all success',response);
            },
            error: function (response) {
                endAjaxLoading();
                console.log('Request error',response);
            }
        });
    })

    $('.group_menu_checkbox').on('ifClicked',function (event) {
        var groupId = $(this).val().split('-')[0];
        var tableId = $(this).val().split('-')[1];
        var actionId = $(this).val().split('-')[2];
        var url;
        var checked = $(this).parent('[class*="icheck"]').hasClass("checked");

        if (!checked) {
            url = '/api/admin/groups/syncGroupMenuRelation?action=ADD_SINGLE'
        } else{
            url = '/api/admin/groups/syncGroupMenuRelation?action=REMOVE_SINGLE'
        }

        startAjaxLoading();

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                group_id: groupId,
                table_id: tableId,
                action_id: actionId
            },
            success: function(response)
            {
                endAjaxLoading();
                console.log('Request success',response);
            },
            error: function (response) {
                endAjaxLoading();
                console.log('Request error',response);
            }
        });
    })

    onlySelectOne('checkboxOnlySelectOne');
    checkBoxAll();
});


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
