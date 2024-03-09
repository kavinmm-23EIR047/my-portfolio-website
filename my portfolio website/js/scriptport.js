let menuBtn = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .flex .navbar');

menuBtn.onclick = () =>{
   menuBtn.classList.toggle('fa-times');
   navbar.classList.toggle('active');
}

window.onscroll = () =>{
   menuBtn.classList.remove('fa-times');
   navbar.classList.remove('active');
}
const headerE1 = document.querySelector('.header');

window.addEventListener('scroll',()=>
{
   if(window.scrollY > 50)
   {
      headerE1.classList.add('header-scrolled');
   }
   else if(window.scrollY <=50)
   {
      headerE1.classList.remove('header-scrolled');
   }
})