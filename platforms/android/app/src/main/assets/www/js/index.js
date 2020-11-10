const open_sidenav = document.querySelector("#open-sidenav");
const close_sidenav = document.querySelector(".close-sidenav");
const brandname = document.querySelector(".brandname");
const sidenav_collapsed = document.querySelector(".sidenav-collapsed");
const main_page_wrapper = document.querySelector(".main-page-wrapper");
const modal = document.querySelector(".modal-container");
const del_modal = document.querySelector(".delete-modal-container");

const mobile_width = window.matchMedia("(max-width: 768px)");

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

function login() {
    location.href = "http://192.168.254.118:3000/dashboard.html";
    window.location = "dashboard.html";
}

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
    

