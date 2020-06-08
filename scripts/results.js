$(document).ready(() => {
  $(document).on('click','.menu-item', () =>{
    /*let keyword = $("#search-inp").val();
    localStorage.setItem('query', keyword);
    window.location.href = 'results.php';*/

    $.ajax({
      url: 'connection/item_by_category.php',
      method: 'post',
      data: { category },
      success: function(response)
      {
        $(this).attr('id', 'selected1');
      }
    });
  });  
});