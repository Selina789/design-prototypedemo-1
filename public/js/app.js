let hamburger = document.getElementById('hamburger');
let close = document.getElementById('close');
let nav = document.getElementById('mobile-nav');

hamburger.addEventListener('click', function(){
    hamburger.style.display = 'none';

    if (nav.style.display == 'none' || nav.style.display == '') {
        nav.style.display = 'block';
    } else {
        nav.style.display = 'none';
    }

    close.style.display = 'block';
});

close.addEventListener('click', function(){
    close.style.display = 'none';
    hamburger.style.display = 'block';
    nav.style.display = 'none';
})