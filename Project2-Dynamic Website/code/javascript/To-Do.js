$(document).ready(function () {
    var count = 0;
    $(".add").click(function () {
        var inputval = $(".form-control").val();
        if (inputval != '') {
            count++;
            $(".todo-list").append('<li><div class="left-cont"><input type="checkbox" id="check-' + count + '" name=""><label for="check-' + count + '"></label><span>' + inputval + '</span></div><span class="remove"> <i class="material-icons">delete</i></span></li>');
        }
        $("form-control").val('');
    })

    $(document).on('change', 'input[type="checkbox"]', function () {
        if ($(this).is(':checked')) {
            $(this).closest("li").children(".remove").addClass("active");
        } else {
            $(this).closet("li").children(".remove").removeClass("active");

        }
    }
    )
    $(document).on('click', '.remove', function () {
        $(this).parent().remove();
    })
})
