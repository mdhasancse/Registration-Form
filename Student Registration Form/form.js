
function validateForm(){
    let x = document.forms["myForm"]["Fname"].value;
    if(x=="")
    {
      alert("Not a valid password");
}
}

// For Email
function mailfun(){
  let x1 = document.getElementById("Email").value;
  if (x1.includes('@'))
  {
    return true;
  }else{
    document.getElementById("errorEm").innerHTML="Not a valid Email";
    
  }
}
// Phone number should be 10 digit logic
function phonenumber()
{
   let y = document.getElementById("phn").value;
   if(y.toString().length == 10)
        {
       return true;
         }
       else
         {
          document.getElementById("errorPh").innerHTML="Not a valid Number";
         
         }
 }


// For password
 function password() 
{
  var sCount = 0;
  var cCount = 0;
  var spCount = 0;
  var nCount = 0;
  var p = document.getElementById("pass").value;
  for (let i=0; i<p.length; i++)
  {
    var char = p.charAt(i);
    var ascii = p.charCodeAt(i);
    if (char == char.toUpperCase()){
      sCount++;
    }
    else if (ascii >=48 && ascii <=57){
      nCount++;
    }
    
    else if (ascii == 64)
    {
      spCount++;
    }
    else{
      cCount++;
    }
  }
  var TotalAtleastOneCount = sCount+cCount+nCount+spCount;
  if((nCount >=1 && spCount >=1 && cCount>=1 && sCount>=1) && p.length == 8) // password should be 8 char
  {
    // alert("Not a valid password");
    document.getElementById("errorps").innerHTML="";
  }
  else{
    document.getElementById("errorps").innerHTML="Not a valid password";
  }
}

function repaswrd()
{
  var rePas = document.getElementById("rePaswrd").value;
  var pas = document.getElementById("pass").value;
  if (!(rePas == pas))
  {
    document.getElementById("errorRepss").innerHTML="Not a valid  Repassword";
  }
  else{
    document.getElementById("errorRepss").innerHTML="";
  }
  
}


