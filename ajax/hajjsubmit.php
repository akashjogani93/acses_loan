<?php 
    include("../connect.php");

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    // $photo = $_POST['photo'];
    // $adhaarcard = $_POST['adhaarcard'];
    // $bankpass = $_POST['bankpass'];
    // $pancard = $_POST['pancard'];
    // $passport = $_POST['passport'];

    $filephoto = $_FILES['photo'];
    $fileadhar= $_FILES['adhaarcard'];
    $filebank= $_FILES['bankpass'];
    $filepan= $_FILES['pancard'];
    $filepass= $_FILES['passport'];
    $min = 1000;
    $max = 9999;
    $randomNumber = rand($min, $max);
    $fileName = "photo".$randomNumber . time();
    $fileName1 = "adhar".$randomNumber . time();
    $fileName2 = "bank".$randomNumber . time();
    $fileName3 = "pan".$randomNumber . time();
    $fileName4 = "pass".$randomNumber . time();

    $photo = upload_Profile($filephoto, $fileName, "../hajj/");
    $adhaarcard = upload_Profile($fileadhar, $fileName1, "../hajj/");
    $bankpass = upload_Profile($filebank, $fileName2, "../hajj/");
    $pancard = upload_Profile($filepan, $fileName3, "../hajj/");
    $passport = upload_Profile($filepass, $fileName4, "../hajj/");

    $sqlInsertData="INSERT INTO hajjumrah (fname, lname, email, mobile, photo, adhaarcard, bankpass, pancard, passport)VALUES ('$fname', '$lname', '$email', '$mobile', '$photo', '$adhaarcard', '$bankpass', '$pancard', '$passport')";

    if ($conn->query($sqlInsertData) === TRUE)
    {
        $response = array('status' => 'success', 'message' => 'Data successfully inserted into the table');
        echo json_encode($response);
    } else {
        $response = array('status' => 'error', 'message' => 'Error inserting data: ' . $conn->error);
        echo json_encode($response);
    }

    function upload_Profile($image, $customFilename, $target_dir)
    {
    if ($image['name'] != "") {
        $imageFileType = strtolower(pathinfo($image["name"], PATHINFO_EXTENSION));
        $target_file = $target_dir . $customFilename . "." . $imageFileType;
        $uploadOk = 1;
        $msg = " ";
        try {
            $check = getimagesize($image["tmp_name"]);
            $msg = array();
            if ($check !== false) {
                $uploadOk = 1;
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                $msg[1] = "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if ($imageFileType != "pdf" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                $msg[2] = "Sorry, only PDF, JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $msg[3] = "Sorry, your file was not uploaded.";
            } else {
                if (move_uploaded_file($image["tmp_name"], $target_file)) {
                    //$msg= "The file ". basename( $image["name"]). " has been uploaded.";
                } else {
                    $msg[4] = "Sorry, there was an error uploading your file.";
                }
            }
            return ltrim($target_file, '');
        } catch (Exception $e) {
            // Handle exceptions if needed
        }
    } else {
        return "";
    }
    }
?>