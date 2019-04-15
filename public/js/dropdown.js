jQuery(document).ready(function ()
{
        jQuery('select[name="courses"]').on('change',function(){
           var courseID = jQuery(this).val();
           if(courseID)
           {
              jQuery.ajax({
                 url : '/subjects/get/' +courseID,
                 type : "GET",
                 dataType : "json",
                 success:function(data)
                 {
                    // console.log(data);
                    jQuery('select[name="subject"]').empty();
                    jQuery.each(data, function(key,value){
                       $('select[name="subject"]').append('<option value="'+ key +'">'+ value +'</option>');
                    });
                 }
              });
           }
           else
           {
              $('select[name="subject"]').empty();
           }
        });
});
