$(document).ready(() => {
   let keyword = localStorage.getItem('query');

   const cardResults = (id, name, price, characters, subcategory, image) => {
    const card = document.createElement('div');
    card.className = 'card-wrapper col-12 col-md-6 col-lg-4 col-xl-3 pb-3';

    card.innerHTML = 
      `<div class="product-card category invis">
        <img src="assets/img/${image}" alt="tovar">
        <p class="tovar-desc">${name}</p>
        <p class="characters">${characters}</p>
        <p class="characters">${subcategory}</p>
        <p class="price">${price} ₽<a href="">
            <i class="fa fa-cart-arrow-down r-icon" aria-hidden="true"></i>
        </a></p>
        <button class="btn info-btn" data-goods-id = "${id}">Подробнее</button>
      </div>`;

      return card;
    };

   
    $.ajax({
        url: 'connection/get_items.php',
        method: 'post',
        data: { keyword },
        success: function(response)
        {
          const arr = JSON.parse(response);
          const arrayOfCards = document.querySelector('.cards');

          console.log(arr);
          if(arr.length) {
            arr.forEach(({ id, name, price, producer, description, characters, 
                           category, subcategory, admin, user, sale, image}) => {
                arrayOfCards.append(cardResults(id, name, price, characters, subcategory, image));
            });
          } else {
            arrayOfCards.textContent = "Ничего не найдено";
          }

          return card;
        }
    });
});