$(document).ready(function(){ 




    $("#ptappdate").on('change', function(){
        var dept = $('#department').val();
        var doc = $('#doctor').val();
        var apdt = $(this).val();

        if(apdt)
        {
           $.ajax({
                type:'POST',
                url:'get_patient_name.php',
                data:'drpt_id='+dept+'&doctor_slno='+doc+'&app_date='+apdt,
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
