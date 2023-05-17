let cameraMain, cameraSide, cameraTop
let meshBottle, meshCap, meshContent
let sceneLightGroup = []
let animationTimer
let x3dInline, x3dApp, x3dNavInfo, x3dScene

let dietBtn, drbtn, spriteBn, fantabtn
let cameraMainBtn, cameraSideBtn, cameraTopBtn
let animStatusBtn
let meshBottleBtn, meshCapBtn, meshContentBtn
let renderShadedBtn, renderWireBtn
let sceneLightBtn, headLightBtn

let textTitle, textSubtitle, textDescription, textMethod

window.addEventListener("DOMContentLoaded", (e) => {
    x3dApp = document.querySelector(".x3d-app")
    x3dScene = document.querySelector(".x3d-app scene")
    x3dInline = document.querySelector(".x3d-wrapper inline")
    x3dInline.onload = (e) => {
        bindModelComponents()
    }
    bindControlComponents()
})

let lastLoaded = "dietcola"
let tobeLoaded;

function bindModelComponents() {

    if (tobeLoaded === lastLoaded) return

    cameraMain = document.querySelector("#Model__CameraFront")
    if (cameraMain.tagName === "Transform")
        cameraMain = cameraMain.firstElementChild
    cameraSide = document.querySelector("#Model__CameraRight")
    if (cameraSide.tagName === "Transform")
        cameraSide = cameraSide.firstElementChild
    cameraTop = document.querySelector("#Model__CameraTop")
    if (cameraTop.tagName === "Transform")
        cameraTop = cameraTop.firstElementChild

    meshBottle = document.querySelector("#Model__MeshBottle")
    meshCap = document.querySelector("#Model__MeshCap")
    meshContent = document.querySelector("#Model__MeshContent")

    let sceneLightGroupTemp = document.querySelectorAll("[id*='Model__Light']")
    sceneLightGroup = []
    if (sceneLightGroupTemp.length > 0) {
        for (let i = 0; i < sceneLightGroupTemp.length; ++i) {
            if (sceneLightGroupTemp[i].tagName === "SpotLight")
                sceneLightGroup.push(sceneLightGroupTemp[i])
            else if (sceneLightGroupTemp[i].firstElementChild != null && sceneLightGroupTemp[i].firstElementChild.tagName === "SpotLight")
                sceneLightGroup.push(sceneLightGroupTemp[i].firstElementChild)
        }
    }

    animationTimer = document.querySelector("#Model__Timer")
    x3dNavInfo = document.querySelector("NavigationInfo")

    cameraSet("Main")
    console.log(x3dNavInfo)
    console.log(sceneLightGroup)
    console.log("Model loaded with " + sceneLightGroup.length + " lights")

    lastLoaded = tobeLoaded
}

function toggle_lights(target) {
    const sceneLights = document.querySelectorAll("[DEF^='Omni']");
    const headlight = document.getElementById('headlight');

    if (target === 'scene') {
        sceneLights.forEach(light => {
            light.setAttribute('on', !light.getAttribute('on'));
        });
        const sceneLightBtn = document.querySelector('.btn-light-scene');
        sceneLightBtn.classList.toggle('active');
    } else if (target === 'headlight') {
        headlight.setAttribute('headlight', !(headlight.getAttribute('headlight') === 'true'));
        const headLightBtn = document.querySelector('.btn-light-head');
        headLightBtn.classList.toggle('active');
    }
}

function bindControlComponents() {
    dietBtn = document.querySelector(".btn_diet")
    drbtn = document.querySelector(".btn_dr")
    spriteBn = document.querySelector(".btn_spr")
    fantabtn = document.querySelector(".btn_fanta")

    cameraMainBtn = document.querySelector(".btn-camera-reset")
    cameraSideBtn = document.querySelector(".btn-camera-side")
    cameraTopBtn = document.querySelector(".btn-camera-top")

    meshBottleBtn = document.querySelector(".btn-mesh-bottle")
    meshCapBtn = document.querySelector(".btn-mesh-cap")
    meshContentBtn = document.querySelector(".btn-mesh-content")

    animStatusBtn = document.querySelector(".btn-anim-status")

    renderShadedBtn = document.querySelector(".btn-render-shaded")
    renderWireBtn = document.querySelector(".btn-render-wire")

    sceneLightBtn = document.querySelector(".btn-light-scene")
    headLightBtn = document.querySelector(".btn-light-head")

    textTitle = document.querySelector(".model-description-title > h2")
    textSubtitle = document.querySelector(".model-description-subtitle > h3")
    textDescription = document.querySelector(".model-description-text > p")
    textMethod = document.querySelector(".model-description-method > p")

}


