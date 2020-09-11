<?php
$title="Profil";
require_once 'header.php'; 

$kullanicisor=$db->prepare("SELECT * FROM kullanici  where kullanici_id=:id");
$kullanicisor->execute(array(

  'id'=> $_GET['kullanici_id']

));

$say=$kullanicisor->rowCount();

if ($say==0) {

  header("location:404.php");
}

$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

?>
<!-- Main Banner 1 Area Start Here -->
<div class="inner-banner-area">
  <div class="container">
    <div class="inner-banner-wrapper">

    </div>
  </div>
</div>
<!-- Main Banner 1 Area End Here --> 
<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
  <div class="container">
    <div class="pagination-wrapper">

    </div>
  </div>  
</div> 
<!-- Inner Page Banner Area End Here -->          
<!-- Profile Page Start Here -->
<div class="profile-page-area bg-secondary section-space-bottom">                
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 col-lg-push-3 col-md-push-4 col-sm-push-4">
        <div class="inner-page-main-body">
          <div class="single-banner">
            <img style="width: 805px; height: 322px;" src="dimg\1.png" alt="product" class="img-responsive">
          </div>                                
          <div class="author-summery">
            <div class="single-item">
              <div class="item-title">Şəhər:</div>
              <hr>
              <div class="item-details"><?php echo $kullanicicek['kullanici_seher'] ?></div>                                       
            </div>
            <div class="single-item">
              <div class="item-title">Qeydiyyat tarixi:</div>
              <hr>
              <div class="item-details"><?php echo $kullanicicek['kullanici_zaman'] ?></div>                                       
            </div>
            <div class="single-item">
              <div class="item-title">Qiymətləndirilmə:</div>
              <hr>
              <div class="item-details">

                <?php 

                $urunsay=$db->prepare("SELECT COUNT(yorum.yorum_puan) as say, SUM(yorum.yorum_puan) as topla, yorum.*, urun.* FROM yorum INNER JOIN urun ON yorum.urun_id=urun.urun_id where urun.kullanici_id=:id");

                $urunsay->execute(array(

                  'id' => $_GET['kullanici_id']  ));

                $saycek=$urunsay->fetch(PDO::FETCH_ASSOC);
                $netice=round($saycek['topla']/$saycek['say']);
                ?>

                <?php 
                switch ($netice) {
                  case '5': ?>

                  <ul class="default-rating">
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li>(<span> <?php echo $netice ?></span> )</li>
                  </ul>

                  <?php   break; 

                  case '4': ?>

                  <ul class="default-rating">
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                    <li>(<span><?php echo $netice ?></span> )</li>
                  </ul>

                  <?php  break; 

                  case '3': ?>

                  <ul class="default-rating">
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                    <li>(<span><?php echo $netice ?></span> )</li>
                  </ul>

                  <?php  break; 

                  case '2': ?>

                  <ul class="default-rating">
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>

                    <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                    <li>(<span> <?php echo $netice ?></span> )</li>
                  </ul>

                  <?php  break; 

                  case '1': ?>

                  <ul class="default-rating">
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                    <li>(<span><?php echo $netice ?></span> )</li>
                  </ul>

                  <?php  break; 

                  case '0': ?>

                  <ul class="default-rating">
                    <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                    <li>(<span><?php echo $netice ?></span> )</li>
                  </ul>

                  <?php  break; }

                  ?>
                </div>                                       
              </div>
              <div class="single-item">
                <div class="item-title">Edilən satış:</div>
                <hr>
                <div align="center" class="item-name"><?php 
                $urunsay=$db->prepare("SELECT COUNT(kullanici_idsatici) as say FROM siparis_detay where kullanici_idsatici=:id");
                $urunsay->execute(array(

                  'id' => $_GET['kullanici_id']
                ));

                $saycek=$urunsay->fetch(PDO::FETCH_ASSOC);
                echo $saycek['say'];
                ?> </div>                                       
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 col-lg-pull-9 col-md-pull-8 col-sm-pull-8">
          <div class="fox-sidebar">
            <div class="sidebar-item">
              <div class="sidebar-item-inner">
                <h3 class="sidebar-item-title">Satıcı</h3>
                <div class="sidebar-author-info">
                  <div class="sidebar-author-img">
                    <img style="width: 63px; height: 65px;" src="<?php echo $kullanicicek['kullanici_magazafoto'] ?>" alt="product" class="img-responsive">
                  </div>
                  <div class="sidebar-author-content">
                    <h3><?php echo $kullanicicek['kullanici_ad']." ".$kullanicicek['kullanici_soyad']; ?></h3>
                    <a href="#" class="view-profile"><i class="fa fa-circle" aria-hidden="true"></i>Online</a>
                  </div>
                </div>
                <ul class="sidebar-badges-item">

                  <?php 

                  $urunsay=$db->prepare("SELECT COUNT(kullanici_idsatici) as say FROM siparis_detay where kullanici_idsatici=:id");
                  $urunsay->execute(array(

                    'id' => $_GET['kullanici_id']
                  ));

                  $saycek=$urunsay->fetch(PDO::FETCH_ASSOC);



                  if ($saycek['say']>=1 and $saycek['say']<10) {   ?>

                   <li><img src="img\profile\badges1.png" alt="badges" class="img-responsive"></li>

                 <?php }else if ($saycek['say']>=10 and $saycek['say']<20) {   ?>

                   <li><img src="img\profile\badges1.png" alt="badges" class="img-responsive"></li>
                   <li><img src="img\profile\badges2.png" alt="badges" class="img-responsive"></li>
                 <?php }else if ($saycek['say']>=20 and $saycek['say']<30) {   ?>
                   <li><img src="img\profile\badges1.png" alt="badges" class="img-responsive"></li>
                   <li><img src="img\profile\badges2.png" alt="badges" class="img-responsive"></li>
                   <li><img src="img\profile\badges3.png" alt="badges" class="img-responsive"></li>
                 <?php } else if ($saycek['say']>=30 and $saycek['say']<40) {   ?>
                   <li><img src="img\profile\badges1.png" alt="badges" class="img-responsive"></li>
                   <li><img src="img\profile\badges2.png" alt="badges" class="img-responsive"></li>
                   <li><img src="img\profile\badges3.png" alt="badges" class="img-responsive"></li>
                   <li><img src="img\profile\badges4.png" alt="badges" class="img-responsive"></li>
                 <?php }else if ($saycek['say']>=40 ) {   ?>
                   <li><img src="img\profile\badges1.png" alt="badges" class="img-responsive"></li>
                   <li><img src="img\profile\badges2.png" alt="badges" class="img-responsive"></li>
                   <li><img src="img\profile\badges3.png" alt="badges" class="img-responsive"></li>
                   <li><img src="img\profile\badges4.png" alt="badges" class="img-responsive"></li>
                   <li><img src="img\profile\badges5.png" alt="badges" class="img-responsive"></li>
                 <?php } ?>

               </ul>

             </div>
           </div>
           <ul class="social-default">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
          </ul> 
          <ul class="sidebar-product-btn">

            <?php  if (empty($_SESSION['userkullanici_id'])) { ?>

              <li><button class="buy-now-btn" id="buy-button"><i class="fa fa-ban" aria-hidden="true"></i> Mesaj göndər</button></li>


            <?php   } else if ($_SESSION['userkullanici_id']==$_GET['kullanici_id']) { ?>

              <li><button class="buy-now-btn" id="oz-mesaj"><i class="fa fa-ban" aria-hidden="true"></i> Mesaj göndər</button></li>
            <?php }  else { ?>


              <li><a href="mesaj-gonder?kullanici_gel=<?php  echo $_GET['kullanici_id']; ?>" class="buy-now-btn" ><i class="fa fa-envelope-o" aria-hidden="true"></i> Mesaj göndər</a></li>

            <?php  }   ?>

          </ul>
        </div>
      </div>                                                
    </div>
    <div class="row profile-wrapper">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <ul class="profile-title">

          <li><a href="#Products" data-toggle="tab" aria-expanded="false"><i class="fa fa-briefcase" aria-hidden="true"></i> Məhsullar (

            <?php 
            $urunsay=$db->prepare("SELECT COUNT(urun_id) as say FROM urun where kullanici_id=:id");
            $urunsay->execute(array(

              'id' => $_GET['kullanici_id']
            ));

            $saycek=$urunsay->fetch(PDO::FETCH_ASSOC);
            echo $saycek['say'];
            ?> 
          )</a></li>
          <li><a href="#Message" data-toggle="tab" aria-expanded="false"><i class="fa fa-envelope-o" aria-hidden="true"></i> Message Box</a></li>

        </ul>
      </div>
      <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12"> 
        <div class="tab-content">

          <div class="tab-pane fade active in" id="Products">
            <h3 class="title-inner-section">Məhsullar</h3>
            <div class="inner-page-main-body"> 
             <div class="row more-product-item-wrapper">
              <?php   
              $urunsor=$db->prepare("SELECT urun.*,kategori.* FROM urun INNER JOIN kategori ON urun.kategori_id=kategori.kategori_id where kullanici_id=:id and urun_durum=:durum order by urun_zaman DESC");
              $urunsor->execute(array(

                'durum' => 1,
                'id' => $_GET['kullanici_id']
              ));

              while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC) ) {  ?>

                <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                  <div class="more-product-item">
                    <div class="more-product-item-img">
                     <a href="urun-<?=seo($uruncek['urun_ad'])."-".$uruncek['urun_id']?>">       <img style="width: 102px; height: 92px;" src="<?php echo $uruncek['urunfoto_resimyol'] ?>" alt="product" class="img-responsive"></a>
                   </div>
                   <div class="more-product-item-details">
                    <h4> <a href="urun-<?=seo($uruncek['urun_ad'])."-".$uruncek['urun_id']?>"> <?php if (strlen($uruncek['urun_ad'])>16) {
                      echo substr($uruncek['urun_ad'],0,16)."...";
                    } else { echo $uruncek['urun_ad']; }?></a></h4>
                    <div class="p-title"><?php echo $uruncek['kategori_ad'] ?></div>
                    <div class="p-price"><?php echo $uruncek['urun_fiyat'] ?></span><span style="font-size: 12px;">AZN</span></div>
                  </div>
                </div>
              </div>
            <?php  } ?>                           
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <ul class="pagination-align-left">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>  
          </div>
        </div> 
      </div>
    </div> 
  </div>  
</div>
</div>
</div>
<!-- Profile Page End Here -->            
<?php require_once 'footer.php';   ?>