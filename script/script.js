function copy_input($input) {
  $input.focus();
  $input.select();
  try {
    let successful = document.execCommand("copy");
  } catch (err) {
    console.error("Unable to copy");
  }
}

$(".copy-input").on("click", function (e) {
  copy_input(this);
});

$(".copy__btn").on("click", function (e) {
  e.preventDefault();
  let value = $(".copy-input").val();
  if (!value){
    alert('Пустое поле');
  }else{
    alert('Ссылка скопирована');
  }
  let copy_id = $(this).data("copy-id");
  copy_input($("#" + copy_id));
});



  // $("#data-form ").submit(function (event) {


  //   $.ajax({
  //     type: "GET",
  //     dataType: "json",
  //     url: "/request.php",
  //     success: function (data) {
  //       if(!data.error ){
  //         console.log(JSON.stringify(data));
  //       }
        
  //     },
  //     error: function (error) {
 
  //     },
  //   });
  // });



$(document).ready(function(){
  $(".link__form").validate({
    rules: {
      cut_link: {
        required: true,
      }
    },
    messages: {
      cut_link: "Введите ссылку",
    }
})
})


 