<?php 
    include("../connect.php");

    // Borrower A Information
$loanAmtMain = mysqli_real_escape_string($conn, $_POST['loanAmtMain']);
$a_name = mysqli_real_escape_string($conn, $_POST['a_name']);
$a_panno = mysqli_real_escape_string($conn, $_POST['a_panno']);
$a_fathername = mysqli_real_escape_string($conn, $_POST['a_fathername']);
$a_relationship = mysqli_real_escape_string($conn, $_POST['a_relationship']);
$a_prsntaddress = mysqli_real_escape_string($conn, $_POST['a_prsntaddress']);
$a_period = mysqli_real_escape_string($conn, $_POST['a_period']);
$a_telno = mysqli_real_escape_string($conn, $_POST['a_telno']);
$a_mobno = mysqli_real_escape_string($conn, $_POST['a_mobno']);
$a_email = mysqli_real_escape_string($conn, $_POST['a_email']);
$a_prmntaddress = mysqli_real_escape_string($conn, $_POST['a_prmntaddress']);
$a_status = mysqli_real_escape_string($conn, $_POST['a_status']);
$a_dob = mysqli_real_escape_string($conn, $_POST['a_dob']);
$a_maritual = mysqli_real_escape_string($conn, $_POST['a_marital']);
$a_belong = mysqli_real_escape_string($conn, $_POST['a_belong']);
$a_dependant = mysqli_real_escape_string($conn, $_POST['a_dependant']);
$a_education = mysqli_real_escape_string($conn, $_POST['a_education']);
$a_empname = mysqli_real_escape_string($conn, $_POST['a_empname']);
$a_adds = mysqli_real_escape_string($conn, $_POST['a_adds']);
$a_empdesignation = mysqli_real_escape_string($conn, $_POST['a_empdesignation']);
$a_years = mysqli_real_escape_string($conn, $_POST['a_years']);
$a_length = mysqli_real_escape_string($conn, $_POST['a_length']);
$a_retirement = mysqli_real_escape_string($conn, $_POST['a_retirement']);
$a_gross = mysqli_real_escape_string($conn, $_POST['a_gross']);
$a_income = mysqli_real_escape_string($conn, $_POST['a_income']);
$a_professional = mysqli_real_escape_string($conn, $_POST['a_professional']);
$a_fund = mysqli_real_escape_string($conn, $_POST['a_fund']);
$a_insurance = mysqli_real_escape_string($conn, $_POST['a_insurance']);
$a_statutory = mysqli_real_escape_string($conn, $_POST['a_statutory']);
$a_salary = mysqli_real_escape_string($conn, $_POST['a_salary']);
$a_proof = mysqli_real_escape_string($conn, $_POST['a_proof']);
$a_bnkname = mysqli_real_escape_string($conn, $_POST['a_bnkname']);
$a_account = mysqli_real_escape_string($conn, $_POST['a_account']);
$a_accno = mysqli_real_escape_string($conn, $_POST['a_accno']);
$a_since = mysqli_real_escape_string($conn, $_POST['a_since']);
$a_average = mysqli_real_escape_string($conn, $_POST['a_average']);
$a_bnkname1 = mysqli_real_escape_string($conn, $_POST['a_bnkname1']);
$a_loantype = mysqli_real_escape_string($conn, $_POST['a_loantype']);
$a_loanamt = mysqli_real_escape_string($conn, $_POST['a_loanamt']);
$a_present = mysqli_real_escape_string($conn, $_POST['a_present']);
$a_security = mysqli_real_escape_string($conn, $_POST['a_security']);
$a_repayment = mysqli_real_escape_string($conn, $_POST['a_repayment']);
$a_amtdefault = mysqli_real_escape_string($conn, $_POST['a_amtdefault']);
$a_emploan = mysqli_real_escape_string($conn, $_POST['a_emploan']);
$a_frndsloan = mysqli_real_escape_string($conn, $_POST['a_frndsloan']);
$a_purchased = mysqli_real_escape_string($conn, $_POST['a_purchased']);
$a_othrliabilities = mysqli_real_escape_string($conn, $_POST['a_othrliabilities']);
$a_issuingbnk = mysqli_real_escape_string($conn, $_POST['a_issuingbnk']);
$a_cardno = mysqli_real_escape_string($conn, $_POST['a_cardno']);
$a_expdate = mysqli_real_escape_string($conn, $_POST['a_expdate']);
$a_limit = mysqli_real_escape_string($conn, $_POST['a_limit']);
$a_presentamt = mysqli_real_escape_string($conn, $_POST['a_presentamt']);
$a_cash = mysqli_real_escape_string($conn, $_POST['a_cash']);
$a_deposit = mysqli_real_escape_string($conn, $_POST['a_deposit']);
$a_immovable = mysqli_real_escape_string($conn, $_POST['a_immovable']);
$a_movable = mysqli_real_escape_string($conn, $_POST['a_movable']);
$a_investment = mysqli_real_escape_string($conn, $_POST['a_investment']);
$a_others = mysqli_real_escape_string($conn, $_POST['a_others']);
$a_total = mysqli_real_escape_string($conn, $_POST['a_total']);

