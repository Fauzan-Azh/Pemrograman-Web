// <!-- 105222036_ShevaHayaMilano
// 105222003_Fauzan Azhima -->

// menu hamburger
const navbarNav = document.querySelector('.navbar-nav');
document.querySelector('#hamburger-menu').onclick = () => {
  navbarNav.classList.toggle('active');
};

// keranjang belanja
const shoppingCart = document.querySelector('.shopping-cart');
document.querySelector('#shopping-cart-button').onclick = (e) => {
  shoppingCart.classList.toggle('active');
  e.preventDefault();
};

// inisialisasi total harga keranjang
let cartTotal = 0;

// update total harga di keranjang
function updateCartTotal(price) {
  cartTotal += price;
  document.querySelector('#cart-total').textContent = `IDR ${cartTotal}`;
}

// tambahkan item ke keranjang
function addToCart(productName, productPrice, productImg) {
  const cartItemsContainer = document.querySelector('.cart-items');
  
  // buat elemen item keranjang
  const cartItem = document.createElement('div');
  cartItem.classList.add('cart-item');
  cartItem.innerHTML = `
    <img src="${productImg}" alt="${productName}">
    <div class="item-detail">
      <h3>${productName}</h3>
      <div class="item-price">IDR ${productPrice}</div>
    </div>
    <i data-feather="trash-2" class="remove-item"></i>
  `;

  // tambahkan item baru ke keranjang
  cartItemsContainer.appendChild(cartItem);
  updateCartTotal(parseInt(productPrice)); // update total harga keranjang
  feather.replace();

  // event hapus item
  cartItem.querySelector('.remove-item').addEventListener('click', () => {
    cartItemsContainer.removeChild(cartItem); // hapus item dari dom
    cartTotal -= parseInt(productPrice); // kurangi harga item dari total
    document.querySelector('#cart-total').textContent = `IDR ${cartTotal}`;
  });
}

// hindari event listener ganda dengan ganti dan tambahkan ulang
const addToCartButtons = document.querySelectorAll('.add-to-cart-button');
addToCartButtons.forEach((button) => {
  // ganti tombol dengan salinan tanpa event listener
  button.replaceWith(button.cloneNode(true));
});

// tambahkan event listener tunggal pada setiap tombol
document.querySelectorAll('.add-to-cart-button').forEach((button) => {
  button.addEventListener('click', (e) => {
    e.preventDefault();
    const productName = button.getAttribute('data-product-name');
    const productPrice = button.getAttribute('data-product-price');
    const productImg = button.getAttribute('data-product-img');
    addToCart(productName, parseInt(productPrice), productImg);
  });
});

// fungsi tombol pembelian
document.querySelector('#purchase-button').addEventListener('click', () => {
  if (cartTotal > 0) {
    alert(`Pembelian Berhasil! Total Pembayaran: IDR ${cartTotal}`);
    document.querySelector('.cart-items').innerHTML = '';
    cartTotal = 0;
    document.querySelector('#cart-total').textContent = 'IDR 0';
  } else {
    alert("Keranjang kosong. Silakan tambahkan produk ke keranjang.");
  }
});

// tampilkan modal yang benar saat produk diklik
const modals = document.querySelectorAll('.modal');
const itemDetailButtons = document.querySelectorAll('.item-detail-button');

itemDetailButtons.forEach((button, index) => {
  button.addEventListener('click', (e) => {
    e.preventDefault();
    const modal = modals[index];
    if (modal) {
      modal.style.display = 'flex';
      feather.replace();
    }
  });
});

// tutup modal saat klik ikon close atau di luar konten
modals.forEach((modal) => {
  const closeIcon = modal.querySelector('.close-icon');
  closeIcon.addEventListener('click', (e) => {
    e.preventDefault();
    modal.style.display = 'none';
  });

  window.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.style.display = 'none';
    }
  });
});
