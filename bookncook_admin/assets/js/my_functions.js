$(function () {
    $("#datepicker").datepicker().change(function () {

        $.ajax({
            type: "POST",
            url: 'enter_date',
            data: {date: $("#datepicker").val(), '_token': $('input[name=_token]').val()},

            dataType: "json",
            success: function (Data) {
//                $('#' + category).css("display", "block");
//                $('#' + category).html(Data.result);
//                $('#you_searched').css("display", "none");
//                $('#loadingImgDiv').css("display", "none");
//                add_class();
            }
        });
    });
});