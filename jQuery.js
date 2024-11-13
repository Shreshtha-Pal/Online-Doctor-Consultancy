
$(document).ready(function(){
        
    $('#state').on('change', function()
    {
       
        var stateID = $(this).val();
        if(stateID)
        {
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_slno='+stateID,
                success:function(html){
                    $('#district').html(html);
                }
            }); 
        }
        else
        {
            $('#district').html('<option value="">Select District first</option>'); 
        }
    });
});
