<script>
var mandatoryFields = [
  'a_name', 'j_name', 'a_panno', 'j_panno', 'a_fathername', 'j_fathername', 'a_relationship', 'j_relationship', 
  'a_prsntaddress', 'j_prsntaddress', 'a_period', 'j_period', 'a_telno', 'j_telno', 'a_mobno', 'j_mobno', 
  'a_email', 'j_email', 'a_prmntaddress', 'j_prmntaddress', 'a_status', 'j_status', 'a_dob', 'j_dob', 'a_maritual', 
  'j_maritual', 'a_belong', 'j_belong', 'a_dependant', 'j_dependant', 'a_education', 'j_education', 'a_empname', 
  'j_empname', 'a_adds', 'j_adds', 'a_empdesignation', 'j_empdesignation', 'a_years', 'j_years', 'a_length', 'j_length', 
  'a_retirement', 'j_retirement', 'a_gross', 'j_gross', 'a_income', 'j_income', 'a_professional', 'j_professional', 
  'a_fund', 'j_fund', 'a_insurance', 'j_insurance', 'a_statutory', 'j_statutory', 'a_salary', 'j_salary', 'a_proof', 
  'j_proof', 'a_bnkname', 'j_bnkname', 'a_account', 'j_account', 'a_accno', 'j_accno', 'a_since', 'j_since', 'a_average', 
  'j_average', 'a_bnkname', 'j_bnkname', 'a_loantype', 'j_loantype', 'a_loanamt', 'j_loanamt', 'a_present', 'j_present', 
  'a_security', 'j_security', 'a_repayment', 'j_repayment', 'a_amtdefault', 'j_amtdefault', 'a_emploan', 'j_emploan', 
  'a_frndsloan', 'j_frndsloan', 'a_purchased', 'j_purchased', 'a_othrliabilities', 'j_othrliabilities', 'a_issuingbnk', 
  'j_issuingbnk', 'a_cardno', 'j_cardno', 'a_expdate', 'j_expdate', 'a_limit', 'j_limit', 'a_presentamt', 'j_presentamt', 
  'a_cash', 'j_cash', 'a_deposit', 'j_deposit', 'a_immovable', 'j_immovable', 'a_movable', 'j_movable', 'a_investment', 
  'j_investment', 'a_others', 'j_others', 'a_total', 'j_total'
]


var pairedKeys = [];
for (var i = 0; i < mandatoryFields.length; i++) {
    var commonKey = mandatoryFields[i].substring(2);

    pairedKeys.push('a_' + commonKey, 'j_' + commonKey);
}
console.log(pairedKeys);
</script>


