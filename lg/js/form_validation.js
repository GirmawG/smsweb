function validateForm() {
    var email = document.forms["save"]["email"].value;
    var first_name = document.forms["save"]["first_name"].value;
    var last_name = document.forms["save"]["last_name"].value;
    var middle_name = document.forms["save"]["middle_name"].value;
    var birth_place = document.forms["save"]["birth_place"].value;
    var password = document.forms["save"]["password"].value;
    var confirm_password = document.forms["save"]["confirm_password"].value;
    var gender = document.forms["save"]["gender"].value;
    var terms = document.forms["save"]["terms"];

    email = email.trim();
    first_name = first_name.trim();
    last_name = last_name.trim();
    middle_name = middle_name.trim();
    password = password.trim();
    confirm_password = confirm_password.trim();

    document.getElementById("terms_error").style.display = "none";
    document.getElementById("email_error").style.display = "none";
    document.getElementById("first_name_error").style.display = "none";
    document.getElementById("last_name_error").style.display = "none";
    document.getElementById("birth_place_error").style.display = "none";
    document.getElementById("middle_name_error").style.display = "none";
    document.getElementById("password_error").style.display = "none";
    document.getElementById("confirm_password_error").style.display = "none";
    document.getElementById("gender_error").style.display = "none";
    var x = 0;
    if (!(terms.checked == true)) {
        var error = document.getElementById("terms_error").innerHTML = "Agreement must be Signed";
        document.getElementById("terms_error").style.display = "block";
        x++;
    }
    if ((email === "") || (!validateEmail(email))) {
        var error = document.getElementById("email_error").innerHTML = "Email must be filled out";
        document.getElementById("email_error").style.display = "block";
        x++;
    }

    if ((first_name === "") || !ckeck_letter(first_name)) {
        if (first_name === "") {
            var error = document.getElementById("first_name_error").innerHTML = "FirstName must be filled out ";
            document.getElementById("first_name_error").style.display = "block";
            x++;
        } else if (!ckeck_letter(first_name)) {
            var error = document.getElementById("first_name_error").innerHTML = "First Name only must be contain letter";
            document.getElementById("first_name_error").style.display = "block";
            x++;
        }
    }
    
    
    if ((birth_place === "") || !ckeck_letter(birth_place)) {
        if (first_name === "") {
            var error = document.getElementById("birth_place_error").innerHTML = "Birth Place must be filled out ";
            document.getElementById("birth_place_error").style.display = "block";
            x++;
        } else if (!ckeck_letter(first_name)) {
            var error = document.getElementById("birth_place_error").innerHTML = "Birth Place only must be contain letter";
            document.getElementById("birth_place_error").style.display = "block";
            x++;
        }
    }
    
    if ((last_name === "") || !ckeck_letter(last_name)) {
        if (last_name === "") {
            var error = document.getElementById("last_name_error").innerHTML = "Last Name must be filled out ";
            document.getElementById("last_name_error").style.display = "block";
            x++;
        } else if (!ckeck_letter(last_name)) {
            var error = document.getElementById("last_name_error").innerHTML = "Last Name only must be contain letter";
            document.getElementById("last_name_error").style.display = "block";
            x++;
        }
    }
    if ((middle_name === "") || !ckeck_letter(middle_name)) {
        if (middle_name === "") {
            var error = document.getElementById("middle_name_error").innerHTML = "Middle Name must be filled out ";
            document.getElementById("middle_name_error").style.display = "block";
            x++;
        } else if (!ckeck_letter(middle_name)) {
            var error = document.getElementById("middle_name_error").innerHTML = "Middle Name only must be contain letter";
            document.getElementById("middle_name_error").style.display = "block";
            x++;
        }
    }
    if (password === "") {
        var error = document.getElementById("password_error").innerHTML = "Password must be filled out ";
        document.getElementById("password_error").style.display = "block";
        if (confirm_password === "") {
            var error = document.getElementById("confirm_password_error").innerHTML = "Confirm Password must be filled out ";
            document.getElementById("confirm_password_error").style.display = "block";
            x++;
        }
        x++;
    }

    if (!(confirm_password.localeCompare(password) == 0)) {
        var error = document.getElementById("confirm_password_error").innerHTML = "Password doesn't match.";
        document.getElementById("confirm_password_error").style.display = "block";
        x++;
    }
    if ((gender == "")) {
        var error = document.getElementById("gender_error").innerHTML = "Gender  must be selected";
        document.getElementById("gender_error").style.display = "block";
        x++;
    }
    if (x == 0) {
        return true;

    } else {
        return false;
    }


}

function ckeck_letter(x) {
    return /^[A-z ]+$/.test(x);
}
function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

