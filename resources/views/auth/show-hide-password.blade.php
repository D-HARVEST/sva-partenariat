<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script>
    $(document).ready(function() {

        $('.pass_show_hide').append(
            ' <div class="password-icon"><i class="fa fa-eye"></i><i class="fa fa-eye-slash"></i></div>');

    });


    $(document).on('click', '.pass_show_hide .password-icon', function() {

        var isPass = $(this).parent().find('input').attr("type") == "password";

        if (isPass) {
            $(this).find(".fa-eye").hide();
            $(this).find(".fa-eye-slash").show();

        } else {
            $(this).find(".fa-eye").show();
            $(this).find(".fa-eye-slash").hide();
        }
        // $(this).text($(this).text() == "Show" ? "Hide" : "Show");
        $(this).parent().find("input").attr("type", isPass ? "text" : "password");
        // $(this).prev().attr('type', function(index, attr) {
        //     return attr == 'password' ? 'text' : 'password';
        // });

    });
</script>
<style>
    .pass_show_hide {
        position: relative
    }

    .pass_show_hide .ptxt {

        position: absolute;

        top: 50%;

        right: 10px;

        z-index: 1;

        color: #f36c01;

        margin-top: -10px;

        cursor: pointer;

        transition: .3s ease all;

    }

    .pass_show_hide .ptxt:hover {
        color: #333333;
    }

    .password-icon {
        display: flex;
        align-items: center;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
        width: 20px;
        /* color: #f9f9f9; */
        transition: all 0.2s;
    }

    .password-icon:hover {
        cursor: pointer;
        color: #ff4754;
    }

    .password-icon .fa-eye-slash {
        display: none;
    }
</style>
