<?php 
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
     }
    if((isset($_POST))){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $message = $_POST['message'];

        if (strpos($email, "@") != true) {
            alert("Lütfen geçerli bir email adresi giriniz.");
            header("Refresh: 0; url=iletisim.html");
            exit;
        }
        

       if($name=="" or $email =="" or $tel=="" or $message=="" )
       {
            alert('Eksik Bilgi Girdiniz.');
            header("Refresh: 0; url=iletisim.html");
       }
       else {
           
            alert(" Mesaj isteğiniz alınmıştır : İsim : $name  E-mail : $email Numara : $tel Mesajınız : $message ");
            $dosya = fopen ("iletisim.txt" , 'w'); //dosya oluşturma işlemi
            $yaz=" İsim : $name  E-mail : $email Numara : $tel Mesajınız : $message "; //dosya içine ne yazmak istiyorsanız buraya yazın. $değer
            fwrite ( $dosya , $yaz ) ;
            fclose ($dosya);

            header("Refresh: 0; url=iletisim.html");
       }
}

       
?>