<?php
if (isset($_SESSION['isLogged'])) {
    if ($_SESSION['isLogged'] == true) {
        ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <a class="navbar-brand d-flex flex-row align-items-center" href="#"><img src="./img/logo.png"
                        style="" alt="">
                   
                    <a href="#" id="logout" style="text-decoration:none; color:#000;">Logout</a>
                
            </div>
        </nav>
        <?php
    } else {
        ?>
        <script>window.location.href = "https://acses.in/";</script>
        <?php
    }
} else {
    echo "something went wrong  ";
    ?><a href="https://acses.in/"> Visit Acses</a>
    <?php
    die();
} ?>