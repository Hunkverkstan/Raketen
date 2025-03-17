$('body').toggleClass(localStorage.toggled);

function darkLight() {
  /*DARK CLASS*/
  if (localStorage.toggled != 'dark') {
    $('body').toggleClass('dark', true);
    localStorage.toggled = "dark";
     
  } else {
    $('body').toggleClass('dark', false);
    localStorage.toggled = "";
  }
}

/*Add 'checked' property to input if background == dark*/
if ($('body').hasClass('dark')) {
   $( '#checkBox' ).prop( "checked", true )
} else {
  $( '#checkBox' ).prop( "checked", false )
}

window.addEventListener('scroll', function() {
  // keep track of previous scroll position
  let prevScrollPos = window.pageYOffset;

  window.addEventListener('scroll', function() {
    // current scroll position
    const currentScrollPos = window.pageYOffset;

    if (currentScrollPos >= 100) {
      // check the scroll direction
      if (prevScrollPos > currentScrollPos) {
        // user has scrolled up
        document.querySelector('#nav-header').classList.remove('hide');
        document.querySelector('#nav-header').classList.add('show');
        document.querySelector('#nav-header').classList.add('show-shadow');
      } else {
        // user has scrolled down
        document.querySelector('#nav-header').classList.remove('show');
        document.querySelector('#nav-header').classList.remove('show-shadow');
        document.querySelector('#nav-header').classList.add('hide');
      }
    }

    // update previous scroll position
    prevScrollPos = currentScrollPos;

    // check if user is at the top of the page
    if (currentScrollPos === 0) {
      // perform action when at the top
      // Example: Show a message or add a class to an element
      document.querySelector('#nav-header').classList.remove('show-shadow');
    }
  });
});


  feather.replace()

$(".year-stats").click(function() {
  var yearStatsInfo = $(this).closest(".history-container").find(".year-stats-info");
  var yearStatsPlus = $(this).closest(".history-container").find(".stats-plus");
  var yearStatsMinus = $(this).closest(".history-container").find(".stats-minus");

  if (yearStatsInfo.is(":visible")) {
    yearStatsInfo.slideUp(100);
    $(this).text("Visa ");
    yearStatsMinus.toggle();  
    yearStatsPlus.toggle(); 
  } else {
    yearStatsInfo.slideDown(250);
    $(this).text("Dölj ");
    yearStatsMinus.toggle();  
    yearStatsPlus.toggle(); 
  }

});




