function showLoginForm(){
  document.getElementById('myDemo').style.display = 'block';
  document.getElementById('myDemo2').style.display = 'none';
}

function showRegistrationForm(){
  document.getElementById('myDemo').style.display = 'none';
  document.getElementById('myDemo2').style.display = 'block';
}

// toogle funtion for notification element and harmbuger
function myFunction() {
  console.trace();
   var element = document.getElementById("myDIV");
  element.classList.toggle("mystyle");
}