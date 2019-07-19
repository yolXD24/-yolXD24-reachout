<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
        crossorigin="anonymous">
    <link rel="icon" href="img/logo_reachout.png" type="image/x-icon">
    <title>Statistics</title>



    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <style>
        body {
        background: #fafafa;
        height: 100vh;}
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
        button{
            text-align: center;
            background-color: #5499C7;
            font-size: 15px;
            color: #ffffff;
        
            }
        input{
        
            height: 20px;
            font-size: 15px;
        }

        th, td {
            text-align: center;
            padding: 5px;
            font-size: 15px;
        }
        
        
        
        th {
            background-color:gray;
            color: white;
            font-style: bold;
            font-size: 18px;
        }
        </style>
    <script type="text/javascript">




        $(document).ready(function () {

            var listv = [];

            $.getJSON("config/getChart.php", function (result) {

                var chart = new CanvasJS.Chart("chartContainer", {
                    title: {
                        text: "Graphical representation\n",
                        fontSize: 20,
                        fontFamily: "tahoma",
                        color: 'black',

                    },
                    data: [
                        {
                            dataPoints: result
                        }
                    ]
                });

                chart.render();

                var number_of_rows = result.length;
                console.log(number_of_rows);
                var link = 'http://www.google.com';
                var k = 0;
                var table_body = '<table class="table table-border table-hover" id="example"><thead><tr><th>Barangay</th><th>Report Count</th><th>Link</t></tr></thead><tbody>';
                for (k in result) {

                    for (i = 0; i < result.length / result.length; i++) {

                        var url = 'https://www.google.com/maps/place/' + result[k]["label"];
                        table_body += '<tr>';

                        table_body += '<td>';
                        table_body += result[k]["label"];
                        table_body += '</td>';


                        table_body += '<td>';
                        table_body += result[k]['y'];
                        table_body += '</td>';

                        table_body += '<td>';
                        table_body += '<a target="_blank" href="' + url + '"><button class="btn btn-sm btn-primary">View on Map</button></a>';
                        table_body += '</td>';

                        table_body += '</tr>';
                        url = 'https://www.google.com/maps/place/';

                    }
                    k++;
                }

                table_body += '</tbody></table>';
                $('#tableDiv').html(table_body);
                //display data..........
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Statistics</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="adminPage.php">Home
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
    </div>

    <center>

        <div class="container">
            <br>
            <br>
            <br>
            <br>
            <br>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#home">Graph</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu1">Table</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane container active" id="home">
                    <div id="chartContainer" style="height: 300px; width: 80%; margin-top: 30px">

                    </div>
                </div>
                <div class="tab-pane container fade" id="menu1">
                    <div style="margin-top: 30px;">
                        <center>
                            <h5>Tabular representation</h5>

                            <div id="tableDiv" style="margin-top: 40px">
                                Table will generate here.
                            </div>
                        </center>
                    </div>

                    <p id="p1"></p>
                </div>
            </div>
        </div>
    </center>


</body>

</html>