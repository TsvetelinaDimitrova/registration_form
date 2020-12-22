document.addEventListener("DOMContentLoaded", function () {
	document.getElementById('regButton').addEventListener('click', showReg);
	document.getElementById('loginButton').addEventListener('click', showLogin);
	document.getElementById('cancel').addEventListener('click', beenden);
	document.getElementById('cancel1').addEventListener('click', beenden1);
	
	var form = document.getElementById('formRegister');

	

	form.addEventListener('submit', function(event){

		// var xmlhttp = new XMLHttpRequest();
		// var formData = new FormData();

		var firstname = document.getElementById("vorname").value;
		var lastname = document.getElementById("nachname").value;
		var birthday = document.getElementById("geburtstag").value;
		var username = document.getElementById("username").value;
		var street = document.getElementById("strasse").value;
		var postcode = document.getElementById("plz").value;
		var city = document.getElementById("ort").value;
		var email = document.getElementById("email").value;
		var password_1 = document.getElementById("password").value;
		var password_2 = document.getElementById("confirm-password").value;
		var dsgvo = document.getElementById("dsgvo");
		var dsgvoValue = dsgvo.value;
		console.log(dsgvo, isChecked(dsgvo));
		isFormValid = validate(firstname, lastname, username, email, password_1, password_2, dsgvo);

		// formData.append("firstname",firstname);
		// formData.append("lastname",lastname);
		// formData.append("birthday",birthday);
		// formData.append("username",username);
		// formData.append("street",street);
		// formData.append("postcode",postcode);
		// formData.append("city",city);
		// formData.append("email",email);
		// formData.append("password_1",password_1);
		// formData.append("password_2",password_2);
		// formData.append("dsgvo",dsgvoValue);

		if(isFormValid) {
			document.getElementById("validationError").innerHTML = "";
			// xmlhttp.onreadystatechange = function() {
			// 	if (this.readyState == 4 && this.status == 200) {
			// 		result = this.response;
					
			// 	}
			// };
			// xmlhttp.open("POST", "register.php");
			// xmlhttp.send(formData);
		} else {
			event.preventDefault();
			document.getElementById("validationError").innerHTML = "Form is invalid, please check your fields"
		}
		
		
	});
});

function validate(firstname, lastname, username, email, password_1, password_2, dsgvo) {
	var isFirstNameEmpty = isEmpty(firstname);
	var isLastNameEmpty = isEmpty(lastname);
	var isUserNameEmpty = isEmpty(username);
	var isEmailEmpty = isEmpty(email);
	var isPasswordEmpty = isEmpty(password_1);
	var isConfirmPasswordEmpty = isEmpty(password_2);
	var isDsgvoChecked = isChecked(dsgvo);
	var isPasswordMatching = isPasswordsMatching(password_1, password_2);

	console.log(isFirstNameEmpty, isLastNameEmpty, isUserNameEmpty, isEmailEmpty, isPasswordEmpty, isConfirmPasswordEmpty, isDsgvoChecked, isPasswordMatching)
	if(isPasswordMatching) {
		document.getElementById("confirmPasswordError").innerHTML = "";
	} else {
		document.getElementById("confirmPasswordError").innerHTML = "Your Passwords doesn't match!";
	}

	if(isFirstNameEmpty && isLastNameEmpty && isUserNameEmpty && isEmailEmpty && isPasswordEmpty && isConfirmPasswordEmpty && isDsgvoChecked && isPasswordMatching ) {
		return true;
	} else {
		return false;
	}
}

function isPasswordsMatching(password,confirmPassword){
	if(password != confirmPassword){
		return false;
	} else {
		return true;
	}
}

function isChecked(field) {
	if(field.checked){
		return true;
	} else {
		return false;
	}
}

function isEmpty(field) {
	if(field == "") {
		return false;
	} else {
		return true;
	}
}

function showReg (){
	document.getElementById('id01').style.display ='block';
	document.getElementById('id02').style.display='none';
}

function showLogin (){
	document.getElementById('id02').style.display ='block';
	document.getElementById('id01').style.display='none';
}

function beenden (){
	document.getElementById('id01').style.display ='none';
}
function beenden1 (){
	document.getElementById('id02').style.display ='none';
}
