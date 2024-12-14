let currentIndex = 0; 
const images = document.querySelectorAll('.imagen'); 
const totalImages = 5; 
const visibleImages = 3; 
const carrusel = document.querySelector('.carrusel'); 
const imageWidth = 145; 


function actualizarCarrusel() {

  images.forEach((img) => img.classList.remove('grande', 'pequeña'));


  for (let i = 0; i < visibleImages; i++) {
    const index = (currentIndex + i) % totalImages; 
    const img = images[index];
    if (i === 0) {
      img.classList.add('grande'); 
    } else {
      img.classList.add('pequeña'); 
    }
  }
}

// Función para mover el carrusel
function moverCarrusel() {
    currentIndex = (currentIndex + 1) % totalImages;

  const offset = currentIndex * imageWidth;
  carrusel.style.transform = `translateX(-${offset}px)`;

  actualizarCarrusel();
}

function iniciarCarrusel() {
  setInterval(moverCarrusel, 3000); 
}


actualizarCarrusel(); 
iniciarCarrusel(); 