<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Report</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="icon" href="img/logo_reachout.png" type="image/x-icon">
    <style>
    body {
        background-repeat: no-repeat;
        background-size: cover;
        background: url('img/logo_reachout.png');
        background-position: center;
        background-repeat:no-repeat;
        height: 95vh;
        /* overflow: hidden; */
     }

    .form-report {
        background: rgba(255, 255, 255, 0.9) !important;
        margin: 70px;
        -webkit-box-shadow: 0px 0px 15px 2px rgba(0, 0, 0, 0.55);
        -moz-box-shadow: 0px 0px 15px 2px rgba(0, 0, 0, 0.55);
        box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.3);
        padding: 30px;
        overflow: auto;
        border-radius: 10px;

    }

    .form-rounded {
        border-radius: 5px;
    }

    ::placeholder {
        color: peachpuff;
        font-size: 13px;
    }

    .results {
        font-size: 14px;
        padding: 4px;
    }

    .btn_Sumbit {
        background: #CFBC02 !important;
        border: none !important;
        color: black;
        font-weight: bold;
        float: right;
        overflow: auto;
    }

    .btn_Sumbit:hover {
        color: black !important;
        font-weight: bolder !important;
        background: #E2801F !important;
    }

    .swal-title,
    .swal-text {
        text-align: center;
        color: black;
    }
    </style>
</head>

<body>
    <div class="form-report">
        <h3 class="text-center">Report Details</h3>
        <hr>

        <form action="config/submitReport.php" id='reportForm' method="POST">
            <div class="form-title"></div>
            <div class="form-group">
                <label for="inputName">Name<span class="text-success">*</span></label>
                <input type="text" class="form-control" name="name" id="inputName" placeholder="Name/username">
            </div>
            <div class="form-group">
                <label for="inputWhat">Subject</label>
                <select class="custom-select" id="inputGroupSelect01" name="subject" required>
                    <option value='' hidden>Choose...</option>
                    <option value="Suspicious Activity">Suspicious Activity</option>
                    <option value="OSEC">Online Sexual Exploitation of Children</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputAdd">Description</label>
                <textarea class="form-control form-rounded" name="description" id="inputDescription"
                   
                    required></textarea>
            </div>
            <div class="form-group">
                <label for="inputWhere">Location (Barangay)</label>
                <input type="text" class="form-control" id="inputWhere" name="location" required>
            </div>
            <ul class="list-group" id="searchresult"></ul>
            <br>
            <button type="button" class="btn btn-primary btn_Sumbit btn-lg ">Report</button>
        </form>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- jQuery UI library -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
    $(document).ready(function() {
        $(function() {
            $("#inputWhere").keyup(function ajaxcall() {
                var term = $(this).val()
                $.ajax({
                    type: "POST",
                    url: "config/search.php",
                    data: {
                        term: term
                    },
                    dataType: 'json',
                    success: function(response) {
                        $("#searchresult").empty();
                        if (response.length != 0) {
                            response = jQuery.unique(response);
                            var li = null;
                            for (var values = 0; values < response
                                .length; values++) {
                                li = '<li class="list-group-item results list-group-item-warning">' +
                                    response[
                                        values] + '</li>';
                                $("#searchresult").append(li);
                                $('.results').click(function() {
                                    $("#inputWhere").val($(this).text());
                                    $(".btn_Sumbit").attr("disabled",
                                        false);

                                    $("#searchresult").empty();
                                });
                            }
                            if (event.keyCode == 8 || event.keyCode == 46) {
                                term = $(this.val())
                            }
                            if (term.trim() == '' || response.length === 0) {
                                $("#searchresult").empty();
                            }

                        } else {
                            var li =
                                '<li class="list-group-item results list-group-item-danger">Barangay not found  ! Please make sure Location is in Cebu City only...</li>';
                            $("#searchresult").append(li);
                            $(".btn_Sumbit").attr('disabled', true);

                        }
                    }

                })
                ajaxcall();
            });
        });

        $('#inputName').change(
            function() {
                $(".btn_Sumbit").attr("disabled", false);

                if (!$(this).val().match(/^[a-zA-Z0-9 _.-]{3,30}[a-zA-Z\s]*$/)) {
                    swal('Name Error!', "Must Input Valid Name!", 'error');
                    $(".btn_Sumbit").attr("disabled", true);
                } else {
                    $(".btn_Sumbit").attr("disabled", false);
                }
            });

        $(".btn_Sumbit").click(function() {
            if(confirm("Confirm Submission")){
                $('.btn_Sumbit').attr('type', 'submit');
            }

        });
    });
    </script>
</body>

</html>