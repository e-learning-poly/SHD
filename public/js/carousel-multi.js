<<<<<<< HEAD
$(document).ready(function() {


   $('#myCarousel').carousel({
        interval: 6000
     })

    $('.carousel .carousel-item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
              
        for (var i=0;i<1;i++) {
            next=next.next();
            if (!next.length) {
            	next = $(this).siblings(':first');
        	}
                
        	next.children(':first-child').clone().appendTo($(this));
        }
    });


=======
$(document).ready(function() {


   $('#myCarousel').carousel({
        interval: 6000
     })

    $('.carousel .carousel-item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
              
        for (var i=0;i<1;i++) {
            next=next.next();
            if (!next.length) {
            	next = $(this).siblings(':first');
        	}
                
        	next.children(':first-child').clone().appendTo($(this));
        }
    });


>>>>>>> b131e3337ca20ff99a98e6a25ce0e3ed956fe21f
});