$(document).ready(() => {
  let id = localStorage.getItem('currentProd');

  const myOrders = (name, price, img, val) => {
    const card = document.createElement('div');
    card.innerHTML = 
      `<div class="order-item">
      <p class="my-center">${val}x ${name}</p>
      <div class="order2 center">
        <img class="quadro" src="${img}" alt="tovar">
      </div>
      <p class="p-price">${price}</p>
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

  const title = `<p class="center article">Ваши заказы: </p>`;

  const arr = JSON.parse(localStorage.getItem('mycart'));
  const arrayOfCards = $('.product.category')[1];
  arrayOfCards.innerHTML = title;

  if(arr.length) {
    arr.forEach(({id, name, price, img, kolvo}) => {
        arrayOfCards.append(myOrders(name, price, img, kolvo));
    });
  } else {
    arrayOfCards.textContent = "Ваша корзина пуста";
  }

  const totalPrice = $('.total')[0];
  totalPrice.textContent = getTotalPrice(arr) + '₽';
});