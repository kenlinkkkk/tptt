$(document).ready(function () {
   $(window).on('hashchange', function(e){
      history.replaceState ("", document.title, e.originalEvent.oldURL);
   });

   $(".tilt").tilt({
      glare: true,
      maxGlare: .5
   });

   $(window).scroll(function () {
      var x = screen.width;

      if ($(this).scrollTop() > 200) {
         $("#navbar nav").addClass("nav-bg");
      } else {
         $("#navbar nav").removeClass("nav-bg");
      }

      if (x < 768 && $(this).scrollTop() > 0) {
         $("#navbar nav").addClass("nav-bg");
      }
   });

   $(window).scroll(function() {
      if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
         $('#return-to-top').fadeIn(200);    // Fade in the arrow
      } else {
         $('#return-to-top').fadeOut(200);   // Else fade out the arrow
      }
   });
   $('#return-to-top').click(function() {      // When arrow is clicked
      $('body,html').animate({
         scrollTop : 0                       // Scroll to top of body
      }, 500);
   });


});