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
function validateEmail(){
  var email = document.getElementById('email').value;

  // if email have @
  if (email.indexOf('@') != -1){
    // split email
    var username = email.split('@')[0];
    var domain = email.split('@')[1];
    console.log(username, domain);

    //check if username contains hyphen and period
    if (username.indexOf('-') == -1){
      alert("Please add hyphen '-' to user name");
    }

    if (username.indexOf('.') == -1){
      alert("Please add dot '.' to user name");
    }

    //check domain name
    if(domain.indexOf('.') != -1){
      var domainArr = domain.split('.');

      // check the number of address extensions
      if(domainArr.length < 2 || domainArr.length > 4){
        alert('domain name contains two to four address extensions');
      }

      // check the last extension
      if(domainArr[domainArr.length - 1].length < 2 || domainArr[domainArr.length - 1].length > 3){
        alert('last extension must have two to three characters.');
      }
    } else {
      alert('please input correct domain extension');
    }
  } else {
    alert('please add @ to email');
  }
}

function allLetter(inputtxt){
  // console.log(inputtxt);
  var letters = /^[a-zA-Z\s]*$/;

  if(inputtxt.match(letters)){
    return true;
  }
  else{
    // alert("message");
    return false;
  }
}
function validateName(){
  var name = document.getElementById('name').value;
  // console.log(name);
  if (allLetter(name)) {
    // alphabet letters found
    console.log("correct");
  } else {
    alert("Name only accept letters and space");
  }
}
// input listener for email
// document.getElementById('email').addEventListener('onblur', validateEmail);
function checkStartDate(){
  var getDate = document.getElementById('date').value;
  // console.log(getDate);
  // console.log(typeof(getDate));
  var startDate = new Date(getDate);
  var todayDate = new Date();
  var tomorrowDate = new Date();
  tomorrowDate.setDate(todayDate.getDate() + 1);
  // console.log(tomorrowDate);
  if (startDate < tomorrowDate){
    alert("Start date cannot be today or in the past");
  }
}

function selectedMenu(){
  var justJavaSelection = document.querySelector('input[name="just-java"]:checked').value;
  var cafeAuLaitSelection = document.querySelector('input[name="cafe-au-lait"]:checked').value;
  var icedCappucinoSelection = document.querySelector('input[name="iced-cappuccino"]:checked').value;

  // console.log(justJavaSelection);
  // console.log(cafeAuLaitSelection);
  // console.log(icedCappucinoSelection);

  var justJavaQuantity = document.getElementById('just-java-qty').value;
  var cafeAuLaitQuantity = document.getElementById('cafe-au-lait-qty').value;
  var icedCappucinoQuantity = document.getElementById('iced-cappuccino-qty').value;

  // console.log(justJavaQuantity);
  // console.log(cafeAuLaitQuantity);
  // console.log(icedCappucinoQuantity);

  var justJavaSubtotal = document.getElementById('just-java-subtotal');
  justJavaSubtotal.value = parseFloat(justJavaSelection) * parseFloat(justJavaQuantity);

  var cafeSubtotal = document.getElementById('cafe-au-lait-subtotal');
  cafeSubtotal.value = parseFloat(cafeAuLaitSelection) * parseFloat(cafeAuLaitQuantity);

  var icedCappuccinoSubtotal = document.getElementById('iced-cappuccino-subtotal');
  icedCappuccinoSubtotal.value = parseFloat(icedCappucinoSelection) * parseFloat(icedCappucinoQuantity);


  document.getElementById('total').value = parseFloat(justJavaSubtotal.value) + parseFloat(cafeSubtotal.value) + parseFloat(icedCappuccinoSubtotal.value);
}

function validateForm(){
  validateName();
  validateEmail();
  checkStartDate();
}
