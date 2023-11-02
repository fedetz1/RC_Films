const fotos = document.querySelectorAll(".foto-cuadricula");

const array=[]

fotos.forEach(foto => {
    let numrand;

  do {
    numrand = genRand();
  } while (array.includes(numrand));

  array.push(numrand);
  const ruta = `./img/img_${numrand}.jpg`;  // Genera la ruta completa
  foto.style.backgroundImage = `url('${ruta}')`;
});

function genRand() {
  return Math.floor(Math.random() * 25) + 1;
}
