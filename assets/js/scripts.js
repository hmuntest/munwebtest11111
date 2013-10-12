$(document).ready(function() {
   $('#index').click(function(){
   	 $('a.menu_active').addClass('menu_item').removeClass('menu_active');
   	 $('#index').addClass('menu_active').removeClass('menu_item');
     $('div.about').fadeOut();
     $('div.resume').fadeOut();
     $('div.projects').fadeOut();
     $('div.contact').fadeOut();
     $('div.about').promise().done(function(){
     	$('div.resume').promise().done(function(){
     		$('div.projects').promise().done(function(){
     			$('div.contact').promise().done(function(){
     				$('div.index').fadeIn();
	 			});
	 		});
	 	});
	 });
	 return false;
   });


   $('#about').click(function(){
   	 $('a.menu_active').addClass('menu_item').removeClass('menu_active');
   	 $('#about').addClass('menu_active').removeClass('menu_item');
     $('div.index').fadeOut();
     $('div.resume').fadeOut();
     $('div.projects').fadeOut();
     $('div.contact').fadeOut();
     $('div.index').promise().done(function(){
     	$('div.resume').promise().done(function(){
     		$('div.projects').promise().done(function(){
     			$('div.contact').promise().done(function(){
     				$('div.about').fadeIn();
	 			});
	 		});
	 	});
	 });
	 return false;
   });

   $('#resume').click(function(){
   	 $('a.menu_active').addClass('menu_item').removeClass('menu_active');
   	 $('#resume').addClass('menu_active').removeClass('menu_item');
     $('div.index').fadeOut();
     $('div.about').fadeOut();
     $('div.projects').fadeOut();
     $('div.contact').fadeOut();
     $('div.about').promise().done(function(){
     	$('div.index').promise().done(function(){
     		$('div.projects').promise().done(function(){
     			$('div.contact').promise().done(function(){
     				$('div.resume').fadeIn();
	 			});
	 		});
	 	});
	 });
	 return false;
   });

   $('#projects').click(function(){
   	 $('a.menu_active').addClass('menu_item').removeClass('menu_active');
   	 $('#projects').addClass('menu_active').removeClass('menu_item');
     $('div.index').fadeOut();
     $('div.resume').fadeOut();
     $('div.about').fadeOut();
     $('div.contact').fadeOut();
     $('div.about').promise().done(function(){
     	$('div.resume').promise().done(function(){
     		$('div.index').promise().done(function(){
     			$('div.contact').promise().done(function(){
     				$('div.projects').fadeIn();
	 			});
	 		});
	 	});
	 });
	 return false;
   });

   $('#contact').click(function(){
   	 $('a.menu_active').addClass('menu_item').removeClass('menu_active');
   	 $('#contact').addClass('menu_active').removeClass('menu_item');
     $('div.index').fadeOut();
     $('div.resume').fadeOut();
     $('div.projects').fadeOut();
     $('div.about').fadeOut();
     $('div.about').promise().done(function(){
     	$('div.resume').promise().done(function(){
     		$('div.index').promise().done(function(){
     			$('div.projects').promise().done(function(){
     				$('div.contact').fadeIn();
	 			});
	 		});
	 	});
	 });
	 return false;
   });
 });