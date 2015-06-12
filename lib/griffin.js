$(document).ready(function(){

	/*jQuery fadeIn*/
	$('main').hide().fadeIn(3000);

	/*jQuery slideToggle*/
	$("#question").click(function() {
		$("#answer").slideToggle("slow");
	});

	$("#question2").click(function() {
		$("#answer2").slideToggle("slow");
	});

	$("#question3").click(function() {
		$("#answer3").slideToggle("slow");
	});

	/**
	 * this resets all form fields when the "Reset" button is clicked.
	 **/
	$("#reset-form").click(function() {
		document.getElementById("sample-form").reset();
	});

});