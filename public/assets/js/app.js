function menuToggle(){
    icon = document.querySelector('.navigation');
    icon.classList.toggle('active');
    main = document.querySelector('.main');
    main.classList.toggle('active');
    toggle = document.querySelector('.toggle');
    toggle.classList.toggle('active');
}

function redirectProduct(){
    addEventListener('click', function(){
        window.location.replace('product.php')
    })
}

function redirectList(){
    addEventListener('click', function(){
        window.location.replace('list_buy.php')
    })
}