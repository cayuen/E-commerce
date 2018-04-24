/* Function gathered from https://www.w3resource.com/javascript/form/credit-card-validation.php */

function checkCreditCard(inputtxt)
{
  alert("Clicked");
  var creditcard = /^(?:3[47][0-9]{13})$/;
  if(inputtxt.value.match(creditcard)) {
      alert("credit card: ", inputtxt);
      return true;
  }
  
  else {
    alert("Not a valid Amercican Express credit card number!");
    return false;
  }
  
}