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

    <title>AdminHome</title>

    <style>
        body, html {
        font-family: 'Poppins', sans-serif;
        height: 100vh;
        overflow: hidden;
        background:white !important;

    }
    #banner{
        height:50vh;
        width: 80%;
    }

    .btn_report {
        margin-top: 10px;
        width: 30vh;
        height: 10vh;
        font-weight: bold;
        font-size: 3vh;
        background: #EED90A;
        color: black !important;
        padding-top: 5px;

    }
    .btn_report:hover {
        background: #CFBC02 !important;
    }
    .navbar-brand{
        background-color: rgba(0,0,0,0.09);
        padding: 10px;
        margin-left: none !important;
        margin-right: 100px;
        float: left;    }



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
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Admin<span class="badge badge-success">
                            </span>
                        </a>
                    </li>
                    <li>

                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Switch Account
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <option class="dropdown-item" value="0">Super Admin</option>
                                <option class="dropdown-item" value="43">Talamban Admin</option>
                                <option class="dropdown-item" value="5">Banilad Admin</option>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br>
    <center>
        <img src="img/banner.png" id="banner">
    </center>
    <br>
    <!-- buttons -->
    <center style="margin-top:40px;">
        <!-- <div class="container" style="margin-top: 200px;"> -->
        <center>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <center> <a href="notifPanel.php">
                            <button class=" btn_report btn btn-warning">View Reports</button> </a></center>
                </div>
                <div class="col-md-3">
                    <center>
                        <a href="statistics.php">
                            <button type="button" class="btn_report btn btn-warning">Statistics</button>
                        </a>
                    </center>
                </div>
                <div class="col-md-3"></div>

            </div>
        </center>
        <br>
        <br>
        </div>
    </center>
    </div>
    <script>
        $(document).ready(function () {
            $('.dropdown-item').on('click', function () {
                var x = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "config/accts.php",
                    data: {
                        value :x
                    },
                    success: function (response) {
                       if(response == 0 ||response == 43 || response == 5){
                       }else{
                         alert("error!")
                       }
                    }

                })
            });

        });
    </script>
</body>

</html>