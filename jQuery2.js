$(document).ready(function(){ 

    $('#ptname').on('change', function()
    {
        var ptsl = $(this).val();
        if(ptsl)
        {
           $.ajax({
                type:'POST',
                url:'pt_record.php',
                data:'pt_slno='+ptsl,
                success:function(html){
                    $('#ptrecord').html(html);
                }
            }); 
        }
        else
        {
            $('#ptrecord').html('<td>Not available</td>'); 
        }
       
    });
});