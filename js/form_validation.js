function validatefollow(){
    
    var location = document.forms["save"]["location"].value;
    location = location.trim();
   
    document.getElementById("location_error").style.display = "none";
    var x = 0;
        if (location === "") {
            var error = document.getElementById("location_error").innerHTML = "Location must be filled out ";
            document.getElementById("location_error").style.display = "block";
            x++;
        } 
    if (x == 0) {
        return true;

    } else {
        return false;
    }

}
function validateAddress() {
    var country = document.forms["save"]["country"].value;
    var region = document.forms["save"]["region"].value;
    var city = document.forms["save"]["city"].value;
    var woreda = document.forms["save"]["woreda"].value;
    var kebele = document.forms["save"]["kebele"].value;
    country = country.trim();
    city = city.trim();
    region = region.trim();
    woreda = woreda.trim();
    kebele = kebele.trim();
   
    document.getElementById("country_error").style.display = "none";
    document.getElementById("region_error").style.display = "none";
    document.getElementById("city_error").style.display = "none";
    document.getElementById("woreda_error").style.display = "none";
    document.getElementById("kebele_error").style.display = "none";
   
    var x = 0;
  

    if ((country === "") || !ckeck_letter(country)) {
        if (country === "") {
            var error = document.getElementById("country_error").innerHTML = "Country must be filled out ";
            document.getElementById("country_error").style.display = "block";
            x++;
        } else if (!ckeck_letter(country)) {
            var error = document.getElementById("country_error").innerHTML = "Country only must be contain letter";
            document.getElementById("country_error").style.display = "block";
            x++;
        }
    }

    if ((region === "") || !ckeck_letter(region)) {
        if (region === "") {
            var error = document.getElementById("region_error").innerHTML = "region must be filled out ";
            document.getElementById("region_error").style.display = "block";
            x++;
        } else if (!ckeck_letter(region)) {
            var error = document.getElementById("region_error").innerHTML = "region only must be contain letter";
            document.getElementById("region_error").style.display = "block";
            x++;
        }
    }

    if ((city === "") || !ckeck_letter(city)) {
        if (city === "") {
            var error = document.getElementById("city_error").innerHTML = "city must be filled out ";
            document.getElementById("city_error").style.display = "block";
            x++;
        } else if (!ckeck_letter(city)) {
            var error = document.getElementById("city_error").innerHTML = "city only must be contain letter";
            document.getElementById("city_error").style.display = "block";
            x++;
        }
    }
    
    if ((woreda === "")) {
        if (woreda === "") {
            var error = document.getElementById("woreda_error").innerHTML = "woreda must be filled out ";
            document.getElementById("woreda_error").style.display = "block";
            x++;
        }
    }
    
    if ((kebele === "")) {
        if (kebele === "") {
            var error = document.getElementById("kebele_error").innerHTML = "kebele must be filled out ";
            document.getElementById("kebele_error").style.display = "block";
            x++;
        }
    }
    if (x == 0) {
        return true;

    } else {
        return false;
    }


}



function validateEEvent() {
    
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    var file = document.forms["save"]["image"].value;
    var title = document.forms["save"]["title"].value;
    var startDate = document.forms["save"]["start_date"].value;
    var endDate = document.forms["save"]["end_date"].value;
    title = title.trim();
    file = file.trim();
    document.getElementById("file_error").style.display = "none";
    document.getElementById("title_error").style.display = "none";
    document.getElementById("date_error").style.display = "none";
    x=0; 
    if ((title === "")) {
        if (title === "") {
            var error = document.getElementById("title_error").innerHTML = "title must be filled out ";
            document.getElementById("title_error").style.display = "block";
            x++;
     
        }
    }
    if ((Date.parse(startDate) > Date.parse(endDate))) {
        var error = document.getElementById("date_error").innerHTML = "Start date and Closed date sequence must be valid";
            document.getElementById("date_error").style.display = "block";
            x++;
          }


    if ((file != "")&& (!allowedExtensions.exec(file))) {
      
        var error = document.getElementById("file_error").innerHTML = "Please upload file having extensions .jpeg/.jpg/.png/.gif only.";
        document.getElementById("file_error").style.display = "block";
        x++ ;

    }
    
    if (x == 0) {
        return true;

    } else {
        return false;
    }

    
}

