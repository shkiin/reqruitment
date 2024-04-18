(function($) {

$('#job-region').chosen();


  $("#hamburger-menu").click(function(event) {
    event.stopPropagation();
    $(".header-navigation").addClass("open");

  });

    $(".close-menu").click(function(event) {
    event.stopPropagation();
    $(".header-navigation").removeClass("open");

  });

  $("#hamburger-menu").keypress(function(e) {
    var key = e.which;
    if (key == 13) // the enter key code
    {
      $(".header-navigation").addClass("open");
    }
  });

  $(".close-menu").keypress(function(e) {
    var key = e.which;
    if (key == 13) // the enter key code
    {
      $(".header-navigation").removeClass("open");
    }
  });

})(jQuery);

if (jQuery(window).width() < 991){
  const  superjob_focusableElements =
  'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';
const superjob_modal = document.querySelector('nav#site-navigation'); 

const superjob_firstFocusableElement = superjob_modal.querySelectorAll(superjob_focusableElements)[0]; 
const superjob_focusableContent = superjob_modal.querySelectorAll(superjob_focusableElements);
const superjob_lastFocusableElement = superjob_focusableContent[superjob_focusableContent.length - 1];


document.addEventListener('keydown', function(e) {
let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

if (!isTabPressed) {
  return;
}

if (e.shiftKey) { // if shift key pressed for shift + tab combination
  if (document.activeElement === superjob_firstFocusableElement) {
    superjob_lastFocusableElement.focus(); // add focus for the last focusable element
    e.preventDefault();
  }
} else { // if tab key is pressed
  if (document.activeElement === superjob_lastFocusableElement) { // if focused has reached to last focusable element then focus first focusable element after pressing tab
    superjob_firstFocusableElement.focus(); // add focus for the first focusable element
    e.preventDefault();
  }
}
});

superjob_firstFocusableElement.focus();}