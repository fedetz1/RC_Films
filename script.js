const imagenes = document.querySelectorAll(".foto")

imagenes.forEach((img, index)=>{
    img.addEventListener("click", (e)=>{
        console.log("hola" + index)
        if (index==0) {
            location="./cuadricula.php"
        }

        if(index==1){
            location="./videos.php"
        }

        if (index==2) {
            location="./afiliados.php"
        }

        if(index==3){
            location="./proximamente.html"
        }
    })
})