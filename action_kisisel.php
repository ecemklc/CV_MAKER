<?php

include_once 'inc/db.php';

$isim = $_POST['isim'];
$cinsiyet = $_POST['cinsiyet'];
$medeni_durum = $_POST['medeni_durum'];
$d_tarihi = $_POST['d_tarihi'];
$adres = $_POST['adres'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];

echo "<pre>";
print_r($_POST);
echo "</pre>"; exit;

$conn = new mysqli('127.0.0.1','root','','sitedb');
if($conn->connect_error){
    die('Bağlantı hatalı : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("INSERT INTO kisisel_bilgi(isim, cinsiyet, medeni_durum, d_tarihi, adres, tel, mail)
    values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssbsbs", $isim, $cinsiyet, $medeni_durum, $d_tarihi, $adres, $tel, $mail);
    $stmt->execute();
    echo "kaydedildi";
    $stmt->close();
    $conn->close();
}

?>