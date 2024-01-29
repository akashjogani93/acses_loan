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
            <h4 class="text-bold text-center mb-4">Hajj & Numrah</h4>
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">First name</label>
                            <input type="text" id="fname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Last name</label>
                            <input type="text" id="lname">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Email</label>
                            <input type="text" id="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Mobile</label>
                            <input type="text" id="mobile">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Location</label>
                            <input type="text" id="location">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Photo</label>
                            <input type="file" id="photo" class="imageInput">
                        </div>
                    </div>
                </div>
               
                <div class="row">
                   
                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Adhaar</label>
                            <input type="file" id="adhaarcard" class="imageInput">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Bank Passbook</label>
                            <input type="file" id="bankpass" class="imageInput">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Pancard</label>
                            <input type="file" id="pancard" class="imageInput">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputContainer">
                            <label for="">Passport</label>
                            <input type="file" id="passport" class="imageInput">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <div class="inputContainer" style="border:0px; padding:0px;">
                            <a id="submit" class="btn"
                                style="background-color:purple;color:#fff; width:100%;padding:15px;">SUBMIT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</body>

</html>