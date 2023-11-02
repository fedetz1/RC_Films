const boton=document.querySelector(".volver")
console.log(window.location)
boton.addEventListener("click", (e)=>{
    if (window.location.pathname == "/paginadiego/index.php") {
        location="./proyecto/page/index.html"      
    } else {
        location="./index.php"
    }
})

const logo = document.querySelector("#logo")

logo.addEventListener("click", (e)=>{
    location="./proyecto/page/index.html"
})
