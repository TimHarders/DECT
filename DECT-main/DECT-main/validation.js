var $ = function (elementID) {
    return document.getElementById(elementID);
}
var validation = function () {
    var naam = $("username").value;
    var wachtwoord = $("password").value;


    var validatie = true;
    //naam check
    if (naam == "") {
        $("UsernameError").innerHTML = "The username field is empty. ";
    }
    else {
        $("UsernameError").innerHTML = "";
    }
    //wachtwoord check
    if (wachtwoord == "") {
        $("PasswordError").innerHTML = "The password field is empty. ";
        validatie = false;
    }
    else {
        $("PasswordError").innerHTML = "";
    }
    if (validatie == true) {
        $("forum").submit();
    }
}


