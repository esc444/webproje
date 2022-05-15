<?php 
 function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
include("ayar.php");
ob_start();
session_start();
 
$kadi = $_POST['kadi'];
$sifre = $_POST['sifre'];
 

if((isset($_POST)))  {

    $_SESSION["login"] = "true";
    $_SESSION["user"] = $kadi;
    $_SESSION["pass"] = $sifre;
    if($kadi=="g211210587" && $sifre=="12345"){
        
        alert("OŞGELDİNİZZZZZZZZZ");
        header("Refresh: 0; url=index.html");
        
    }
    
    


else {
    if($kadi=="" or $sifre=="") {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}
}
 
ob_end_flush();
?>