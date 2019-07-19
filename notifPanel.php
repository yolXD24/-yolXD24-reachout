    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
            crossorigin="anonymous">
    </head>
    <style>
        body {
            background: #fafafa;
            height: 100vh;
        }
        .shadow {
            box-shadow: 0 .4rem 0.8rem rgba(0, 0, 0, .15) !important;
        }



        main {
            margin: 0 10%;
        }

        .tbody {
            border-collapse: separate;
            border-spacing: 0 15px;
            background: none !important;
        }

        tr {
            background-color: #fff;
            box-shadow: 0px 2px 2px #aaa;
        }

        tr td {
            padding: 10px 30px !important;
        }

        pre{
            margin-bottom: 3px;
        }
    </style>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Report Panel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="http://pn-lt04:8081/hackathon/adminPage.php#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <center>
            <br><br>
            <br><br>
            <h3>Reports</h3>
            <br>
            <div class="container">

                <main>
                    <table class="table table-hover tbody">

                    </table>
                </main>
            </div>
        </center>


        <div class="modal fade" id="reportModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Report Content</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <small>
                            <pre>
                                <span id="Date"></span>
                            </pre>
                        </small>
                        <p>From: <span id="From"></span></p>
                        <p>Location: <span id="Loc"></span></p>
                        <p>Subject: <span id="subject"></span></p>
                        <hr>
                        <p>Content: <span id="content"></span></p>
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>

    </body>
    <script type="text/javascript">
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
            $(document).on("click", '.actionBtn', function () {
                var row = this;
                var Id = $(this).attr('id').split('_');
                $.ajax({
                    type: "POST",
                    url: "config/reportAction.php",
                    data: {
                        id: Id[1],
                        act: Id[0]
                    },
                    success: function (response) {
                        if (response == 'delete') {
                            $(row)
                                .closest('tr')
                                .css('background', 'skyblue')
                            $(row)
                                .closest('tr')
                                .fadeOut(800, function () {
                                    $(row).remove()
                                })
                            location.reload();


                        } else if (response == 'update') {
                            $.ajax({
                                type: "POST",
                                url: "config/notificationContent.php",
                                data: {
                                    id: Id[1]
                                },
                                success: function (response) {
                                    response = JSON.parse(response);
                                    $('#Date').text(response[0]['Date'])
                                    $('#Loc').text("Brgy. " + response[0]['BarangayName'] + "(" + response[0]['DistrictNo'] + " District)")
                                    $('#From').text(response[0]['Name'])
                                    $('#subject').text(response[0]['ReportSubject'])
                                    $('#content').text(response[0]['ReportContent'])
                                }
                            })
                            $('#reportModal').modal('show');
                            $(row)
                                .closest('tr').removeClass("table-success")

                        }
                    }

                })
            })

            $.getJSON("config/notificationObj.php", function (data) {
                $(function () {
                    if (data.length != 0) {
                        $.each(data, function (i) {
                            var $tr = $('<tr class="notflist">').append(
                                $('<td>').html("<span id='notifDate'><small><pre>" + data[i]["Date"] + "</pre></small></span><span><i class='fas fa-user-circle avatar'></i></span><b>           " + data[i]["ReportSubject"] + "</b>" + "<td class='action'><button type='button' class='close actionBtn' data-toggle='tooltip' title='Delete report' id = 'del_" + data[i]["IdReport"] + "' aria-label='Close'>" + "<span aria-hidden='true'>&times;</span>" + "</button><button class='actionBtn btn btn-secondary btn-sm' id = 'open_" + data[i]["IdReport"] + "' style='float:right;margin-right:10px'><small>View Report</small></button></td>"
                                ),
                            )
                            if (data[i]["status"] == 0) {
                                $($tr).addClass('table-success');
                            }
                            $('.tbody').append($tr);
                        });

                        $('.tbody').append("<br><hr><small><p class='h5  text-center'><a href ='statistics.php' >[analyze reports]</a></p></small>");

                    } else {
                        $('.tbody').append("<br><br><br><br><pre class= 'text-center'>There is no Reports recieved at the moment.</pre>");

                    }

                });
            });
        });


    </script>

    </html>