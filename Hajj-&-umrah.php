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
            <h4 class="text-bold text-center mb-4">Hajj & Umrah</h4>
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
                            <a id="submit" class="btn" style="background-color:purple;color:#fff; width:100%;padding:15px;">SUBMIT</a>
                            <div id="submited" style="color:red;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function()
        {
            $('input').focus(function() 
            {
                var inputContainer = $(this).closest('.inputContainer');
                inputContainer.css('border', '');
                inputContainer.find('label').css('color', '');
            });

            $('#submit').on('click',function()
            {
                var fname=$('#fname').val();
                var lname=$('#lname').val();
                var email=$('#email').val();
                var mobile=$('#mobile').val();
                // var photo=$('#photo').val();
                // var adhaarcard=$('#adhaarcard').val();
                // var bankpass=$('#bankpass').val();
                // var pancard=$('#pancard').val();
                // var passport=$('#passport').val();

                var photo=$('#photo')[0].files[0];
                var adhaarcard=$('#adhaarcard')[0].files[0];
                var bankpass=$('#bankpass')[0].files[0];
                var pancard=$('#pancard')[0].files[0];
                var passport=$('#passport')[0].files[0];

                var input=['#fname','#lname','#email','#mobile','#photo','#adhaarcard','#bankpass','#pancard','#passport'];

                for(var i=0; i<input.length; i++)
                {
                    if($(input[i]).val()==='')
                    {
                        console.log('Please Fill Feilds');
                        var fieldElement = $(input[i]);
                        fieldElement.closest('.inputContainer').css('border', '1px solid red');
                        fieldElement.closest('.inputContainer').find('label').css('color', 'red');
                        return;
                    }
                }

                var form_data = new FormData();
                    form_data.append('fname', fname);
                    form_data.append('lname', lname);
                    form_data.append('email', email);
                    form_data.append('mobile', mobile);
                    form_data.append('photo', photo);
                    form_data.append('adhaarcard', adhaarcard);
                    form_data.append('bankpass', bankpass);
                    form_data.append('pancard', pancard);
                    form_data.append('passport', passport);

                let log=$.ajax({
                        url:"ajax/hajjsubmit.php",
                        method:"POST",
                        data:form_data,
                        contentType: false,
                        processData: false,
                        success: function(response) 
                        {
                            alert(response);
                            // $('#submited').html(response);
                            // setTimeout(function() 
                            // {
                            //     $('#submited').html('');
                            // }, 3000);

                            for (var i = 0; i < input.length; i++) 
                            {
                                $(input[i]).val('');
                            }
                        }
                    });
            });
        });
    </script>
</body>
</html>