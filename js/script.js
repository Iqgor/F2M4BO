const h1 = document.getElementById("js--title")
const info = document.getElementById("js--info")
const login = document.getElementById("js--login")

console.log(h1)

window.setTimeout(function () {
    h1.style.animation = "fadeOut 0.5s ease forwards"
}, 2500);

window.setTimeout(function () {
    h1.style.display = "none", info.style.display = "flex"
}, 2900);

let input = document.getElementById("File");
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



