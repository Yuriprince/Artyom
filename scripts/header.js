$(document).ready(() => {
  const cartKol = localStorage.getItem('mycart') ? JSON.parse(localStorage.getItem('mycart')).length: 0;
  const span = $('span.cart-kolvo')[0];
  span.textContent = cartKol;

  $(document).on('click','.main-logo', (e) =>{
    window.location.href = 'index.php';
  });

  $(document).on('click','.cart', (e) =>{
    window.location.href = 'cart.php';
  });
});