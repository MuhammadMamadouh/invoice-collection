// show and hide loginpage and forget password page // 
let logPage = document.getElementById("log-page");
let login = document.getElementById("login");
const closeButton = document.getElementById("close");
logPage.style.display = "none";
login.onclick = function () {
  logPage.style.display = "block";
  document.body.style.overflow = "auto";
};
closeButton.onclick = function () {
  logPage.style.display = "none";
};

const forgetPassword = document.getElementById("forgetpassword");
let addPagePassword = document.getElementById("addpagepassword");
const closeButton2 = document.getElementById("close-2");
forgetPassword.style.display = "none";
addPagePassword.onclick = function () {
  forgetPassword.style.display = "block";
  logPage.style.display = "none";
};
closeButton2.onclick = function () {
  forgetPassword.style.display = "none";
};
// show and hide loginpage and forget password page // 

 // show and hide passowrd // 

document.getElementById("togglepassword").addEventListener("click", function () {
    const passwordField = document.getElementById("password");
    if (passwordField.type === "password") {
      passwordField.type = "text";
    } else {
      passwordField.type = "password";
    }
  });
 // show and hide passowrd // 