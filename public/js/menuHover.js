let menuItems = document.getElementsByClassName('menu-item'),
    burgerModalOpenBtn = document.querySelector('.burger-banner-btn-button'),
    burgerModalCloseBtn = document.querySelector('.burger-close-modal-btn')

// Добавляем обработчики событий для каждого элемента
for (let i = 0; i < menuItems.length; i++) {
    menuItems[i].addEventListener('mouseover', function() {
        this.style.borderBottom = '2px solid ' + colors[i % colors.length];
    });

    menuItems[i].addEventListener('mouseout', function() {
        this.style.borderBottom = '';
    });
}

// Открытие и закрытие модального окна burger
burgerModalOpenBtn.addEventListener('click', function () {
    burgerModal.style.display = "flex";
});

burgerModalCloseBtn.addEventListener('click', function () {
    burgerModal.style.display = "none";
});
