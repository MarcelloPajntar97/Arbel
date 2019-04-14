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
                      var speriamo = key + 1;
                       $('select[name="subject"]').append('<option value="'+ speriamo +'">'+ value +'</option>');
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
