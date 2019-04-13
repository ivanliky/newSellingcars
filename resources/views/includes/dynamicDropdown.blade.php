<script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="brand"]').on('change',function(){
               var brandID = jQuery(this).val();
               if(brandID)
               {
                  jQuery.ajax({
                     url : 'dropdownlist/brands/' +brandID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="car"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="car"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="car"]').empty();
               }
            });
    });
    </script>
