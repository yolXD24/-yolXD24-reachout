<?php 
session_start();
if ($_SESSION['login'] == true) {
    header('Location: adminPage.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <style>
    body,
    html {
        height: 100vh;
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("img/banner.png");
        background-repeat: no-repeat;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        overflow-x: hidden;

    }

    .card-container.card {
        max-width: 400px;
        padding: 40px 30px;
    }

    .btn {
        font-weight: 700;
        height: 36px;
        -moz-user-select: none;
        -webkit-user-select: none;
        user-select: none;
        cursor: default;
    }

    /*
		 * Card component
		 */
    .card {
        background-color: #F7F7F7;
        /* just in case there no content*/
        padding: 15px 25px 30px;
        margin: 0 auto 25px;
        margin-top: 30px;
        /* shadows and rounded borders */
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    }

    .profile-img-card {
        width: 96px;
        height: 96px;
        margin: 0 auto 10px;
        display: block;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }

    /*
		 * Form styles
		 */
    .profile-name-card {
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        margin: 10px 0 0;
        min-height: 1em;
    }

    .reauth-email {
        display: block;
        color: #404040;
        line-height: 2;
        margin-bottom: 10px;
        font-size: 14px;
        text-align: center;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .form-signin #inputEmail,
    .form-signin #inputPassword {
        direction: ltr;
        height: 44px;
        font-size: 16px;
    }

    .form-signin input[type=email],
    .form-signin input[type=password],
    .form-signin input[type=text],
    .form-signin button {
        width: 100%;
        display: block;
        margin-bottom: 10px;
        z-index: 1;
        position: relative;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .form-signin .form-control:focus {
        border-color: rgb(104, 145, 162);
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgb(104, 145, 162);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgb(104, 145, 162);
    }

    .btn.btn-signin {
        padding: 0px;
        font-weight: 700;
        font-size: 14px;
        height: 36px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        border: none;
        -o-transition: all 0.218s;
        -moz-transition: all 0.218s;
        -webkit-transition: all 0.218s;
        transition: all 0.218s;
    }
    </style>

</head>

<body>
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <h3>Log in to your account<h3>
                    <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                    <p id="profile-name" class="profile-name-card"></p>
                    <div class="form-signin">
                        <span id="reauth-email" class="reauth-email"></span>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required
                            autofocus><br />
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <br />
                        <button class="btn btn-lg btn-warning btn-block btn-signin" id="btn_login" type="button">Sign
                            in</button>
                    </div>

        </div><!-- /card-container -->
    </div><!-- /container -->

    <script>
    $(document).ready(function() {
        $(document).keypress(function(event) {
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if (keycode == '13') {
                $("#btn_login").click();
            }

        })
        $('#btn_login').click(function() {
            $.ajax({
                url: "config/login.php",
                type: 'POST',
                data: {
                    email: $('#inputEmail').val(),
                    pw: $('#inputPassword').val()
                },
                success: function(response) {
                    // alert(response);

                    if (response == 1) {
                        window.location.href = "adminPage.php";
                    } else if (response == 0) {
                        
                        swal("Account Not Found!",
                            " Please Double Check Your Credentials",
                            "error");
                    } else {
                        swal("Please Try Again!",
                            " Something went wrong...",
                            "warning");
                    }
                }
            })

        });

    });
    </script>

</body>

</html>
