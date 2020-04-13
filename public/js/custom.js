$(function () {
    $("#surverform").submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: $("#surverform").attr("action"),
            data: new FormData(this),
            processData: false,
            contentType: "json",
            success: (res) => {},
            error: (e) => {},
        });
    });
});
