function nom_prenom1()
{
   var bt=document.getElementById('loginBtn');

  


   var nom=f.FirstName.value;
var prenom=f.LastName.value;
if (nom==prenom){

bt.disabled=true;
alert ( "Le nom et le prenom sont égaux!") ;
return false;}

else
bt.disabled=false;
}
function nom_prenom()
{
   var bt=document.getElementById('loginBtn');

  


   var nom=f.FirstName.value;
var prenom=f.LastName.value;
if (nom==prenom){

bt.disabled=true;
alert ( "Le nom et le prenom sont égaux!") ;
return false;}
else if (nom.length<3 || prenom.length<3){

bt.disabled=true;
alert ( "Le nom ou le prenom sont faible!") ;
return false;
}
else
bt.disabled=false;
}

function password()
{
   var bt=document.getElementById('loginBtn');
    var pw = document.getElementById("inputPassword").value;  
    var pw2 = document.getElementById("inputConfirmPassword").value;  
  if(pw != pw2)  
  {   
   alert ("Passwords did not match");  
    bt.disabled=true;
    return false;
  } 
  //check empty password field  
  if(pw == "") {  
   alert("**Fill the password please!");  
     bt.disabled=true;
     return false;  
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
   alert( "**Password length must be atleast 8 characters");  
     bt.disabled=true;
     return false;  
  }  
  
//maximum length of password validation  
  if(pw.length > 15) {  
   alert( "**Password length must not exceed 15 characters");  
     bt.disabled=true;
     return false;  
  } 
  bt.disabled=false;
}

