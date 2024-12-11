const searchButton = document.getElementById('searchButton');
const searchInput = document.getElementById('searchInput');
const resultsContainer = document.getElementById('searchResults');

const errorMessage = document.createElement('div');
errorMessage.className = 'error-message';
errorMessage.style.display = 'none'; 
document.body.appendChild(errorMessage);

searchButton.addEventListener('click', function () {
    const query = searchInput.value.trim();
    resultsContainer.innerHTML = ''; 

    if (query) {
        errorMessage.style.display = 'none';
    } else {
        errorMessage.textContent = 'Por favor, escribe algo para buscar.';
        errorMessage.style.display = 'block';
    } setTimeout(() => {
        errorMessage.style.display = 'none';
    }, 1600);
});
