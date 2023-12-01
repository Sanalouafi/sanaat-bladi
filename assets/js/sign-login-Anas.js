const linksign = document.getElementById('link-sign');
const loginsign = document.getElementById('link-login');
const loginForm = document.querySelector('.login-section');
const signForm = document.querySelector('.sign-section');

let isForm1Visible = false;
let isForm2Visible = false;

linksign.addEventListener('click', function(event){
    event.preventDefault();
      loginsign.classList.remove('activelink');
      linksign.classList.add('activelink');
      
      loginForm.classList.remove('activeForm');
      loginForm.classList.add('desactiveForm');
      signForm.classList.remove('desactiveForm');
      signForm.classList.add('activeForm');

      
    // signForm.classList.remove('activeForm');
    // signForm.classList.add('desactiveForm');

    // loginForm.classList.remove('desactiveForm');
    // loginForm.classList.add('activeForm');

    //   signForm.style.display = "none";
    //   loginForm.style.display = "block";
    })

loginsign.addEventListener('click', function(event){
    event.preventDefault();
    linksign.classList.remove('activelink');
    loginsign.classList.add('activelink');

    signForm.classList.remove('activeForm');
    signForm.classList.add('desactiveForm');

    loginForm.classList.remove('desactiveForm');
    loginForm.classList.add('activeForm');
    // loginForm.style.display = "none";
    // signForm.style.display = "flex";
    

})

//login validation
const logForm = document.querySelector('.login-section');
const emailInput = document.getElementById('log-email');
const passwordInput = document.getElementById('log-pswd');
 
const namesRegex = /^[a-zA-Z]+$/;
const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; 
const passwordRegex = /^[A-Za-z0-9!@#$%^&*()_+{}\[\]:;<>,.?~\\-]+$/; 

logForm.addEventListener('submit', function(event){
    event.preventDefault();

    const email = emailInput.value;
    const password = passwordInput.value;

    if (emailRegex.test(email)) {
        emailInput.nextElementSibling.style.display='none';
        
        // You can redirect to another page or perform further actions here.
      } else {
        emailInput.nextElementSibling.style.display='block';
      }

      if (passwordRegex.test(password)) {
        passwordInput.nextElementSibling.style.display='none';
        
        // You can redirect to another page or perform further actions here.
      } else {
        passwordInput.nextElementSibling.style.display='block';
      }
      
})

//sign up validation
const signupForm = document.querySelector('.sign-section');
const nameInput = document.getElementById('name');
const lastname = document.getElementById('lastname');
const villeInput = document.getElementById('ville');
const emailInput2 = document.getElementById('sign-email');
const passwordInput2 = document.getElementById('sign-pswd');

// const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; 
// const passwordRegex = /^[A-Za-z0-9!@#$%^&*()_+{}\[\]:;<>,.?~\\-]+$/; 

signupForm.addEventListener('submit', function(event){
    event.preventDefault();
    //alert('hello');
    
    const name = nameInput.value;
    const lastName = lastname.value;
    const email2 = emailInput2.value;
    const password2 = passwordInput2.value;
    const ville = villeInput.value;

    if (namesRegex.test(name)) {
        nameInput.nextElementSibling.style.display='none';
        
        // You can redirect to another page or perform further actions here.
      } else {
        nameInput.nextElementSibling.style.display='block';
        
      }

      if (namesRegex.test(lastName)) {
        lastname.nextElementSibling.style.display='none';
        
        // You can redirect to another page or perform further actions here.
      } else {
        lastname.nextElementSibling.style.display='block';
      }

    if (emailRegex.test(email2)) {
        emailInput2.nextElementSibling.style.display='none';
        
        // You can redirect to another page or perform further actions here.
      } else {
        emailInput2.nextElementSibling.style.display='block';
      }
      if (namesRegex.test(ville)) {
        villeInput.nextElementSibling.style.display='none';
        
        // You can redirect to another page or perform further actions here.
      } else {
        villeInput.nextElementSibling.style.display='block';
        
      }

      if (passwordRegex.test(password2)) {
        passwordInput2.nextElementSibling.style.display='none';
        
        // You can redirect to another page or perform further actions here.
      } else {
        passwordInput2.nextElementSibling.style.display='block';
      }
      
})