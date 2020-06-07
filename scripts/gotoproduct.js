$(document).ready(() => {
  /*const btn = document.querySelector('.info-btn');
  const id = btn.attr('data-goods-id');*/

  $(document).on('click','.info-btn', () =>{
    /*let keyword = $("#search-inp").val();
    localStorage.setItem('query', keyword);
    window.location.href = 'results.php';*/

    let id = $(this).attr('data-goods-id');
    localStorage.setItem('currentProd', id);
    window.location.href = 'product.php';

   });

   /*$.ajax({
       url: 'connection/item.php',
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
   });*/
});