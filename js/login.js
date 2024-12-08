function validate(){
    let email = document.getElementById("e").value;
    let password = document.getElementById("p").value;

    if (email == "") {
        alert("please provide your email");
        document.getElementById("e").focus();
        return false;
    }

    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
    if(!emailPattern.test(email)){
        alert("Please enter a valid email address!");
        document.getElementById("e").focus();
        return false;
    }

    if (password == "") {
        alert("please provide your password");
        document.getElementById("p").focus();
        return false;
    }

    var passwordPattern= /^.{6,9}$/;
    if(!passwordPattern.test(password)){
        alert("Enter a password with at least 6 character");
        document.getElementById("p").focus();
        return false;
    }

    // alert("Login succesfully");
    return true;
}