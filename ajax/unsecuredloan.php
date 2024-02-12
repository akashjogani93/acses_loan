<?php
    include("../connect.php");


$loanAmtMain = $_POST['loanAmtMain'];
$aplication_date = $_POST['aplication_date'];
$losno = $_POST['losno'];
// $photo = $_POST['photo']; // Assuming photo is a file input field
// $signature = $_POST['signature']; // Assuming signature is a file input field
$occupation = $_POST['occupation']; // Assuming occupation is an array of checkbox values
$selfemployed = $_POST['selfemployed']; // Assuming selfemployed is an array of checkbox values
$business = $_POST['business']; // Assuming business is an array of checkbox values
$nature = $_POST['nature']; // Assuming nature is an array of checkbox values
$salaried = $_POST['salaried']; // Assuming salaried is an array of checkbox values
$designation = $_POST['designation'];
$gstavail = $_POST['gstavail'];
$gstnumber = $_POST['gstnumber'];
$efectivedate = $_POST['efectivedate'];
$relationWithAplicant = $_POST['relationWithAplicant']; // Assuming this is a text input field
$yourself = $_POST['yourself']; // Assuming yourself is an array of checkbox values
$a_name = $_POST['a_name'];
$a_fname = $_POST['a_fname'];
$j_fname = $_POST['j_fname'];
$j_sname = $_POST['j_sname'];
$a_mname = $_POST['a_mname'];
$j_mname = $_POST['j_mname'];
$a_gender = $_POST['a_gender'];
$j_gender = $_POST['j_gender'];
$a_depen = $_POST['a_depen'];
$j_depen = $_POST['j_depen'];
$a_edu = $_POST['a_edu'];
$j_edu = $_POST['j_edu'];
$a_mobile = $_POST['a_mobile'];
$j_mobile = $_POST['j_mobile'];
$a_religion = $_POST['a_religion'];
$j_religion = $_POST['j_religion'];
$a_pan = $_POST['a_pan'];
$j_pan = $_POST['j_pan'];
$a_email = $_POST['a_email'];
$j_email = $_POST['j_email'];
$addressdetails = $_POST['addressdetails']; // Assuming addressdetails is an array of checkbox values
$monthlyRent = $_POST['monthlyRent'];
$a_presentadds = $_POST['a_presentadds'];
$a_landmark = $_POST['a_landmark'];
$a_city = $_POST['a_city'];
$a_state = $_POST['a_state'];
$a_pin = $_POST['a_pin'];
$a_std = $_POST['a_std'];
$a_tel = $_POST['a_tel'];
$busempname = $_POST['busempname'];
$a_peraddress = $_POST['a_peraddress'];
$a_landmarkper = $_POST['a_landmarkper'];
$a_cityper = $_POST['a_cityper'];
$a_stateper = $_POST['a_stateper'];
$a_pinper = $_POST['a_pinper'];
$a_stdper = $_POST['a_stdper'];
$a_phoneper = $_POST['a_phoneper'];
$a_seryear = $_POST['a_seryear'];
$a_officialEmail = $_POST['a_officialEmail'];
$a_cmpname = $_POST['a_cmpname'];
$a_cmpcity = $_POST['a_cmpcity'];
$a_cmppin = $_POST['a_cmppin'];
$a_cmpstd = $_POST['a_cmpstd'];
$a_cmpphone = $_POST['a_cmpphone'];
$a_cmpext = $_POST['a_cmpext'];
$a_cmpcor = $_POST['a_cmpcor'];
$a_cmpcinno = $_POST['a_cmpcinno'];
$a_cmppan = $_POST['a_cmppan'];
$a_cmpgst = $_POST['a_cmpgst'];
$a_cmpdate = $_POST['a_cmpdate'];
$a_anualSalary = $_POST['a_anualSalary'];
$a_otherincome = $_POST['a_otherincome'];
$a_bank = $_POST['a_bank'];
$a_branch = $_POST['a_branch'];
$a_account = $_POST['a_account'];
$a_customerid = $_POST['a_customerid'];
$a_yearopened = $_POST['a_yearopened'];
$a_loanAmt = $_POST['a_loanAmt'];
$a_loantenure = $_POST['a_loantenure'];
$a_endUse = $_POST['a_endUse'];
$a_personalname = $_POST['a_personalname'];
$a_relation = $_POST['a_relation'];
$a_residental = $_POST['a_residental'];
$a_refestate = $_POST['a_refestate'];
$a_refepin = $_POST['a_refepin'];
$a_refestd = $_POST['a_refestd'];
$a_refephone = $_POST['a_refephone'];
$a_refemobile = $_POST['a_refemobile'];
$a_personalname2 = $_POST['a_personalname2'];
$a_relation2 = $_POST['a_relation2'];
$a_residental2 = $_POST['a_residental2'];
$a_refecity2 = $_POST['a_refecity2'];
$a_refestate2 = $_POST['a_refestate2'];
$a_refepin2 = $_POST['a_refepin2'];
$a_refestd2 = $_POST['a_refestd2'];
$a_refephone2 = $_POST['a_refephone2'];
$a_refemobile2 = $_POST['a_refemobile2'];
$socode = $_POST['socode'];
$dsacode = $_POST['dsacode'];
$smcode = $_POST['smcode'];
$branchcp = $_POST['branchcp'];
$rmcode = $_POST['rmcode'];
$nameof = $_POST['nameof'];
$dateof = $_POST['dateof'];
$dateandtime = $_POST['dateandtime'];
$hsnpersonname = $_POST['hsnpersonname'];
$contactno = $_POST['contactno'];

