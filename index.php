 <?php
 $sayfa="anasayfa";
 include("inc/db.php");

 $sorgu=$baglanti->prepare(query:"select * from anasayfa");
 $sorgu->execute();
 $sonuc=$sorgu->fetch();
 $tanimlama=$sonuc["tanimlama"];
 $key=$sonuc["key"];
 include("inc/head.php");
 
 ?>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading"><?php echo $sonuc["ust_baslik"] ?></div>
                <div class="masthead-heading text-uppercase"><?php echo $sonuc["alt_baslik"] ?></div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?php echo $sonuc["link"] ?>"><?php echo $sonuc["link_metin"] ?></a>
            </div>
        </header>

<?php
include("inc/footer.php");
?>