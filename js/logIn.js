function validateLogIn() {
    var x = document.forms["logIn"]["UserName"].value;
	var y = document.forms["logIn"]["Password"].value;
    if (x == "") {
        alert("You must enter your username");
        return false;
    }
	if (y==""){
		alert("You must enter your password");
		return false;
	}
}