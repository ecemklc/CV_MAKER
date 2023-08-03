<?php
$sayfa="kisisel_bilgi";
include("inc/db.php");
$tanimlama="kisisel_bilgi";
$key="kisisel_bilgi";

$sorgu=$baglanti->prepare(query: "SELECT * from kisisel_bilgi");
$sorgu->execute();
$sonuc=$sorgu->fetch();
 ?>

<section class="page-selection" id="kisisel_bilgi_selection">
  <div id="kisisel_bilgi_div">
    <form name="kisisel_bilgi_form" id="kisisel_bilgi_form" method="POST" action="action_kisisel.php">
      <table class="table_kisisel" id="table_kisisel">
        <h1>Kişisel Bilgiler</h1>
        <div class="form-group p-3">
          <label for="isim">Adınız Soyadınız:</label>
          <input type="text" class="form-control col-5 p-2" id="isim" name="isim[]" required="required">
        </div>
        <div class="form-group p-3">
          <legend class="col-form-label">Cinsiyetiniz:</legend>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="cinsiyet[]" value="k">
            <label class="form-check-label" for="kadın">
              Kadın
            </label>
          </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="cinsiyet[]" value="e">
            <label class="form-check-label" for="erkek">
              Erkek
            </label>
          </div>
        </div>
        <div class="form-group p-3">
          <legend class="col-form-label" name="medeni_durum" id="medeni_durum">Medeni Durumunuz:</legend>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="medeni_durum[]" value="e">
            <label class="form-check-label" for="evli">
              Evli
            </label>
          </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="medeni_durum[]" value="b">
            <label class="form-check-label" for="bekar">
              Bekar
            </label>
          </div>
        </div>
        <div class="form-group p-3">
          <label for="d_tarihi">Doğum Tarihiniz:</label>
          <input type="date" class="form-control col-5 p-2" id="d_tarihi" name="d_tarihi[]" required="required">
        </div>
        <div class="form-group p-3">
          <label for="adres">Adresiniz:</label>
          <input type="text" class="form-control col-5 p-2" id="adres" name="adres[]">
        </div>
        <div class="form-group p-3">
          <label for="tel">Telefon Numaranız:</label>
          <input type="tel" class="form-control col-5 p-2" id="tel" name="tel[]" placeholder="lütfen 0 ile başlamayınız">
        </div>
        <div class="form-group p-3">
          <label for="mail">Mail Adresiniz:</label>
          <input type="email" class="form-control col-5 p-2" id="mail" name="mail[]" required="required">
        </div>

        <button type="submit" class="btn btn-light" value="kaydet" name="kaydet_kisisel" onclick="$('#kisisel_bilgi_form')" id="kaydet_kisisel">Kaydet</button>

      </table>
    </form>

  </div>
  </selection>