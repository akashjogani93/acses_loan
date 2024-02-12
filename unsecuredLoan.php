<!DOCTYPE html>
<html lang="en" class="bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Application</title>
    <?php include_once('./links.php'); ?>
    <script src="js/unsecuredloan.js"></script>
    <style>
        @media screen and (max-width: 600px) 
        {
            input[type="checkbox"]{
                width: 15px !important;
                transform: scale(1.0) !important;
            }
            input[type="radio"]{
                width: 15px !important;
                transform: scale(1.0) !important;
            }
            
            .form-check {
                min-height: 33px;           
            }
            .checks {
                display: block !important;
            }
            .form-check{
                /* width:50%; */
                float:left;
            }
            .gst-no{
            width:301px !important; 
            }
            }
            .checks{
                display:flex;
            }
        
            .form-check{
                padding-left:0;
                padding-right:30px;
            }
            input[type="checkbox"]{
                width: 27px;
                transform: scale(1.6);
            }
            input[type="radio"]{
                width: 15px !important;
                transform: scale(1.6) !important;
            }
            #gstyes{
                margin-right:10px;
            }
            .main-checks{
                margin-top:20px;
            }
            .gst-no{
                width:400px; border:none; border-bottom:1px solid black;
            }
            input:focus{
                outline:0px;
                /* border:0px; */
            }
    </style>
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
                                    <input type="date" id="aplication_date"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">LOS No</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="losno"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Photo</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="file" id="photo"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Signature</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="file" id="signature"  autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <div class="row app">
                            <h4 class="mob-head"> <b>APPLICANT DETAILS</b></h4>
                        </div>
                        <div class="row main-checks">
                            <div class="col-md-12">
                                <h6><b>occupation</b></h6>
                            </div>
                            <div class="col-md-12 checks">
                                <div class="form-check">
                                    <input type="checkbox" id="salariedCheckBox" name="employmentStatus" value="Salaried">
                                    <label for="salariedCheckBox"><strong>Salaried</strong></label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" id="businessCheckBox" name="employmentStatus" value="Business">
                                    <label for="businessCheckBox"><strong>Business</strong></label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" id="selfEmployedCheckBox" name="employmentStatus" value="Self Employed Professional">
                                    <label for="selfEmployedCheckBox"><strong>Self Employed Professional</strong></label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" id="retiredCheckBox" name="employmentStatus" value="Retired">
                                    <label for="retiredCheckBox"><strong>Retired</strong></label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" id="housewifeCheckBox" name="employmentStatus" value="House Wife">
                                    <label for="housewifeCheckBox"><strong>House Wife</strong></label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" id="studentCheckBox" name="employmentStatus" value="Student">
                                    <label for="studentCheckBox"><strong>Student</strong></label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" id="occupationOther" name="employmentStatus">
                                    <label for="occupationOther"><strong>Others</strong></label>
                                    <input type="text" style="width:100px; border:none; border-bottom:1px solid black" id="occupationotherinput">
                                </div>
                            </div>
                        </div>
                        <div class="row main-checks">
                            <div class="col-md-12">
                                <h6><b>If selfed employee professional<b></h6>
                                
                            </div>
                            <div class="col-md-12 checks">
                                <div class="form-check">
                                    <label for="doctor"><strong>Doctor</strong></label>
                                    <input type="checkbox" id="doctor" name="selfEmployed" value="Doctor">
                                </div>

                                <div class="form-check">
                                <label for="cacs"><strong>CA/CS</strong></label>
                                <input type="checkbox" id="cacs" name="selfEmployed" value="CA/CS">
                                </div>

                                <div class="form-check">
                                <label for="consultant"><strong>Consultant</strong></label>
                                <input type="checkbox" id="consultant" name="selfEmployed" value="Consultant">
                                </div>

                                <div class="form-check">
                                <label for="architech"><strong>Architech</strong></label>
                                <input type="checkbox" id="architech" name="selfEmployed" value="Architech">
                                </div>

                                <div class="form-check">
                                <label for="lawyer"><strong>Lawyer</strong></label>
                                <input type="checkbox" id="lawyer" name="selfEmployed" value="Lawyer">
                                </div>
                                <div class="form-check">
                                <label for="selfEmployedother"><strong>Others </strong></label>
                                <input type="checkbox" id="selfEmployedother" name="selfEmployed">
                                <input type="text" style="width:100px; border:none; border-bottom:1px solid black" id="selfEmployedotherinput">
                                </div>
                            </div>
                        </div>

                        <div class="row main-checks">
                            <div class="col-md-12">
                                <h4><b> If Business </b></h4>
                            <h6><b>Type Of Company</b></h6>
                            </div>
                            <div class="col-md-12 checks">
                                <div class="form-check">
                                <label for="business"><strong>Propiretorship</strong></label>
                                <input type="checkbox" id="prpiretorship" name="business" value="Propiretorship">
                                </div>

                                <div class="form-check">
                                <label for="partnership"><strong>Patnership</strong></label>
                                <input type="checkbox" id="partnership" name="business" value="Patnership">
                                </div>

                                <div class="form-check">
                                <label for="pvtltd"><strong>Pvt.Ltd</strong></label>
                                <input type="checkbox" id="pvtltd" name="business" value="Pvt.Ltd">
                                </div>

                                <div class="form-check">
                                <label for="publicltd"><strong>Public Ltd</strong></label>
                                <input type="checkbox" id="publicltd" name="business" value="Public Ltd">
                                </div>

                                <div class="form-check">
                                <label for="liability"><strong>Ltd liablity Co</strong></label>
                                <input type="checkbox" id="liability" name="business" value="Ltd liablity Co">
                                </div>

                                <div class="form-check">
                                <label for="businessOther"><strong>Others </strong></label>
                                <input type="checkbox" id="businessOther" name="business">
                                <input type="text" style="width:100px; border:none; border-bottom:1px solid black" id="businessOtherinput">
                                </div>
                            </div>
                        </div>

                        <div class="row main-checks">
                            <div class="col-md-12">
                            <h6><b>Nature Of Business</b></h6>
                                
                            </div>
                            <div class="col-md-12 checks">
                                <div class="form-check">
                                <label for="manufature"><strong>Manufaturer</strong></label>
                                <input type="checkbox" id="manufature" name="nature" value="Manufaturer">
                                </div>

                                <div class="form-check">
                                <label for="agricul"><strong>Agriculturist</strong></label>
                                <input type="checkbox" id="agricul" name="nature" value="Agriculturist">
                                </div>

                                <div class="form-check">
                                <label for="ser_provi"><strong>Service Provider</strong></label>
                                <input type="checkbox" id="ser_provi" name="nature" value="Service Provider">
                                </div>

                                <div class="form-check">
                                <label for="trade"><strong>Trade/ Distributor</strong></label>
                                <input type="checkbox" id="trade" name="nature" value="Trade/ Distributor">
                                </div>

                                <div class="form-check">
                                <label for="retailer"><strong>Retailers</strong></label>
                                <input type="checkbox" id="retailer" name="nature" value="Retailers">
                                </div>

                                <div class="form-check">
                                <label for="natureother"><strong>Others </strong></label>
                                <input type="checkbox" id="natureother" name="nature">
                                <input type="text" style="width:100px; border:none; border-bottom:1px solid black" id="natureotherinput">
                                </div>
                            </div>
                        </div>

                        <div class="row main-checks">
                            <div class="col-md-12">
                                <h4><b> If Salaried </b></h4>
                                <h6><b>type Of Company designation</b></h6>
                            </div>
                            <div class="col-md-12 checks">
                                <div class="form-check">
                                <label for="salariedpvt"><strong>Pvt.Ltd</strong></label>
                                <input type="checkbox" id="salariedpvt" name="salaried" value="Pvt.Ltd">
                                </div>

                                <div class="form-check">
                                <label for="salapartnership"><strong>Partnership</strong></label>
                                <input type="checkbox" id="salapartnership" name="salaried" id="Partnership">
                                </div>

                                <div class="form-check">
                                <label for="salaproprietor"><strong> Proprietor</strong></label>
                                <input type="checkbox" id="salaproprietor" name="salaried" value="Proprietor">
                                </div>

                                <div class="form-check">
                                <label for="salaltd"><strong>Public Ltd</strong></label>
                                <input type="checkbox" id="salaltd" name="salaried" value="Public Ltd">
                                </div>

                                <div class="form-check">
                                <label for="checkBox"><strong>PSU</strong></label>
                                <input type="checkbox" id="salapsu" name="salaried" value="PSU">
                                </div>

                                <div class="form-check">
                                <label for="govt"><strong>Govt</strong></label>
                                <input type="checkbox" id="govt" name="salaried" value="Govt">
                                </div>

                                <div class="form-check">
                                <label for="mnc"><strong>MNC</strong></label>
                                <input type="checkbox" id="mnc" name="salaried" value="MNC">
                                </div>

                                <div class="form-check">
                                <label for="salaother"><strong>Others </strong></label>
                                <input type="checkbox" id="salaother" name="salaried">
                                <input type="text" style="width:100px; border:none; border-bottom:1px solid black" id="salaotherinput">
                                </div>
                            </div>
                        </div>

                        <div class="row main-checks">
                            <div class="col-md-12">
                            <h6><b>Designation</b></h6>
                                
                            </div>
                            <div class="col-md-3 checks">
                                <!-- <div class="form-check">
                                <input type="text" id="designation" style="width:300px; border:none; border-bottom:1px solid black">
                                </div> -->
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="designation"  autocomplete="off" />
                                </div>
                            </div>
                        </div>

                        <div class="row main-checks">
                            
                            <div class="col-md-12 checks">
                                <div class="col-md-3">
                                    <h6><b>GSTIN Available</b></h6>
                                    <div class="form-check">
                                        <label for="gstyes"><strong>Yes</strong></label>
                                        <input type="radio" id="gstyes" name="gstavail" value="Yes">

                                        <label for="gstno"><strong>No</strong></label>
                                        <input type="radio" id="gstno" name="gstavail" value="No">
                                    </div>
                                </div>
                                
                                <div class="col-md-5">
                                <h6><b>GSTIN No</b></h6>
                                    <div class="form-check">
                                      
                                        <!-- <input type="text" class="gst-no" style="" id="gstnumber"> -->
                                        <div class="inputContainer1" style="">
                                            <label for="">Applicant </label>
                                        <input type="text" id="gstnumber"  autocomplete="off" />
                                          </div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                <h6><b>Effective Date</b></h6>
                                    <div class="form-check">
                                        <!-- <input type="date" style="border: none; border-bottom: 1px solid black;" id="efectivedate"> -->
                                        <div class="inputContainer1" style="">
                                            <label for="">Applicant </label>
                                        <input type="date" id="efectivedate"  autocomplete="off" />
                                </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row main-checks">
                            <div class="col-md-12">
                                <h6><b>Please Tell Us About your Self</b></h6>
                            </div>
                            <div class="col-md-12 checks">
                                <div class="form-check">
                                <label for="applicantyo"><strong>Applicant</strong></label>
                                <input type="checkbox" id="applicantyo" name="yourself" value="Applicant">
                                </div>

                                <div class="form-check">
                                <label for="coapplicant"><strong>co-applicant</strong></label>
                                <input type="checkbox" id="coapplicant" name="yourself" value="Co-Applicant">
                                </div>

                                <div class="form-check">
                                <label for="guarantor"><strong> Guarantor</strong></label>
                                <input type="checkbox" id="guarantor" name="yourself" value="Guarantor">
                                </div>

                                <div class="form-check">
                                <label for="checkBox"><strong>Relationship With Applicant </strong></label>
                                <input type="text" style="width:100px; border:none; border-bottom:1px solid black" id="relationWithAplicant">
                                </div>
                            </div>
                        </div>
                        <br><br>
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
                                    <select name="j_gender" id="j_gender">
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
                            <!-- <div class="col-md-3 applicant">
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
                            </div> -->
                            <!-- <div class="col-md-3 applicant">
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
                            </div> -->
                            <!-- <div class="col-md-3 applicant">
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
                            </div> -->
                            <!-- <div class="col-md-3 applicant">
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
                            </div> -->
                            <!-- <div class="col-md-3 applicant">
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
                            </div> -->
                            <!-- <div class="col-md-3 applicant">
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
                            </div> -->
                            <!-- <div class="col-md-3 applicant">
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
                            </div> -->
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
                                <h4 class="mob-head"> <b>ADDRESS DETAILS-PRESENT</b></h4>
                            </div>
                            <div class="col-md-12">
                                <h6><b>Present Residence</b></h6>
                            </div>
                            <div class="col-md-12 checks">
                                <div class="form-check">
                                    <label for="owned"><strong>Owned</strong></label>
                                    <input type="checkbox" id="owned" name="addressdetails" value="Owned">
                                </div>
                                <div class="form-check">
                                    <label for="parents"><strong>Parents</strong></label>
                                    <input type="checkbox" id="parents" name="addressdetails" value="Parents">
                                </div>
                                <div class="form-check">
                                <label for="coprovided"><strong>Co. Provided</strong></label>
                                <input type="checkbox" id="coprovided" name="addressdetails" value="Co. Provided">
                                </div>
                                <div class="form-check">
                                    <label for="rented"><strong>Rented</strong></label>
                                    <input type="checkbox" id="rented" name="addressdetails" value="Rented">
                                </div>
                                <div class="form-check">
                                    <label for="checkBox"><strong>Monthly Rents (RS)</strong></label>
                                    <input type="text" style="border:none; border-bottom:1px solid black;" id="monthlyRent">
                                </div>
                            </div><br><br>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Present Address</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_presentadds"  autocomplete="off" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_presentadds" autocomplete="off"/>
                                </div>
                            </div> -->
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Landmark</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_landmark"  autocomplete="off" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_landmark" autocomplete="off"/>
                                </div>
                            </div> -->
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">City</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_city"  autocomplete="off" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_city" autocomplete="off"/>
                                </div>
                            </div> -->
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">State</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_state"  autocomplete="off" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_state" autocomplete="off"/>
                                </div>
                            </div> -->
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Pin Code</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_pin"  autocomplete="off" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_pin" autocomplete="off"/>
                                </div>
                            </div> -->
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">STD</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_std"  autocomplete="off" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_std" autocomplete="off"/>
                                </div>
                            </div> -->
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Tel.</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_tel"  autocomplete="off" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_tel" autocomplete="off"/>
                                </div>
                            </div> -->
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>ADDRESS DETAILS BUSSINESS</b></h4>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Bussiness Employee Name</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="busempname"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Address</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_peraddress"  autocomplete="off" />
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
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">City</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cityper"  autocomplete="off" />
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
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Pin Code</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_pinper"  autocomplete="off" />
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
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Phone.</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_phoneper"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Year Of Service/Bussiness.</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_seryear"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Official Email.</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_officialEmail"  autocomplete="off" />
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
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmpname" autocomplete="off"/>
                                </div>
                            </div> -->
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">City</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmpcity"  autocomplete="off" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmpcity" autocomplete="off"/>
                                </div>
                            </div> -->
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">State</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmpstate"  autocomplete="off" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmpstate" autocomplete="off"/>
                                </div>
                            </div> -->
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Pin Code</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmppin"  autocomplete="off" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmppin" autocomplete="off"/>
                                </div>
                            </div> -->
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">STD</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmpstd"  autocomplete="off" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmpstd" autocomplete="off"/>
                                </div>
                            </div> -->
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Phone.</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmpphone"  autocomplete="off" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmpphone" autocomplete="off"/>
                                </div>
                            </div> -->
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Ext.</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmpext"  autocomplete="off" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmpext" autocomplete="off"/>
                                </div>
                            </div> -->
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Year of Incorporation.</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmpcor"  autocomplete="off" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmpcor" autocomplete="off"/>
                                </div>
                            </div> -->
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">CIN No</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmpcinno"  autocomplete="off" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmpcinno" autocomplete="off"/>
                                </div>
                            </div> -->
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Pan</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmppan"  autocomplete="off" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmppan" autocomplete="off"/>
                                </div>
                            </div> -->
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">GSTIN No</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cmpgst"  autocomplete="off" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cmpgst" autocomplete="off"/>
                                </div>
                            </div> -->
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Effective Date</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="date" id="a_cmpdate"  autocomplete="off" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="date" id="j_cmpdate" autocomplete="off"/>
                                </div>
                            </div> -->
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
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Other Anual Income</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_otherincome"  autocomplete="off" />
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
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Branch</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_branch"  autocomplete="off" />
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
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Customer Id</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_customerid"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Year Of Opened</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_yearopened"  autocomplete="off" />
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
                                    <input type="text" id="a_loantenure"  autocomplete="off" />
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

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>Company Use Only</b></h4>
                            </div>
                            <div class="col-md-3 ">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">SO Code</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <input type="text" id="socode" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">DSA Code</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <input type="text" id="dsacode" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">SM Code</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <input type="text" id="smcode" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Branch</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <input type="text" id="branchcp" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">RM Code</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <input type="text" id="rmcode" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>Acknowledgment Slip</b></h4>
                            </div>
                            <div class="col-md-3 ">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Name Of Applicant</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <input type="text" id="nameof" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Date Of Applicant</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <input type="date" id="dateof" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Date & Time Of Receipt</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <input type="text" id="dateandtime" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">HSN Contact Person Name</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <input type="text" id="hsnpersonname" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Contact No</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <input type="text" id="contactno" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="inputContainer" style="border:0px; padding:0px;">
                                    <a id="submit" class="btn" style="background-color:purple;color:#fff; width:100%;padding:15px;">Submit</a>
                                    <!-- <a id="submit1" class="btn" style="background-color:purple;color:#fff; width:100%;padding:15px; display:none;">Print</a> -->
                                </div>
                            </div>
                            <!-- <div class="col" id="bb" style="display:none">
                                <div class="inputContainer" style="border:0px; padding:0px;">
                                    <a id="back" class="btn btn-info" style="color:#fff; width:100%;padding:15px;">Back</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>