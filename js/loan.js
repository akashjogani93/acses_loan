
    // function applicant() {
    //   // Get the selected radio button value
    //   var selectedValue = document.querySelector('input[name="exampleRadiosInline"]:checked').value;
      
    //   // Show an alert message based on the selected value
    //   if (selectedValue === "0") {
    //     // alert("Applicant selected");
    //     $('.joint-applicant').css('display','none')
    //   } else if (selectedValue === "1") {
    //     // alert("Joint-Applicant selected");
    //     $('.joint-applicant').css('display','block')

    //   }
    // }

$(document).ready(function()
{
  const urlParams = new URLSearchParams(window.location.search);  
  const loanid = urlParams.get('loanid');

  if (loanid) 
  {
    var fieldNames = [
      // Borrower A Information
      'loanAmtMain','a_name', 'a_panno', 'a_fathername', 'a_relationship', 'a_prsntaddress', 'a_period', 'a_telno', 'a_mobno', 'a_email',
      'a_prmntaddress', 'a_status', 'a_dob', 'a_marital', 'a_belong', 'a_dependant', 'a_education', 'a_empname', 'a_adds',
      'a_empdesignation', 'a_years', 'a_length', 'a_retirement', 'a_gross', 'a_income', 'a_professional', 'a_fund', 'a_insurance',
      'a_statutory', 'a_salary', 'a_proof', 'a_bnkname', 'a_account', 'a_accno', 'a_since', 'a_average', 'a_bnkname1', 'a_loantype',
      'a_loanamt', 'a_present', 'a_security', 'a_repayment', 'a_amtdefault', 'a_emploan', 'a_frndsloan', 'a_purchased',
      'a_othrliabilities', 'a_issuingbnk', 'a_cardno', 'a_expdate', 'a_limit', 'a_presentamt', 'a_cash', 'a_deposit', 'a_immovable',
      'a_movable', 'a_investment', 'a_others', 'a_total',
      // Borrower J Information
      'j_name', 'j_panno', 'j_fathername', 'j_relationship', 'j_prsntaddress', 'j_period', 'j_telno', 'j_mobno', 'j_email',
      'j_prmntaddress', 'j_status', 'j_dob', 'j_marital', 'j_belong', 'j_dependant', 'j_education', 'j_empname', 'j_adds',
      'j_empdesignation', 'j_years', 'j_length', 'j_retirement', 'j_gross', 'j_income', 'j_professional', 'j_fund', 'j_insurance',
      'j_statutory', 'j_salary', 'j_proof', 'j_bnkname', 'j_account', 'j_accno', 'j_since', 'j_average', 'j_bnkname1', 'j_loantype',
      'j_loanamt', 'j_present', 'j_security', 'j_repayment', 'j_amtdefault', 'j_emploan', 'j_frndsloan', 'j_purchased',
      'j_othrliabilities', 'j_issuingbnk', 'j_cardno', 'j_expdate', 'j_limit', 'j_presentamt', 'j_cash', 'j_deposit', 'j_immovable',
      'j_movable', 'j_investment', 'j_others', 'j_total',
      // Additional Information
      'description', 'owner', 'value', 'collateral','gi_name','gii_name', 'giii_name', 'gi_address', 'gii_address', 'giii_address',
      'gi_occupation', 'gii_occupation', 'giii_occupation', 'gi_net', 'gii_net', 'giii_net', 'gi_proposed',
      // ... (add any other mandatory fields for additional information)
  ];
      $.ajax({
          type: "POST",
          url: "dashboard/backend/view.php",
          data: { id: loanid },
          success: function(resultData) 
          {
            if (resultData && resultData.data) 
            {
              var data = resultData.data;
              fieldNames.forEach(function(fieldName) 
              {
                  $('#' + fieldName).val(data[fieldName]);
              });

              $('#loanAmtMain').val(data['loanAmt']);
              $('#submit').hide();
              $('#submit1').show();
              $('#bb').show();
            } else {
                console.error("Unexpected response format");
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
              // Handle any errors here
          }
      });
  }

  $('input').focus(function() 
  {
    // Clear existing error messages and reset styling
    var inputContainer = $(this).closest('.inputContainer1');
    // inputContainer.find('.error-message').remove();
    inputContainer.css('border', '');  // Reset border to default
    inputContainer.find('label').css('color', '');  // Reset label color to default
});


    $('#submit').on('click',function()
    {
        var mandatoryFields = [
            // Borrower A Information
            'loanAmtMain','a_name', 'j_name', 'a_panno', 'j_panno', 'a_fathername', 'j_fathername', 'a_relationship', 'j_relationship', 
            'a_prsntaddress', 'j_prsntaddress', 'a_period', 'j_period', 'a_telno', 'j_telno', 'a_mobno', 'j_mobno', 
            'a_email', 'j_email', 'a_prmntaddress', 'j_prmntaddress', 'a_status', 'j_status', 'a_dob', 'j_dob', 'a_marital', 
            'j_marital', 'a_belong', 'j_belong', 'a_dependant', 'j_dependant', 'a_education', 'j_education', 'a_empname', 
            'j_empname', 'a_adds', 'j_adds', 'a_empdesignation', 'j_empdesignation', 'a_years', 'j_years', 'a_length', 'j_length', 
            'a_retirement', 'j_retirement', 'a_gross', 'j_gross', 'a_income', 'j_income', 'a_professional', 'j_professional', 
            'a_fund', 'j_fund', 'a_insurance', 'j_insurance', 'a_statutory', 'j_statutory', 'a_salary', 'j_salary', 'a_proof', 
            'j_proof', 'a_bnkname', 'j_bnkname', 'a_account', 'j_account', 'a_accno', 'j_accno', 'a_since', 'j_since', 'a_average', 
            'j_average', 'a_bnkname1', 'j_bnkname1', 'a_loantype', 'j_loantype', 'a_loanamt', 'j_loanamt', 'a_present', 'j_present', 
            'a_security', 'j_security', 'a_repayment', 'j_repayment', 'a_amtdefault', 'j_amtdefault', 'a_emploan', 'j_emploan', 
            'a_frndsloan', 'j_frndsloan', 'a_purchased', 'j_purchased', 'a_othrliabilities', 'j_othrliabilities', 'a_issuingbnk', 
            'j_issuingbnk', 'a_cardno', 'j_cardno', 'a_expdate', 'j_expdate', 'a_limit', 'j_limit', 'a_presentamt', 'j_presentamt', 
            'a_cash', 'j_cash', 'a_deposit', 'j_deposit', 'a_immovable', 'j_immovable', 'a_movable', 'j_movable', 'a_investment', 
            'j_investment', 'a_others', 'j_others', 'a_total', 'j_total',
            // Additional Information
            'description', 'owner', 'value', 'collateral','gi_name','gii_name', 'giii_name', 'gi_address', 'gii_address', 'giii_address',
            'gi_occupation', 'gii_occupation', 'giii_occupation', 'gi_net', 'gii_net', 'giii_net', 'gi_proposed',
            // ... (add any other mandatory fields for additional information)
        ];
      
        for (var i = 0; i < mandatoryFields.length; i++) 
        {
          var fieldId = mandatoryFields[i];
          var fieldElement = $('#' + fieldId);
          if (fieldElement.val() == '') 
          {
              var errorMessage = $('<div class="error-message">Please fill in this field</div>');
              // fieldElement.closest('.inputContainer1').after(errorMessage);
              fieldElement.closest('.inputContainer1').css('border', '1px solid red');
              fieldElement.closest('.inputContainer1').find('label').css('color', 'red');
              return;
          }
        }

        var formData=new FormData();

        var loanAmtMain=$('#loanAmtMain').val(); 
        var a_name=$('#a_name').val();
        var a_panno=$('#a_panno').val();
        var a_fathername=$('#a_fathername').val();
        var a_relationship=$('#a_relationship').val();
        var a_prsntaddress=$('#a_prsntaddress').val();
        var a_period=$('#a_period').val();
        var a_telno=$('#a_telno').val();
        var a_mobno=$('#a_mobno').val();
        var a_email=$('#a_email').val();
        var a_prmntaddress=$('#a_prmntaddress').val();
        var a_status=$('#a_status').val();
        var a_dob=$('#a_dob').val();
        var a_maritual=$('#a_marital').val();
        var a_belong=$('#a_belong').val();
        var a_dependant=$('#a_dependant').val();
        var a_education=$('#a_education').val();
        var a_empname=$('#a_empname').val();
        var a_adds=$('#a_adds').val();
        var a_empdesignation=$('#a_empdesignation').val();
        var a_years=$('#a_years').val();
        var a_length=$('#a_length').val();
        var a_retirement=$('#a_retirement').val();
        var a_gross=$('#a_gross').val();
        var a_income=$('#a_income').val();
        var a_professional=$('#a_professional').val();
        var a_fund=$('#a_fund').val();
        var a_insurance=$('#a_insurance').val();
        var a_statutory=$('#a_statutory').val();
        var a_salary=$('#a_salary').val();
        var a_proof=$('#a_proof').val();
        var a_bnkname=$('#a_bnkname').val();
        var a_account=$('#a_account').val();
        var a_accno=$('#a_accno').val();
        var a_since=$('#a_since').val();
        var a_average=$('#a_average').val();
        var a_bnkname1=$('#a_bnkname1').val();
        var a_loantype=$('#a_loantype').val();
        var a_loanamt=$('#a_loanamt').val();
        var a_present=$('#a_present').val();
        var a_security=$('#a_security').val();
        var a_repayment=$('#a_repayment').val();
        var a_amtdefault=$('#a_amtdefault').val();
        var a_emploan=$('#a_emploan').val();
        var a_frndsloan=$('#a_frndsloan').val();
        var a_purchased=$('#a_purchased').val();
        var a_othrliabilities=$('#a_othrliabilities').val();
        var a_issuingbnk=$('#a_issuingbnk').val();
        var a_cardno=$('#a_cardno').val();
        var a_expdate=$('#a_expdate').val();
        var a_limit=$('#a_limit').val();
        var a_presentamt=$('#a_presentamt').val();
        var a_cash=$('#a_cash').val();
        var a_deposit=$('#a_deposit').val();
        var a_immovable=$('#a_immovable').val();
        var a_movable=$('#a_movable').val();
        var a_investment=$('#a_investment').val();
        var a_others=$('#a_others').val();
        var a_total=$('#a_total').val();

        var j_name=$('#j_name').val();
        var j_panno=$('#j_panno').val();
        var j_fathername=$('#j_fathername').val();
        var j_relationship=$('#j_relationship').val();
        var j_prsntaddress=$('#j_prsntaddress').val();
        var j_period=$('#j_period').val();
        var j_telno=$('#j_telno').val();
        var j_mobno=$('#j_mobno').val();
        var j_email=$('#j_email').val();
        var j_prmntaddress=$('#j_prmntaddress').val();
        var j_status=$('#j_status').val();
        var j_dob=$('#j_dob').val();
        var j_maritual=$('#j_marital').val();
        var j_belong=$('#j_belong').val();
        var j_dependant=$('#j_dependant').val();
        var j_education=$('#j_education').val();
        var j_empname=$('#j_empname').val();
        var j_adds=$('#j_adds').val();
        var j_empdesignation=$('#j_empdesignation').val();
        var j_years=$('#j_years').val();
        var j_length=$('#j_length').val();
        var j_retirement=$('#j_retirement').val();
        var j_gross=$('#j_gross').val();
        var j_income=$('#j_income').val();
        var j_professional=$('#j_professional').val();
        var j_fund=$('#j_fund').val();
        var j_insurance=$('#j_insurance').val();
        var j_statutory=$('#j_statutory').val();
        var j_salary=$('#j_salary').val();
        var j_proof=$('#j_proof').val();
        var j_bnkname=$('#j_bnkname').val();
        var j_account=$('#j_account').val();
        var j_accno=$('#j_accno').val();
        var j_since=$('#j_since').val();
        var j_average=$('#j_average').val();
        var j_bnkname1=$('#j_bnkname1').val();
        var j_loantype=$('#j_loantype').val();
        var j_loanamt=$('#j_loanamt').val();
        var j_present=$('#j_present').val();
        var j_security=$('#j_security').val();
        var j_repayment=$('#j_repayment').val();
        var j_amtdefault=$('#j_amtdefault').val();
        var j_emploan=$('#j_emploan').val();
        var j_frndsloan=$('#j_frndsloan').val();
        var j_purchased=$('#j_purchased').val();
        var j_othrliabilities=$('#j_othrliabilities').val();
        var j_issuingbnk=$('#j_issuingbnk').val();
        var j_cardno=$('#j_cardno').val();
        var j_expdate=$('#j_expdate').val();
        var j_limit=$('#j_limit').val();
        var j_presentamt=$('#j_presentamt').val();
        var j_cash=$('#j_cash').val();
        var j_deposit=$('#j_deposit').val();
        var j_immovable=$('#j_immovable').val();
        var j_movable=$('#j_movable').val();
        var j_investment=$('#j_investment').val();
        var j_others=$('#j_others').val();
        var j_total=$('#j_total').val();

        var description=$('#description').val();
        var owner=$('#owner').val();
        var value=$('#value').val();
        var collateral=$('#collateral').val();
        var gi_name=$('#gi_name').val();
        var gii_name=$('#gii_name').val();
        var giii_name=$('#giii_name').val();
        var gi_address=$('#gi_address').val();
        var gii_address=$('#gii_address').val();
        var giii_address=$('#giii_address').val();
        var gi_occupation=$('#gi_occupation').val();
        var gii_occupation=$('#gii_occupation').val();
        var giii_occupation=$('#giii_occupation').val();
        var gi_net=$('#gi_net').val();
        var gii_net=$('#gii_net').val();
        var giii_net=$('#giii_net').val();
        var gi_proposed=$('#gi_proposed').val();

        formData.append('a_name', a_name);
        formData.append('a_name', a_name);
        formData.append('a_panno', a_panno);
        formData.append('a_fathername', a_fathername);
        formData.append('a_relationship', a_relationship);
        formData.append('a_prsntaddress', a_prsntaddress);
        formData.append('a_period', a_period);
        formData.append('a_telno', a_telno);
        formData.append('a_mobno', a_mobno);
        formData.append('a_email', a_email);
        formData.append('a_prmntaddress', a_prmntaddress);
        formData.append('a_status', a_status);
        formData.append('a_dob', a_dob);
        formData.append('a_marital', a_maritual);
        formData.append('a_belong', a_belong);
        formData.append('a_dependant', a_dependant);
        formData.append('a_education', a_education);
        formData.append('a_empname', a_empname);
        formData.append('a_adds', a_adds);
        formData.append('a_empdesignation', a_empdesignation);
        formData.append('a_years', a_years);
        formData.append('a_length', a_length);
        formData.append('a_retirement', a_retirement);
        formData.append('a_gross', a_gross);
        formData.append('a_income', a_income);
        formData.append('a_professional', a_professional);
        formData.append('a_fund', a_fund);
        formData.append('a_insurance', a_insurance);
        formData.append('a_statutory', a_statutory);
        formData.append('a_salary', a_salary);
        formData.append('a_proof', a_proof);
        formData.append('a_bnkname', a_bnkname);
        formData.append('a_account', a_account);
        formData.append('a_accno', a_accno);
        formData.append('a_since', a_since);
        formData.append('a_average', a_average);
        formData.append('a_bnkname1', a_bnkname1);
        formData.append('a_loantype', a_loantype);
        formData.append('a_loanamt', a_loanamt);
        formData.append('a_present', a_present);
        formData.append('a_security', a_security);
        formData.append('a_repayment', a_repayment);
        formData.append('a_amtdefault', a_amtdefault);
        formData.append('a_emploan', a_emploan);
        formData.append('a_frndsloan', a_frndsloan);
        formData.append('a_purchased', a_purchased);
        formData.append('a_othrliabilities', a_othrliabilities);
        formData.append('a_issuingbnk', a_issuingbnk);
        formData.append('a_cardno', a_cardno);
        formData.append('a_expdate', a_expdate);
        formData.append('a_limit', a_limit);
        formData.append('a_presentamt', a_presentamt);
        formData.append('a_cash', a_cash);
        formData.append('a_deposit', a_deposit);
        formData.append('a_immovable', a_immovable);
        formData.append('a_movable', a_movable);
        formData.append('a_investment', a_investment);
        formData.append('a_others', a_others);
        formData.append('a_total', a_total);
    
        // Borrower J Information
        formData.append('loanAmtMain', loanAmtMain);
        formData.append('j_panno', j_panno);
        formData.append('j_fathername', j_fathername);
        formData.append('j_relationship', j_relationship);
        formData.append('j_prsntaddress', j_prsntaddress);
        formData.append('j_period', j_period);
        formData.append('j_telno', j_telno);
        formData.append('j_mobno', j_mobno);
        formData.append('j_email', j_email);
        formData.append('j_prmntaddress', j_prmntaddress);
        formData.append('j_status', j_status);
        formData.append('j_dob', j_dob);
        formData.append('j_marital', j_maritual);
        formData.append('j_belong', j_belong);
        formData.append('j_dependant', j_dependant);
        formData.append('j_education', j_education);
        formData.append('j_empname', j_empname);
        formData.append('j_adds', j_adds);
        formData.append('j_empdesignation', j_empdesignation);
        formData.append('j_years', j_years);
        formData.append('j_length', j_length);
        formData.append('j_retirement', j_retirement);
        formData.append('j_gross', j_gross);
        formData.append('j_income', j_income);
        formData.append('j_professional', j_professional);
        formData.append('j_fund', j_fund);
        formData.append('j_insurance', j_insurance);
        formData.append('j_statutory', j_statutory);
        formData.append('j_salary', j_salary);
        formData.append('j_proof', j_proof);
        formData.append('j_bnkname', j_bnkname);
        formData.append('j_account', j_account);
        formData.append('j_accno', j_accno);
        formData.append('j_since', j_since);
        formData.append('j_average', j_average);
        formData.append('j_bnkname1', j_bnkname1);
        formData.append('j_loantype', j_loantype);
        formData.append('j_loanamt', j_loanamt);
        formData.append('j_present', j_present);
        formData.append('j_security', j_security);
        formData.append('j_repayment', j_repayment);
        formData.append('j_amtdefault', j_amtdefault);
        formData.append('j_emploan', j_emploan);
        formData.append('j_frndsloan', j_frndsloan);
        formData.append('j_purchased', j_purchased);
        formData.append('j_othrliabilities', j_othrliabilities);
        formData.append('j_issuingbnk', j_issuingbnk);
        formData.append('j_cardno', j_cardno);
        formData.append('j_expdate', j_expdate);
        formData.append('j_limit', j_limit);
        formData.append('j_presentamt', j_presentamt);
        formData.append('j_cash', j_cash);
        formData.append('j_deposit', j_deposit);
        formData.append('j_immovable', j_immovable);
        formData.append('j_movable', j_movable);
        formData.append('j_investment', j_investment);
        formData.append('j_others', j_others);
        formData.append('j_total', j_total);
    
        // Additional Information
        formData.append('description', description);
        formData.append('owner', owner);
        formData.append('value', value);
        formData.append('collateral', collateral);
        formData.append('gi_name', gi_name);
        formData.append('gii_name', gii_name);
        formData.append('giii_name', giii_name);
        formData.append('gi_address', gi_address);
        formData.append('gii_address', gii_address);
        formData.append('giii_address', giii_address);
        formData.append('gi_occupation', gi_occupation);
        formData.append('gii_occupation', gii_occupation);
        formData.append('giii_occupation', giii_occupation);
        formData.append('gi_net', gi_net);
        formData.append('gii_net', gii_net);
        formData.append('giii_net', giii_net);
        formData.append('gi_proposed', gi_proposed);

        $.ajax({
          url: 'ajax/loan_form.php',
          type: 'POST',
          data: formData,
          processData: false,
          contentType: false,
          success: function (response) 
          {
            console.log(response);
            for (var i = 0; i < mandatoryFields.length; i++) 
            {
                $('#' + fieldId).val('');
            }
            alert(response);
          },
          error: function (error) {
              console.error('Error:', error);
          }
      });
    });

    $('#back').click(function()
    {
      window.location='dashboard/loanApplyDetails.php';
    });

    $('#submit1').click(function () {
      var printWindow = window.open('', '_blank');
      printWindow.document.write('<html><head><title>Print</title>');
      printWindow.document.write('<style>');
      var styles = document.getElementsByTagName('style');
      for (var i = 0; i < styles.length; i++) {
          printWindow.document.write(styles[i].innerText);
      }
      printWindow.document.write('</style></head><body>');
  
      // Clone the content including input values
      var cloneContent = $('#contePrint').clone();
      cloneContent.find('input, [contenteditable]').each(function () {
          var originalElement = $('#' + this.id);
          $(this).val(originalElement.val());
      });
      printWindow.document.write(cloneContent.html());
  
      printWindow.document.write('</body></html>');
      printWindow.document.close();
      printWindow.print();
  });
  
  
  
  


});
