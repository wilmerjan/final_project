const open_sidenav = document.querySelector("#open-sidenav");
const close_sidenav = document.querySelector(".close-sidenav");
const brandname = document.querySelector(".brandname");
const sidenav_collapsed = document.querySelector(".sidenav-collapsed");
const main_page_wrapper = document.querySelector(".main-page-wrapper")
//const login = document.querySelector(".login");

/*This is for the sidenav toggle */
close_sidenav.addEventListener('click', event =>{
    brandname.style.display = "none";
    sidenav_collapsed.style.display = "none";
    main_page_wrapper.classList.remove('main-page-wrapper');
    main_page_wrapper.classList.add('main-page-wrapper-collapsed');
});

open_sidenav.addEventListener('click', event =>{
    brandname.style.display = "block";
    sidenav_collapsed.style.display = "block";
    main_page_wrapper.classList.remove('main-page-wrapper-collapsed');
    main_page_wrapper.classList.add('main-page-wrapper');
});

function login() {
    location.href = "http://192.168.254.118:3000/dashboard.html";
    window.location = "dashboard.html";
}

