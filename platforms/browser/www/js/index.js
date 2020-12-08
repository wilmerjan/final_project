const open_sidenav = document.querySelector("#open-sidenav");
const close_sidenav = document.querySelector(".close-sidenav");
const modal = document.querySelector(".modal-container");
const del_modal = document.querySelector(".delete-modal-container");
const logout_modal = document.querySelector(".logout-modal-container");
const main_page_wrapper = document.querySelector(".main-page-wrapper");
const mobile_width = window.matchMedia("(max-width: 768px)");
const brandname = document.querySelector(".brandname");
const sidenav_collapsed = document.querySelector(".sidenav-collapsed");
const logout = document.querySelector(".logout");
const regis_modal = document.querySelector(".regis-modal-container");
const archive_modal = document.querySelector(".archive-modal");
const admin_modal = document.querySelector(".administrator-modal-container");


function myFunction(mobile_width) {
    if (mobile_width.matches) {
        brandname.style.display = "none";
        sidenav_collapsed.style.display = "none";
        main_page_wrapper.classList.remove('main-page-wrapper');
        main_page_wrapper.classList.add('main-page-wrapper-collapsed');
    } else {
        brandname.style.display = "block";
        sidenav_collapsed.style.display = "block";
        main_page_wrapper.classList.remove('main-page-wrapper-collapsed');
        main_page_wrapper.classList.add('main-page-wrapper');
        }
  }
  
  myFunction(mobile_width);
  mobile_width.addListener(myFunction);


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

function update_modal() {
    modal.style.display = "block";
    console.log("Update Button Clicked");
}

function cancel_modal() {
    modal.style.display = "none";
}

function delete_modal() {
    del_modal.style.display = "block";
    console.log("Delete Button Clicked");
}

function cancel_del_modal() {
    del_modal.style.display = "none";
}

function logout_modal_pop() {
    logout_modal.style.display = "block";
    console.log("Logout Button Clicked");
}

function cancel_logout_modal() {
    logout_modal.style.display = "none";
}

function regis_modal_pop() {
    regis_modal.style.display = "block";
}

function cancel_regis_modal() {
    regis_modal.style.display = "none";
}

function regis_archive_pop() {
    archive_modal.style.display = "block";
}

function cancel_archive_modal() {
    archive_modal.style.display = "none";
}

function admin_modal_pop() {
    admin_modal.style.display = "block";
}

function cancel_owner_modal() {
    admin_modal.style.display = "none";
}

function logout_action() {
    localStorage.removeItem("bus_id");
    localStorage.removeItem("username");
    localStorage.removeItem("bus_id");
    localStorage.loginStatus = "false";
    window.location.href = "index.html";
}

function getUrlVars() {
    var vars = [],  hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < hashes.length; i++) {  
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
    return vars;
}

