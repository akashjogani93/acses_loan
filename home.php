<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acses Home</title>
    <?php include_once('./links.php') ?>
    
    <style>
    .logoBox{
        background-color:#fff;
    }
    </style>
</head>

<body>
    <?php include_once('./header.php');?>
    <div class="container py-4 main">
        <div class="row">
        <h6 class="text-bold"><b>Our Services</b></h6>
            <div class="col-md-4">
                <div class="logoBox"><img src="./img/10.jpeg" class="d-block w-100" alt="..." /> <a href="https://www.policymaster.com/"
                        class="btn w-auto">Insurance</a></div>
            </div>
            <div class="col-md-4">
                <div class="logoBox"> <img src="./img/ags.jpeg" class="d-block w-100" alt="..."> <a href="https://agspmb.com/login"
                        class="btn w-auto">AGS KART</a></div>
            </div>
            <div class="col-md-4">
                <div class="logoBox"><img src="./img/12.jpeg" class="d-block w-100" alt="..."> <a href=""
                        class="btn w-auto">AEPS</a></div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="logoBox"><img src="./img/13.jpeg" class="d-block w-100" alt="..."> <a href=""
                        class="btn w-auto">Recharge</a> </div>
            </div>
            <div class="col-md-4">
                <div class="logoBox"><img src="./img/6.jpeg" class="d-block w-100" alt="..."> <a href=""
                        class="btn w-auto">Passport Seva</a> </div>
            </div>
            <div class="col-md-4">
                <div class="logoBox"><img src="./img/7.jpeg" class="d-block w-100" alt="..."> <a href="loanapplication.php"
                        class="btn w-auto">Unsecured Loans</a></div>
            </div>

        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="logoBox"><img src="./img/8.jpeg" class="d-block w-100" alt="..."> <a href="loanapplication.php"
                        class="btn w-auto">Secured Loans</a> </div>
            </div>
            <div class="col-md-4">
                <div class="logoBox"><img src="./img/3.jpeg" class="d-block w-100" alt="..."> <a href="Hajj-&-umrah.php"
                        class="btn w-auto">  Hajj & Umrah</a> </div>
            </div>

            <div class="col-md-4">
                <div class="logoBox"><img src="./img/5.jpeg" class="d-block w-100" alt="..."> <a href=""
                        class="btn w-auto">Money Transfer</a> </div>
            </div>

        </div>
        <div class="row">
        <div class="col-md-4"><div class="logoBox"> <img src="./img/9.jpeg" class="d-block w-100" alt="..."><a href="" class="btn w-auto" >Book Tickets</a></div></div>
        <div class="col-md-4"><div class="logoBox"> <img src="./img/11.jpeg" class="d-block w-100" alt="..."><a href="" class="btn w-auto" >Book Tickets</a></div></div>
        </div>
    </div>
</body>
<script>
$(document).ready(
    function(){
$('#logout').click(function(){
    $.ajax({
         type: "POST",
                    url: "./backend/logout.php",
                    data: { },

                    success: function (resultData) {
                         console.log(resultData)
                        resultData = JSON.parse(resultData)
                        if (resultData.code == "200") 
                        {
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
</html>


