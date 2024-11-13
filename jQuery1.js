$(document).ready(function(){ 
    $('#department').on('change', function()
    {
        var dpt = $(this).val();
        if(dpt)
        {
            $.ajax({
                type:'POST',
                url:'DocData.php',
                data:'drpt_id='+dpt,
                success:function(html){
                    $('#doctor').html(html);
                    $('#app_date').html('<option value="">Select Doctor first</option>'); 
                }
            }); 
        }
        else
        {
            $('#doctor').html('<option value="">Select department first</option>'); 
            $('#app_date').html('<option value="">Select doctor first</option>'); 
        }
    });


    $('#doctor').on('change', function()
    {
        var dept = $('#department').val();
        var doc = $(this).val();

        //alert(dept);
        //alert(doc);
      
        if(doc)
        {
            $.ajax({
                type:'POST',
                url:'dateData.php',
                data:'drpt_id='+dept+'&doctor_slno='+doc,
                success:function(html){
                    $('#app_date').html(html);
                }
            }); 
        }
        else
        {
            $('#app_date').html('<option value="">Select Date </option>'); 
        }
    });



    $('#app_date').on('change', function()
    {
        var dept = $('#department').val();
        var doc = $('#doctor').val();
        var apdt = $(this).val();

      
      
        if(apdt)
        {
           $.ajax({
                type:'POST',
                url:'timedata.php',
                data:'drpt_id='+dept+'&doctor_slno='+doc+'&app_date='+apdt,
                success:function(html){
                    $('#apptime').html(html);
                }
            }); 
        }
        else
        {
            $('#apptime').html('<td>Not available</td>'); 
        }
       
    });



    $("#ptappdate").datepicker({
        onSelect: function(dateText) {
            alert('xxxx');
            console.log("Selected date: " + dateText + "; input's current value: " + this.value);
          $(this).change();
        }
      }).on('change', function(){
        var dept = $('#department').val();
        var doc = $('#doctor').val();
        var apdt = $(this).val();

       
        //alert(doc);
        //alert(apdt);
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


