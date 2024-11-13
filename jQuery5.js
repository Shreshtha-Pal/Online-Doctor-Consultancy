$(document).ready(function(){ 
    $("#ptappdate").on('change', function(){
        var lab = $('#lab').val();
        
        var apdt = $(this).val();
        if(apdt)
        {
           $.ajax({
                type:'POST',
                url:'get_patient_name_lab.php',
                data:'lab='+lab+'&app_date='+apdt,
                success:function(html){
                    $('#ptname').html(html);
                }
            }); 
        }
        else
        {
          
            $('#ptname').html('<option value="">Select patient </option>'); 
        }
       
    });
});
