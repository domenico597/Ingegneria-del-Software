// https://github.com/HasanQQ/formToJson.git

$.fn.formToJson = function () {
    form = $(this);

    var formArray = form.serializeArray();
    var jsonOutput = {};

    $.each(formArray, function (i, element) {
        var elemNameSplit = element['name'].split('[');
        var elemObjName = 'jsonOutput';

        $.each(elemNameSplit, function (nameKey, value) {
            if (nameKey != (elemNameSplit.length - 1)) {
                if (value.slice(value.length - 1) == ']') {
                    if (value === ']') {
                        elemObjName = elemObjName + '[' + Object.keys(eval(elemObjName)).length + ']';
                    } else {
                        elemObjName = elemObjName + '[' + value;
                    }
                } else {
                    elemObjName = elemObjName + '.' + value;
                }

                if (typeof eval(elemObjName) == 'undefined')
                    eval(elemObjName + ' = {};');
            } else {
                if (value.slice(value.length - 1) == ']') {
                    if (value === ']') {
                        eval(elemObjName + '[' + Object.keys(eval(elemObjName)).length + '] = \'' + element['value'].replace("'", "\\'") + '\';');
                    } else {
                        eval(elemObjName + '[' + value + ' = \'' + element['value'].replace("'", "\\'") + '\';');
                    }
                } else {
                    eval(elemObjName + '.' + value + ' = \'' + element['value'].replace("'", "\\'") + '\';');
                }
            }
        });
    });

    return jsonOutput;
}