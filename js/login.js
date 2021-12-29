
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
    console.log("DATA: " + data);
  if(data.startsWith("Location: ")){
    // url = data.split(" ")[1];
    // console.log("URL: " + url);
    document.location.reload();
    // window.location.replace(url);
  } else {
    document.getElementById("errormsg").style.visibility="visible";
    $("#errormsg").html(data); //
  }
	
  });
});
})