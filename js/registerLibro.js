let btnAutores = document.getElementById('nuevoAutor');
let modalAutores = document.getElementById('modalAutores');
let cerrar1 = document.getElementById('cerrar1');
let cerrar2 = document.getElementById('cerrar2');


let btnGeneros = document.getElementById('nuevoGenero');
let modalGeneros = document.getElementById('modalGeneros');

btnAutores.addEventListener('click', function() {
    modalAutores.style.display = 'block';
    modalAutores.style.position = 'absolute';
});

btnGeneros.addEventListener('click', function() {
    modalGeneros.style.display = 'block';
    modalGeneros.style.position = 'absolute';
});

cerrar1.addEventListener('click', function() {
    modalAutores.style.display = 'none';
});

cerrar2.addEventListener('click', function() {
    modalGeneros.style.display = 'none';
});