$occupationImploded = is_array($occupation) ? implode(",", $occupation) : '';
$selfemployedImploded = is_array($selfemployed) ? implode(", ", $selfemployed) : '';
$businessImploded = is_array($business) ? implode(", ", $business) : '';
$natureImploded = is_array($nature) ? implode(", ", $nature) : '';
$salariedImploded = is_array($salaried) ? implode(", ", $salaried) : '';
$yourselfImploded = is_array($yourself) ? implode(", ", $yourself) : '';
$addressdetailsImploded = is_array($addressdetails) ? implode(", ", $addressdetails) : '';

$photo1 = $_FILES['photo'];
$signature1 = $_FILES['signature'];
$min = 1000;
$max = 9999;
$randomNumber = rand($min, $max);
$timestamp = time();
$photoFileName = "photo_" . $randomNumber . "_" . $timestamp;
$signatureFileName = "signature_" . $randomNumber . "_" . $timestamp;
$photo = upload_Profile($photo1, $photoFileName, "../img/");
$signature = upload_Profile($signature1, $signatureFileName, "../img/");


$sql = "INSERT INTO `unsecuredloan` 
(`loanAmtMain`, `aplication_date`, `losno`, `photo`, `signature`, `occupation`, `selfemployed`, `business`, `nature`, `salaried`, `designation`, `gstavail`, `gstnumber`, `efectivedate`, `relationWithAplicant`, `yourself`, `a_name`, `a_fname`, `j_fname`, `j_sname`, `a_mname`, `j_mname`, `a_gender`, `j_gender`, `a_depen`, `j_depen`, `a_edu`, `j_edu`, `a_mobile`, `j_mobile`, `a_religion`, `j_religion`, `a_pan`, `j_pan`, `a_email`, `j_email`, `addressdetails`, `monthlyRent`, `a_presentadds`, `a_landmark`, `a_city`, `a_state`, `a_pin`, `a_std`, `a_tel`, `busempname`, `a_peraddress`, `a_landmarkper`, `a_cityper`, `a_stateper`, `a_pinper`, `a_stdper`, `a_phoneper`, `a_seryear`, `a_officialEmail`, `a_cmpname`, `a_cmpcity`, `a_cmppin`, `a_cmpstd`, `a_cmpphone`, `a_cmpext`, `a_cmpcor`, `a_cmpcinno`, `a_cmppan`, `a_cmpgst`, `a_cmpdate`, `a_anualSalary`, `a_otherincome`, `a_bank`, `a_branch`, `a_account`, `a_customerid`, `a_yearopened`, `a_loanAmt`, `a_loantenure`, `a_endUse`, `a_personalname`, `a_relation`, `a_residental`, `a_refestate`, `a_refepin`, `a_refestd`, `a_refephone`, `a_refemobile`, `a_personalname2`, `a_relation2`, `a_residental2`, `a_refecity2`, `a_refestate2`, `a_refepin2`, `a_refestd2`, `a_refephone2`, `a_refemobile2`, `socode`, `dsacode`, `smcode`, `branchcp`, `rmcode`, `nameof`, `dateof`, `dateandtime`, `hsnpersonname`, `contactno`) 
VALUES 
('$loanAmtMain', '$aplication_date', '$losno', '$photo', '$signature', '$occupation', '$selfemployed', '$business', '$nature', '$salaried', '$designation', '$gstavail', '$gstnumber', '$efectivedate', '$relationWithAplicant', '$yourself', '$a_name', '$a_fname', '$j_fname', '$j_sname', '$a_mname', '$j_mname', '$a_gender', '$j_gender', '$a_depen', '$j_depen', '$a_edu', '$j_edu', '$a_mobile', '$j_mobile', '$a_religion', '$j_religion', '$a_pan', '$j_pan', '$a_email', '$j_email', '$addressdetails', '$monthlyRent', '$a_presentadds', '$a_landmark', '$a_city', '$a_state', '$a_pin', '$a_std', '$a_tel', '$busempname', '$a_peraddress', '$a_landmarkper', '$a_cityper', '$a_stateper', '$a_pinper', '$a_stdper', '$a_phoneper', '$a_seryear', '$a_officialEmail', '$a_cmpname', '$a_cmpcity', '$a_cmppin', '$a_cmpstd', '$a_cmpphone', '$a_cmpext', '$a_cmpcor', '$a_cmpcinno', '$a_cmppan', '$a_cmpgst', '$a_cmpdate', '$a_anualSalary', '$a_otherincome', '$a_bank', '$a_branch', '$a_account', '$a_customerid', '$a_yearopened', '$a_loanAmt', '$a_loantenure', '$a_endUse', '$a_personalname', '$a_relation', '$a_residental', '$a_refestate', '$a_refepin', '$a_refestd', '$a_refephone', '$a_refemobile', '$a_personalname2', '$a_relation2', '$a_residental2', '$a_refecity2', '$a_refestate2', '$a_refepin2', '$a_refestd2', '$a_refephone2', '$a_refemobile2', '$socode', '$dsacode', '$smcode', '$branchcp', '$rmcode', '$nameof', '$dateof', '$dateandtime', '$hsnpersonname', '$contactno')
";
// Continue binding parameters for all other variables...
// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Loan Applied successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
