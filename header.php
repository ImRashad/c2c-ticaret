<?php 
ob_start();
session_start();
error_reporting(0);
include 'nedmin/production/fonksiyon.php';
include 'nedmin/netting/baglan.php';
$ayarsor=$db->prepare("SELECT *FROM ayar where ayar_id=:id");
$ayarsor->execute(array(

  'id' => 0
));

$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
$kullanicisor->execute(array(

  'mail'=> $_SESSION['userkullanici_mail']

));

$say=$kullanicisor->rowCount();

$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

if (!isset($_SESSION['userkullanici_id'])) {
	
	$_SESSION['userkullanici_id'] = $kullanicicek['kullanici_id'];
}

?>

<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>

    <?php if (isset($title)) {

     echo $title;

   } else {	

     echo $ayarcek['ayar_title'];

   } ?>

 </title>
 <meta name="description" content="<?php echo $ayarcek['ayar_description'] ?>">
 <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'] ?>">
 <meta name="author" content="<?php echo $ayarcek['ayar_author'] ?>">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Favicon -->
 <link rel="shortcut icon" type="image/x-icon" href="img\favicon.png">

 <!-- Normalize CSS --> 
 <link rel="stylesheet" href="css\normalize.css">

 <!-- Main CSS -->         
 <link rel="stylesheet" href="css\main.css">

 <!-- Bootstrap CSS --> 
 <link rel="stylesheet" href="css\bootstrap.min.css">

 <!-- Animate CSS --> 
 <link rel="stylesheet" href="css\animate.min.css">
 <!-- Select2 CSS -->
 <link rel="stylesheet" href="css\select2.min.css">
 <!-- Font-awesome CSS-->
 <link rel="stylesheet" href="css\font-awesome.min.css">

 <!-- Owl Caousel CSS -->
 <link rel="stylesheet" href="vendor\OwlCarousel\owl.carousel.min.css">
 <link rel="stylesheet" href="vendor\OwlCarousel\owl.theme.default.min.css">

 <!-- Main Menu CSS -->      
 <link rel="stylesheet" href="css\meanmenu.min.css">

 <!-- Datetime Picker Style CSS -->
 <link rel="stylesheet" href="css\jquery.datetimepicker.css">

 <!-- ReImageGrid CSS -->
 <link rel="stylesheet" href="css\reImageGrid.css">

 <!-- Switch Style CSS -->
 <link rel="stylesheet" href="css\hover-min.css">

 <!-- Custom CSS -->
 <link rel="stylesheet" href="style.css">
 <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
 <!-- Modernizr Js -->
 <script src="js\modernizr-2.8.3.min.js"></script>

