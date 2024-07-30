// upload photo // 
let changeImg = document.getElementById("changeimg");
const upload = document.getElementById("upload");
upload.addEventListener("change", () => {
    changeImg.src = URL.createObjectURL(upload.files[0]);
});
// upload photo //