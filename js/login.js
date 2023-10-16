let email = document.getElementById("student-email");
let pword = document.getElementById("password");
let flag = 1;

// -------------------- Email --------------------
function semail(){
    let error = document.getElementById("errorEmail");
    let reg = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    
    if(email.value == ""){
        error.innerHTML = "Enter Your Email Address";
        flag = 0;
    }
    else if(!reg.test(email.value)){
        error.innerHTML = "Please enter a valid Email Address (e.g. abc12@gmail.com)";
        flag = 0;
    }
    else{
        error.innerHTML = "";
        flag = 1;
    }
}

// -------------------- Passowrd --------------------
function password(){
    let error = document.getElementById("errorPassword");
    let reg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,13}$/;
    
    if(pword.value == ""){
        error.innerHTML = "Enter Your Password";
        flag = 0;
    }
    else if(!(pword.value.length >= 8 && pword.value.length <= 12)){
        error.innerHTML = "Please enter a password that is 8 to 12 characters long";
        flag = 0;
    }
    else if(!reg.test(pword.value)){
        error.innerHTML = "Password must be at least 8 to 12 characters long and include at least one uppercase letter, one lowercase letter, one number, and may contain special characters (e.g. Testing193!).";
        flag = 0;
    }
    else{
        flag = 1;
        error.innerHTML = "";
    }
}

// -------------------- Validation --------------------
function validation() {
    semail();
    password();

    if (flag) {
        return true;
    } else {
        return false;
    }
}

// -------------------- Email --------------------
email.addEventListener("blur", function(){
    let error = document.getElementById("errorEmail");
    let reg = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    
    if(email.value == ""){
        error.innerHTML = "Enter Your Email Address";
    }
    else if(!reg.test(email.value)){
        error.innerHTML = "Please enter a valid Email Address (e.g. abc12@gmail.com)";
    }
    else{
        error.innerHTML = "";
    }
})

// -------------------- Password --------------------
pword.addEventListener("blur", function(){
    let error = document.getElementById("errorPassword");
    let reg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,13}$/;
    
    if(pword.value == ""){
        error.innerHTML = "Enter Your Password";
    }
    else if(!(pword.value.length >= 8 && pword.value.length <= 12)){
        error.innerHTML = `Please enter a password that is 8 to 12 characters long. You have written ${pword.value.length} characters in the password.`;
    }
    else if(!reg.test(pword.value)){
        error.innerHTML = "Password must be at least 8 to 12 characters long and include at least one uppercase letter, one lowercase letter, one number, and may contain special characters (e.g. Testing193!).";
    }
    else{
        error.innerHTML = "";
    }   
})