// Borrower J Information
$j_name = mysqli_real_escape_string($conn, $_POST['j_name']);
$j_panno = mysqli_real_escape_string($conn, $_POST['j_panno']);
$j_fathername = mysqli_real_escape_string($conn, $_POST['j_fathername']);
$j_relationship = mysqli_real_escape_string($conn, $_POST['j_relationship']);
$j_prsntaddress = mysqli_real_escape_string($conn, $_POST['j_prsntaddress']);
$j_period = mysqli_real_escape_string($conn, $_POST['j_period']);
$j_telno = mysqli_real_escape_string($conn, $_POST['j_telno']);
$j_mobno = mysqli_real_escape_string($conn, $_POST['j_mobno']);
$j_email = mysqli_real_escape_string($conn, $_POST['j_email']);
$j_prmntaddress = mysqli_real_escape_string($conn, $_POST['j_prmntaddress']);
$j_status = mysqli_real_escape_string($conn, $_POST['j_status']);
$j_dob = mysqli_real_escape_string($conn, $_POST['j_dob']);
$j_maritual = mysqli_real_escape_string($conn, $_POST['j_marital']);
$j_belong = mysqli_real_escape_string($conn, $_POST['j_belong']);
$j_dependant = mysqli_real_escape_string($conn, $_POST['j_dependant']);
$j_education = mysqli_real_escape_string($conn, $_POST['j_education']);
$j_empname = mysqli_real_escape_string($conn, $_POST['j_empname']);
$j_adds = mysqli_real_escape_string($conn, $_POST['j_adds']);
$j_empdesignation = mysqli_real_escape_string($conn, $_POST['j_empdesignation']);
$j_years = mysqli_real_escape_string($conn, $_POST['j_years']);
$j_length = mysqli_real_escape_string($conn, $_POST['j_length']);
$j_retirement = mysqli_real_escape_string($conn, $_POST['j_retirement']);
$j_gross = mysqli_real_escape_string($conn, $_POST['j_gross']);
$j_income = mysqli_real_escape_string($conn, $_POST['j_income']);
$j_professional = mysqli_real_escape_string($conn, $_POST['j_professional']);
$j_fund = mysqli_real_escape_string($conn, $_POST['j_fund']);
$j_insurance = mysqli_real_escape_string($conn, $_POST['j_insurance']);
$j_statutory = mysqli_real_escape_string($conn, $_POST['j_statutory']);
$j_salary = mysqli_real_escape_string($conn, $_POST['j_salary']);
$j_proof = mysqli_real_escape_string($conn, $_POST['j_proof']);
$j_bnkname = mysqli_real_escape_string($conn, $_POST['j_bnkname']);
$j_account = mysqli_real_escape_string($conn, $_POST['j_account']);
$j_accno = mysqli_real_escape_string($conn, $_POST['j_accno']);
$j_since = mysqli_real_escape_string($conn, $_POST['j_since']);
$j_average = mysqli_real_escape_string($conn, $_POST['j_average']);
$j_bnkname1 = mysqli_real_escape_string($conn, $_POST['j_bnkname1']);
$j_loantype = mysqli_real_escape_string($conn, $_POST['j_loantype']);
$j_loanamt = mysqli_real_escape_string($conn, $_POST['j_loanamt']);
$j_present = mysqli_real_escape_string($conn, $_POST['j_present']);
$j_security = mysqli_real_escape_string($conn, $_POST['j_security']);
$j_repayment = mysqli_real_escape_string($conn, $_POST['j_repayment']);
$j_amtdefault = mysqli_real_escape_string($conn, $_POST['j_amtdefault']);
$j_emploan = mysqli_real_escape_string($conn, $_POST['j_emploan']);
$j_frndsloan = mysqli_real_escape_string($conn, $_POST['j_frndsloan']);
$j_purchased = mysqli_real_escape_string($conn, $_POST['j_purchased']);
$j_othrliabilities = mysqli_real_escape_string($conn, $_POST['j_othrliabilities']);
$j_issuingbnk = mysqli_real_escape_string($conn, $_POST['j_issuingbnk']);
$j_cardno = mysqli_real_escape_string($conn, $_POST['j_cardno']);
$j_expdate = mysqli_real_escape_string($conn, $_POST['j_expdate']);
$j_limit = mysqli_real_escape_string($conn, $_POST['j_limit']);
$j_presentamt = mysqli_real_escape_string($conn, $_POST['j_presentamt']);
$j_cash = mysqli_real_escape_string($conn, $_POST['j_cash']);
$j_deposit = mysqli_real_escape_string($conn, $_POST['j_deposit']);
$j_immovable = mysqli_real_escape_string($conn, $_POST['j_immovable']);
$j_movable = mysqli_real_escape_string($conn, $_POST['j_movable']);
$j_investment = mysqli_real_escape_string($conn, $_POST['j_investment']);
$j_others = mysqli_real_escape_string($conn, $_POST['j_others']);
$j_total = mysqli_real_escape_string($conn, $_POST['j_total']);

