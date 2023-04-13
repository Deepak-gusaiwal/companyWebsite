let mobileNavToggler = document.querySelector('.mobileNavToggler');
let mobileNavLinks = document.querySelector('.mobileNavLinks');

mobileNavToggler.addEventListener('click',()=>{
    mobileNavToggler.classList.toggle('closeToggle');
    mobileNavLinks.classList.toggle('showNav');
});