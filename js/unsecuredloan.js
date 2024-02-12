$(document).ready(function() 
{

    $('input').on('input', function() {
        var inputContainer = $(this).closest('.inputContainer1');
        // Remove existing error messages and reset styling
        inputContainer.find('.error-message').remove(); // Assuming error messages are appended with the class 'error-message'
        inputContainer.css('border', ''); // Reset border to default
        inputContainer.find('label').css('color', ''); // Reset label color to default
    });

    $("#submit").click(function() 
    {
        var loanAmtMain=$('#loanAmtMain').val();
        var aplication_date=$('#aplication_date').val();
        var losno=$('#losno').val();
        var photo = $('#photo')[0].files[0]; // File object
        var signature = $('#signature')[0].files[0]; // File object

        //occupation
        var occupation = [];
        // Iterate over all checkboxes
        $('input[type="checkbox"][name="employmentStatus"]').each(function() {
            if ($(this).is(":checked")) {
                occupation.push($(this).val());
            }
        });
        console.log(occupation);

        //self employed
        var selfemployed = [];
        // Iterate over all checkboxes
        $('input[type="checkbox"][name="selfEmployed"]').each(function() 
        {
            if ($(this).is(":checked")) {
                selfemployed.push($(this).val());
            }
        });
        console.log(selfemployed);

        //bussiness
        var business = [];
        // Iterate over all checkboxes
        $('input[type="checkbox"][name="business"]').each(function() 
        {
            if ($(this).is(":checked")) {
                business.push($(this).val());
            }
        });
        console.log(business);

        //bussiness
        var nature = [];
        // Iterate over all checkboxes
        $('input[type="checkbox"][name="nature"]').each(function() 
        {
            if ($(this).is(":checked")) {
                nature.push($(this).val());
            }
        });
        console.log(nature);

        //salaried
        var salaried = [];
        // Iterate over all checkboxes
        $('input[type="checkbox"][name="salaried"]').each(function() 
        {
            if ($(this).is(":checked")) {
                salaried.push($(this).val());
            }
        });
        console.log(salaried);

        var designation=$('#designation').val();

        var gstavail = $('input[name="gstavail"]:checked').val();
        if(gstavail) 
        {
            console.log(gstavail)
        }else
        {
            gstavail='No';
        }
        var gstnumber=$('#gstnumber').val();
        var efectivedate=$('#efectivedate').val();
        var relationWithAplicant=$('#relationWithAplicant').val();

        //Please Tell About Yourself
        var yourself = [];
        // Iterate over all checkboxes
        $('input[type="checkbox"][name="yourself"]').each(function() 
        {
            if ($(this).is(":checked")) {
                yourself.push($(this).val());
            }
        });
        console.log(yourself);

        //personal Details
        var a_name=$('#a_name').val();
        var a_fname=$('#a_fname').val();
        var j_fname=$('#j_fname').val();
        var j_sname=$('#j_sname').val();
        var a_mname=$('#a_mname').val();
        var j_mname=$('#j_mname').val();
        var a_gender=$('#a_gender').val();
        var j_gender=$('#j_gender').val();
        var a_depen=$('#a_depen').val();
        var j_depen=$('#j_depen').val();
        var a_edu=$('#a_edu').val();
        var j_edu=$('#j_edu').val();
        var a_mobile=$('#a_mobile').val();
        var j_mobile=$('#j_mobile').val();
        var a_religion=$('#a_religion').val();
        var j_religion=$('#j_religion').val();
        var a_pan=$('#a_pan').val();
        var j_pan=$('#j_pan').val();
        var a_email=$('#a_email').val();
        var j_email=$('#j_email').val();

        //Address Details
        var addressdetails = [];
        // Iterate over all checkboxes
        $('input[type="checkbox"][name="addressdetails"]').each(function() 
        {
            if ($(this).is(":checked")) {
                addressdetails.push($(this).val());
            }
        });
        console.log(addressdetails);
        var monthlyRent=$('#monthlyRent').val();

        //presentAddress
        var a_presentadds=$('#a_presentadds').val();
        var a_landmark=$('#a_landmark').val();
        var a_city=$('#a_city').val();
        var a_state=$('#a_state').val();
        var a_pin=$('#a_pin').val();
        var a_std=$('#a_std').val();
        var a_tel=$('#a_tel').val();

        //bussiness Address
        var busempname=$('#busempname').val();
        var a_peraddress=$('#a_peraddress').val();
        var a_landmarkper=$('#a_landmarkper').val();
        var a_cityper=$('#a_cityper').val();
        var a_stateper=$('#a_stateper').val();
        var a_pinper=$('#a_pinper').val();
        var a_stdper=$('#a_stdper').val();
        var a_phoneper=$('#a_phoneper').val();
        var a_seryear=$('#a_seryear').val();
        var a_officialEmail=$('#a_officialEmail').val();

        //company Details
        var a_cmpname=$('#a_cmpname').val();
        var a_cmpcity=$('#a_cmpcity').val();
        var a_cmppin=$('#a_cmppin').val();
        var a_cmpstd=$('#a_cmpstd').val();
        var a_cmpphone=$('#a_cmpphone').val();
        var a_cmpext=$('#a_cmpext').val();
        var a_cmpcor=$('#a_cmpcor').val();
        var a_cmpcinno=$('#a_cmpcinno').val();
        var a_cmppan=$('#a_cmppan').val();
        var a_cmpgst=$('#a_cmpgst').val();
        var a_cmpdate=$('#a_cmpdate').val();

        //Income Details
        var a_anualSalary=$('#a_anualSalary').val();
        var a_otherincome=$('#a_otherincome').val();
        var a_bank=$('#a_bank').val();
        var a_branch=$('#a_branch').val();
        var a_account=$('#a_account').val();
        var a_customerid=$('#a_customerid').val();
        var a_yearopened=$('#a_yearopened').val();

        //requested loan details
        var a_loanAmt=$('#a_loanAmt').val();
        var a_loantenure=$('#a_loantenure').val();
        var a_endUse=$('#a_endUse').val();

        //personal reference-1
        var a_personalname=$('#a_personalname').val();
        var a_relation=$('#a_relation').val();
        var a_residental=$('#a_residental').val();
        var a_refestate=$('#a_refestate').val();
        var a_refepin=$('#a_refepin').val();
        var a_refestd=$('#a_refestd').val();
        var a_refephone=$('#a_refephone').val();
        var a_refemobile=$('#a_refemobile').val();

        //personal reference-2
        var a_personalname2=$('#a_personalname2').val();
        var a_relation2=$('#a_relation2').val();
        var a_residental2=$('#a_residental2').val();
        var a_refecity2=$('#a_refecity2').val();
        var a_refestate2=$('#a_refestate2').val();
        var a_refepin2=$('#a_refepin2').val();
        var a_refestd2=$('#a_refestd2').val();
        var a_refephone2=$('#a_refephone2').val();
        var a_refemobile2=$('#a_refemobile2').val();
        
        //company use only
        var socode=$('#socode').val();
        var dsacode=$('#dsacode').val();
        var smcode=$('#smcode').val();
        var branchcp=$('#branchcp').val();
        var rmcode=$('#rmcode').val();

        //acknowledgment slip
        var nameof=$('#nameof').val();
        var dateof=$('#dateof').val();
        var dateandtime=$('#dateandtime').val();
        var hsnpersonname=$('#hsnpersonname').val();
        var contactno=$('#contactno').val();

        var input = [
            '#loanAmtMain', '#aplication_date', '#losno', '#photo', '#signature','#a_name', '#a_fname', '#j_fname', '#j_sname', '#a_mname', '#j_mname', '#a_gender', '#j_gender', '#a_depen', '#j_depen', '#a_edu', '#j_edu', '#a_mobile', '#j_mobile', '#a_religion', '#j_religion', '#a_pan', '#j_pan', '#a_email', '#j_email','#a_presentadds', '#a_landmark', '#a_city', '#a_state', '#a_pin', '#a_std', '#a_tel', '#busempname', '#a_peraddress', '#a_landmarkper', '#a_cityper', '#a_stateper', '#a_pinper', '#a_stdper', '#a_phoneper', '#a_seryear', '#a_officialEmail', '#a_cmpname', '#a_cmpcity', '#a_cmppin', '#a_cmpstd', '#a_cmpphone', '#a_cmpext', '#a_cmpcor', '#a_cmpcinno', '#a_cmppan', '#a_cmpgst', '#a_cmpdate', '#a_anualSalary', '#a_otherincome', '#a_bank', '#a_branch', '#a_account', '#a_customerid', '#a_yearopened', '#a_loanAmt', '#a_loantenure', '#a_endUse', '#a_personalname', '#a_relation', '#a_residental', '#a_refestate', '#a_refepin', '#a_refestd', '#a_refephone', '#a_refemobile', '#a_personalname2', '#a_relation2', '#a_residental2', '#a_refecity2', '#a_refestate2', '#a_refepin2', '#a_refestd2', '#a_refephone2', '#a_refemobile2', '#socode', '#dsacode', '#smcode', '#branchcp', '#rmcode', '#nameof', '#dateof', '#dateandtime', '#hsnpersonname', '#contactno'
        ];
        // var input =
        // [
        //     '#loanAmtMain', '#aplication_date', '#losno','#a_name', '#a_fname', '#j_fname', '#j_sname', '#a_mname', '#j_mname', '#a_gender', '#j_gender', '#a_depen', '#j_depen', '#a_edu', '#j_edu', '#a_mobile', '#j_mobile', '#a_religion', '#j_religion', '#a_pan', '#j_pan', '#a_email', '#j_email'
        // ]
        for (var i = 0; i < input.length; i++) 
        {
            if ($(input[i]).is('input')) 
            {
                if ($(input[i]).val().trim() === '') 
                {
                    var fieldId = input[i];
                    var fieldElement = $(input[i]);
                    console.log('Field ' + input[i] + ' is empty.');
                    fieldElement.closest('.inputContainer1').css('border', '1px solid red');
                    fieldElement.closest('.inputContainer1').find('label').css('color', 'red');
                    $(input[i]).focus();
                    return;
                }
            }
        }
        var formData = new FormData();
        // Append all the form fields to the FormData object
        formData.append('loanAmtMain', loanAmtMain);
        formData.append('aplication_date', aplication_date);
        formData.append('losno', losno);
        formData.append('photo', photo);
        formData.append('signature', signature);
        formData.append('occupation', JSON.stringify(occupation));
        formData.append('selfemployed', JSON.stringify(selfemployed));
        formData.append('business', JSON.stringify(business));
        formData.append('nature', JSON.stringify(nature));
        formData.append('salaried', JSON.stringify(salaried));
        formData.append('designation', designation);
        formData.append('gstavail', gstavail);
        formData.append('gstnumber', gstnumber);
        formData.append('efectivedate', efectivedate);
        formData.append('relationWithAplicant', relationWithAplicant);
        formData.append('yourself', JSON.stringify(yourself));
        formData.append('a_name', a_name);
        formData.append('a_fname', a_fname);
        formData.append('j_fname', j_fname);
        formData.append('j_sname', j_sname);
        formData.append('a_mname', a_mname);
        formData.append('j_mname', j_mname);
        formData.append('a_gender', a_gender);
        formData.append('j_gender', j_gender);
        formData.append('a_depen', a_depen);
        formData.append('j_depen', j_depen);
        formData.append('a_edu', a_edu);
        formData.append('j_edu', j_edu);
        formData.append('a_mobile', a_mobile);
        formData.append('j_mobile', j_mobile);
        formData.append('a_religion', a_religion);
        formData.append('j_religion', j_religion);
        formData.append('a_pan', a_pan);
        formData.append('j_pan', j_pan);
        formData.append('a_email', a_email);
        formData.append('j_email', j_email);
        formData.append('addressdetails', JSON.stringify(addressdetails));
        formData.append('monthlyRent', monthlyRent);
        formData.append('a_presentadds', a_presentadds);
        formData.append('a_landmark', a_landmark);
        formData.append('a_city', a_city);
        formData.append('a_state', a_state);
        formData.append('a_pin', a_pin);
        formData.append('a_std', a_std);
        formData.append('a_tel', a_tel);
        formData.append('busempname', busempname);
        formData.append('a_peraddress', a_peraddress);
        formData.append('a_landmarkper', a_landmarkper);
        formData.append('a_cityper', a_cityper);
        formData.append('a_stateper', a_stateper);
        formData.append('a_pinper', a_pinper);
        formData.append('a_stdper', a_stdper);
        formData.append('a_phoneper', a_phoneper);
        formData.append('a_seryear', a_seryear);
        formData.append('a_officialEmail', a_officialEmail);
        formData.append('a_cmpname', a_cmpname);
        formData.append('a_cmpcity', a_cmpcity);
        formData.append('a_cmppin', a_cmppin);
        formData.append('a_cmpstd', a_cmpstd);
        formData.append('a_cmpphone', a_cmpphone);
        formData.append('a_cmpext', a_cmpext);
        formData.append('a_cmpcor', a_cmpcor);
        formData.append('a_cmpcinno', a_cmpcinno);
        formData.append('a_cmppan', a_cmppan);
        formData.append('a_cmpgst', a_cmpgst);
        formData.append('a_cmpdate', a_cmpdate);
        formData.append('a_anualSalary', a_anualSalary);
        formData.append('a_otherincome', a_otherincome);
        formData.append('a_bank', a_bank);
        formData.append('a_branch', a_branch);
        formData.append('a_account', a_account);
        formData.append('a_customerid', a_customerid);
        formData.append('a_yearopened', a_yearopened);
        formData.append('a_loanAmt', a_loanAmt);
        formData.append('a_loantenure', a_loantenure);
        formData.append('a_endUse', a_endUse);
        formData.append('a_personalname', a_personalname);
        formData.append('a_relation', a_relation);
        formData.append('a_residental', a_residental);
        formData.append('a_refestate', a_refestate);
        formData.append('a_refepin', a_refepin);
        formData.append('a_refestd', a_refestd);
        formData.append('a_refephone', a_refephone);
        formData.append('a_refemobile', a_refemobile);
        formData.append('a_personalname2', a_personalname2);
        formData.append('a_relation2', a_relation2);
        formData.append('a_residental2', a_residental2);
        formData.append('a_refecity2', a_refecity2);
        formData.append('a_refestate2', a_refestate2);
        formData.append('a_refepin2', a_refepin2);
        formData.append('a_refestd2', a_refestd2);
        formData.append('a_refephone2', a_refephone2);
        formData.append('a_refemobile2', a_refemobile2);
        formData.append('socode', socode);
        formData.append('dsacode', dsacode);
        formData.append('smcode', smcode);
        formData.append('branchcp', branchcp);
        formData.append('rmcode', rmcode);
        formData.append('nameof', nameof);
        formData.append('dateof', dateof);
        formData.append('dateandtime', dateandtime);
        formData.append('hsnpersonname', hsnpersonname);
        formData.append('contactno', contactno);


        // Send the form data via AJAX
        let log=$.ajax({
            url: 'ajax/unsecuredloan.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) 
            {
                // Handle success response
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(error);
            }
        });

        console.log(log);
    });
    
    $('#occupationotherinput').on('input', function() {
        var checkbox = $('#occupationOther');
        var otherval = $(this).val().trim(); // Get the value of the otherinput field
        if (otherval !== '') {
            checkbox.prop('checked', true);
            checkbox.val(otherval); // Set the value of the checkbox to match the otherinput value
        } else {
            checkbox.prop('checked', false);
        }
    });
    $('#occupationOther').prop('checked', $('#occupationotherinput').val().trim() !== '');

    $('#selfEmployedotherinput').on('input', function() {
        var checkbox = $('#selfEmployedother');
        var otherval = $(this).val().trim(); // Get the value of the otherinput field
        if (otherval !== '') {
            checkbox.prop('checked', true);
            checkbox.val(otherval); // Set the value of the checkbox to match the otherinput value
        } else {
            checkbox.prop('checked', false);
        }
    });
    $('#selfEmployedother').prop('checked', $('#selfEmployedotherinput').val().trim() !== '');

    $('#businessOtherinput').on('input', function() {
        var checkbox = $('#businessOther');
        var otherval = $(this).val().trim(); // Get the value of the otherinput field
        if (otherval !== '') {
            checkbox.prop('checked', true);
            checkbox.val(otherval); // Set the value of the checkbox to match the otherinput value
        } else {
            checkbox.prop('checked', false);
        }
    });
    $('#businessOther').prop('checked', $('#businessOtherinput').val().trim() !== '');

    $('#natureotherinput').on('input', function() {
        var checkbox = $('#natureother');
        var otherval = $(this).val().trim(); // Get the value of the otherinput field
        if (otherval !== '') {
            checkbox.prop('checked', true);
            checkbox.val(otherval); // Set the value of the checkbox to match the otherinput value
        } else {
            checkbox.prop('checked', false);
        }
    });
    $('#natureother').prop('checked', $('#natureotherinput').val().trim() !== '');

    $('#salaotherinput').on('input', function() 
    {
        var checkbox = $('#salaother');
        var otherval = $(this).val().trim(); // Get the value of the otherinput field
        if (otherval !== '') {
            checkbox.prop('checked', true);
            checkbox.val(otherval); // Set the value of the checkbox to match the otherinput value
        } else {
            checkbox.prop('checked', false);
        }
    });
    $('#salaother').prop('checked', $('#salaotherinput').val().trim() !== '');


    $('#loanAmtMain , #losno , #a_mobile , #j_mobile , #monthlyRent , #a_pin , #a_pinper , #a_stdper , #a_phoneper , #a_seryear , #a_cmppin , #a_cmpstd , #a_cmpphone , #a_cmpcor , #a_cmpcinno , #a_anualSalary , #a_otherincome , #a_account , #a_customerid , #a_yearopened , #a_loanAmt , #a_loantenure , #a_refepin , #a_refestd , #a_refephone , #a_refemobile , #a_refepin2 , #a_refestd2 , #a_refephone2 , #a_refemobile2 , #contactno').keypress(function(event)
    {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if ((keycode < 46 || keycode > 57))
        return false;

        return true;
    });
});
