


function validateForm() {
  var x = document.forms["myForm"]["stdName"].value;
  var y = document.forms["myForm"]["stdRegNum"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
 

  if (y == "") {
    alert("Regno must be filled out");
    return false;
  }
}