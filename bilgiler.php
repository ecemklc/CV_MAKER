<?php
$sayfa = "bilgiler";
include("sidebar.php");

?>


<div class="container">
  <div class="row">
    <div class="col-10 text-white px-5 my-5" style="padding: 225px 0; font-size: 1.25rem; margin-left: auto; ">
      <div id="bilgiler" class="text-white card-shadow" style="padding-top: 150px">


<?php
include("kisisel_bilgi.php");
?>

                    <div id="ogrenim_bilgi">
                      <form name="ogrenim_bilgi">
                        <table class="table_ogrenim" id="table_ogrenim">
                          <h1>Öğrenim Bilgileri</h1>
                          <div class="form-group p-3">
                            <label for="lise">Lise:</label>
                            <input type="text" class="form-control col-5 p-2" id="lise" name="lise[]">
                          </div>
                          <div class="form-group p-3">
                            <label for="uni">Üniversite:</label>
                            <input type="text" class="form-control col-5 p-2" id="uni" name="uni[]">
                          </div>
                          <div class="form-group p-3">
                            <label for="ylisan">Yüksek Lisans:</label>
                            <input type="text" class="form-control col-5 p-2" id="ylisans" name="ylisans[]">
                          </div>

                          <button type="submit" class="btn btn-light" value="kaydet" name="kaydet_ogrenim" id="kaydet_ogrenim">Kaydet</button>

                        </table>
                      </form>
                    </div>


                    <div id="is_deneyim">
                      <form name="is_deneyim" id="is_deneyim">
                        <table class="table_is" id="table_is">
                          <h1>İş Deneyimi</h1>
                          <div class="form-group p-3">
                            <label for="is_isim">Daha Önce Çalıştığınız Şirketin Adı:</label>
                            <input type="text" class="form-control col-5 p-2" id="is_isim" name="is_isim[]">
                          </div>
                          <div class="form-group p-3">
                            <label for="is_baslangic">Başlangıç Tarihiniz:</label>
                            <input type="date" class="form-control col-5 p-2" id="is_baslangic" name="is_baslangic[]">
                          </div>
                          <div class="form-group p-3">
                            <label for="is_ayrilis">İşten Ayrılış Tarihiniz:</label>
                            <input type="date" class="form-control col-5 p-2" id="is_ayrilis" name="is_ayrilis[]">
                          </div>
                          <div class="form-group p-3">
                            <label for="is_neden">İşten Ayrılma Sebebiniz:</label>
                            <textarea input type="text" class="form-control col-5 p-2" id="is_neden" name="is_neden[]"></textarea>
                          </div>

                          <button class="btn btn-dark add_item_btn" name="ekle_is" id="ekle_is">+</button>

                          <div id="is_dynamic" name="is_dynamic">
                          </div>

                          <button type="submit" class="btn btn-light" value="kaydet" name="kaydet_is" id="kaydet_is">Kaydet</button>

                        </table>
                      </form>
                    </div>


                    <div id="dil">
                      <form name="dil" id="dil">
                        <table class="table_dil" id="table_dil">
                          <h1>Yabancı Dil Bilgisi</h1>
                          <div class="form-group p-3">
                            <label for="dil_bilgisi">Bildiğiniz Yabancı Dil:</label>
                            <input type="text" class="form-control col-5 p-2" id="dil_bilgisi" name="dil_bilgisi[]">
                          </div>
                          <tr></tr>
                          <div>
                            <label for="dil_seviyesi" class="form-label">Seviyeniz:</label>
                            <input type="range" class="form-range col-5 p-2" min="0" max="5" id="dil_seviyesi" name="dil_seviyesi[]">
                          </div>

                          <button class="btn btn-dark add_item_btn" name="ekle_dil" id="ekle_dil">+</button>

                          <div id="dil_dynamic" name="dil_dynamic">
                          </div>

                          <button type="submit" class="btn btn-light" value="kaydet" name="kaydet_dil" id="kaydet_dil">Kaydet</button>

                        </table>
                      </form>
                    </div>


                    <div id="sertifika">
                      <form name="sertifika">
                        <table class="table_sertifika" id="table_sertifika">
                          <h1>Sertifika / Eğitim</h1>
                          <div class="form-group p-3">
                            <label for="sertifika">Aldığınız Sertifika / Eğitim:</label>
                            <textarea input type="text" class="form-control col-5 p-2" id="sertifika" name="sertifika[]"></textarea>
                          </div>

                          <button type="submit" class="btn btn-light" value="kaydet" name="kaydet_sertifika" id="kaydet_sertifika">Kaydet</button>

                        </table>
                      </form>
                    </div>


                    <div id="referans">
                      <form name="referans" id="referans">
                        <table class="table_referans" id="table_referans">
                          <h1>Referansınız</h1>
                          <div class="form-group p-3">
                            <label for="referans">Referansınız:</label>
                            <input type="text" class="form-control col-5 p-2" id="referans" name="referans[]">
                          </div>

                          <button class="btn btn-dark add_item_btn" name="ekle_referans" id="ekle_referans">+</button>

                          <div id="referans_dynamic" name="referans_dynamic">
                          </div>

                          <button type="submit" class="btn btn-light" value="kaydet" name="kaydet_referans" id="kaydet_referans">Kaydet</button>

                        </table>
                      </form>
                    </div>

                    <div id="onyazi">
                      <form name="onyazi">
                        <table class="table_onyazi" id="table_onyazi">
                          <h1>Önyazı</h1>
                          <div class="form-group p-3">
                            <label for="onyazi">CV'nizi İleteceğiniz Kuruma Önyazınız:</label>
                            <textarea input type="text" class="form-control col-5 p-2" id="onyazi" name="onyazi[]"></textarea>
                          </div>

                          <button type="submit" class="btn btn-light" value="kaydet" name="kaydet_onyazi" id="kaydet_onyazi">Kaydet</button>

                        </table>
                      </form>
                    </div>

                </div>
                <!--bilgilerid-->
              </div>
              <!--col-->
            </div>
            <!--row-->
          </div>
          <!--container-->



          <script src="js/jquery-3.6.0.js">
          </script>


          <script>
            $('#kaydet_ogrenim').click(function() {
              $.ajax({
                url: "action.php",
                method: "POST",
                data: $('#ogrenim_bilgi').serialize(),
                success: function(data) {
                  alert(data);
                  $('#ogrenim_bilgi')[0].reset();
                }
              });
            });



            $(document).ready(function() {
              var i = 1;
              $('#ekle_is').click(function() {
                i++;
                $('#is_dynamic').append('<form name="is_deneyim' + i + '" id="is_deneyim' + i + '"> <table class="table_is" id="table_is"> <h1>İş Deneyimi</h1> <div class="form-group p-3"> <label for="is_isim">Daha Önce Çalıştığınız Şirketin Adı:</label> <input type="text" class="form-control col-5 p-2" id="is_isim" name="is_isim[]"> </div> <div class="form-group p-3"> <label for="is_baslangic">Başlangıç Tarihiniz:</label> <input type="date" class="form-control col-5 p-2" id="is_baslangic" name="is_baslangic[]"> </div> <div class="form-group p-3"> <label for="is_ayrilis">İşten Ayrılış Tarihiniz:</label> <input type="date" class="form-control col-5 p-2" id="is_ayrilis" name="is_ayrilis[]"> </div> <div class="form-group p-3"> <label for="is_neden">İşten Ayrılma Sebebiniz:</label> <textarea input type="text" class="form-control col-5 p-2" id="is_neden" name="is_neden[]"></textarea> </div> <button class="btn btn-dark remove_item_btn" name="sil_is" id="sil_is' + i + '">-</button> <div id="is_dynamic"></div> </table> </form> ');
              });

              $(document).on('click', '#sil_is' + i + '', function() {
                var button_id = $(this).attr("id");
                $("#is_deneyim'+i+'" + button_id + "").remove();
              });

              $('#kaydet_is').click(function() {
                $.ajax({
                  url: "action.php",
                  method: "POST",
                  data: $('#is_deneyim').serialize(),
                  success: function(data) {
                    alert(data);
                    $('#is_deneyim')[0].reset();
                  }
                });
              });

            });



            $(document).ready(function() {
              var i = 1;
              $('#ekle_dil').click(function() {
                i++;
                $('#dil_dynamic').append('<form name="dil' + i + '" id="dil' + i + '"> <table class="table_dil" id="table_dil"> <h1>Yabancı Dil Bilgisi</h1>  <div class="form-group p-3"> <label for="dil_bilgisi">Bildiğiniz Yabancı Dil:</label> <input type="text" class="form-control col-5 p-2" id="dil_bilgisi" name="dil_bilgisi[]"> </div> <div> <label for="dil_seviyesi" class="form-label">Seviyeniz:</label> <input type="range" class="form-range col-5 p-2" min="0" max="5" id="dil_seviyesi" name="dil_seviyesi[]"> </div>  <button class="btn btn-dark remove_item_btn" name="sil_dil" id="sil_dil' + i + '">-</button> <div id="dil_dynamic" name="dil_dynamic"> </div> </table> </form> ');
              });

              $(document).on('click', '#sil_dil' + i + '', function() {
                var button_id = $(this).attr("id");
                $("#dil'+i+'" + button_id + "").remove();
              });

              $('#kaydet_dil').click(function() {
                $.ajax({
                  url: "action.php",
                  method: "POST",
                  data: $('#dil').serialize(),
                  success: function(data) {
                    alert(data);
                    $('#dil')[0].reset();
                  }
                });
              });

            });



            $('#kaydet_sertifika').click(function() {
              $.ajax({
                url: "action.php",
                method: "POST",
                data: $('#sertifika').serialize(),
                success: function(data) {
                  alert(data);
                  $('#sertifika')[0].reset();
                }
              });
            });



            $(document).ready(function() {
              var i = 1;
              $('#ekle_referans').click(function() {
                i++;
                $('#referans_dynamic').append(' <form name="referans' + i + ' id="referans' + i + '"> <table class="table_referans" id="table_referans"> <h1>Referansınız</h1> <div class="form-group p-3"> <label for="referans">Referansınız:</label> <input type="text" class="form-control col-5 p-2" id="referans" name="referans[]"> </div> <button class="btn btn-dark remove_item_btn" name="sil_referans" id="sil_referans' + i + '">-</button> <div id="referans_dynamic" name="referans_dynamic"> </div> </table> </form> </div>  ');
              });

              $(document).on('click', '#sil_referans' + i + '', function() {
                var button_id = $(this).attr("id");
                $("#referans'+i+'" + button_id + "").remove();
              });

              $('#kaydet_referans').click(function() {
                $.ajax({
                  url: "action.php",
                  method: "POST",
                  data: $('#referans').serialize(),
                  success: function(data) {
                    alert(data);
                    $('#referans')[0].reset();
                  }
                });
              });

            });



            $('#kaydet_onyazi').click(function() {
              $.ajax({
                url: "action.php",
                method: "POST",
                data: $('#onyazi').serialize(),
                success: function(data) {
                  alert(data);
                  $('#onyazi')[0].reset();
                }
              });
            });
          </script>