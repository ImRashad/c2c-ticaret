<?php 
$title="Axtarış nəticələri";
require_once 'header.php';
require_once 'search.php';

if (isset($_POST['arama'])) { 

                     $sayfada = 10; // sayfada gösterilecek içerik miktarını belirtiyoruz.
                     $sorgu=$db->prepare("SELECT * FROM urun ");
                     $sorgu->execute();
                     $toplam_icerik=$sorgu->rowCount();
                     $toplam_sayfa = ceil($toplam_icerik / $sayfada);
                    // eğer sayfa girilmemişse 1 varsayalım.
                     $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
                    // eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
                     if($sayfa < 1) $sayfa = 1; 
                        // toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
                     if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
                     $limit = ($sayfa - 1) * $sayfada;

                     $aranan=$_POST['aranan'];

                     $urunsor=$db->prepare("SELECT urun.*,kullanici.*,kategori.* FROM urun INNER JOIN kullanici ON urun.kullanici_id=kullanici.kullanici_id INNER JOIN kategori ON urun.kategori_id=kategori.kategori_id where urun_durum=:durum and urun.urun_ad LIKE '%$aranan%' order by urun_zaman DESC limit $limit,$sayfada");
                     $urunsor->execute(array(

                        'durum' => 1

                    ));

                     $say=$sorgu->rowCount(); 

                 } else {

                    header("location:404.php");
                }

                ?>

                <div class="pagination-area bg-secondary">
                    <div class="container">
                        <div class="pagination-wrapper">
                        </div>
                    </div>  
                </div> 
                <!-- Inner Page Banner Area End Here -->          
                <!-- Product Page Grid Start Here -->
                <div class="product-page-grid bg-secondary section-space-bottom">                
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 col-lg-push-3 col-md-push-4 col-sm-push-4">
                                <div class="inner-page-main-body">
                                    <div class="page-controls">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
                                                <div class="page-controls-sorting">
                                    <!-- <div class="dropdown">
                                        <button class="btn sorting-btn dropdown-toggle" type="button" data-toggle="dropdown">Göstər<i class="fa fa-sort" aria-hidden="true"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#"></a></li>
                                            <li><a href="#"></a></li>
                                            <li><a href="#"></a></li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                                <div class="layout-switcher">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">


                        <div >
                            <div class="product-list-view">

                               <?php 

                               while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC) ) { 

                                 ?>

                                 <div class="single-item-list">
                                    <div class="item-img">
                                        <a href="urun-<?=seo($uruncek['urun_ad'])."-".$uruncek['urun_id']?>">  <img style="width: 238px; height: 178px;" src="<?php echo $uruncek['urunfoto_resimyol'] ?>" alt="product" class="img-responsive"></a>
                                        <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                    </div>

                                    <div class="item-content">
                                        <div class="item-info">
                                            <div class="item-title">
                                             <h3><a href="#"><?php echo $uruncek['urun_ad'] ?></a></h3>
                                             <span><?php echo $uruncek['kategori_ad'] ?></span>
                                             <!--  <p>Pimply dummy text of the printing and typesetting industry. </p> -->
                                         </div>
                                         <div class="item-sale-info">
                                            <div class="price"><?php echo $uruncek['urun_fiyat'] ?><span style="font-size: 12px;">AZN</span></div>
                                            <div class="sale-qty">Satış: (<?php echo $uruncek['urun_satis'] ?> )</div>
                                        </div>
                                    </div>
                                    <div class="item-profile">
                                        <div class="profile-title">
                                            <div class="img-wrapper"><img style="width: 40px; height: 36px;" src="<?php echo $uruncek['kullanici_magazafoto'] ?>" alt="profile" class="img-responsive img-circle"></div>
                                            <span><?php echo $uruncek['kullanici_ad']." ".substr($uruncek['kullanici_soyad'], 0,1) ?>.</span>
                                        </div>
                                        <div class="profile-rating-info">
                                            <ul>
                                                <li>
                                                    <ul class="profile-rating">
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li>(<span> 05</span> )</li>
                                                    </ul>
                                                </li>
                                                <li><i class="fa fa-comment-o" aria-hidden="true"></i>( 10 )</li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>  
                            </div>         

                        <?php  } ?>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <ul class="pagination-align-left">
                                    <?php

                                    $s=0;

                                    while ($s < $toplam_sayfa) {

                                        $s++; ?>

                                        <?php 

                                        if (!empty($_GET['kategori_id'])) {



                                            if ($s==$sayfa) {?>

                                                <li>

                                                    <a style="background-color: #C84C3C; color: white;" href="kategori-<?php echo $_GET['sef']; ?>-<?php echo $_GET['kategori_id']; ?>?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>

                                                </li>

                                            <?php } else {?>


                                                <li>

                                                 <a href="kategori-<?php echo $_GET['sef']; ?>-<?php echo $_GET['kategori_id']; ?>?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>


                                             </li>

                                         <?php   }

                                     }else {


                                        if ($s==$sayfa) {?>

                                            <li>

                                                <a style="background-color: #C84C3C; color: white;" href="kategori?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>

                                            </li>

                                        <?php } else {?>


                                            <li>

                                             <a href="kategori?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>


                                         </li>

                                     <?php   }

                                 }

                             }

                             ?>
                         </ul>
                     </div>  
                 </div>
             </div>
         </div>                               
     </div>                               
 </div>
</div>
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 col-lg-pull-9 col-md-pull-8 col-sm-pull-8">
    <div class="fox-sidebar">
        <div class="sidebar-item">
            <div class="sidebar-item-inner">
                <h3 class="sidebar-item-title">Kateqoriyalar</h3>
                <ul class="sidebar-categories-list">

                 <?php  
                 $kategorisor=$db->prepare("SELECT * FROM kategori where kategori_durum=:durum order by kategori_sira ASC limit 5");

                 $kategorisor->execute(array(

                   'durum' => 1  ));

                 while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC))  {


                    $kategori_id=$kategoricek['kategori_id'];

                    ?>
                    <li><a href="kategori-<?=seo($kategoricek['kategori_ad'])."-".$kategoricek['kategori_id']; ?>"><?php echo $kategoricek['kategori_ad'] ?></a><span>( <?php 

                        $urunsay=$db->prepare("SELECT COUNT(kategori_id) as say FROM urun where kategori_id=:id and urun_durum=:durum");
                        $urunsay->execute(array(

                            'id' => $kategori_id,
                            'durum' => 1

                        ));

                        $saycek=$urunsay->fetch(PDO::FETCH_ASSOC);
                        echo $saycek['say'];

                        ?> )</span></li>

                    <?php  } ?>
                    

                </ul>
            </div>
        </div>
        
    </div>
</div>                        
</div>
</div>
</div>
<!-- Product Page Grid End Here -->
<?php  require_once 'footer.php'; ?>