<?php
 $sayfa="hakkımda";
 include("inc/db.php");

$sorgu=$baglanti->prepare(query:"select * from hakkimda");
$sorgu->execute();
$sonuc=$sorgu->fetch();
$tanimlama=$sonuc["tanimlama"];
$key=$sonuc["key"];
include("inc/head.php");
?>

        <!-- About-->
        <section class="page-section" id="hakkimda">
            <div class="container text-white">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase mt-3"><?= $sonuc["baslik"] ?></h2>
                </div>
                <ul class="timeline">


<?php
$sorgu2 = $baglanti->prepare(query:"select * from hakkimda_timeline WHERE aktif=1 ORDER BY sira");
$sorgu2->execute();
$taraf=false;
while ($sonuc2 = $sorgu2->fetch()) {
?>

                    <li <?php if($taraf==true) echo 'class="timeline-inverted"'; ?>>
                        <div class="timeline-image bg-dark"><img class="rounded-circle img-fluid" src="foto/<?= $sonuc2["foto"] ?>" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading"><?= $sonuc2["subhead"] ?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?= $sonuc2["yazi"] ?></p></div>
                        </div>
                    </li>

<?php
$taraf=!$taraf;
}
?>



                </ul>
            </div>
        </section>
    


<?php
include("inc/footer.php");
?>