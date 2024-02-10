$(document).ready(function() 
{
    $("#submit").click(function() 
    {
        var checkedValues = [];
        // Iterate over all checkboxes
        $('input[type="checkbox"][name="employmentStatus"]').each(function() 
        {
            if ($(this).is(":checked")) 
            {
                checkedValues.push($(this).val());
            }
        });
        // Check if "Others" checkbox is checked and include its value if it is
        if ($('#othersCheckBox').is(':checked')) {
            checkedValues.push($('#otherinput').val());
        }
    
        console.log(checkedValues);

    });
    
    $("#otherinput").on("input", function()
    {
        var inputValue = $(this).val().trim();
        if (inputValue !== "") {
            $("#othersCheckBox").prop("checked", true);
        } else {
            $("#othersCheckBox").prop("checked", false);
        }
    });
});