$(document).ready(function(){
	$('#register-submit').click(function(){
		var username = $('#userName').val();
		var email = $('#email').val();
		var password = $('#password').val();
		var password2 = $('#password2').val();
		var schoolName = $('#schoolName').val();	
		var mobile = $('#mobile').val();	
		var rollno = $('#rollno').val();	
		var fathername = $('#fathername').val();	
		var name = $('#name').val();
debugger;
		function isValidUserName(username){
			var pattern2 = new RegExp(/^[a-zA-Z0-9 ]{3,}$/);
			return pattern2.test(username);
		}
		function isValidMobile(mobile){
			var pattern2 = new RegExp(/^([789]{1})([0-9]{9})$/);
			return pattern2.test(mobile);
		}
		function isValidEmail(email){
			var pattern = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/i);
			return pattern.test(email);
		}
		
		if (username == "") {
			username_result = 0;
			username_error = "Enter Username ";
		}else if(isValidUserName(username)){
			username_result = 1;
			username_error = "";
		} else{
			username_result = 0;
			username_error = "Enter valid UserName(Only alphabets and numbers)";
		}
		if (mobile == "") {
			mobile_result = 0;
			mobile_error = "Enter Mobile Number ";
		}else if(isValidMobile(mobile)){
			mobile_result = 1;
			mobile_error = "";
		} else{
			mobile_result = 0;
			mobile_error = "Enter valid Mobile Number";
		}

		if (name == "") {
			name_result = 0;
			name_error = "Enter Full Name ";
		}else{
			name_result = 1;
			name_error = "";
		}

		if (password == '' || password2 == '') {
			password_result = 0;
			password_error = "Enter the password!";
		}else{
			if (password != password2) {
				password_result = 0;
				password_error = "Passwords are not matching!";
			}else if(password.length <= 5) {
				password_result = 0;
				password_error = "Password should be of more than 5 Characters!";

			}else{				
				password_result = 1;
				password_error = "";
			}
		}

		if(email == '') {
			email_result = 0;
			email_error = "Enter the email!";
		}else{
			if(isValidEmail(email)) {
				email_result = 1;
				email_error = "";
			}else{
				email_result = 0;
				email_error = "Email is not valid!";
			}
		}
		if (name_result == "0" || mobile_result == "0" || password_result == "0" || email_result == "0" || username_result =="0") {
			var error_message = username_error + "<br/>" + email_error + "<br/>" + password_error + "<br/>"+ mobile_error ;
				$(".error_message").css("display","inline-block").html(error_message);				
    			resetForm("register-form");
				var divPosition = $('#error_message').offset();
				$('html, body').animate( {scrollTop: divPosition.top} , "slow");										
		 	return false;
		}
		url = "custom-php.php";
		$.ajax({ 
				url: url,
				type: "POST",
				data: {
					action : "register-action",
					username:username,
					email:email,
					password:password,
					schoolName:schoolName,
					mobile:mobile,
					rollno:rollno,
					fathername:fathername,
					name:name
				},
				dataType : "json",
				success: function(response){
					if (response.success) {
						window.location.href = 'index.php';			
					} else {
						$(".error_message").css("display","inline-block").html(response.data);
						var divPosition = $('#error_message').offset();
						$('html, body').animate( {scrollTop: divPosition.top} ,"slow");								
					}				
				}
    	});
		return false;
	});
	/*****************************************************************************************/
	$('#login-submit').click(function(){
	debugger;	
		var username = $('#usernameLogin').val();
		var password = $('#login_password').val();
		if (password == '') {
			password_result = 0;
			password_error = "Enter the password!";
		}else{				
				password_result = 1;
				password_error = "";
			}

		if(username == '') {
			username_result = 0;
			username_error = "Enter the email!";
		}else{			
				username_result = 1;
				username_error = "";
			}
		if (password_result == "0" || username_result == "0") {
			var error_message = username_error + "<br>" + username_error ;
			$(".error_message").css("display","inline-block").html(error_message);
		 	return false;
		} else {
				url = "custom-php.php";
				$.ajax({ 
						url: url,
						type: "POST",
						data: {
							action : "login-action",
							username : username,
							password : password
						},
						dataType : "json",					
						success: function(response){
							if (response.success) {
								window.location.href = 'dashboard.php';		
							} else {
								resetForm("login-form");	
								$(".error_message").css("display","inline-block").html(response.error);
							}
						} //success end
		    	});
    		}
		return false;
	}); //Login-submit-form end here

	$(":input").keydown(function(e){
		if (e.keyCode == 13) {

		}else{
		$(".error_message").css("display","none");
		}
	});
});
function resetForm(id){
	$("#"+id)[0].reset();
}