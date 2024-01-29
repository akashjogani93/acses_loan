<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('./links.php') ?>

    <title>Acses</title>
    <style>
        .inputContainer {
            position: relative;
            margin-bottom: 20px;
        }

        .inputContainer label {
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
    <div class="login1">
        <div class="box1">
            <div style="margin-bottom:15px;">
                <center><a href="https://acses.in">  <img src="./img/logo.png" class="clogo" alt=""></a></center>
            </div>
            <h4 class="text-bold text-center mb-5">Signup With Acses</h4>
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Full name</label>
                            <input type="text" id="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Email</label>
                            <input type="text" id="email">
                        </div>
                    </div>
                </div>
                <div class="row">


                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Mobile</label>
                            <input type="text" id="mobile">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Location</label>
                            <input type="text" id="location">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Username</label>
                            <input type="text" id="user">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Password</label>
                            <input type="text" id="pass">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Photo</label>
                            <input type="file" id="photo" class="imageInput">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Adhaar</label>
                            <input type="file" id="adhaar" class="imageInput">
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Bank Passbook</label>
                            <input type="file" id="bank" class="imageInput">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Pancard</label>
                            <input type="file" id="pan" class="imageInput">
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col">
                        <div class="inputContainer" style="border:0px; padding:0px;">
                            <a id="submit" class="btn"
                                style="background-color:purple;color:#fff; width:100%;padding:15px;">SIGNUP</a>
                        </div>
                    </div>
                </div>
            </div>






            <center style="margin-top:15px;"><span>Already have an account ? <a href="./login.php" class="btn btn-primary">Signin
                        here</a></span></center>
        </div>
    </div>
    <script>
        $('#submit').click(function () {
            let user = $('#user').val()
            let pass = $('#pass').val()
            let email = $('#email').val()
            let name = $('#name').val()
            let mobile = $('#mobile').val()
            let location = $('#location').val()
            let photo = $('#photo').val()
            let adhaar = $('#adhaar').val()
            let bank = $('#bank').val()
            let pan = $('#pan').val()
            var fileInputs = document.getElementsByClassName('imageInput');
            var formData = new FormData();

            for (var i = 0; i < fileInputs.length; i++) {
                var file = fileInputs[i].files[0];
                if (file) {
                    formData.append('images[]', file);
                }
            }
            formData.append('user', user)
            formData.append('pass', pass)
            formData.append('email', email)
            formData.append('name', name)
            formData.append('mobile', mobile)
            formData.append('location', location)

            if (name == '') {
                alert("Enter fullname")
            } else if (email == '') {
                alert("Enter email")
            } else if (mobile == '') {
                alert("Enter mobile")
            } else if (user == '') {
                alert("Enter username")
            } else if (pass == '') {
                alert("Enter password")
            } else if (photo == '') {
                alert("Please Upload photo")
            }else if (adhaar == '') {
                alert("Please Upload adhaar")
            }else if (bank == '') {
                alert("Please Upload bank passbook copy")
            }else if (pan == '') {
                alert("Please Upload pancard")
            } else {
                $.ajax({
                    type: "POST",
                    processData: false,
                    contentType: false,
                    url: "./backend/signup.php",
                    data: formData,

                    success: function (resultData) {
                        console.log(resultData)
                        resultData = JSON.parse(resultData)
                        if (resultData.code == "404") {
                            alert("User Not Found")
                        } else if (resultData.code == "200") {
                            alert("Signup Successufull")
                            // Redirect to another page
                            window.location.href = "http://acses.in/login.php";

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