/*
The name field contains alphabet characters and character spaces.
The email field contains a user name part follows by “@” and a domain name part.
The user name contains word characters including hyphen (“-”) and period (“.”).
The domain name contains two to four address extensions.
Each extension is string of word characters and separated from the others by a period (“.”).
The last extension must have two to three characters.
The start date cannot be from today and the past.
The experience field cannot be empty (This can be done in HTML5)
*/

//form.script
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
  var emailexp = /^[\w\.-]+@([\w]+\.){1,3}([\w]){2,3}$/;
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
  if ( startDate < tomorrow) {
    alert('Please select a start date that\'s after today');
    document.getElementById("date").value = null;
    return false;
  };
}

//Menu script
function selectedMenu(){
  var justJavaSelection = document.querySelector('input[name="just-java"]:checked').value;
  var cafeAuLaitSelection = document.querySelector('input[name="cafe-au-lait"]:checked').value;
  var icedCappucinoSelection = document.querySelector('input[name="iced-cappuccino"]:checked').value;

  var justJavaQuantity = document.getElementById('just-java-qty').value;
  var cafeAuLaitQuantity = document.getElementById('cafe-au-lait-qty').value;
  var icedCappucinoQuantity = document.getElementById('iced-cappuccino-qty').value;

  var justJavaSubtotal = document.getElementById('just-java-subtotal');
  justJavaSubtotal.value = parseFloat(justJavaSelection) * parseFloat(justJavaQuantity);

  var cafeSubtotal = document.getElementById('cafe-au-lait-subtotal');
  cafeSubtotal.value = parseFloat(cafeAuLaitSelection) * parseFloat(cafeAuLaitQuantity);

  var icedCappuccinoSubtotal = document.getElementById('iced-cappuccino-subtotal');
  icedCappuccinoSubtotal.value = parseFloat(icedCappucinoSelection) * parseFloat(icedCappucinoQuantity);


  document.getElementById('total').value = parseFloat(justJavaSubtotal.value) + parseFloat(cafeSubtotal.value) + parseFloat(icedCappuccinoSubtotal.value);
}