</head>
<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
          <![endif]-->
          
          <!-- Add your site or application content here -->
          <!-- Preloader Start Here -->
          <div id="preloader"></div>
          <!-- Preloader End Here -->
          <!-- Main Body Area Start Here -->
          <div id="wrapper">
            <!-- Header Area Start Here -->
            <header>                
              <div id="header2" class="header2-area right-nav-mobile">
                <div class="header-top-bar">
                  <div class="container">
                    <div class="row">                         
                      <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                        <div class="logo-area">
                          <a href="index.htm"><img class="img-responsive" src="img\logo.png" alt="logo"></a>
                        </div>
                      </div> 
                      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">

                       <?php   if (isset($_SESSION['userkullanici_mail'])) { ?>

                         <ul class="profile-notification">                                            
                          <li>
                            <div class="notify-contact"><span>Kömək lazımdır?</span> Telefon : +994 (99)-809-89-79</div>
                          </li>

                          <li>

                            <div class="notify-notification">
                              <a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i><span><?php 


                              $bildirimsay=$db->prepare("SELECT COUNT(siparisdetay_id) as say FROM siparis_detay where siparisdetay_onay=:id and kullanici_idsatici=:kullanici_id");
                              $bildirimsay->execute(array(

                                'id' => 0,
                                'kullanici_id' => $_SESSION['userkullanici_id']                  
                              ));

                              $scek=$bildirimsay->fetch(PDO::FETCH_ASSOC);
                              echo $scek['say'];
                              ?></span></a>
                              <ul>

                                <?php     

                                $siparissor=$db->prepare("SELECT siparis.*,siparis_detay.*,urun.*,kullanici.* FROM siparis INNER JOIN siparis_detay ON siparis_detay.siparis_id=siparis.siparis_id INNER JOIN urun ON urun.urun_id=siparis_detay.urun_id INNER JOIN kullanici ON kullanici.kullanici_id=siparis_detay.kullanici_id where siparis.kullanici_idsatici=:kullanici_idsatici and siparis_detay.siparisdetay_onay=:onay order by siparis.siparis_zaman DESC");
                                $siparissor->execute(array(

                                  'kullanici_idsatici' => $_SESSION['userkullanici_id'],
                                  'onay' => 0
                                ));
                                $sayb=$bildirimsay->rowCount();


                                if ($sayb==0) { ?>
                                  <div class="alert alert-warning">
                                    Bildiriminiz yoxdur.
                                  </div>
                                <?php } 


                                while ($sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC)) { ?>

                                  <li>
                                    <div class="notify-notification-img">
                                      <img style="border-radius: 34px;" width="36" height="36" class="img-responsive" src="<?php echo $sipariscek['kullanici_magazafoto'] ?>" alt="profile">
                                    </div>
                                    <div class="notify-notification-info">
                                      <div class="notify-notification-subject">Yeni sifariş</div>
                                      <div class="notify-notification-date"><?php  echo $sipariscek['siparis_zaman'] ?></div>
                                    </div>
                                    <div class="notify-notification-sign">
                                      <a href="yenisiparislerim">  <i style="color: orange !important" class="fa fa-bell-o" aria-hidden="true"></i></a>
                                      
                                    </div>
                                  </li>
                                  

                                <?php  } ?>

                              </ul>
                            </div>
                          </li>

                          <li>

                            <div class="notify-message">
                              <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i><span><?php 


                              $mesajsay=$db->prepare("SELECT COUNT(mesaj_okuma) as say FROM mesaj where mesaj_okuma=:id and kullanici_gel=:kullanici_id");
                              $mesajsay->execute(array(

                                'id' => 0,
                                'kullanici_id' => $_SESSION['userkullanici_id']                  
                              ));

                              $mcek=$mesajsay->fetch(PDO::FETCH_ASSOC);
                              echo $mcek['say'];
                              ?></span></a>
                              <ul>

                                <?php     

                                $mesajsor=$db->prepare("SELECT  mesaj.*,kullanici.* FROM mesaj INNER JOIN kullanici ON mesaj.kullanici_gon=kullanici.kullanici_id where mesaj.kullanici_gel=:id and mesaj_okuma=:okuma order by mesaj_okuma,mesaj_zaman DESC ");
                                $mesajsor->execute(array(

                                  'id' => $_SESSION['userkullanici_id'],
                                  'okuma' => 0
                                ));
                                $saym=$mesajsor->rowCount();


                                if ($saym==0) { ?>
                                  <div class="alert alert-warning">
                                    Mesajınız yoxdur.
                                  </div>
                                <?php } 

                                while ($mesajcek=$mesajsor->fetch(PDO::FETCH_ASSOC) ) { ; ?>

                                  <li>
                                    <div class="notify-message-img">
                                     <img style="border-radius: 34px;" width="36" height="36" class="img-responsive" src="<?php echo $mesajcek['kullanici_magazafoto'] ?>" alt="profile">
                                   </div>
                                   <div class="notify-message-info">
                                    <div class="notify-message-sender"><?php  echo $mesajcek['kullanici_ad']." ".substr($mesajcek['kullanici_soyad'], 0,1) ?>.</div>
                                    <div class="notify-message-subject"></div>
                                    <div class="notify-message-date"><?php  echo $mesajcek['mesaj_zaman'] ?></div>
                                  </div>
                                  <div class="notify-message-sign">
                                   <a href="mesaj-detay?mesaj_id=<?php echo $mesajcek['mesaj_id'] ?>&kullanici_gon=<?php echo $mesajcek['kullanici_gon'] ?>">   <i style="color: orange !important" class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                 </div>
                               </li>

                             <?php  } ?>

                           </ul>
                         </div>
                       </li>

                       <li>
                        <div class="user-account-info">
                          <div class="user-account-info-controler">
                            <div class="user-account-img">
                              <img style="border-radius: 34px;" width="36" height="36" class="img-responsive" src="<?php echo $kullanicicek['kullanici_magazafoto'] ?>" alt="profile">
                            </div>
                            <div class="user-account-title">
                              <div class="user-account-name"><?php  echo $kullanicicek['kullanici_ad']." ".substr($kullanicicek['kullanici_soyad'], 0,1); ?>. </div>
                              <div class="user-account-balance">

                                <?php     

                                $siparissor=$db->prepare("SELECT SUM(urun_fiyat) as toplam  FROM siparis_detay where kullanici_idsatici=:kullanici_id and siparisdetay_onay=:onay");
                                $siparissor->execute(array(

                                  'kullanici_id' => $_SESSION['userkullanici_id'],
                                  'onay' => 1
                                ));

                                $sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC);

                                if (empty($sipariscek['toplam'])) {

                                 echo "0.00 AZN";

                               } else {

                                echo $sipariscek['toplam'];

                              }
                              ?>

                            </div>
                          </div>
                          <div class="user-account-dropdown">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                          </div>
                        </div>
                        <ul>
                          <li><a href="profil?kullanici_id=<?php echo $kullanicicek['kullanici_id'] ?>">Profil</a></li>
                          <li><a href="hesabim">Haqqımda</a></li>
                          <li><a href="magaza-basvuru">Mağaza müraciət</a></li>
                          <li><a href="gelen-mesaj">Gələn mesaj</a></li>
                          <li><a href="geden-mesaj">Gedən mesaj</a></li>
                          <li><a href="siparislerim">Sifarişlər</a></li>
                          <li><a href="sifre-guncelle">Şifrə dəyiş</a></li>

                        </ul>
                      </div>
                    </li>
                    <li   id="logout-button"><a href="exit"><button onclick="return swal('cixmaq?') " class="apply-now-btn"  >Çıxış</button></a></li>
                  </ul>

                <?php  } else {  ?>

                  <ul class="profile-notification">                                            
                    <li>
                      <div class="notify-contact"><span>Kömək lazımdır?</span> Telefon : +994 (99)-809-89-79</div>
                    </li>                                       
                    <li>

                    </li>                                        
                    <li>
                     <div class="apply-btn-area"> 
                      <a class="apply-now-btn" href="#" id="login-button">Giriş</a> 
                      <div class="login-form" id="login-form" style="display: none;">
                        <h2>GİRİŞ</h2>
                        <form action="nedmin/netting/islem.php" method="POST">

                          <input class="form-control" type="email" name="kullanici_mail"

                          <?php if (isset($_COOKIE['userkullanici_mail'])) { ?>
                           value="<?php echo $_COOKIE['userkullanici_mail']; ?>"
                         <?php  } else { ?>
                           placeholder="Email...">
                         <?php  } ?>
                         <input class="form-control" type="password" name="kullanici_password"
                         <?php if (isset($_COOKIE['userkullanici_pass'])) { ?>
                           value="<?php echo $_COOKIE['userkullanici_pass']; ?>"
                         <?php  } else { ?>

                           placeholder="Şifrəni daxil edin...">
                         <?php  } ?>
                         
                         <button class="btn-login" type="submit" name="musterigiris">Giriş</button>
                         <div class="remember-lost">
                          <div class="checkbox">
                            <label><input type="checkbox" <?php echo isset($_COOKIE['userkullanici_mail']) ? "checked" : "" ; ?> name="beni_hatirla" > Məni xatırla</label>
                          </div>
                          <a class="lost-password" href="#"> Şifrəni unuttun?</a>
                        </div>

                        <button class="cross-btn form-cancel" type="submit" ><i class="fa fa-times" aria-hidden="true"></i></button>
                      </form>
                    </div>
                  </div> 
                </li>
                <li><a class="apply-now-btn-color hidden-on-mobile" href="register">Qeydiyyat</a></li>

              </ul> 

            <?php  } ?>
          </div>                          
        </div>                          
      </div>
    </div>
    <div class="main-menu-area bg-primaryText" id="sticker">
      <div class="container">
        <nav id="desktop-nav">
          <ul>
            <li class="active"><a href="index.php">Ana səhifə</a>

            </li>

            <?php  $kategorisor=$db->prepare("SELECT * FROM kategori where kategori_durum=:durum order by kategori_sira ASC limit 5");

            $kategorisor->execute(array(
             'durum' => 1  ));

             while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC))  { ?>


              <li><a href="kategori-<?=seo($kategoricek['kategori_ad'])."-".$kategoricek['kategori_id']; ?>"><?php echo $kategoricek['kategori_ad']  ?></a></li>
            <?php  } ?>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <!-- Mobile Menu Area Start -->
  <div class="mobile-menu-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mobile-menu">
            <nav id="dropdown">
              <ul>
                <li class="active"><a href="index.php">Ana səhifə</a>

                </li>

                <?php  $kategorisor=$db->prepare("SELECT * FROM kategori where kategori_durum=:durum order by kategori_sira ASC limit 5");

                $kategorisor->execute(array(
                 'durum' => 1  ));

                 while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC))  { ?>


                  <li><a href="kategori-<?=seo($kategoricek['kategori_ad'])."-".$kategoricek['kategori_id']; ?>"><?php echo $kategoricek['kategori_ad']  ?></a></li>
                <?php  } ?>
              </ul>
            </nav>
          </div>           
        </div>
      </div>
    </div>
  </div>  
  <!-- Mobile Menu Area End -->
</header>
            <!-- Header Area End Here -->