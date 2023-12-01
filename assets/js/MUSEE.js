let forml = document.querySelector(".form-email");
let form_input = document.querySelector("#email_input");
let emailRegex =
  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

forml.addEventListener("submit", function (u) {
  u.preventDefault();
  if (form_input.value === "" || !form_input.value.match(emailRegex)) {
    form_input.nextElementSibling.style.display = "block";
  } else {
    form_input.nextElementSibling.style.display = "none";
  }
});

