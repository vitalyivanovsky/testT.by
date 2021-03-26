$(document).ready(function(){

	
	

/*===============================ANIMATION====================================================
				//	$('*').css({"opacity" : "0%"});
				//	$('*').animate({"opacity" : "100%"}, 800);
	*/
					jQuery('.article__image').hover(function(){

								jQuery(this).animate({"width" : "145px", "height" : "145px"},400);
							}, function(){
								jQuery(this).animate({"width" : "125px", "height" : "125px"},1000);
							}
					  );

				
/*

					jQuery('#email').on('blur', function(){						
						verifyEmail(this.value);						
					});
*/

					//verifyForm();


					function verifyForm(){
						var validName 	= false;
						var validPass 	= false;
						var validEmail	= false;

						//jQuery("input").addClass('false');

						jQuery("form").submit(function(event){
							event.preventDefault();

						var name  = jQuery("input[name='login']").val();
						
						
						var pass  = jQuery("input[name='password']").val();
						var eml   = jQuery("input[name='email']").val();
						// verifyEmail установит результат в класс инпута емайла
						verifyEmail(eml);
						

						if (name == ""){
							//no name - red
							validName = false;
						}else {
							//name+ - green
							validName = true;
						}

						if (pass == ""){
							//no pass - red
							validPass = false;
						}else {
							validPass = true;
							//green
						}

						if (email == false){
							//no email - red
							validEmail = false;
						}else {
							validEmail = true;
							//green
						}

						alert('name'+validName);
						alert('pass'+validPass);
						alert('email'+email);
						if (validName == true && validPass == true && validEmail == true){
							jQuery('form').unbind('submit').submit();
						}

					});
					};







					function verifyEmail(email){
						jQuery.ajax({
							type: 'POST',
							url:  'http://api.by',
							data: JSON.stringify(email),
							success: function(res){
								let result = JSON.parse(res);								
								returnEmail(result);
							}
						})
					};
	




					function returnEmail(email){						
						if (email != false){
							console.log(email);
							jQuery('#email').css({"color": "DarkGreen"});									
						} else {							
							jQuery('#email').css({"color": "DarkRed"});
						}
						
					};



});


