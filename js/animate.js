$(document).ready(function () {


jQuery('.article__image').hover(function(){

			jQuery(this).animate({"width" : "145px", "height" : "145px"},400);
			}, function(){
			jQuery(this).animate({"width" : "125px", "height" : "125px"},1000);
			}
		);
});