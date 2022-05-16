const h1 = document.getElementById("js--title")
const info = document.getElementById("js--info")
const login = document.getElementById("js--login")

console.log(h1)

setInterval(function () { h1.style.animation = "fadeOut 0.5s ease forwards" },2500 )
setInterval(function () { h1.style.display = "none", info.style.display = "flex" }, 2900)