// Additional Information
$description = mysqli_real_escape_string($conn, $_POST['description']);
$owner = mysqli_real_escape_string($conn, $_POST['owner']);
$value = mysqli_real_escape_string($conn, $_POST['value']);
$collateral = mysqli_real_escape_string($conn, $_POST['collateral']);
$gi_name = mysqli_real_escape_string($conn, $_POST['gi_name']);
$gii_name = mysqli_real_escape_string($conn, $_POST['gii_name']);
$giii_name = mysqli_real_escape_string($conn, $_POST['giii_name']);
$gi_address = mysqli_real_escape_string($conn, $_POST['gi_address']);
$gii_address = mysqli_real_escape_string($conn, $_POST['gii_address']);
$giii_address = mysqli_real_escape_string($conn, $_POST['giii_address']);
$gi_occupation = mysqli_real_escape_string($conn, $_POST['gi_occupation']);
$gii_occupation = mysqli_real_escape_string($conn, $_POST['gii_occupation']);
$giii_occupation = mysqli_real_escape_string($conn, $_POST['giii_occupation']);
$gi_net = mysqli_real_escape_string($conn, $_POST['gi_net']);
$gii_net = mysqli_real_escape_string($conn, $_POST['gii_net']);
$giii_net = mysqli_real_escape_string($conn, $_POST['giii_net']);
$gi_proposed = mysqli_real_escape_string($conn, $_POST['gi_proposed']);


