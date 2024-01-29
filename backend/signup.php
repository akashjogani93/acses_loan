<?php
include_once('../connect.php');
if (isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $location = $_POST['location'];

    //****************************************************************************** */
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Specify the directory where you want to save the uploaded files
        $uploadDirectory = '../user/docs/';

        // Create the directory if it doesn't exist
        if (!file_exists($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }

        // Iterate through each uploaded file
        foreach ($_FILES['images']['error'] as $key => $error) {

            if ($error == UPLOAD_ERR_OK) {

                // Get the temporary file path
                $tmpFilePath = $_FILES['images']['tmp_name'][$key];

                // Generate a unique filename
                $fileName = uniqid() . '_' . $_FILES['images']['name'][$key];

                // Specify the destination file path
                $filePath = $uploadDirectory . $fileName;

                // Move the uploaded file to the destination
                move_uploaded_file($tmpFilePath, $filePath);

                // Optionally, you can store the file paths in an array or perform other actions
                $uploadedFiles[] = $filePath;
            }
        }

        // Print the file paths or perform other actions
        if (!empty($uploadedFiles)) {
            $paths= implode(', ',$uploadedFiles);
            $sql = "INSERT INTO user (`name`, `email`, `mobile`,`documents`,`location`) VALUES ('$name', '$email','$mobile','$paths','$location')";

            // Execute the query
            if ($conn->query($sql) === TRUE) {
                // Get the ID of the last inserted row
                $lastId = $conn->insert_id;
                $sql1 = "INSERT INTO login (`username`, `password`, `type`,`uid`) VALUES ('$user', '$pass','User','$lastId')";
                if ($conn->query($sql1) === TRUE) {
                    echo json_encode(["code" => "200"]);
                } else {
                    echo json_encode(["code" => "500"]);
                }

            } else {
                echo json_encode(["code" => "500"]);
            }


        } else {
            echo json_encode(["code" => "500"]);
        }
    } else {
        echo json_encode(["code" => "500"]);
    }












    //***************************************************************************** */



    // Get the result set
    // $result = $stmt->get_result();
    // if($result->num_rows <= 0){
    //     echo json_encode(["data"=>$result,"result"=>"false","code"=>"404"]);
    // }else{
    //     echo json_encode(["data"=>$result,"result"=>"true","code"=>"200"]);
    // }
} else {
    echo json_encode(["code" => "500"]);
}
?>