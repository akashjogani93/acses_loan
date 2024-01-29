<?php session_start();
include_once('../connect.php');
if (isset($_POST['user']) && isset($_POST['pass'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM `login` WHERE `username`=? AND `password`=? AND `status`=1;";
    $stmt = $conn->prepare($sql);
    // Bind parameters
    $stmt->bind_param("ss", $user, $pass);
    // Execute the statement
    $stmt->execute();
    // Get the result set
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    if($result->num_rows <= 0){
        echo json_encode(["data"=>$data,"result"=>"false","code"=>"404"]);
    }else{
    
        echo json_encode(["data"=>$data,"result"=>"true","code"=>"200"]);
          $_SESSION['username']=$user;
          $_SESSION['isLogged']=true;
          
    }
} else {
    echo json_encode(["data"=>null,"result"=>"500"]);
}
?>