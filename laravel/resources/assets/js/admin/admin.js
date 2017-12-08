/**
 * BEGINNING Reveal items on load
 */
function revealOnLoad() {
	$(".main-sidebar .sidebar:not(.animated)").addClass('animated');
    $(".content-wrapper .content:not(.animated)").addClass('animated');
}
/**
 * END Reveal items on load
 */

/*
 *	BEGINNING of Loader Functions
 */
 /**
  * @summary Shows loading layer
  */
 function showLoader(){
 	$('#loader-layer').fadeIn(300);
 }

 /**
  * @summary Hides loading layer
  */
 function hideLoader(){
 	$('#loader-layer').fadeOut(300);
 }
 /*
  *	END of Loader Functions
  */


$(document).ready(function(){

	//Shows / Animates content on scroll
	revealOnLoad();
});
