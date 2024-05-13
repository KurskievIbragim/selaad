const searchBtn = document.querySelector('.js--open-search '),
    searchInput = document.querySelector('.search-form'),
    navSearchInput = document.querySelector('.js--open-nav')


searchBtn.addEventListener("click", () => {

    searchInput.classList.toggle("show-form");

    if (searchInput.classList.contains("show-form")) {

        searchBtn.style.background = "url('./img/close.svg') no-repeat center";
    } else {
        searchBtn.style.background = "url('./img/search.svg') no-repeat center";
    }
});






