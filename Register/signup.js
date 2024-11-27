function validate(){
    let fname = document.getElementById("fn").value;
    let lname = document.getElementById("ln").value;
    let email = document.getElementById("e").value;
    let password = document.getElementById("p").value;

    if (fname == " ") {
        alert("please provide your first name");
        document.getElementById("fn").focus();
        return false;
    }
    
    if (lname == " ") {
        alert("please provide your last name");
        document.getElementById("ln").focus();
        return false;
    }

    if (email == " ") {
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

    if (password == " ") {
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

    alert("signup succesfull");
    return true;
}