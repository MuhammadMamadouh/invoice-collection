 const selectElement = document.getElementById('inputname205');
  const dunningLetter = document.getElementById('dunning-letter');
  const dunningLetterMail = document.getElementById('dunning-letter-mail');
  const mail = document.getElementById('mail');
  const SMS = document.getElementById('sms');
  selectElement.addEventListener('change', function() {
      console.log(22);
const value = selectElement.value;
dunningLetter.classList.add("d-none")
// dunningLetterMail.classList.add("d-none")
// mail.classList.add("d-none")
// SMS.classList.add("d-none")        

// Show the relevant section based on the selected option
if (value == 2 || value == 3 || value == 6) {
  dunningLetter.classList.remove("d-none")
} else if (value == 4) {
  dunningLetter.classList.remove("d-none")
} else if (value == 5) {
  dunningLetter.classList.remove("d-none");
  document.getElementById('is_automatic_action_check').style.display="block";
} else if (value == 7) {
  dunningLetter.classList.remove("d-none"); 
  document.getElementById('sub_lb').style.display="none";
  document.getElementById('mail_subject').style.display="none";
  document.getElementById('is_automatic_action_check').style.display="block";  
}
});