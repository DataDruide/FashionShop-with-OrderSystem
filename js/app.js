// Get the product data from the API
const getProductData = async (id) => {
  const url = `https://example.com/api/produkte/${id}`;
  const response = await fetch(url);
  const data = await response.json();
  return data;
};

// Update the cart state
const updateCartState = (productData) => {
  // Add the product to the cart state
  const cart = JSON.parse(localStorage.getItem("cart"));
  cart.push(productData);
  localStorage.setItem("cart", JSON.stringify(cart));
};

// Add the product to the cart
const addToCart = async (id, quantity) => {
  // Get the product data from the API
  const productData = await getProductData(id);
  productData.quantity = quantity;

  // Add the product to the cart state
  updateCartState(productData);

  // Update the UI
  const allProducts = document.querySelectorAll(".product");
  for (const product of allProducts) {
    if (product.dataset.id === productData.id) {
      product.querySelector(".quantity").textContent = productData.quantity;
    }
  }
};

// loadProducts
const loadProducts = () => {
  const url = `https://fakestoreapi.com/products`;
  fetch(url)
    .then((response) => response.json())
    .then((data) => showProducts(data));
};

// showProducts
const showProducts = (products) => {
  const allProducts = products.slice(0, 9); // Begrenzen Sie auf die ersten 9 Produkte
  for (const product of allProducts) {
    const image = product.image;
    const div = document.createElement("div");
    div.classList.add("product");
    div.dataset.id = product.id; // Produkt-ID
    div.innerHTML = `<div class="single-product">
      <div>
        <img class="product-image" src=${image}></img>
      </div>
      <h3>${product.title}</h3>
      <p>Category: ${product.category}</p>
      <h2>Price: $ ${product.price}</h2>
      <h6 style="color: black; font-weight: 800;"> Rating: $ ${product.rating.rate}</h6>
      <button onclick="addToCart(${product.id}, 1)" class="buy-now btn btn-success">add to cart</button>
      <button id="details-btn" class="btn btn-danger">Details</button>
    </div>`;
    document.getElementById("all-products").appendChild(div);
  }
};

// EventListeners
const addToCartEventListener = () => {
  document.querySelectorAll(".addToCart-btn").forEach((button) => {
    button.addEventListener("click", (event) => {
      const id = event.target.dataset.id;
      addToCart(id);
    });
  });
};

loadProducts();
addToCartEventListener();
