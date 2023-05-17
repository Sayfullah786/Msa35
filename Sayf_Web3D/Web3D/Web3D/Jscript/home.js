let swapHome, swapAbout, swapGallery
let navHome, navAbout, navModels, navDrinks

window.addEventListener("DOMContentLoaded", (e) => {
    swapHome = document.querySelector(".swap-home")
    swapAbout = document.querySelector(".swap-about")
    swapGallery = document.querySelector(".swap-gallery")

    navHome = document.querySelector(".nav-a-home")
    navAbout = document.querySelector(".nav-a-about")
    navModels = document.querySelector(".nav-a-models")
    navDrinks = document.querySelector(".nav-a-drinks")

    swap("home")
    //swap("gallery")
})

function swap(tab) {
    swapHome.style.display = "none"
    swapAbout.style.display = "none"
    swapGallery.style.display = "none"

    navHome.classList.remove("active")
    navAbout.classList.remove("active")
    navModels.classList.remove("active")
    navDrinks.classList.remove("active")

    switch (tab) {
        case "about" :
            swapAbout.style.display = "block"
            navAbout.classList.add("active")
            break
        case "gallery" :
            swapGallery.style.display = "block"
            navModels.classList.add("active")
            break
        default :
        case "home" :
            swapHome.style.display = "block"
            navHome.classList.add("active")
            break
    }
}