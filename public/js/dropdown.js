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

// // Get the container element
// var btnContainer = document.getElementsByClassName("rowDay");
//
// // Get all buttons with class="btn" inside the container
// var btns = btnContainer.getElementsByClassName("linkDay");
//
// // Loop through the buttons and add the active class to the current/clicked button
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//     var current = document.getElementsByClassName("activeDay");
//     current[0].className = current[0].className.replace(" activeDay", "");
//     this.className += " activeDay";
//   });
// }
