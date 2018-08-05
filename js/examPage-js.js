$(function(){
var currentdate = new Date(); 
    var datetime = currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
    examCounter = new Date ( currentdate );
examCounter.setMinutes ( currentdate.getMinutes() + 30 );//replace 30 with minutes of test
 $('#cdTimer').flipcountdown({
 	showHour:false,
 	showMinute:false,
 	showSecond:true,
	size:'sm',
	beforeDateTime: ''+examCounter+''
 });

});
/*To submit form on countdown*/
var countdown = 30 * 60 * 1000;
var timerId = setInterval(function(){
  countdown -= 1000;
  var min = Math.floor(countdown / (60 * 1000));
  var sec = Math.floor((countdown - (min * 60 * 1000)) / 1000);

  if (countdown <= 0) {  	
     $("#mcqFormSubmit").trigger('click');
     clearInterval(timerId);
  }
}, 1000); //1000ms. = 1sec.
/*$(function(){
	var i = 1;
	$('#cdTimer').flipcountdown({
		tick:function(){
			return i++;
		}
	});
})*/
$(document).ready(function() {
  var $navbar = $("#optionsBar");
  
  AdjustHeader(); // Incase the user loads the page from halfway down (or something);
  $(window).scroll(function() {
      AdjustHeader();
  });
  
  function AdjustHeader(){
    if ($(window).scrollTop() > 60) {
      if (!$navbar.hasClass("navbar-fixed-top")) {
        $navbar.addClass("navbar-fixed-top");
      }
    } else {
      $navbar.removeClass("navbar-fixed-top");
    }
  }
});