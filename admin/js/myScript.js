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