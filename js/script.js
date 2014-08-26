(function ($) {

    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    // After Images Load
    window.onload = function() {

        $("#mmenu").addClass('inactive-mmenu'); 
    }
    
    // DOM is ready
	$(document).ready(function(){ 
		 if( !isMobile.any()){
            /* Non-Mobile ONLY */
        }

        if( isMobile.any()) {
           /* Mobile ONLY */
        }

        // Mobile Menu		
        $(".mtoggle").on('click', function(e) {
            $("#mobile-menu").slideToggle();            
            e.preventDefault();
        });

        // jQuery Media Queries
        if ($(window).width() < 480) {
            
        } 
        
        else if ($(window).width() < 768) {     
           
        } 

        else if ($(window).width() < 1024) {     
           
        }

        else {
            
        }
    });// End Document Ready

    // Resize Media Queries
    $(window).resize(function() {

        if ($(window).width() < 480) {
            
        } 
        
        else if ($(window).width() < 768) {     
            
        } 

        else if ($(window).width() < 1024) {     
           
        }

        else {
            
        }
    });// End Resize

    


	

})(jQuery);