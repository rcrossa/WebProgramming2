function validanumero($_POST) {
   var ok =true;
   var msg = "Debes escribir un numero";
   var msg1= "escribiste numero";
   if($_POST['number'].value !=/^[0-100]$/){
    alert(msg);
    return ok;
   }else{
       alert(msg2);
       return ok;
   }
}

