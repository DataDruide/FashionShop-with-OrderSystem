fetch('https://fakestoreapi.com/products')
    .then(res => res.json())
    .then(data => {
        let str = '';
        for (let i = 0; i < 14; i++) {
            let product = data[i];
            str += `<div class="card card-bottles me-3 mt-3">
                        <img src="${product.image}" class="card-img-top" alt="Black Bottle">
                        <div class="card-body">
                        <h5 class="card-title">${product.title}</h5>
                        <p>Quantidade disponivel: ${product.rating.count}</p>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        <p>RS$ ${product.price}</p>
                        <a href="detalhes.html?id=${product.id}" class="btn btn-primary">Detalhes</a>
                        </div>
                    </div>`
        }
        const sectionProducts = document.getElementById("exibeProdutos");
        sectionProducts.innerHTML = str;
    })

const searchInput = document.getElementById('searchInput');
const searchButton = document.getElementById('searchButton');
const searchResults = document.getElementById('searchResults');

searchButton.addEventListener('click', function (event) {
    event.preventDefault();
    const termoBuscado = searchInput.value;
    retornaPesquisa(termoBuscado);
});

function retornaPesquisa(termoBuscado){
    fetch('https://fakestoreapi.com/products/category/' + termoBuscado)
        .then(res => res.json())
        .then(data => {
            searchResults.innerHTML = '';
            
            const searchResultsTittle = document.getElementById('searchResultsTittle');
            searchResultsTittle.innerHTML = '';

            const produtosEncontrados = document.createElement('h1');
            produtosEncontrados.classList.add('ms-3', 'text-primary');
            produtosEncontrados.textContent = 'Produtos Encontrados';
            searchResultsTittle.appendChild(produtosEncontrados);

            data.forEach(product => {
                const productItem = document.createElement('div');
                productItem.classList.add('card', 'card-bottles', 'me-3', 'mt-3', 'ms-3');
                productItem.innerHTML = `
            <img src="${product.image}" class="card-img-top" alt="Black Bottle">
            <div class="card-body">
              <h5 class="card-title">${product.title}</h5>
              <p>Quantidade disponível: ${product.rating.count}</p>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star"></i>
              <p>RS$ ${product.price}</p>
              <a href="detalhes.html?id=${product.id}" class="btn btn-primary">Detalhes</a>
            </div>
          `;
                searchResults.appendChild(productItem);
            });
            searchResultsTittle.scrollIntoView({ behavior: 'smooth' });
        });
}