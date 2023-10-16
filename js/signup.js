let studentName = document.getElementById("student-name");
let email = document.getElementById("student-email");
let pword = document.getElementById("password");
let pno = document.getElementById("phoneno");
let flag = 1;

// -------------------- Student Name --------------------
function sname(){
    let error = document.getElementById("errorSname");
    let reg = /[\d`~!@#$%^&*()_+-={}:;"'<>,.?/*-]/;
    
    if (studentName.value == "") {
        error.innerHTML = "Please enter your Name";
        flag = 0;
    } else if (studentName.value.length < 5) {
        error.innerHTML = "Please enter your full Name";
        flag = 0;
    } else if (reg.test(studentName.value)) {
        error.innerHTML = "You can not use Number or specific character";
        flag = 0;
    } else {
        error.innerHTML = "";
        flag = 1;
    }    
}

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

// -------------------- Password --------------------
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

// -------------------- Phone No --------------------
function phoneno(){
    let error = document.getElementById("errorPhoneno");
    let reg = /^\d{10}$/;
    
    if(pno.value == ""){
        error.innerHTML = "Enter Your Phone Number";
        flag = 0;
    }
    else if(!reg.test(pno.value)){
        error.innerHTML = "Enter Valid 10 Digit Phone Number";
        flag = 0;
    }
    else{
        error.innerHTML = "";
        flag = 1;
    }
}

// -------------------- Validation --------------------
function validation() {
    sname();
    semail();
    password();
    phoneno();

    if (flag) {
        return true;
    } else {
        return false;
    }
}

// -------------------- Student Name --------------------
studentName.addEventListener("blur", function(){
    let error = document.getElementById("errorSname");
    let reg = /[\d`~!@#$%^&*()_+-={}:;"'<>,.?/*-]/;
    
    if(studentName.value == ""){
        error.innerHTML = "Please enter your Name";
    }
    else if(studentName.value.length < 5){
        error.innerHTML = "Please enter your full Name";
    }
    else if(reg.test(studentName.value)){
        error.innerHTML = "You can not use Number or specific charactor";
    }
    else{
        error.innerHTML = "";
    }
})

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
        error.innerHTML = "Please enter a password that is 8 to 12 characters long";
    }
    else if(!reg.test(pword.value)){
        error.innerHTML = "Password must be at least 8 to 12 characters long and include at least one uppercase letter, one lowercase letter, one number, and may contain special characters (e.g. Testing193!).";
    }
    else{
        error.innerHTML = "";
    } 
})

// -------------------- Phone No --------------------
pno.addEventListener("blur", function(){
    let error = document.getElementById("errorPhoneno");
    let reg = /^\d{10}$/;
    
    if(pno.value == ""){
        error.innerHTML = "Enter Your Phone Number";
    }
    else if(!reg.test(pno.value)){
        error.innerHTML = "Enter Valid 10 Digit Phone Number";
    }
    else{
        error.innerHTML = "";
    } 
})
