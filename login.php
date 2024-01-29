<?php
if(isset($_SESSION['isLogged'])){
    if($_SESSION['isLogged']==true){
        ?>
         <script>window.location.href = "https://acses.in/home.php";</script>
        <?php
    }else{
        ?>
         <script>window.location.href = "https://acses.in/login.php";</script>
        <?php
    }
}else{
    ?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('./links.php') ?>
   
    <title>Acses</title>
    <style>
         .inputContainer{
            position: relative;
            margin-bottom: 20px;
        }
        .inputContainer label{
    position: absolute;
    top: -21%;
    background-color: #fff;
    font-size: 14px;
    font-weight: 600;
    padding-left: 8px;
    padding-right: 8px;
    left: 5%;
}
    </style>

</head>

<body>
    <div class="login">
        <div class="box">
            <div style="margin-bottom:15px;">
                <center><a href="https://acses.in"> <img src="./img/logo.png" class="clogo" alt=""></a></center>
            </div>
            <h4 class="text-bold text-center mb-4">Login With Acses</h4>
            <div class="inputContainer">
                <label for="">Username</label>
                <input type="text" id="user">
            </div>
            <div class="inputContainer">
                <label for="">Password</label>
                <input type="text" id="pass" >
            </div>
            <div class="inputContainer" style="border:0px; padding:0px;">
                <a id="submit" class="btn" style="background-color:purple;color:#fff; width:100%;padding:15px;">LOGIN</a>
            </div>
            <center style="margin-top:15px;"><span>Forgot Password ?</span></center>
            <center style="margin-top:15px;"><span>Don't you have an account yet ? <a href="./signup.php" class="btn btn-primary">Signup
                        here</a> </span></center>
        </div>
    </div>
    <script>
        $('#submit').click(function () {
            let user = $('#user').val()
            let pass = $('#pass').val()
            if (user == '') {
                alert("Enter username")
            } else if (pass == '') {
                alert("Enter password")
            } else {
                $.ajax({
                    type: "POST",
                    url: "./backend/login.php",
                    data: { user: user, pass: pass },

                    success: function (resultData) {

                        resultData = JSON.parse(resultData)
                        console.log(resultData.data);
                        if (resultData.code == "404") {
                            alert("User Not Found")
                        } else if (resultData.code == "200") {
                            
                            // Redirect to another page
                            if (resultData.data.type == 'User') {
                                window.location.href = "./home.php";
                            } else if (resultData.data.type == 'Master') {
                                window.location.href = "./dashboard/";
                            }


                        } else if (resultData.code == "500") {
                            alert("Something Went wrong")
                        }
                    }
                })

            }

        });
    </script>
</body>

</html>
    <?php
}
?>
