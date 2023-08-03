<?php
$sayfa= 'action';
$host = 'localhost';
$dbname = 'sitedb';
$username = 'root';
$password = '';
$charset = 'utf8mb4_turkish_ci';

if(isset($_POST["action"])){
$number = count($_POST["action"]);
if($number > 1)
{
    for($i=0; $i<$number; $i++)
    {
        if(trim($_POST["action"] [$i]) != '')
        {
            $sql = "INSERT INTO is_deneyim(is_isim, is_baslangic, is_ayrilis, is_neden) VALUES('".mysqli_real_escape_string($connect, $_POST["action"] [$i])."') ";
            mysqli_query($connect, $sql);
        }
    }
    echo 'Bilgileriniz Başarıyla Ulaştı';
}

else
{
    echo "Lütfen İş Deneyiminizi Giriniz";
}
}
?>