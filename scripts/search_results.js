$(document).ready(() => {
   let keyword = localStorage.getItem('query');

   const cardResults = (id, name, price, characters, subcategory, image) => {
    const card = document.createElement('div');
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
          const arrayOfCards = $('.cards')[0];
          arrayOfCards.innerHTML = '';

          console.log(arr);
          if(arr.length) {
            arr.forEach(({ id, name, price, producer, description, characters, 
                           category, subcategory, admin, user, sale, image}) => {
                arrayOfCards.append(cardResults(id, name, price, characters, subcategory, image));
            });
          } else {
            arrayOfCards.textContent = "Ничего не найдено";
          }
        }
    });

    $(document).on('click','.menu-item', (e) =>{

      const subcategory =  e.target.textContent;

      $.ajax({
        url: 'connection/item_by_category.php',
        method: 'post',
        data: { subcategory },
        success: function(response)
        {
          $('.menu-item').attr('id', 'selected11');

          e.target.setAttribute('id', 'selected1');
          const arr = JSON.parse(response);
          const arrayOfCards = $('.cards')[0];
          arrayOfCards.innerHTML = '';
          console.log(arr);
          if(arr.length > 0) {
            arr.forEach(({ id, name, price, producer, description, characters, 
                           category, subcategory, admin, user, sale, image}) => {
                arrayOfCards.append(cardResults(id, name, price, characters, subcategory, image));
            });
          } else {
            arrayOfCards.textContent = "Ничего не найдено";
          }
        }
      });
    }); 
});