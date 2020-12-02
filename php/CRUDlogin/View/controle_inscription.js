function nom_prenom()
{
var nom=f.FirstName.value;
var prenom=f.LastName.value;
if (nom==prenom)
alert ( "Le nom et le prenom sont égaux!") ;

}

function password()
{
    var pw = document.getElementById("inputPassword").value;  
    var pw2 = document.getElementById("inputConfirmPassword").value;  
  if(pw != pw2)  
  {   
    alert("Passwords did not match");  
  } 
  //check empty password field  
  if(pw == "") {  
     document.getElementById("message").innerHTML = "**Fill the password please!";  
     return false;  
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
     return false;  
  }  
  
//maximum length of password validation  
  if(pw.length > 15) {  
     document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
     return false;  
  } else {  
     alert("Password is correct");  
  }  
}

