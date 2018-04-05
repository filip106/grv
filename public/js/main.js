function sendAjaxRequest(route, data, method, successFunction, ctx) {
    $.ajax({
        // error: error,
        url: route,
        method: method,
        // xhrFields: {
        //     withCredentials: true
        // },
        async: true,
        contentType: "application/json",
        data: JSON.stringify(data),
        dataType: "text json"
    }).then(function (data, textStatus, xhr) {
        if (successFunction != null && ctx != null) {
            successFunction(ctx, data, xhr.status);
        }
        return data;
    });
}

function fieldValid(field) {
    if (!field.hasClass('valid-entity-field')) {
        field.addClass('valid-entity-field');
    }
    field.removeClass('invalid-entity-field');
}

function fieldInvalid(field) {
    if (!field.hasClass('invalid-entity-field')) {
        field.addClass('invalid-entity-field');
    }
    field.removeClass('valid-entity-field');
}

function formatAction() {
    return '<span><i class="far fa-edit"></i></span><span><i class="fa fa-trash"></i></span>';
}

$(function() {
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-top-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
});