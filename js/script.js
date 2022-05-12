const h1 = document.getElementById("js--title")
const info = document.getElementById("js--info")

console.log(h1)

setInterval(function () { h1.style.animation = "fadeOut 0.5s ease forwards" },3600 )
setInterval(function () { h1.style.display = "none",info.style.display="flex"},4000)