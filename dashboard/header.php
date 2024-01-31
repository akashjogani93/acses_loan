
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php include_once('./links.php') ?>
    <link rel="stylesheet" href="./css/style.css">
    <script>
        $(document).ready(
            function () {
                $('#logout1').click(function () {
                    $.ajax({
                        type: "POST",
                        url: "../backend/logout.php",
                        data: {},

                        success: function (resultData) {
                            console.log(resultData)
                            resultData = JSON.parse(resultData)
                            if (resultData.code == "200") {
                                window.location.href = "http://acses.in/";

                            } else {
                                alert("Something went wrong");
                            }
                        }

                    })
                    window.location.href = "./index.php";
                })
            }
        )

    </script>
</head>

<body>
    <div class="container-fluid" style="" id="header">
        <div class="row">
            <div class="col-md-2" id="sidebar">
                <div class="AdminProfile">
                    <img src="../img/user.png" style="width: 80px; height:80px;margin-bottom:15px;" alt="">
                    <h6 style="color:#fff;">Super Admin</h6>
                </div>
                <div class="navs">
                    <ul>
                        <li class="links">

                            <a href="./index.php">Dashboard</a>
                        </li>
                        <li class="links">

                            <a href="./vendors.php">Vendors</a>
                        </li>
                        <li class="links">
                            <a href="./vendorrequest.php">Vendors Requests</a>
                        </li>
                        <li class="links">

                            <a href="./vendorrequest.php">Payment Requests</a>
                        </li>   
                        <li class="links">
                            <a href="./loanApplyDetails.php">Loan Apply Details</a>
                        </li>
                        <li class="links">
                            <a href="./hajj_umrah.php">Hajj & Umrah</a>
                        </li>
                        <li class="links">
                            <a href="" id="logout1">Logout</a>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="col-md-10 px-0 ">
                <div class="container-fluid px-0 mx-0">
                    <div class="row">
                        <div class="col p-3" style="background-color:purple;">

                        </div>
                    </div>
                </div>