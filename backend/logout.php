<?php session_start();
$_SESSION['isLogged']=false;
echo json_encode(["code"=>"200"]);

?>