function callfunction()
{


     var textBox = document.getElementById("id1");
       var textLength = textBox.value.length;

         if(textBox.value=='' || textLength<=8)
         {
          alert('Please enter 8 character long password');
         }


}
function validatePassword(){
    if(document.getElementById('id1').value != document.getElementById('id2').value){
        alert('Your Password Enterd is not matching');
        return true;
    }
    else{
        alert('You have enterd your password corretly');
        return false;
    }

}
function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }

function checkemail(){
    alert('Check your email we have sent you an email.');
}

function submitted(){
    alert('Your form succesfully submitted');

}

function backtopfunction()
{
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;

}

