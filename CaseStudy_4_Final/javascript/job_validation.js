//Form script
function validateForm(event){
  if(validateName() == false){
    event.preventDefault();
  }else if(validateEmail() == false){
    event.preventDefault();
  }else if(checkStartDate() == false){
    event.preventDefault();
  }
}

function validateName(){
  var name = document.getElementById("name") .value;
  var nameRegex = /^([A-za-z\s]+)$/;
  if (!nameRegex.test(name)) {
    alert('Please enter a valid name');
    document.getElementById("name").value = "";
    return false;
  }
}

function validateEmail(){
  var email = document.getElementById("email").value;
  var emailexp = /^[\w\.-]+@([\w]+\.){1,3}([a-z]){2,3}$/;
  if(emailexp.test(email)) {
    return true;
  } else {
    alert('Not a valid email format.');
    document.getElementById("email").value = "";
    return false
  }
}

function checkStartDate(){
  var date = document.getElementById('date').valueAsDate;
  var startDate = new Date(date);
  var today = new Date();
  var tomorrow = new Date();
  tomorrow.setDate(today.getDate() + 1);
  if ( startDate < today) {
    alert('Please select a start date that\'s after today');
    document.getElementById("date").value = null;
    return false;
  };
}
