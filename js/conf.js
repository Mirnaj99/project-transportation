$(document).click(function(){

function book(e){
    let td = e.closest('td').parentNode.children[0].innerHTML; 
    console.log(td); 
    $.ajax({
     
      type: "POST",
      url: "../back-end/confirmation.php",
      data: {td:td},
    }).done(function (data) {
  prompt("hii");
      $("#demo").html(data);   });
  };
});