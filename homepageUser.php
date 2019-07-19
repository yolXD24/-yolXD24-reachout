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

    <title>Home</title>

    <style>
        body {
        font-family: 'Poppins', sans-serif;
        background:white!important;
    }

    .masthead {
        height: 100vh;
        min-height: 500px;
        background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .carousel-item img {
        width: 100%;
        height: 80vh ;
        opacity: 0.5;
    }
    .container-fluid{
        padding: 0;
    }

    .carousel {
        background: black;
    }

    .btn_report {
        height: 55px;
        font-weight: bold;
        width: 200px;
        font-size: 30px;
        background: #EED90A;
        color: black !important;
        padding-top: 5px;

    }
    .navbar-brand{
        background-color: rgba(0,0,0,0.09);
        padding: 10px;
        margin-left: none !important;
        margin-right: 100px;
        float: left;    }

    .btn_report:hover {
        background: #CFBC02 !important;
    }

    .carousel-caption {
        bottom: 100px;
        font-size: 63px !important;
    }

    .thugLine {
        padding-top: 50px;
        font-size: 19px;
        text-align: justify;
        text-indent: 30px;
    }
    .nav-link:hover{
        text-decoration: underline;
    }


    .info{
      background: #CFBC02 !important;
    }
    #reachOutLogo{
        height: 30px;
        width:30px;
        margin-top: -7px;

    }
    .rOut{
        margin-top: 5px!important;
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
            
    section {
            padding: 10px 0;
        }

        section .section-title {
            text-align: center;
            color: #EED90A;
            margin-bottom: 50px;
            text-transform: uppercase;
        }

        #footer {
            background: #EED90A !important;
        }

        #footer h5 {
            padding-left: 10px;
            border-left: 3px solid #EED90A;
            padding-bottom: 6px;
            margin-bottom:5px;
            color: #EED90A;
        }

        #footer a {
            color: #EED90A;
            text-decoration: none !important;
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }

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
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><span><img src="img/logo_reachout.png" alt="logo" id="reachOutLogo"></span><span
                    class="h5 rOut"> ReachOut</span></b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="homepageUser.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index1.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Terms and Condition</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- The slideshow -->
    <div class="container-fluid">
        <div id="header" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#header" data-slide-to="0" class="active"></li>
                <li data-target="#header" data-slide-to="1"></li>
                <li data-target="#header" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/osec1.jpg" alt="img1">
                    <div class="carousel-caption">
                        <p style="font-size:40px;">Help us to Stop Human Trafficking</p>

                        <a href="reporterForm.php"><button class=" btn_report btn btn-primary">Report</button></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/osec2.jpeg" alt="img2">
                    <div class="carousel-caption">
                        <p style="font-size:40px">Help us to Stop Human Trafficking</p>
                        <a href="reporterForm.php"><button class=" btn_report btn btn-primary">Report</button></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/osec3.jpeg" alt="img3">
                    <div class="carousel-caption">
                        <p style="font-size:40px">Help us to Stop Human Trafficking</p> <a href="reporterForm.php"><button
                                class=" btn_report btn btn-primary">Report</button></a>

                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#header" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#header" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

    <!-- Terms and Condition content-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    <h3 class="modal-title">Terms and Conditions</h3>
                </div>
                <div class="modal-body">
                    <p>Hi there! If you continue to browse and use this website, you are agreeing to
                        comply with and be bound by the following terms and conditions of use. The term 'you' refers to
                        the user of our
                        website.
                        <br><br>
                        The use of this website is subject to the following terms of use:
                        <br>
                        <ul>
                            <li>The content of the pages of this website is for your general information and use
                                only. It is subject to change without notice.</li>
                            <li>Your use of any information or materials on this website is entirely at your own
                                risk, for which we shall not be liable.
                                It shall be your own responsibility to ensure that any information you are given
                                through this website are true, current and complete.</li>
                            <li>When using our website, we may automatically collect certain information about your
                                device. These information may
                                include your IP address, location and other personal information.</li>
                        </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_close btn btn-primary nav-link terms" data-dismiss="modal">I Agree</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="container-fluid " style="background-color: rgba(0,0,0,0.09);">
        <footer class="page-footer font-small ">
            <div class="container">
                <hr class="rgba-white-light">
                <div class="row d-flex text-center justify-content-center mb-sm-0 ">
                    <div class="col-sm-8">
                        <p> <strong>About Us<br></strong><br>We are a concern citizen that would like to save those
                            valuable individual who are put in the mud of difficulties and economically challenge.</p>
                        Having trouble? <a href="index1.php">Contact us </a>
                    </div>
                </div>
                <!-- <hr class="clearfix d-md-none rgba-black-light" style="margin: 10% 15% 5%;"> -->
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
    <script>
        $(document).ready(function () {
            $('.carousel').carousel({
                interval: 3000,
                cycle: true
            });
        });
    </script>


</body>

</html>
<!-- sdfa -->
