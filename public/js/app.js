let div = document.querySelector('.div-bar');
let bar = document.querySelector('.div-bar__bar');
let nav = document.getElementById('mobile-nav');

let falseStatement = false;

div.addEventListener("click", function(){
    if(!falseStatement){
        bar.classList.add('open');
        falseStatement = true;
        nav.style.display = 'block';
    }
    else{
        bar.classList.remove('open');
        falseStatement = false;
        nav.style.display = 'none';
    }
})