const faqBtn =document.querySelectorAll('.faqbtn');

console.log(faqBtn)

faqBtn.forEach(btnNew => {
    btnNew.addEventListener('click',function (e) {
        btnNew.nextElementSibling.classList.toggle('active_toggle');
    })
});