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
    <link rel="icon" href="img/logo_reachout.png"
        type="image/x-icon">
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
        height: 80vh;
        opacity: 0.5;
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
        bottom: 110px;
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
    </style>
</head>

<body>
    <!-- Navigation -->
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><span><img src="img/logo_reachout.png" alt="logo" id="reachOutLogo"></span><span class="h5 rOut"> ReachOut</span></b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Terms and Condition</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div id="header" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#header" data-slide-to="0" class="active"></li>
            <li data-target="#header" data-slide-to="1"></li>
            <li data-target="#header" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/osec1.jpg" alt="img1">
                <div class="carousel-caption">
                    <p>Help us to Stop Human Trafficking</p>

                    <a href="reporterForm.php"><button class=" btn_report btn btn-primary">Report</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/osec2.jpeg" alt="img2">
                <div class="carousel-caption">
                    <p>Help us to Stop Human Trafficking</p>
                    <a href="reporterForm.php"><button class=" btn_report btn btn-primary">Report</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/osec3.jpeg" alt="img3">
                <div class="carousel-caption">
                    <p>Help us to Stop Human Trafficking</p> <a href="reporterForm.php"><button
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

    <!-- Terms and Condition content-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    <h3 class="modal-title">Terms and Conditions</h3>
                </div>
                <div class="modal-body">
                    <p>Welcome to our website. If you continue to browse and use this website, you are agreeing to
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
                    <button type="button" class="btn_close btn btn-primary nav-link terms" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>




    <!-- Page Content -->
    <div class="container-fluid" style="margin-top:50px;"> </div>
    <div>
        <div class="container">
            <div class="row info">
                <div class="col-sm-8 rounded" style="background:#EED90A;">
                    <h3 class="d-inline p-3 bg-dark text-white rounded">What we do</h3>
                    <blockquote class="blockquote text-center">
                        <p class="thugLine">Online sexual exploitation most commonly includes grooming, live streaming, consuming child sexual abuse material, and coercing and blackmailing children for sexual purposes. As technology advances, new forms of this crime emerge. Never before has it been easier for perpetrators to make contact with children, share images of abuse, hide their identity and profits – and inspire each other to commit further crimes.</p>
                        <footer><small><pre> From WTF's website</pre></small></footer>
                    </blockquote>
                </div>
                <div class="col-sm-4">
                    <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201812/girls_child.jpeg?5O.uVuvJtgoASw7riG1pOOS1kf7pI5SU "
                        height="304px" width="100%">
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer>
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Crekitature:
            <a href="#">www.passerellesnumeriques.org</a>
        </div>
    </footer>
    <script>
    $(document).ready(function() {
        $('.carousel').carousel({
            interval: 3000,
            cycle: true
        });


        $('.terms').click(function() {
            swal({
                title: 'Terms and Condition',
                text: "Do you agree to the terms and Condition?",
                icon: "warning",
                buttons: ['Cancel', 'I agree'],
                dangerMode: true,

            })
        })
        $(".swal-button--danger").click(function() {});
    });
    </script>


</body>

</html>
<!-- sdfa -->