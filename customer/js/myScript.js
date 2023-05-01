function validation() {
    var fname = document.getElementById("fname").value;
    if(fname=="") {
        document.getElementById("fnameError").innerHTML="First Name is required!";
        return false;
    }
    return true;
}