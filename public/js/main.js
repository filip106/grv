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
    }).then(function (data) {
        if (successFunction != null && ctx != null) {
            successFunction(ctx, data);
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