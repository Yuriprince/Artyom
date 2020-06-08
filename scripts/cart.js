$(document).ready(() => {
  let id = localStorage.getItem('currentProd');

  const myCart = (name, price, img, val) => {
    const card = document.createElement('div');
    card.innerHTML = 
      `<div class="card">
      <div class="p-flex">
        <img class="img" src="${img}" alt="tovar">
        <div class="sub">
          <p class="center article wi">${name}</p>

          <div class="p-flex">
            <p>Размер: </p>
            <select class="choose_category">
              <option>M</option>
              <option>L</option>
              <option>XL</option>
              <option>XXL</option>
            </select>
          </div>

        </div>

        <div class="sub">
          <div class="p-flex">
            <p>Количество:</p>
            <input class="counter" type="number" step="1" min="1" max="10" value="${val}">
          </div>
          <p class="p-price">${price} p./шт</p>
        </div>

        <i class="fa fa-trash" aria-hidden="true"></i>
    </div>`;

      return card;
  };

  const getTotalPrice = (array) => {
    let totalPrice = 0;
    array.forEach(({id, name, price, img, kolvo}) => {
      totalPrice += Number(price.substring(0, price.length - 1)) * Number(kolvo);
    });

    return totalPrice;
  };

  const title = `<p class="center article">Корзина товаров</p>`;

  const arr = JSON.parse(localStorage.getItem('mycart'));
  const arrayOfCards = $('.product.category')[0];
  arrayOfCards.innerHTML = title;

  if(arr.length) {
    arr.forEach(({id, name, price, img, kolvo}) => {
        arrayOfCards.append(myCart(name, price, img, kolvo));
    });
  } else {
    arrayOfCards.textContent = "Ваша корзина пуста";
  }

  const totalPrice = $('.total')[0];
  totalPrice.textContent = getTotalPrice(arr) + '₽';

  $(document).on('click','.info-btn', (e) =>{

  window.location.href = 'make_order.php';
  });
});