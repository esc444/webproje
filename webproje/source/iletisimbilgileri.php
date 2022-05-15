<?php 
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
     }
    if((isset($_POST))){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $message = $_POST['message'];



       if($name=="" or $email =="" or $tel=="" or $message=="" )
       {
        alert('Eksik Bilgi Girdiniz.');
        header("Refresh: 0; url=iletisim.html");
       }
       else {
           
        alert(" Mesaj isteğiniz alınmıştır : İsim : $name  E-mail : $email Numara : $tel Mesajınız : $message ");

        header("Refresh: 0; url=iletisim.html");
       }
}

       
?>