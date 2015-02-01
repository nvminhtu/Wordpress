;(function($){
  "use strict";

  $(function(){
    var $item = $('.area_list ul li'),
        $itemLink = $('.area_list ul li a');
    
    $itemLink.removeAttr("href");
    $itemLink.each(function() {
      var $this = $(this);
        
        $this.off().click(function(event) {
          $itemLink.removeClass('active');
          $itemLink.next().fadeOut('fast');

          var id = $this.attr('id');
          
          $this.addClass('active');
          $this.next().fadeIn('fast');

          $('#overlay').show();
          $('#overlay').removeClass().addClass(id);
          
        });
    });
  });

})(jQuery);

