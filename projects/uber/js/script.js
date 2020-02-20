window.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.menu'),
    menuItem = document.querySelectorAll('.menu_item'),
    sandwich = document.querySelector('.sandwich');

    sandwich.addEventListener('click', () => {
        sandwich.classList.toggle('sandwich_active');
        menu.classList.toggle('menu_active');
    });

    menuItem.forEach(item => {
        item.addEventListener('click', () => {
            sandwich.classList.toggle('sandwich_active');
            menu.classList.toggle('menu_active');
        })
    })
})