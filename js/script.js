const h1 = document.getElementById("js--title")

console.log(h1)

setInterval(function () { h1.style.animation = "fadeOut 0.5s ease forwards"},5000 )
setInterval(function () { h1.style.display = "none"},5500)