function validateEFile() {

    var file_name = document.forms["save"]["name"].value;
    file_name = file_name.trim();
    document.getElementById("file_name_error").style.display = "none";
    x=0; 
    if ((file_name === "")) {
        if (file_name === "") {
            var error = document.getElementById("file_name_error").innerHTML = "file_name must be filled out ";
            document.getElementById("file_name_error").style.display = "block";
            x++;
     
        }
    }
 
  
    if (x == 0) {
        return true;

    } else {
        return false;
    }

}

function validateWork() {

    var file_name = document.forms["save"]["name"].value;

    var startDate = document.forms["save"]["from_date"].value;
    var endDate = document.forms["save"]["to_date"].value;

    file_name = file_name.trim();
    document.getElementById("name_error").style.display = "none";
    x=0; 
    if ((file_name === "")) {
        if (file_name === "") {
            var error = document.getElementById("name_error").innerHTML = "Name must be filled out ";
            document.getElementById("name_error").style.display = "block";
            x++;
     
        }
    }
 
    if ((Date.parse(startDate) > Date.parse(endDate))) {
        var error = document.getElementById("date_error").innerHTML = "Start date and Closed date sequence must be valid";
            document.getElementById("date_error").style.display = "block";
            x++;
          }

  
    if (x == 0) {
        return true;

    } else {
        return false;
    }

}

function validateAbout() {
  
    var description= document.forms["save"]["message"].value;
    description = description.trim();
    document.getElementById("description_error").style.display = "none";
    x=0; 
    if ((description === "")) {
        if (description === "") {
            var error = document.getElementById("description_error").innerHTML = "Description must be filled out ";
            document.getElementById("description_error").style.display = "block";
            x++;
     
        }
    }
    if (x == 0) {
        return true;

    } else {
        return false;
    }

}

function validatePhone() {
  
    var phone= document.forms["save"]["phone"].value;
    phone = phone.trim();
    document.getElementById("phone_error").style.display = "none";
    x=0; 
    if ((phone === "")) {
        if (phone === "") {
            var error = document.getElementById("phone_error").innerHTML = "phone must be filled out ";
            document.getElementById("phone_error").style.display = "block";
            x++;
     
        }
    }
    if (x == 0) {
        return true;

    } else {
        return false;
    }

}


function validateOutbox() {
  
    var name = document.forms["save"]["name"].value;
    var subject = document.forms["save"]["subject"].value;
    var email = document.forms["save"]["email"].value;
    name = name.trim();
    subject = subject.trim();

    document.getElementById("name_error").style.display = "none";
    document.getElementById("subject_error").style.display = "none";
    document.getElementById("email_error").style.display = "none";
    x=0; 
    if ((name === "")) {
            var error = document.getElementById("name_error").innerHTML = "Name must be filled out ";
            document.getElementById("name_error").style.display = "block";
            x++;
     
    }

    if ((email === "") || (!validateEmail(email))) {
        var error = document.getElementById("email_error").innerHTML = "Email must be filled out";
        document.getElementById("email_error").style.display = "block";
        x++;
    }
     
    if ((subject === "")) {
            var error = document.getElementById("subject_error").innerHTML = "subject must be filled out ";
            document.getElementById("subject_error").style.display = "block";
            x++;
            
    }
    if (x == 0) {
        return true;

    } else {
        return false;
    }
}





