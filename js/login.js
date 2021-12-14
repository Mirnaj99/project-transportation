
$(document).ready(function(){

$("#login").click(function (e) {
  e.preventDefault();
  let userpass = $("#userpass").val(); 
  let useremail = $("#useremail").val(); 

  $.ajax({
    type: "POST",
    url: "../back-end/check-login.php",
    data: { userpass: userpass, useremail: useremail },
  }).done(function (data) {
    $("#errormsg").html(data); //echo
  });
});
})