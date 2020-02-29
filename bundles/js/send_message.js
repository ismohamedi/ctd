function send_message()
{
   //First you need to do some validation
   var message = document.getElementById("message").name;
   var message = document.getElementById("file").name;
   //Password, Gender, etc...
   //Then start doing your validation the way you like it...
   /*if(password.length<6)
     {
         alert("Password is too short");
         return false;
     }
   */
   //Then when everything is valid, Post to the Server
   //This is a PHP Post Call
   $.post("send_message.php",{ message:message,file:file} ,function(data) {
       //more codes
   });
}