function validateSkill() {
  
    var skill = document.forms["save"]["skill"].value;
    var percent = document.forms["save"]["percent"].value;
    skill = skill.trim();
    percent = percent.trim();
    document.getElementById("skill_error").style.display = "none";
    document.getElementById("percent_error").style.display = "none";
    x=0; 
    if ((skill === "")) {
        if (skill === "") {
            var error = document.getElementById("skill_error").innerHTML = "skill must be filled out ";
            document.getElementById("skill_error").style.display = "block";
            x++;
     
        }
    }
     
    if ((percent === "")) {
        if (percent === "") {
            var error = document.getElementById("percent_error").innerHTML = "percent must be filled out ";
            document.getElementById("percent_error").style.display = "block";
            x++;
     
        }
        
    }
//      if((Number.isInteger(percent))){
// if((percent > 0 ) && (percent < 101)){
//             var error = document.getElementById("percent_error").innerHTML = "percent must be between 0 and 100 ";
//             document.getElementById("percent_error").style.display = "block";
//             x++;
//         }
//     }

//     else if(!(Number.isInteger(percent))){
//         var error = document.getElementById("percent_error").innerHTML = "percent must be integer ";
//                   document.getElementById("percent_error").style.display = "block";
//                   x++;
//               }

    if (x == 0) {
        return true;

    } else {
        return false;
    }

}



function validateExprience() {
 
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    var file = document.forms["save"]["image"].value;
   
    var name = document.forms["save"]["name"].value;
    var company = document.forms["save"]["company"].value;
    var position = document.forms["save"]["position"].value;

    var startDate = document.forms["save"]["from_date"].value;
    var endDate = document.forms["save"]["to_date"].value;

    name = name.trim();
    company = company.trim();
    position = position.trim();
    document.getElementById("name_error").style.display = "none";
    document.getElementById("company_error").style.display = "none";
    document.getElementById("position_error").style.display = "none";
    x=0; 
    if ((name === "")) {
        if (name === "") {
            var error = document.getElementById("name_error").innerHTML = "Name must be filled out ";
            document.getElementById("name_error").style.display = "block";
            x++;
     
        }
    }
 
    if ((company === "")) {
        if (company === "") {
            var error = document.getElementById("company_error").innerHTML = "company must be filled out ";
            document.getElementById("company_error").style.display = "block";
            x++;
     
        }
    }
 
    if ((position === "")) {
        if (position === "") {
            var error = document.getElementById("position_error").innerHTML = "position must be filled out ";
            document.getElementById("position_error").style.display = "block";
            x++;
     
        }
    }
 


    if ((Date.parse(startDate) > Date.parse(endDate))) {
        var error = document.getElementById("date_error").innerHTML = "From date and To date sequence must be valid";
            document.getElementById("date_error").style.display = "block";
            x++;
          }

          if ((file != "")&& (!allowedExtensions.exec(file))) {
      
            var error = document.getElementById("file_error").innerHTML = "Please upload file having extensions .jpeg/.jpg/.png/.gif only.";
            document.getElementById("file_error").style.display = "block";
            x++ ;
    
        }


    if (x == 0) {
        return true;

    } else {
        return false;
    }

}


function validateEducation() {
 
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    var file = document.forms["save"]["image"].value;
   
    var college = document.forms["save"]["college"].value;
    var department = document.forms["save"]["department"].value;
    var specialization = document.forms["save"]["specialization"].value;

    var startDate = document.forms["save"]["from_date"].value;
    var endDate = document.forms["save"]["to_date"].value;

    college = college.trim();
    department = department.trim();
    specialization = specialization.trim();
    document.getElementById("college_error").style.display = "none";
    document.getElementById("department_error").style.display = "none";
    document.getElementById("specialization_error").style.display = "none";
    x=0; 
    if ((college === "")) {
            var error = document.getElementById("college_error").innerHTML = "college must be filled out ";
            document.getElementById("college_error").style.display = "block";
            x++;
        }
    
    if ((department === "")) {
            var error = document.getElementById("department_error").innerHTML = "department must be filled out ";
            document.getElementById("department_error").style.display = "block";
            x++;
        }
    
    if ((specialization === "")){
            var error = document.getElementById("specialization_error").innerHTML = "specialization must be filled out ";
            document.getElementById("specialization_error").style.display = "block";
            x++;
     
        }

    if ((Date.parse(startDate) > Date.parse(endDate))) {
        var error = document.getElementById("date_error").innerHTML = "From date and To date sequence must be valid";
            document.getElementById("date_error").style.display = "block";
            x++;
          }

          if ((file != "")&& (!allowedExtensions.exec(file))) {
            var error = document.getElementById("file_error").innerHTML = "Please upload file having extensions .jpeg/.jpg/.png/.gif only.";
            document.getElementById("file_error").style.display = "block";
            x++ ;
        }


    if (x == 0) {
        return true;

    } else {
        return false;
    }

}


