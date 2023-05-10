//! Javascript Form Validation
function validation() {
  if(checkfname()==false || checklname()==false) {
    return false;
  }
  return true;
}

function checkfname(){
  var fname= document.getElementById("fname").value;
  if(fname==""){
    document.getElementById("fnameerror").innerHTML=
    "!First Name Must be Mentioned";
      return false;
  }
  else{
      return true;
  }
}
function checklname(){
  var lname= document.getElementById("lname").value;
  if(lname==""){
    document.getElementById("lnameerror").innerHTML=
    "!Last Name Must be Mentioned";
      return false;
  }
  else{
      return true;
  }
}

//! Searching User Using AJAX
function fetchUsers(){
    var email = document.getElementById("email").value;
    
    var xttp= new XMLHttpRequest();
    xttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status== 200)
      {
     document.getElementById("print").innerHTML=this.responseText;
      }
    }
    
    
    
    xttp.open("POST", "http://localhost/webTechnology/Web-Technology-Project-AIUB/admin/control/searchUser_control.php", true);
    xttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xttp.send("email="+email);
}


