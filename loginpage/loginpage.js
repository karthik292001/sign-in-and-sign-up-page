function login(){
    var email = document.getElementById("email").value
    var pwd = document.getElementById("pwd").value
    var emailregex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email == "" || pwd == "")
    {
        alert("All fields are mandatory");
        return false;
    }
    if(!email.match(emailregex))
    {
        alert("Enter valid E-mail");
        return false;
    } 
}