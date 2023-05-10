//! Javascript Form Validation
function validation() {
  if(checkfname()==false || checklname()==false || checkUserName()==false || checkDateOfBirth()==false || checkPhoneNumber()==false || checkEmail()==false || checkGender()==false || checkCity()==false || checkZipCode()== false || checkAddress()==false || checkPassword()==false || checkConfirmPassword()==false || checkFile()==false) {
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
  else if(!fname.match(/[A-Z]/)) {
    document.getElementById("fnameerror").innerHTML=
    "!First letter of First Name must be Uppercase";
      return false;
  }
  else if(/\s/.test(fname)) {
    document.getElementById("fnameerror").innerHTML=
    "!Sapces in the First Name is not a valid";
      return false;
  }
  else if(/[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/.test(fname)) {
    document.getElementById("fnameerror").innerHTML=
    "!Any special character is not allowed in First Name";
      return false;
  }
  else{
      return true;
  }
}

//? Last Name
function checklname(){
  var lname= document.getElementById("lname").value;
  if(lname==""){
    document.getElementById("lnameerror").innerHTML=
    "!Last Name Must be Mentioned";
      return false;
  }
  else if(!lname.match(/[A-Z]/)) {
    document.getElementById("lnameerror").innerHTML=
    "!First letter of Last Name must be Uppercase";
      return false;
  }
  else if(/\s/.test(lname)) {
    document.getElementById("lnameerror").innerHTML=
    "!Sapces in the Last Name is not a valid";
      return false;
  }
  else if(/[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/.test(lname)) {
    document.getElementById("lnameerror").innerHTML=
    "!Any special character is not allowed in Last Name";
      return false;
  }
  else{
      return true;
  }
}

//? user Name 
function checkUserName(){
  var userName= document.getElementById("UserName").value;
  if(userName==""){
    document.getElementById("usernameerror").innerHTML=
    "!User Name Must be Mentioned";
      return false;
  }
  
  else if(/\s/.test(userName)){ 
    document.getElementById("usernameerror").innerHTML=
    "!Sapces in the User Name is not a allowed";
      return false;
  
  }
  else if(userName.length<7) {
    document.getElementById("usernameerror").innerHTML=
    "User Name must be at least 7 characters long";
      return false;
  }
  else{
      return true;
  }
}

//? Date of Birth
function checkDateOfBirth(){
  var dateOfBirth= document.getElementById("dateOfBirth").value;
  if(dateOfBirth==""){
    document.getElementById("dateOfBirthError").innerHTML=
    "!Birth Date Must be Mentioned";
      return false;
  }
  
  else{
      return true;
  }
}

//? Phone Number
function checkPhoneNumber(){
  var phoneNumber= document.getElementById("phoneNumber").value;
  if(phoneNumber==""){
    document.getElementById("phoneNumberError").innerHTML=
    "!Phone Number Must be Mentioned";
      return false;
  }
  
  else if(/\s/.test(phoneNumber)){ 
    document.getElementById("phoneNumberError").innerHTML=
    "!Sapces in the Phone Number is not a allowed";
      return false;
  
  }
  else if(!phoneNumber.length==11) {
    document.getElementById("phoneNumberError").innerHTML=
    "Phone Number must be  11 characters long";
      return false;
  }
  else if(!phoneNumber.match(/^[0-9]+$/)) {
    document.getElementById("phoneNumberError").innerHTML=
    "!Phone Number only contains numeric characters";
      return false;
  }
  else{
      return true;
  }
}
//? Email
function checkEmail(){
  var email= document.getElementById("email").value;
  if(email==""){
    document.getElementById("emailError").innerHTML=
    "!Email Must be Mentioned";
      return false;
  }
  else if(!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
    document.getElementById("emailError").innerHTML=
    "!Invalid Email Format";
      return false;
  }
  
  else{
      return true;
  }
}

//? Gender
function checkGender(){
  if(document.getElementById("gender").checked==false)
  {
    document.getElementById("genderError").innerHTML=
    "!Gender must be specified";
    return false;
  }
  
  else{
      return true;
  }
}

//? City
function checkCity(){
  var city = document.getElementById("city").value;
  if(city=="") {
    document.getElementById("cityError").innerHTML=
    "!City must be specified";
    return false;
  }

  else{
      return true;
  }
}

//? Zip Code
function checkZipCode(){
  var zipCode = document.getElementById("zipCode").value;
  if(zipCode=="") {
    document.getElementById("zipCodeError").innerHTML=
    "!Zip Code must be specified";
    return false;
  }

  else{
      return true;
  }
}

//? Address
function checkAddress(){
  var address = document.getElementById("address").value;
  if(address=="") {
    document.getElementById("addressError").innerHTML=
    "!Address must be specified";
    return false;
  }
  else{
      return true;
  }
}

//? Password
function checkPassword() {
  var password = document.getElementById("password").value;
  if(password =="") {
    document.getElementById("passwordError").innerHTML = 
    "!Password must be a mentioned";
    return false;
  }
  else if(password.length<8) {
    document.getElementById("passwordError").innerHTML = 
    "!Password must be at least 8 Characters long";
    return false;
  }
  else if(!password.match(/[0-9]/)) {
    document.getElementById("passwordError").innerHTML = 
    "!Password must be contain at least 1 Numeric Number";
    return false;
  }
  else if(!password.match(/[A-Z]/)) {
    document.getElementById("passwordError").innerHTML = 
    "!Your Password Must Contain At Least 1 UpperCase Letter";
    return false;
  }
  else if(!password.match(/[a-z]/)) {
    document.getElementById("passwordError").innerHTML = 
    "!Your Password Must Contain At Least 1 lowerCase Letter";
    return false;
  }
  else if(!password.match(/[\'^£$%&*()}{@#~?><>,|=_+¬-]/)) {
    document.getElementById("passwordError").innerHTML = 
    "!Your Password Must Contain At Least 1 special characters";
    return false;
  }
  else {
    return true;
  }
}

//? Confirm Password
function checkConfirmPassword() {
  var password =document.getElementById("password").value;
  var confirmPassword = document.getElementById("confirmPassword").value;
  if(confirmPassword=="") {
    document.getElementById("confirmPasswordError").innerHTML = 
    "!Confirm Password Can't be blank";
    return false;
  }
  else if(confirmPassword!=password) {
    document.getElementById("confirmPasswordError").innerHTML = 
    "!Password did not match";
    return false;
  }
  else {
    return true;
  }
}

//? File
function checkFile() {
  var file = document.getElementById("file").value;
  if(file=="") {
    document.getElementById("fileError").innerHTML = 
    "!Please upload a file";
    return false;
  }
  else {
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


