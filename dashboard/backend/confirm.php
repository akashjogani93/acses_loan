<?php session_start();
include_once('../../connect.php');
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $status=1;
  
    $sql = "UPDATE `login` SET `status` = ? WHERE `uid` = ?";

    // Prepare and bind the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $status,$id);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo json_encode(["code"=>"200","error" => $stmt->error]);
    } else {
        echo json_encode(["code"=>"500","error" => $stmt->error]);
    }
   
} else {
    echo json_encode(["code"=>"500","error" => $stmt->error]);
}
?>