function switchModel(target) {

    tobeLoaded = target
    if (lastLoaded === tobeLoaded) return;

    if (document.querySelector("#x3domProgessCount").innerHTML !== "0") {
        alert("The previous model is still loading, please wait before switching!")
        return
    }

    let x3dFileUri
    let formalName

    setInactive(dietBtn)
    setInactive(drbtn)
    setInactive(spriteBn)
    setInactive(fantabtn)


    switch (target) {
        case "dietcoke":
            setActive(dietBtn)
            formalName = "DietCola"
            break
        case "drpepper":
            setActive(drbtn)
            formalName = "DrPepper"
            break
        case "sprite":
            setActive(spriteBn)
            formalName = "Sprite"
            break
        case "fanta":
            setActive(fantabtn)
            formalName = "Fanta"
            break
    }

    $.ajax({
        type: "POST",
        url: "index.php/getinfo",
        data: JSON.stringify({ "brandName" : formalName}),
        contentType: "application/json",
        dataType: "json",
        success: function(data) {
            console.log(data)
            x3dFileUri = data.x3dModelTitle
            textTitle.innerHTML = data.modelTitle
            textSubtitle.innerHTML = data.modelSubtitle
            textDescription.innerHTML = data.modelDescription
            textMethod.innerHTML = data.x3dCreationMethod

            x3dInline.setAttribute("url", "")
            setTimeout(() => {
                x3dInline.setAttribute("url", "models/" + x3dFileUri)
            }, 300)
        },
        error: function(errMsg) {
            alert(errMsg)
        }
    })
}


function cameraSet(target) {

    setInactive(cameraMainBtn)
    setInactive(cameraSideBtn)
    setInactive(cameraTopBtn)

    switch (target) {
        case "Main":
            cameraMain.setAttribute("set_bind", "true")
            setActive(cameraMainBtn)
            break
        case "Top":
            cameraTop.setAttribute("bind", "true")
            setActive(cameraTopBtn)
            break
        case "Side":
            cameraSide.setAttribute("bind", "true")
            setActive(cameraSideBtn)
            break
    }
}

function toggleMesh(target) {

    let currenState;

    switch (target) {
        case "Cap":
            currenState = meshCap.getAttribute("visible") === "true"
            meshCap.setAttribute("visible", !currenState)
            if (!currenState)
                setActive(meshCapBtn)
            else
                setInactive(meshCapBtn)
            break
        case "Bottle":
            currenState = meshBottle.getAttribute("visible") === "true"
            meshBottle.setAttribute("visible", !currenState)
            if (!currenState)
                setActive(meshBottleBtn)
            else
                setInactive(meshBottleBtn)
            break
        case "Content":
            currenState = meshContent.getAttribute("visible") === "true"
            meshContent.setAttribute("visible", !currenState)
            if (!currenState)
                setActive(meshContentBtn)
            else
                setInactive(meshContentBtn)
            break
    }

}

let isPlaying = true

function toggleAnimation() {
    if (animationTimer != null) {
        isPlaying = !isPlaying
        animationTimer.setAttribute("enabled", isPlaying)

        if (isPlaying) {
            animStatusBtn.classList.remove("btn-danger")
            animStatusBtn.classList.add("btn-success")
            animStatusBtn.innerHTML = "Playing"
        }
        else {
            animStatusBtn.classList.remove("btn-success")
            animStatusBtn.classList.add("btn-danger")
            animStatusBtn.innerHTML = "Stopped"
        }
    }
}

function setRender() {

    x3dApp.runtime.togglePoints(true)

    switch (renderWireBtn.innerHTML) {
        case "Shaded":
            renderWireBtn.innerHTML = "Dots"
            break
        case "Dots":
            renderWireBtn.innerHTML = "Wireframe"
            break
        case "Wireframe":
            renderWireBtn.innerHTML = "Shaded"
    }
}

let currentSceneLight = true;
let currentHeadLight = true;

function toggleLights(target) {
    if (target === "scene") {
        currentSceneLight = !currentSceneLight
        sceneLightGroup.forEach(function (light) {
            light.setAttribute("on", currentSceneLight)
        })
        if (currentSceneLight)
            setActive(sceneLightBtn)
        else
            setInactive(sceneLightBtn)
        return
    }
    if (target === "headlight") {
        currentHeadLight = !currentHeadLight
        x3dNavInfo.setAttribute("headlight", currentHeadLight)
        if (currentHeadLight)
            setActive(headLightBtn)
        else
            setInactive(headLightBtn)
    }
}


// Utility functions

function setActive(e) {
    if (e.classList.contains("active")) return
    e.classList.add("active")
}

function setInactive(e) {
    if (e.classList.contains("active"))
        e.classList.remove("active")
}