let new_password = document.getElementById("new-password");
let confirm_password = document.getElementById("confirm-password");
flag = 1;

// -------------------- New Password --------------------
function newPassword(){
    let error = document.getElementById("errorNewPassword");
    let reg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,13}$/;
    
    if(new_password.value == ""){
        error.innerHTML = "Enter Your Password";
        flag = 0;
    }
    else if(!(new_password.value.length >= 8 && new_password.value.length <= 12)){
        error.innerHTML = `Please enter a password that is 8 to 12 characters long. You have written ${new_password.value.length} characters in the password.`;
        flag = 0;
    }
    else if(!reg.test(new_password.value)){
        error.innerHTML = "Password must be at least 8 to 12 characters long and include at least one uppercase letter, one lowercase letter, one number, and may contain special characters (e.g. Testing193!).";
        flag = 0
    }
    else{
        error.innerHTML = "";
        flag = 1;
    } 
}

// -------------------- Confirm Password --------------------
function confirmPassword(){
    let error = document.getElementById("errorConfirmPassword");
    let reg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,13}$/;
    
    if(confirm_password.value == ""){
        error.innerHTML = "Enter Your Password";
        flag = 0;
    }
    else if(!(confirm_password.value.length >= 8 && confirm_password.value.length <= 12)){
        error.innerHTML = `Please enter a password that is 8 to 12 characters long. You have written ${confirm_password.value.length} characters in the password.`;
        flag = 0;
    }
    else if(new_password.value !== confirm_password.value){
        error.innerHTML = `Password is not match`;
        flag = 0;
    }
    else if(!reg.test(confirm_password.value)){
        error.innerHTML = "Password must be at least 8 to 12 characters long and include at least one uppercase letter, one lowercase letter, one number, and may contain special characters (e.g. Testing193!).";
        flag = 0;
    }
    else{
        error.innerHTML = "";
        flag = 1;
    } 
}

// -------------------- Validation --------------------
function validation() {
    newPassword();
    confirmPassword();

    if (flag) {
        return true;
    } else {
        return false;
    }
}

// -------------------- New Password --------------------
new_password.addEventListener("blur", function(){
    let error = document.getElementById("errorNewPassword");
    let reg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,13}$/;
    
    if(new_password.value == ""){
        error.innerHTML = "Enter Your Password";
    }
    else if(!(new_password.value.length >= 8 && new_password.value.length <= 12)){
        error.innerHTML = `Please enter a password that is 8 to 12 characters long. You have written ${new_password.value.length} characters in the password.`;
    }
    else if(!reg.test(new_password.value)){
        error.innerHTML = "Password must be at least 8 to 12 characters long and include at least one uppercase letter, one lowercase letter, one number, and may contain special characters (e.g. Testing193!).";
    }
    else{
        error.innerHTML = "";
    }    
})

// -------------------- Confirm Password --------------------
confirm_password.addEventListener("blur", function(){
    let error = document.getElementById("errorConfirmPassword");
    let reg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,13}$/;
    
    if(confirm_password.value == ""){
        error.innerHTML = "Enter Your Password";
    }
    else if(!(confirm_password.value.length >= 8 && confirm_password.value.length <= 12)){
        error.innerHTML = `Please enter a password that is 8 to 12 characters long. You have written ${confirm_password.value.length} characters in the password.`;
    }
    else if(new_password.value !== confirm_password.value){
        error.innerHTML = `Password is not match`;
    }
    else if(!reg.test(confirm_password.value)){
        error.innerHTML = "Password must be at least 8 to 12 characters long and include at least one uppercase letter, one lowercase letter, one number, and may contain special characters (e.g. Testing193!).";
    }
    else{
        error.innerHTML = "";
    }   
})

// -------------------- Random Image --------------------
fetch("../js/reset-password.json").then((response) => {
    return response.json();
}).then((data) => {
    let randomImage = Math.floor(Math.random() * data.length);
    console.log(randomImage);
    document.querySelector(".reset-pword-img").src = data[randomImage].reset_password_image;
});