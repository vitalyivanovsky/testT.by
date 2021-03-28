$(document).ready(function () {

/*

					jQuery('#email').on('blur', function(){						
						verifyEmail(this.value);						
					});
*/

					verifyForm();


					function verifyForm(){
						var validName 	= false;
						var validPass 	= false;
						var validEmail	= false;
						$('#email').attr({'verifedEmail': false});
						

						$('#email').on('keyup', function(){
							var email_user = jQuery("input[name='email']").val();
							verifyEmail(email_user);
						});

						jQuery("form").submit(function(event){
							event.preventDefault();

						var name  = jQuery("input[name='login']").val();
						var pass  = jQuery("input[name='password']").val();
						var email  = jQuery('#email').attr('verifedEmail');

						if (name == ""){
							jQuery('#nameTitle').css({"color": "DarkRed"});
							validName = false;
						}else {
							jQuery('#nameTitle').css({"color": "DarkGreen"});
							validName = true;
						}

						if (pass == ""){
							jQuery('#passTitle').css({"color": "DarkRed"});
							validPass = false;
						}else {
							jQuery('#passTitle').css({"color": "DarkGreen"});
							validPass = true;							
						}

						if (email == 'false' || email == ''){
							jQuery('#emailTitle').css({"color": "DarkRed"});
							validEmail = false;							
						}else {
							jQuery('#emailTitle').css({"color": "DarkGreen"});
							validEmail = true;							
						}

					;
						if (validName == true && validPass == true && validEmail == true){
							
							setTimeout(sendAjaxForm(), 1);
							//jQuery('form').unbind('submit').submit();
						}
					});
					};


					function sendAjaxForm(){
						jQuery.ajax({
							url:  'reg_user.php',
							type: 'POST',
							dataType: 'html',							
							data: $('#regForm').serialize(),
							success: function(response){
								$('#reg_res').html($.parseJSON(response));
							}
						})
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
						$('#email').attr({'verifedEmail': email});
						if (email != false){							
							//console.log('set'+email);
							jQuery('#emailTitle').css({"color": "DarkGreen"});									
						} else {							
							jQuery('#emailTitle').css({"color": "DarkRed"});
						}
					};
});