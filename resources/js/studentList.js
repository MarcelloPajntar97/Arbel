$(document).ready(function(){

  "use strict";

  function tab() {
    var tabListItem = $('.tab-list-item');
    var contentItem = $('.tab-content-item');

    contentItem.not(':first').hide();
    tabListItem.first().addClass('active');

    // on click event
    tabListItem.on('click', function(e){
      e.preventDefault();
      tabListItem.removeClass('active');
      var $this = $(this);
      var tabID = $this.find('a').attr('href');

      $this.addClass('active');
      contentItem.hide();
      $(tabID).fadeIn('slow');

    });
  }

  tab();

});
