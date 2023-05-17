let parentIndicator, parentInner

window.addEventListener("DOMContentLoaded", (e) => {

    parentIndicator = document.querySelector(".carousel-indicators")
    parentInner = document.querySelector(".carousel-inner")

    $.ajax({
        type: "POST",
        url: "index.php/apiGetImages",
        dataType: "json",
        success: function (data) {
            data.forEach(constructCarousel)
        },
        error: function (errMsg) {
            alert(errMsg)
        }
    })
})

function constructCarousel(item, index) {

    let iPath = item.iPath
    let iTitle = item.imageTitle
    let iDesc = item.imageDescription

    let newButton =
        "<button type='button' data-bs-target='#image-gallery' data-bs-slide-to='" +
        index +
        "' "

    if (index === 0) newButton += "class='active' aria-current='true' "

    newButton +=
        "></button>"

    let newItem =
        "<div class='carousel-item "

    if (index === 0) newItem += "active"

    newItem +=
        "'><img src='" +
        iPath +
        "' class='d-block w-100' alt='alt'><div class='carousel-caption d-none d-md-block'><h2>" +
        iTitle +
        "</h2><p>" +
        iDesc +
        "</p></div></div>"

    parentIndicator.innerHTML += newButton
    parentInner.innerHTML += newItem
}