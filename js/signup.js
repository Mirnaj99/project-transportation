
  $(document).ready(function(){
$("#signup").click(function (e) {
   e.preventDefault();
    
  var signuppassword = $("#signuppassword").val(); 

  var signupemail = $("#signupemail").val(); 

  var phone = $("#phone").val();
  var re_password = $("#re_password").val();
  var name = $("#name").val();
  var username = $("#username").val();
  $.ajax({
    type: "POST",
    url: "../back-end/check-signup.php",
    data: {

      signuppassword: signuppassword,
      signupemail: signupemail,
      phone: phone,
      re_password: re_password,
      name: name,
      username: username,
    },
  }).done(function (data) {
  
    console.log("DATA: " + data);
    if(data.startsWith("Location: ")){
      
      window.location.href = "../html/main.php";
    } else {
      document.getElementById("errormsg").style.visibility="visible";
      $("#errormsg").html(data); //
    }
    
  });
});
})