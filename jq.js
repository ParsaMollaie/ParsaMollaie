
 function myFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode");
 }

function showAndHide(){

  $(document).ready(function(){
    $('.showbtn').click(function(){
         $('#myImg').show();
    });
      $('.hidebtn').click(function(){
         $('#myImg').hide();
    });
  });
}