function validateInterest() {

    var interest = document.forms["save"]["interest"].value;
    var reason = document.forms["save"]["reason"].value;
    interest = interest.trim();
    reason = reason.trim();
    document.getElementById("interest_error").style.display = "none";
    document.getElementById("rsn_error").style.display = "none";
    x=0; 
    if ((interest === "")) {
        if (interest === "") {
            var error = document.getElementById("interest_error").innerHTML = "Interest must be filled out ";
            document.getElementById("interest_error").style.display = "block";
            x++;
     
        }
    }
 
    
    if ((reason === "")) {
        if (reason === "") {
            var error = document.getElementById("rsn_error").innerHTML = "Reason must be filled out ";
            document.getElementById("rsn_error").style.display = "block";
            x++;
        }
    }
    
    if (x == 0) {
        return true;

    } else {
        return false;
    }

}


// function validateFile() {

//     var file = document.forms["save"]["file"].value;
//     var file_name = document.forms["save"]["file_name"].value;
//     file_name = file_name.trim();
//     file = file.trim();
//     document.getElementById("file_error").style.display = "none";
//     document.getElementById("file_name_error").style.display = "none";
//     x=0; 
//     if ((file_name === "")) {
//         if (file_name === "") {
//             var error = document.getElementById("file_name_error").innerHTML = "file_name must be filled out ";
//             document.getElementById("file_name_error").style.display = "block";
//             x++;
     
//         }
//     }
 
    
//     if ((file === "")) {
//         if (file === "") {
//             var error = document.getElementById("file_error").innerHTML = "file must be selected ";
//             document.getElementById("file_error").style.display = "block";
//             x++;
//         }
//     }
    
//     if (x == 0) {
//         return true;

//     } else {
//         return false;
//     }

// }


function validateMedia() {

    var media_name = document.forms["save"]["media_name"].value;
    var file = document.forms["save"]["file"].value;
    media_name = media_name.trim();
    file = file.trim();
    document.getElementById("media_name_error").style.display = "none";
    document.getElementById("file_error").style.display = "none";
    x=0; 
        if (media_name === "") {
            var error = document.getElementById("media_name_error").innerHTML = "File name  must be filled out.";
            document.getElementById("media_name_error").style.display = "block";
            x++;
        }
    
        if (file === "") {
            var error = document.getElementById("file_error").innerHTML = "file must be choosen.";
            document.getElementById("file_error").style.display = "block";
            x++; 
        }
       
    if (x == 0) {
        return true;

    } else {
        return false;
    }

}