$sql = "INSERT INTO `loan` (
    `a_name`, `a_panno`, `a_fathername`, `a_relationship`, `a_prsntaddress`, `a_period`, `a_telno`, `a_mobno`, `a_email`, 
    `a_prmntaddress`, `a_status`, `a_dob`, `a_marital`, `a_belong`, `a_dependant`, `a_education`, `a_empname`, `a_adds`, 
    `a_empdesignation`, `a_years`, `a_length`, `a_retirement`, `a_gross`, `a_income`, `a_professional`, `a_fund`, `a_insurance`, 
    `a_statutory`, `a_salary`, `a_proof`, `a_bnkname`, `a_account`, `a_accno`, `a_since`, `a_average`, `a_loantype`, `a_loanamt`, 
    `a_present`, `a_security`, `a_repayment`, `a_amtdefault`, `a_emploan`, `a_frndsloan`, `a_purchased`, `a_othrliabilities`, 
    `a_issuingbnk`, `a_cardno`, `a_expdate`, `a_limit`, `a_presentamt`, `a_cash`, `a_deposit`, `a_immovable`, `a_movable`, 
    `a_investment`, `a_others`, `a_total`, 
    `j_name`, `j_panno`, `j_fathername`, `j_relationship`, `j_prsntaddress`, `j_period`, `j_telno`, `j_mobno`, `j_email`, 
    `j_prmntaddress`, `j_status`, `j_dob`, `j_marital`, `j_belong`, `j_dependant`, `j_education`, `j_empname`, `j_adds`, 
    `j_empdesignation`, `j_years`, `j_length`, `j_retirement`, `j_gross`, `j_income`, `j_professional`, `j_fund`, `j_insurance`, 
    `j_statutory`, `j_salary`, `j_proof`, `j_bnkname`, `j_account`, `j_accno`, `j_since`, `j_average`, `j_loantype`, `j_loanamt`, 
    `j_present`, `j_security`, `j_repayment`, `j_amtdefault`, `j_emploan`, `j_frndsloan`, `j_purchased`, `j_othrliabilities`, 
    `j_issuingbnk`, `j_cardno`, `j_expdate`, `j_limit`, `j_presentamt`, `j_cash`, `j_deposit`, `j_immovable`, `j_movable`, 
    `j_investment`, `j_others`, `j_total`, 
    `description`, `owner`, `value`, `collateral`,`gi_name`, `gii_name`, `giii_name`, `gi_address`, `gii_address`, `giii_address`, 
    `gi_occupation`, `gii_occupation`, `giii_occupation`, `gi_net`, `gii_net`, `giii_net`, `gi_proposed`,`loanAmt`
) VALUES (
    '$a_name', '$a_panno', '$a_fathername', '$a_relationship', '$a_prsntaddress', '$a_period', '$a_telno', '$a_mobno', '$a_email', 
    '$a_prmntaddress', '$a_status', '$a_dob', '$a_maritual', '$a_belong', '$a_dependant', '$a_education', '$a_empname', '$a_adds', 
    '$a_empdesignation', '$a_years', '$a_length', '$a_retirement', '$a_gross', '$a_income', '$a_professional', '$a_fund', '$a_insurance', 
    '$a_statutory', '$a_salary', '$a_proof', '$a_bnkname', '$a_account', '$a_accno', '$a_since', '$a_average', '$a_loantype', '$a_loanamt', 
    '$a_present', '$a_security', '$a_repayment', '$a_amtdefault', '$a_emploan', '$a_frndsloan', '$a_purchased', '$a_othrliabilities', 
    '$a_issuingbnk', '$a_cardno', '$a_expdate', '$a_limit', '$a_presentamt', '$a_cash', '$a_deposit', '$a_immovable', '$a_movable', 
    '$a_investment', '$a_others', '$a_total', 
    '$j_name', '$j_panno', '$j_fathername', '$j_relationship', '$j_prsntaddress', '$j_period', '$j_telno', '$j_mobno', '$j_email', 
    '$j_prmntaddress', '$j_status', '$j_dob', '$j_maritual', '$j_belong', '$j_dependant', '$j_education', '$j_empname', '$j_adds', 
    '$j_empdesignation', '$j_years', '$j_length', '$j_retirement', '$j_gross', '$j_income', '$j_professional', '$j_fund', '$j_insurance', 
    '$j_statutory', '$j_salary', '$j_proof', '$j_bnkname', '$j_account', '$j_accno', '$j_since', '$j_average', '$j_loantype', '$j_loanamt', 
    '$j_present', '$j_security', '$j_repayment', '$j_amtdefault', '$j_emploan', '$j_frndsloan', '$j_purchased', '$j_othrliabilities', 
    '$j_issuingbnk', '$j_cardno', '$j_expdate', '$j_limit', '$j_presentamt', '$j_cash', '$j_deposit', '$j_immovable', '$j_movable', 
    '$j_investment', '$j_others', '$j_total', 
    '$description', '$owner', '$value', '$collateral','$gi_name','$gii_name', '$giii_name', '$gi_address', '$gii_address', '$giii_address', 
    '$gi_occupation', '$gii_occupation', '$giii_occupation', '$gi_net', '$gii_net', '$giii_net', '$gi_proposed','$loanAmtMain'
)";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Loan Applied successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>