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
                            <div class="col-md-6">
                                <div class="inputContainer1 amt" style="">
                                    <label for="">Loan Amount</label>
                                    <input type="text" id="loanAmtMain"/>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exampleRadiosInline" id="exampleRadioInline1" value="0"  onchange="applicant()">
                                        <label class="form-check-label" for="exampleRadioInline1">
                                        Applicant
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exampleRadiosInline" id="exampleRadioInline2" value="1" checked  onchange="applicant()">
                                        <label class="form-check-label" for="exampleRadioInline2">
                                            Joint-Applicant
                                        </label>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="row">
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
                                    <strong style="margin-bottom:15px;">PAN Number</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_panno"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_panno"  autocomplete="off"/>
                                </div>
                            </div>
                        
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Father's / Husband's Name</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_fathername"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_fathername"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Relationship with Co-Applicant</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_relationship"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_relationship"  autocomplete="off" />
                                </div>
                            </div>
                        
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Present Address</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_prsntaddress"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_prsntaddress"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Period of stay</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_period"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_period" autocomplete="off" />
                                </div>
                            </div>
                        
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Tel No</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_telno"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_telno"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Mobile No</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_mobno"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_mobno"  autocomplete="off" />
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
                                    <input type="text" id="j_email"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Permanent Address</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_prmntaddress"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_prmntaddress"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Residential Status</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_status" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_status" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Date of Birth</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_dob" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_dob" autocomplete="off" />
                                </div>
                            </div>
                       
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Maritual Status</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_marital" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_marital" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">You Belong to</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_belong" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_belong" autocomplete="off" />
                                </div>
                            </div>
                       
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">No of Dependants</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_dependant" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_dependant" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Education</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_education" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_education" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b> DETAILS OF OCCUPATION / PROFESSION / BUSINESS </b></h4>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Name of Employer</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_empname" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_empname" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Address with mobile number</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_adds" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_adds" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Employed Designation and number</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_empdesignation" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_empdesignation" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">No of years in present occupation/Business</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_years" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"><br class="breaks"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_years" autocomplete="off"/>
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Length of service</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_length" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_length" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Date of Retirement</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_retirement" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_retirement" autocomplete="off" />
                                </div>
                            </div>
                            
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>INCOME STATEMENT</b></h4>
                            </div>
                            <div class="col-md-12">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Gross salary/Income per month (salary sheet / I.T. Return, form No.16 attached)</strong>
                                </div>
                            </div>
                            <div class="col-md-3 applicant" >
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_gross" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <!-- <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div> -->
                                <div class="inputContainer1 mob" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_gross" autocomplete="off" />
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>Deductions</b></h4>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Income Tax</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_income" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text"  id="j_income" autocomplete="off"/>
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Professional Tax</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_professional" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_professional" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Provident Fund</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_fund" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_fund" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Insurance Premium</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_insurance" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_insurance" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Other statutory deductions</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_statutory" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_statutory" autocomplete="off"/>
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Net Salary / Income p.m.</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_salary" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_salary" autocomplete="off"/>
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Other Income if any(Proof Attached)</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_proof" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_proof" autocomplete="off" />
                                </div>
                            </div>
                            
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>DETAILS OF BANK ACCOUNTS</b></h4>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Name of the Bank/Branch</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_bnkname" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_bnkname" autocomplete="off"/>
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Type/s of the Account</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_account" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_account" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Account Number/s</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_accno" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_accno" autocomplete="off"/>
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Since When</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_since" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_since" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Average credit balance for last 6 months </strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_average" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"><br class="breaks"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_average" autocomplete="off" />
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>DETAILS OF EXISTING LOAN FROM OTHER BANKS</b></h4>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Name of Bank/Branch</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_bnkname1" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_bnkname1" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Type of Loan Availed</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_loantype" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_loantype" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Amount of loan Availed</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_loanamt" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_loanamt" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Present outstanding</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_present" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_present" autocomplete="off"/>
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Security Offered </strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_security" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_security" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Repayment Plan </strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_repayment" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_repayment" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Amount of Default if any </strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_amtdefault" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_amtdefault" autocomplete="off"/>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>DETAILS OF OTHER LIABILITIES</b></h4>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Loans from Employer.</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_emploan" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_emploan" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Loans from friends/liabilities</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_frndsloan" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_frndsloan" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Materials/Assets purchased from the seller on credit.</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_purchased" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"><br class="breaks"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_purchased" autocomplete="off"/>
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Other liabilities.<br class="breaks"><br class="breaks"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_othrliabilities" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"><br class="breaks"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_othrliabilities" autocomplete="off"/>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>IF CREDIT CARD HOLDER/S DETAILS OF CREDIT CARD/S</b></h4>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Name of Issuing Bank/Agency</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_issuingbnk"autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_issuingbnk" autocomplete="off"/>
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Credit Card number</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cardno" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cardno" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Expiry Date</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_expdate" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;">    </strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_expdate" autocomplete="off"/>
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Credit Limit</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_limit" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_limit" autocomplete="off"/>
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Present O/S Amount</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_presentamt" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_presentamt" autocomplete="off" />
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>DETAILS OF ASSETS</b></h4>
                            </div>
                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Cash</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_cash" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_cash" autocomplete="off"/>
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Deposits with Bank</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_deposit" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_deposit" autocomplete="off"/>
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Immovable assets/Properties With address & value</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_immovable" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;">  <br class="breaks">  </strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_immovable" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Movable assets <br class="breaks"><br class="breaks"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_movable" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"><br class="breaks"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_movable" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Investments (Specify each)</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_investment" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_investment" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Others(Please specify)</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_others" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_others" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 applicant">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Total</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="a_total" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 joint-applicant">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Joint Applicant</label>
                                    <input type="text" id="j_total" autocomplete="off" />
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>DETAILS OF COLLATERAL SECURITY OFFERED:</b></h4>
                            </div>
                            <div class="col-md-5">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Description of Property(With full Postal Address)</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="description" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3 ">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Owner of the Property</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="owner" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Value of Property</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="value" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">DETAILS OF COLLATERAL SECURITY OTHER THAN PROPERTY </strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Applicant </label>
                                    <input type="text" id="collateral" autocomplete="off" />
                                </div>
                            </div>
                            
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="mob-head"> <b>GUARANTOR/S:(Attach Guarantor’s Consent letter)</b></h4>
                            </div>
                            <div class="col-md-4">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Name</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Guarantor-I </label>
                                    <input type="text" id="gi_name" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Guarantor-II</label>
                                    <input type="text" id="gii_name" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Guarantor-III</label>
                                    <input type="text" id="giii_name" autocomplete="off" />
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Address</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Guarantor-I </label>
                                    <input type="text" id="gi_address" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Guarantor-II</label>
                                    <input type="text" id="gii_address" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Guarantor-III</label>
                                    <input type="text" id="giii_address" autocomplete="off"/>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Occupation</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Guarantor-I </label>
                                    <input type="text" id="gi_occupation" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Guarantor-II</label>
                                    <input type="text" id="gii_occupation"autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"></strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Guarantor-III</label>
                                    <input type="text" id="giii_occupation" autocomplete="off"/>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">Net worth</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Guarantor-I </label>
                                    <input type="text" id="gi_net" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"> </strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Guarantor-II</label>
                                    <input type="text" id="gii_net" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pb-4 mb-2">
                                    <strong style="margin-bottom:15px;"> </strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Guarantor-III</label>
                                    <input type="text" id="giii_net" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pb-2">
                                    <strong style="margin-bottom:15px;">PROPOSED PERIOD OF REPAYMENT</strong>
                                </div>
                                <div class="inputContainer1" style="">
                                    <label for="">Guarantor-I </label>
                                    <input type="text" id="gi_proposed" autocomplete="off"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="inputContainer" style="border:0px; padding:0px;">
                                    <a id="submit" class="btn" style="background-color:purple;color:#fff; width:100%;padding:15px;">Submit</a>
                                    <a id="submit1" class="btn" style="background-color:purple;color:#fff; width:100%;padding:15px; display:none;">Print</a>
                                </div>
                            </div>
                            <div class="col" id="bb" style="display:none">
                                <div class="inputContainer" style="border:0px; padding:0px;">
                                    <a id="back" class="btn btn-info" style="color:#fff; width:100%;padding:15px;">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <?php include_once('./footer.php') ?>
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