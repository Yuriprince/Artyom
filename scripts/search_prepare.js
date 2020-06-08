$(document).ready(() => {
  $(document).on('click','.s-img', () =>{
   let keyword = $("#search-inp").val();
   localStorage.setItem('query', keyword);
   window.location.href = 'results.php';
    //alert(keyword);
    /*$.ajax({
        url: 'connection/get_items.php',
        method: 'post',
        data: { keyword },
        success: function(response)
        {
          const arr = JSON.parse(response);
          console.log(arr);
          localStorage.setItem('array', arr);
          window.location.href = 'results.php';
        }
    });*/
  });
}); 