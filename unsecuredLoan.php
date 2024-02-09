<!DOCTYPE html>
<html lang="en" class="bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Application</title>
    <?php include_once('./links.php') ?>
    <script src="js/loan.js"></script>
    <!-- <style>
        .error-message {
            color: red;
            margin-bottom: 2px;
            font-size:14px;  /* Adjust as needed to provide spacing between the field and the message */
        }
    </style> -->
</head>
<body class="bg-white">
    <?php include_once('./header.php');?>
    <div>
        <div class="container pt-4">
            <h6 style="text-align:center;"><b> Loan Application</b></h6>
        </div>
        <div style="border:0px solid #d9d9d9; border-radius:10px;" class="container">
            <div class="row p-0">
                <div class="col p-3">
                    <div class="container" id="contePrint">
                        <div class="row px-3 py-3">
                            <div class="col-md-4">
                                <div class="inputContainer1 amt" style="">
                                    <label for="">Loan Expectations</label>
                                    <input type="text" id="loanAmtMain"/>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Application Date</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="date" id="a_name"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">LOS No</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="date" id="a_name"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Photo</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="file" id="a_name"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Signature</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="file" id="a_name"  autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>PERSONAL DETAILS</b></h4>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Name of Applicant</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_name"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                    <div class="pb-4 mb-2">
                                        <strong style="margin-bottom:15px;"></strong>
                                    </div>
                                    <div class="inputContainer1" style="">
                                        <label for="">Joint Applicant</label>
                                        <input type="text" id="j_name"   autocomplete="off"/>
                                    </div>
                                </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Father Name</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_fname"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_fname"   autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Spouse Name</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_sname"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_sname"   autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Mother Name</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_mname"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_mname"   autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Date Of Birth</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="date" id="a_dob"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="date" id="j_dob"   autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Gender</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <!-- <input type="date" id="a_dob"  autocomplete="off" /> -->
                                    <select name="a_gender" id="a_gender">
                                        <option value="">Select</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <!-- <input type="date" id="j_dob"   autocomplete="off"/> -->
                                    <select name="a_gender" id="a_gender">
                                        <option value="">Select</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Number Of Dependents</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_depen"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_depen"   autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Education</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_edu"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_edu"   autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Mobile</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_mobile"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_mobile"   autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Religion</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_religion"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_religion"   autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Pan</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_pan"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_pan" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Driving Licence No</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_licenced"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_licenced" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Driving Licence Expiry Date</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="date" id="a_expriy"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="date" id="j_expriy" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Passport Number</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_passport"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_passport" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Passport Expiry Date</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="date" id="a_passexpriy"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="date" id="j_passexpriy" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Voter Id Number</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_voter"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_voter" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">CKYC Number</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_ckyc"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_ckyc" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">UPI ID/VPA</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_upivpa"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_upivpa" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Email</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_email"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_email" autocomplete="off"/>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>ADDRESS DETAILS</b></h4>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Present Address</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_presentadds"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_presentadds" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Landmark</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_landmark"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_landmark" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">City</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_city"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_city" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">State</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_state"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_state" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Pin Code</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_pin"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_pin" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">STD</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_std"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_std" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Tel.</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_tel"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_tel" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Permanent Address</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_peraddress"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_peraddress" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Landmark</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_landmarkper"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_landmarkper" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">City</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cityper"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cityper" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">State</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_stateper"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_stateper" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Pin Code</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_pinper"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_pinper" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">STD</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_stdper"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_stdper" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Tel.</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_telper"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_telper" autocomplete="off"/>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>COMPANY DETAILS</b></h4>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Name</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmpname"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmpname" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">City</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmpcity"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmpcity" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">State</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmpstate"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmpstate" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Pin Code</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmppin"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmppin" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">STD</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmpstd"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmpstd" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Phone.</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmpphone"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmpphone" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Ext.</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmpext"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmpext" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Year of Incorporation.</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmpcor"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmpcor" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">CIN No</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmpcinno"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmpcinno" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Pan</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmppan"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmppan" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">GSTIN No</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmpgst"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmpgst" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Effective Date</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="date" id="a_cmpdate"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="date" id="j_cmpdate" autocomplete="off"/>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>INCOME DETAILS</b></h4>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Annual Salary/Bussiness</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_anualSalary"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_anualsalary" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Other Anual Income</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_otherincome"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_otherincome" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Name Of Bank</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_bank"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_bank" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Account Number</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_account"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_account" autocomplete="off"/>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>REQUESTED LOAN DETAILS</b></h4>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Loan Amount</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_loanAmt"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Tenure In Month</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_loanAmt"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">End Use</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_endUse"  autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>PERSONAL REFERENCE 1</b></h4>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Name</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_personalname"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Relationship</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_relation"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Residential Address</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_residental"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">City</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_refecity"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">State</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_refestate"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">PIN</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_refepin"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">STD</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_refestd"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Phone</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_refephone"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Mobile</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_refemobile"  autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>PERSONAL REFERENCE 2</b></h4>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Name</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_personalname2"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Relationship</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_relation2"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Residential Address</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_residental2"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">City</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_refecity2"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">State</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_refestate2"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">PIN</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_refepin2"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">STD</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_refestd2"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Phone</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_refephone2"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Mobile</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant</label>
                                    <input type="text" id="a_refemobile2"  autocomplete="off" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>