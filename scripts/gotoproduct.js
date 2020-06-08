$(document).ready(() => {
  $(document).on('click','.info-btn', (e) =>{
    let id = e.target.getAttribute("data-goods-id");
    localStorage.setItem('currentProd', id);
    window.location.href = 'product.php';

   });
});