				var interval = undefined;
				jQuery(document).ready(function($) {
					 //interval = setInterval(getNext, 3000); // milliseconds
					 interval= setInterval(function(){
						$('#testimonials .slide').filter(':visible').fadeOut(1000,function(){
							if($(this).next('.slide').size()){
								$(this).next().fadeIn(1000);
							}
							else{
								$('#testimonials .slide').eq(0).fadeIn(1000);
							}
						});
					},3000);
					    $('.btn-next').on('click', getNext);
					    $('.btn-prev').on('click', getPrev);
					function getNext() {
					    var $curr = $('#testimonials .slide:visible'),
					        $next = ($curr.next().length) ? $curr.next() : $('#testimonials .slide').first();

					    transition($curr, $next);
					}

					function getPrev() {
					    var $curr = $('#testimonials .slide:visible'),
					        $next = ($curr.prev().length) ? $curr.prev() : $('#testimonials .slide').last();
					    transition($curr, $next);
					}
					function transition($curr, $next) {
					    clearInterval(interval);
					    $curr.fadeOut('1000', function() {
					    		$next.css('z-index', 2).fadeIn('1000', function () {
									$next.css('z-index', 1);
					   		 });
					    });
					}
					
				});	