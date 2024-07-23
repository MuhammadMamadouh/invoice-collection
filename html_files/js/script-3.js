document.getElementById("togglepassword-1").addEventListener("click", function () {
    const passwordField = document.getElementById("password-1");
    if (passwordField.type === "password") {
      passwordField.type = "text";
    } else {
      passwordField.type = "password";
    }
  });
  document.getElementById("togglepassword-2").addEventListener("click", function () {
    const passwordField = document.getElementById("password-2");
    if (passwordField.type === "password") {
      passwordField.type = "text";
    } else {
      passwordField.type = "password";
    }
  });
 // show and hide passowrd // 