// JavaScript Document 





function validateForm() {

	var u = document.forms["fineday"]["subject"].value;

	var x = document.forms["fineday"]["name"].value;

	var y = document.forms["fineday"]["email"].value;

	var z = document.forms["fineday"]["phone"].value;

	var letter = /^[a-zA-Z\s]+$/;

	var email = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	var phone = /^[1-9]{1}[0-9]{9}$/;

	if (x == "") {

		document.getElementById("name").placeholder = "Type name here..";

		document.getElementById("name").className += " a";

		$('head').append('<link rel="stylesheet" type="text/css" href="css/placeholder.css">');

		document.getElementById("name").focus();

		return false;

	}else if (!(x.match(letter))){

		document.getElementById("name").value = "";

		document.getElementById("name").placeholder = "Type valid name here..";

		document.getElementById("name").className += " a";

		$('head').append('<link rel="stylesheet" type="text/css" href="css/placeholder.css">');

		document.getElementById("name").focus();

		return false;

	}else if(y == ""){

		document.getElementById("email").placeholder = "Type Email here..";

		document.getElementById("email").className += " a";

		$('head').append('<link rel="stylesheet" type="text/css" href="css/placeholder.css">');

		document.getElementById("email").focus();

		return false;

	}else if (!(y.match(email))){

		document.getElementById("email").value = "";

		document.getElementById("email").placeholder = "Type valid email here..";

		document.getElementById("email").className += " a";

		$('head').append('<link rel="stylesheet" type="text/css" href="css/placeholder.css">');

		document.getElementById("email").focus();

		return false;

	}else if (z == "") {

		document.getElementById("phone").placeholder = "Type Phone Number here..";

		document.getElementById("phone").className += " a";

		$('head').append('<link rel="stylesheet" type="text/css" href="css/placeholder.css">');

		document.getElementById("phone").focus();

		return false;

	}else if (u == "") {

		document.getElementById("subject").placeholder = "Type Subject here..";

		document.getElementById("subject").className += " a";

		$('head').append('<link rel="stylesheet" type="text/css" href="css/placeholder.css">');

		document.getElementById("subject").focus();

		return false;

	}else if (!(u.match(letter))){

		document.getElementById("subject").value = "";

		document.getElementById("subject").placeholder = "Type valid Subject here..";

		document.getElementById("subject").className += " a";

		$('head').append('<link rel="stylesheet" type="text/css" href="css/placeholder.css">');

		document.getElementById("subject").focus();

		return false;

	}else{

		return true;

	}

}