function validateEvent() {
    
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    var file = document.forms["save"]["image"].value;
    var title = document.forms["save"]["title"].value;
    var startDate = document.forms["save"]["start_date"].value;
    var endDate = document.forms["save"]["end_date"].value;
    title = title.trim();
    file = file.trim();
    document.getElementById("file_error").style.display = "none";
    document.getElementById("title_error").style.display = "none";
    document.getElementById("date_error").style.display = "none";
    x=0; 
    if ((title === "")) {
        if (title === "") {
            var error = document.getElementById("title_error").innerHTML = "title must be filled out ";
            document.getElementById("title_error").style.display = "block";
            x++;
     
        }
    }
    if ((Date.parse(startDate) > Date.parse(endDate))) {
        var error = document.getElementById("date_error").innerHTML = "Start date and Closed date sequence must be valid";
            document.getElementById("date_error").style.display = "block";
            x++;
          }


    if ((file === "")|| (!allowedExtensions.exec(file))) {
        if (file === "") {
            var error = document.getElementById("file_error").innerHTML = "file must be selected ";
            document.getElementById("file_error").style.display = "block";
            x++;
        }else {
        var error = document.getElementById("file_error").innerHTML = "Please upload file having extensions .jpeg/.jpg/.png/.gif only.";
        document.getElementById("file_error").style.display = "block";
        x++ ;
   }
    }
    
    if (x == 0) {
        return true;

    } else {
        return false;
    }

    
}
function validateFile() {

    var file = document.forms["save"]["file"].value;
    var file_name = document.forms["save"]["file_name"].value;
    file_name = file_name.trim();
    file = file.trim();
    document.getElementById("file_error").style.display = "none";
    document.getElementById("file_name_error").style.display = "none";
    x=0; 
    if ((file_name === "")) {
        if (file_name === "") {
            var error = document.getElementById("file_name_error").innerHTML = "file_name must be filled out ";
            document.getElementById("file_name_error").style.display = "block";
            x++;
     
        }
    }
 
    
    if ((file === "")) {
        if (file === "") {
            var error = document.getElementById("file_error").innerHTML = "file must be selected ";
            document.getElementById("file_error").style.display = "block";
            x++;
        }
    }
    
    if (x == 0) {
        return true;

    } else {
        return false;
    }

}

function validateProfile() {
    
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    var file = document.forms["save"]["image"].value;
    var title = document.forms["save"]["title"].value;
    title = title.trim();
    file = file.trim();
    document.getElementById("file_error").style.display = "none";
    document.getElementById("title_error").style.display = "none";
    x=0; 
    if ((title === "")) {
        if (title === "") {
            var error = document.getElementById("title_error").innerHTML = "title must be filled out ";
            document.getElementById("title_error").style.display = "block";
            x++;
     
        }
    }
   

    if ((file === "")|| (!allowedExtensions.exec(file))) {
        if (file === "") {
            var error = document.getElementById("file_error").innerHTML = "file must be selected ";
            document.getElementById("file_error").style.display = "block";
            x++;
        }else {
        var error = document.getElementById("file_error").innerHTML = "Please upload file having extensions .jpeg/.jpg/.png/.gif only.";
        document.getElementById("file_error").style.display = "block";
        x++ ;
   }
    }
    
    if (x == 0) {
        return true;

    } else {
        return false;
    }

    
}

function validateMemory() {
    
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    var file = document.forms["save"]["image"].value;
    var title = document.forms["save"]["title"].value;
    var startDate = document.forms["save"]["start_date"].value;
    var endDate = document.forms["save"]["end_date"].value;
    title = title.trim();
    file = file.trim();
    document.getElementById("file_error").style.display = "none";
    document.getElementById("title_error").style.display = "none";
    document.getElementById("date_error").style.display = "none";
    x=0; 
    if ((title === "")) {
        if (title === "") {
            var error = document.getElementById("title_error").innerHTML = "title must be filled out ";
            document.getElementById("title_error").style.display = "block";
            x++;
     
        }
    }
    if ((Date.parse(startDate) > Date.parse(endDate))) {
        var error = document.getElementById("date_error").innerHTML = "Start date and Closed date sequence must be valid";
            document.getElementById("date_error").style.display = "block";
            x++;
          }


    if ((file === "")|| (!allowedExtensions.exec(file))) {
        if (file === "") {
            var error = document.getElementById("file_error").innerHTML = "file must be selected ";
            document.getElementById("file_error").style.display = "block";
            x++;
        }else {
        var error = document.getElementById("file_error").innerHTML = "Please upload file having extensions .jpeg/.jpg/.png/.gif only.";
        document.getElementById("file_error").style.display = "block";
        x++ ;
   }
    }
    
    if (x == 0) {
        return true;

    } else {
        return false;
    }

    
}

