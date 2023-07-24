let navbar = document.querySelector('.header .flex .navbar');
let icon = document.querySelector('.fa-bars');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   icon.classList.toggle('fa-close');
}

window.onscroll = () =>{
   navbar.classList.remove('active');
   icon.classList.remove('fa-close');
}

document.querySelectorAll('input[type="number"]').forEach(inputNumber => {
   inputNumber.oninput = () =>{
      if(inputNumber.value.length > inputNumber.maxLength) inputNumber.value = inputNumber.value.slice(0, inputNumber.maxLength);
   };
});

$(window).on('load',function(){
   $(".loader").fadeOut(1000);
   $(".content").fadeIn(1000);
});

AOS.init({
   duration: 400,
   delay: 200,
});