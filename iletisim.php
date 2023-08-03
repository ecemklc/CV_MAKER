<?php
$sayfa="iletisim";
include("inc/db.php");
$tanimlama="iletisim_form";
$key="iletisim";

$sorgu=$baglanti->prepare(query: "SELECT * from iletisim");
$sorgu->execute();
$sonuc=$sorgu->fetch();
include("inc/head.php");
 ?>

        <!-- Contact-->
        <section class="page-section" id="iletisim">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase mt-3"><?= $sonuc["baslik"] ?></h2>
                    <h3 class="section-subheading text-muted"><?= $sonuc["alt_baslik"] ?></h3>
                </div>
                <form id="contactForm" name="sentMessage" method="POST" action="iletisim" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" name="ad_soyad" placeholder="İsim-Soyisim *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" name="mail" placeholder="Mail Adresiniz*" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" name="mesaj" placeholder="Mesajınız *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Gönder</button>
                    </div>
                </form>



                <?php
                if($_POST){
                    $sorgu=$baglanti->prepare(query: "INSERT INTO iletisim_form SET ad_soyad=:ad_soyad, mail=:mail, mesaj=:mesaj ");
                    $ekle=$sorgu->execute(
                        [
                            'ad_soyad'=>htmlspecialchars($_POST["ad_soyad"]),
                            'mail'=>htmlspecialchars($_POST["mail"]),
                            'mesaj'=>htmlspecialchars($_POST["mesaj"]),
                        ]
                    );


                    if($ekle){
                        echo "<script> alert('Mesajınız Başarıyla İletildi')</script>";
                }
            }
                ?>


            </div>
        </section>

<?php
include("inc/footer.php");
?>