function validateProject() {
    
    var allowedExtensions = /(\.jpg|\.jpeg|\.pdf|\.doc|\.png|\.gif)$/i;
    var file = document.forms["save"]["file"].value;
    var name = document.forms["save"]["name"].value;
    var partnership = document.forms["save"]["partnership"].value;
    var team = document.forms["save"]["team"].value;
    name = name.trim();
    partnership = partnership.trim();
    team = team.trim();
    file = file.trim();
    document.getElementById("file_error").style.display = "none";
    document.getElementById("name_error").style.display = "none";
    document.getElementById("team_error").style.display = "none";
    document.getElementById("partnership_error").style.display = "none";
    x=0; 
    if ((name === "")) {
        if (name === "") {
            var error = document.getElementById("name_error").innerHTML = "Project Name must be filled out ";
            document.getElementById("name_error").style.display = "block";
            x++;
     
        }
    }

    if ((team === "")) {
        if (team === "") {
            var error = document.getElementById("team_error").innerHTML = "Project Team must be filled out ";
            document.getElementById("team_error").style.display = "block";
            x++;
     
        }
    }

    if ((partnership === "")) {
        if (partnership === "") {
            var error = document.getElementById("partnership_error").innerHTML = "Project Partnership must be filled out ";
            document.getElementById("partnership_error").style.display = "block";
            x++;
     
        }
    }
    
    if ((file === "")|| (!allowedExtensions.exec(file))) {
        if (file === "") {
            var error = document.getElementById("file_error").innerHTML = "file must be selected ";
            document.getElementById("file_error").style.display = "block";
            x++;
        }else {
        var error = document.getElementById("file_error").innerHTML = "Please upload file having extensions .jpeg/.jpg/.pdf/.doc/.png/.gif only.";
        document.getElementById("file_error").style.display = "block";
        x++ ;
   }
    }
    
    if (x == 0) {
        return true;

    } else {
        return false;
    }

    
}


function validateGallery() {
    var file = document.forms["save"]["image"].value;
    file = file.trim();
    document.getElementById("file_error").style.display = "none";
    x=0; 
    
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

    if ((file === "")|| (!allowedExtensions.exec(file))) {
        if (file === "") {
            var error = document.getElementById("file_error").innerHTML = "file must be selected ";
            document.getElementById("file_error").style.display = "block";
            x++;
        }else {
        var error = document.getElementById("file_error").innerHTML = "Please upload file having extensions .jpeg/.jpg/.png/.gif only.";
        document.getElementById("file_error").style.display = "block";
        x++ ;
   }
    }
    
    if (x == 0) {
        return true;

    } else {
        return false;
    }

    
}

function validateForm() {
    var email = document.forms["save"]["email"].value;
    var first_name = document.forms["save"]["first_name"].value;
    var last_name = document.forms["save"]["last_name"].value;
    var middle_name = document.forms["save"]["middle_name"].value;
    var birth_place = document.forms["save"]["birth_place"].value;
    var password = document.forms["save"]["password"].value;
    var confirm_password = document.forms["save"]["confirm_password"].value;
    var gender = document.forms["save"]["gender"].value;
    //var terms = document.forms["save"]["terms"];

    email = email.trim();
    first_name = first_name.trim();
    last_name = last_name.trim();
    middle_name = middle_name.trim();
    password = password.trim();
    confirm_password = confirm_password.trim();

   // document.getElementById("terms_error").style.display = "none";
    document.getElementById("email_error").style.display = "none";
    document.getElementById("first_name_error").style.display = "none";
    document.getElementById("last_name_error").style.display = "none";
    document.getElementById("birth_place_error").style.display = "none";
    document.getElementById("middle_name_error").style.display = "none";
    document.getElementById("password_error").style.display = "none";
    document.getElementById("confirm_password_error").style.display = "none";
    document.getElementById("gender_error").style.display = "none";
    var x = 0;
    // if (!(terms.checked == true)) {
    //     var error = document.getElementById("terms_error").innerHTML = "Agreement must be Signed";
    //     document.getElementById("terms_error").style.display = "block";
    //     x++;
    // }
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

