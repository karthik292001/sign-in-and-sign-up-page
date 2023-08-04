function insert(){
    var name=document.getElementById("name").value
    var email=document.getElementById("email").value
    var pwd=document.getElementById("pwd").value
    var rpwd=document.getElementById("rpwd").value
    var nameregex = /^[a-zA-Z\s]*$/;
    var mailregex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email == "" || name == "" || pwd == "" || rpwd == "" )
    {
        alert("All fields are mandatory");
        return false;
    }
    if(!name.match(nameregex))
    {
        alert("Enter valid name");
        return false;
    }
    if(!email.match(mailregex))
    {
        alert("Enter valid E-mail");
        return false;
    }
    if(pwd.length < 8)
    {
        alert("Password must be atleast 8 characters");
        return false;
    }
    if(pwd != rpwd)
    {
        alert("password is mismatching");
        return false;
    }

}
