<?php 
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo_reachout.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>thankYou</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: white !important;
            height: 100vh;
            overflow: hidden;
            padding-top: 10%;

       }

        .masthead {
            height: 100vh;
            min-height: 500px;
            background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .nav-link:hover {
            text-decoration: underline;
        }


        .info {
            background: #CFBC02 !important;
        }

        #reachOutLogo {
            height: 30px;
            width: 30px;
            margin-top: -7px;

        }

        .rOut {
            margin-top: 5px !important;
        }

        .btn_close {
            height: 45px;
            font-weight: bold;
            width: 100px;
            font-size: 15px;
            background: #EED90A;
            color: black !important;
            padding-top: 5px;
        }

        .btn_close:hover {
            background: #CFBC02 !important;
        }

        /* footer */
        #footer ul.social li {
            padding: 3px 0;
        }

        #footer ul.social li a i {
            margin-right: 5px;
            font-size: 25px;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }

        #footer ul.social li:hover a i {
            font-size: 30px;
            margin-top: -10px;
        }

        #footer ul.social li a,
        #footer ul.quick-links li a {
            color: #EED90A;
        }

        #footer ul.social li a:hover {
            color: #EED90A;
        }

        #footer ul.quick-links li {
            padding: 3px 0;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }

        #footer ul.quick-links li:hover {
            padding: 3px 0;
            margin-left: 5px;
            font-weight: 700;
        }

        #footer ul.quick-links li a i {
            margin-right: 5px;
        }

        #footer ul.quick-links li:hover a i {
            font-weight: 700;
        }

        @media (max-width:767px) {
            #footer h5 {
                padding-left: 0;
                border-left: transparent;
                padding-bottom: 0px;
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid text-dark">

        <div class="card-body">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="display-3">Thank You!<br><i class="fa fa-check" aria-hidden="true"></i></span></h1>
                        <p class="lead"><strong>You've done a great job.</strong></p>
                        <hr>
                        <p class="lead">
                            <a class="btn btn-warning btn-sm" href="http://10.0.2.1/Students/leonilojrtorres/reachout/homepageUser.php" role="button">Continue to homepage</a>
                        </p>
                        <p>
                            Having trouble? <a href="">Contact us</a>
                        </p>
                    </div>

                </div>

                <footer class="page-footer font-small ">
                    <div class="container">
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="list-unstyled list-inline social text-center">
                                <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>