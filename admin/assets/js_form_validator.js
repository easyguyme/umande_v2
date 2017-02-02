//Credits must stay intact
//Script by Samiuddin phpdevsami@gmail.com 
	
ClientFormValidator = {

	validate_username : function(){
		var username								= document["forms"]["register"]["username"];
		var username_pattern						= /^[0-9a-zA-Z]+$/;  
		var matched									= username.value.search(username_pattern);
		var error_username							= document.getElementById("error_username");
		error_username.innerHTML					= "";
		username.style.backgroundColor				= "white";
		
			if(matched !== -1){
				return true;
			}else{
				error_username.innerHTML			= "<i>Invalid username. Only Numbers and Letters allowed.</i>";
				username.style.backgroundColor		= "yellow";
				return false;
			}

	},


	validate_email : function(){
		var email									= document["forms"]["register"]["email"];
		var error_email								= document.getElementById("error_email");
		error_email.innerHTML						= "";
		email.style.backgroundColor					= "white";
		var re										= /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		
		if( !re.test(email.value) ){
			error_email.innerHTML					= "<i>Invalid email provided.</i>";
			email.style.backgroundColor				= "yellow";
			return false;
		}else{
			return true;
		}
	},


	validate_password : function(){
	
		var password_one							= document["forms"]["register"]["password_one"];
		var password_two							= document["forms"]["register"]["password_two"];
		var error_password							= document.getElementById("error_password");
		error_password.innerHTML					= "";
		password_one.style.backgroundColor			= "white";
		password_two.style.backgroundColor			= "white";
		
		if( (password_one.value.length > 5) && (password_two.value.length > 5) ){
			if(password_one.value.length === password_two.value.length){
				return true;
			}else{
				error_password.innerHTML			= "<i>Your passwords do not match.</i>";
				password_one.style.backgroundColor	= "yellow";
				password_two.style.backgroundColor	= "yellow";
				return false;
			}
		}else{
			error_password.innerHTML				= "<i>Make sure password is atleast 6 characters long</i>";
			password_one.style.backgroundColor		= "yellow";
			password_two.style.backgroundColor		= "yellow";
			
			return false;
		}
	},
	
	validate_captcha : function(){
		var captcha									= document["forms"]["register"]["captcha"];
		var error_captcha							= document.getElementById("error_captcha");

		if(captcha.value.length !== 0){
			return true;
		}else{
			error_captcha.innerHTML					= "<i>Please fill in captcha field</i>";
			captcha.style.backgroundColor			= "yellow";	
			return false;
		}
	}
	
}

document["forms"]["register"].onsubmit = function(){
	var val_username								= ClientFormValidator.validate_username();
	var val_email									= ClientFormValidator.validate_email();
	var val_password								= ClientFormValidator.validate_password();
	var val_captcha									= ClientFormValidator.validate_captcha();
	
	if(val_username && val_email && val_password && val_captcha){
		return true;
	}else{
		return false;
	}
}
