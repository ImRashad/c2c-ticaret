    <!-- Settings Page Start Here -->
    <div class="settings-page-area bg-secondary section-space-bottom">
      <div class="container">
        <div class="row settings-wrapper">  
          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <ul class="settings-title">
              <li class="active"><a href="hesabim" >Hesab məlumatlarım</a></li>
              <li class="active"><a href="adress-bilgileri" >Adress məlumatları</a></li>
              <li class="active"><a href="sifre-guncelle" >Şifrəni dəyiş</a></li>
              <li class="active"><a href="profil-resim-guncelle" >Profil şəkli</a></li>
              <li class="active"><a href="gelen-mesaj" >Gələn mesajlar</a></li>
              <li class="active"><a href="geden-mesaj" >Gedən mesajlar</a></li>
              <li class="active"><a href="siparislerim" >Sifarişlərim</a></li>
              <li class="active"><a href="magaza-basvuru" >Mağaza müraciəti</a></li>
              <li class="active"><a href="siparislerim" >Sifarişlərim</a></li>

            </ul>

            <?php  if ($kullanicicek['kullanici_magaza']=="2") { ?>

             <hr>               

             <br>
             <ul class="settings-title">
              <li class="active"><a href="urunekle" >Məhsul daxil et</a></li>
              <li class="active"><a href="urunlerim" >Məhsullarım</a></li>
              <li class="active"><a href="yenisiparislerim" >Yeni sifariş</a></li>
              <li class="active"><a href="yenitsiparislerim" >Tamamlanan sifariş</a></li>
              <li class="active"><a href="magaza-basvuru" >Mesajlar</a></li>
              <li class="active"><a href="magaza-basvuru" >Ayarlar</a></li>

            </ul>

          <?php } ?>
        </div> 