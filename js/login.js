
$(document).ready(function(){
    $('#login').click(
        function () {
            $.post( $("#login_form").attr("action"),
                $("#login_form:input").serializeArray(),function (data) {
                    $("div#add_err").html(data);
                }
            )
            $("#login_form").submit(
                function () {
                    return false;
                }
            )
        })
});