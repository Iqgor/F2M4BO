const h1 = document.getElementById("js--title")
let info = document.getElementById("js--info")
const login = document.getElementById("js--login")

function goBack() {
    window.history.back();
}

window.setTimeout(function () {
    h1.style.animation = "fadeOut 0.5s ease forwards"
}, 2500);

window.setTimeout(function () {
    h1.style.display = "none", info.style.display = "flex"
}, 2900);




let menuOn = document.getElementById("js--menuInfo-on")
let menu = document.getElementById("js--menuInfo")
let menuoff = document.getElementById("js--menuInfo-off")

let addbutton = document.getElementsByClassName("toCard")
let cart = document.getElementById("js--cart")
let cartitems = document.getElementById("js--inCart")
let berichten = document.getElementById("js--message")
let count = 0


for (let i = 0; i < addbutton.length; i++) {
    addbutton[i].onclick = function () {
        count++;
        cartitems.innerHTML = count;
        cart.style.display = "flex";
        berichten.classList.add("fadeup");
        setTimeout(function () {
            berichten.classList.remove("fadeup")
        }, 3000)
    }
}

menuOn.onclick = function () {
    info.style.display = 'none'
    menu.style.display = 'block'
}

menuoff.onclick = function () {
    info.style.display = "flex"
    menu.style.display = "none"
}



let allcards = document.getElementsByClassName("flip-card")

let filters = document.getElementsByClassName("filter")



for (let i = 0; i < filters.length; i++) {
    filters[i].checked = true;
}



let shootingfilter = document.getElementById("checkbox-shooting")
shootingfilter.onchange = function () {
    if (shootingfilter.checked === true) {
        for (let i = 0; i < allcards.length; i++) {
            if (allcards[i].dataset.category === "shooting") {
                allcards[i].style.display = "block"
            }
        }
    }
    else {
        for (let i = 0; i < allcards.length; i++) {
            if (allcards[i].dataset.category === "shooting") {
                allcards[i].style.display = "none"
            }
        }
    }
}

let racingfilter = document.getElementById("checkbox-racing")
racingfilter.onchange = function () {
    if (racingfilter.checked === true) {
        for (let i = 0; i < allcards.length; i++) {
            if (allcards[i].dataset.category === "racing") {
                allcards[i].style.display = "block"
            }
        }
    }
    else {
        for (let i = 0; i < allcards.length; i++) {
            if (allcards[i].dataset.category === "racing") {
                allcards[i].style.display = "none"
            }
        }
    }
}

let storyfilter = document.getElementById("checkbox-story")
storyfilter.onchange = function () {
    if (storyfilter.checked === true) {
        for (let i = 0; i < allcards.length; i++) {
            if (allcards[i].dataset.category === "story") {
                allcards[i].style.display = "block"
            }
        }
    }
    else {
        for (let i = 0; i < allcards.length; i++) {
            if (allcards[i].dataset.category === "story") {
                allcards[i].style.display = "none"
            }
        }
    }
}

let horrorfilter = document.getElementById("checkbox-horror")
horrorfilter.onchange = function () {
    if (horrorfilter.checked === true) {
        for (let i = 0; i < allcards.length; i++) {
            if (allcards[i].dataset.category === "horror") {
                allcards[i].style.display = "block"
            }
        }
    }
    else {
        for (let i = 0; i < allcards.length; i++) {
            if (allcards[i].dataset.category === "horror") {
                allcards[i].style.display = "none"
            }
        }
    }
}

let vechtenfilter = document.getElementById("checkbox-vechten")
vechtenfilter.onchange = function () {
    if (vechtenfilter.checked === true) {
        for (let i = 0; i < allcards.length; i++) {
            if (allcards[i].dataset.category === "vechten") {
                allcards[i].style.display = "block"
            }
        }
    }
    else {
        for (let i = 0; i < allcards.length; i++) {
            if (allcards[i].dataset.category === "vechten") {
                allcards[i].style.display = "none"
            }
        }
    }
}

/*let input = document.getElementById("File");
let imageName = document.getElementById("imageName")

    input.addEventListener("change", ()=>{
        let inputImage = document.querySelector("input[type=file]").files[0];
        imageName.innerText = inputImage.name;
    })

/*let productbutton = document.getElementsByClassName("product--button")
let productinfo = document.getElementsByClassName("productInfo")
let productimage = document.getElementsByClassName("pimage")

console.log(productinfo)
console.log(productbutton)


let mode = "uit"




for (let i = 0; i < productbutton.length; i++) {
    productbutton[i].onmouseover = function () {
        console.log(mode) 
        if (mode === "uit") {
            productimage[i].style.display = "none"
            productinfo[i].style.display = "flex"
            productbutton[i].style.zIndex = "-1" 
            mode = "uit"
        }
        else{
            
        }


    }
}*/



