let studentName = document.getElementById("student-name");
let email = document.getElementById("student-email");
let message = document.getElementById("smessage");
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

// -------------------- Message --------------------
function studentMessage(){
    let error = document.getElementById("errorMessage");

    if(message.value == ""){
        error.innerHTML = "Enter Message";
        flag = 0;
    }
    else if(message.value.length <= 10){
        error.innerHTML = "Write 10 Character up message";
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
    studentMessage();

    if (flag) {
        return true;
    } else {
        return false;
    }
}

// -------------------- Student Name --------------------
studentName.addEventListener("blur", function () {
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

// -------------------- Message --------------------
message.addEventListener("blur", function(){
    let error = document.getElementById("errorMessage");

    if(message.value == ""){
        error.innerHTML = "Enter Message";
    }
    else if(message.value.length <= 10){
        error.innerHTML = "Write 10 Character up message";
    }
    else{
        error.innerHTML = "";
    }
})