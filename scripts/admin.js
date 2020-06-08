$(document).ready(() => {
  let keyword = localStorage.getItem('query');

  const cardResults = (id, name, price, characters, img) => {
   const card = document.createElement('div');
   card.innerHTML = 
     `<div class="product-card category">
      <img src="assets/img/${img}" alt="tovar">
      <p class="tovar-desc">${name}</p>
      <p class="characters">${characters}</p>
      <p class="price">${price} p. </p>

      <div class="p-flex">
        <button data-id ="${id}" class="btn info-btn vis"><i class="fa fa-pencil i-cntr" aria-hidden="true"></i></button>
        <button data-id ="${id}" class="btn info-btn vis"><i class="fa fa-trash i-cntr" aria-hidden="true"></i></button>
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
               arrayOfCards.append(cardResults(id, name, price, characters, image));
           });
         } else {
           arrayOfCards.textContent = "Ничего не найдено";
         }
       }
   });
});