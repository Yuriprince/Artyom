$(document).ready(() => {
  let id = localStorage.getItem('currentProd');

   $.ajax({
       url: 'connection/item.php',
       method: 'post',
       data: { id },
       success: function(response)
       {
         const obj = JSON.parse(response)[0];
         console.log(obj);
         const name = $('.center.article')[0];
         const description = $('.center.description');

         name.textContent = obj.name;
         //alert(obj.name);
         description.textContent = obj.description;

         const type = $('.mytype')[0];
         type.textContent = `Тип: ${obj.characters}`;

         const price = $('.p-price')[0];
         price.textContent = obj.price + "₽";

         const desc = $('.center.description')[0];
         desc.textContent = obj.description;

         const img = $('.img').attr( 'src','assets/img/' + obj.image);
         //img.attr( 'src',obj.image);
       }
   });

   $(document).on('click','.info-btn', (e) =>{

    let name = localStorage.getItem('name', $('.center.description')[0]);
    let image = localStorage.getItem('image', $('.img')[0]);
    let price = localStorage.getItem('price', $('.p-price')[0]);


    const cartArray = localStorage.getItem('mycart') ? JSON.parse(localStorage.getItem('mycart')) : [];

    cartItem = {
      id: localStorage.getItem('currentProd'),
      name: $('.center.article')[0].textContent,
      price: $('.p-price')[0].textContent,
      img: $('.img').attr('src'),
      kolvo: 1,
    };

    cartArray.push(cartItem);
    localStorage.setItem('mycart', JSON.stringify(cartArray));

    window.location.href = 'cart.php';

   });
});