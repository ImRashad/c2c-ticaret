<?php 
$title="Məhsul məlumatları";
require_once 'header.php'; 

$urunsor=$db->prepare("SELECT urun.*,kullanici.* FROM urun INNER JOIN kullanici ON urun.kullanici_id=kullanici.kullanici_id where urun_id=:id and urun_durum=:durum");
$urunsor->execute(array(

    'id'=> $_GET['urun_id'],
    'durum' => 1
));

$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);

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
<!-- Product Details Page Start Here -->
<div class="product-details-page bg-secondary">                
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <div class="inner-page-main-body">
                    <div class="single-banner">
                        <img style="width: 800px; height: 500px;" src="<?php  echo $uruncek['urunfoto_resimyol'];  ?>" alt="product" class="img-responsive">
                    </div>                                
                    <h2 class="title-inner-default"><?php  echo $uruncek['urun_ad'];  ?></h2>
                    
                    <div class="product-tag-line">
                     
                    </div>
                    <div class="product-details-tab-area">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <ul class="product-details-title">
                                  
                                 <li><a href="#review" data-toggle="tab" aria-expanded="false">Haqqında</a></li>
                                 <?php 


                                 $kullanici_id=$kullanicicek['kullanici_id'];
                                 $urun_id=$uruncek['urun_id'];


                                 $yorumsor=$db->prepare("SELECT yorum.*,kullanici.* FROM yorum INNER JOIN kullanici ON yorum.kullanici_id=kullanici.kullanici_id where urun_id=:urun_id and yorum_durum=:yorum_durum");
                                 $yorumcek=$yorumsor->execute(array(

                                    'urun_id' => $urun_id,
                                    'yorum_durum' => 1
                                ));

                                 $say=$yorumsor->rowCount();

                                 ?>

                                 <li><a href="#add-tags" data-toggle="tab" aria-expanded="false">Rəy (<?php echo $say ?>)</a></li>
                                 
                             </ul>
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="review">

                                 <p><?php  echo $uruncek['urun_detay'];  ?></p>


                             </div>
                             <div class="tab-pane fade" id="add-tags">
                                
                                <?php 
                                

                                while ($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)) {

                                    $zaman=explode(" ", $yorumcek['yorum_zaman'] );

                                    ?>


                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="media-heading user_name"><img style="border-radius: 30px; float: left; margin-right: 10px;" width="32" height="32" class="img-responsive" alt="Profil Resim" src="<?php echo $yorumcek['kullanici_magazafoto'] ?>"><?php echo $yorumcek['kullanici_ad']." ".$yorumcek['kullanici_soyad']; ?></h4>
                                            <div align="right" class="item-details">

                                                <?php 

                                                switch ($yorumcek['yorum_puan']) {
                                                    case '5': ?>
                                                    
                                                    <ul class="default-rating">
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li>(<span> <?php echo $yorumcek['yorum_puan'] ?></span> )</li>
                                                    </ul>

                                                    <?php   break; 

                                                    case '4': ?>
                                                    
                                                    <ul class="default-rating">
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li>(<span><?php echo $yorumcek['yorum_puan'] ?></span> )</li>
                                                    </ul>
                                                    
                                                    <?php  break; 

                                                    case '3': ?>
                                                    
                                                    <ul class="default-rating">
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li>(<span><?php echo $yorumcek['yorum_puan'] ?></span> )</li>
                                                    </ul>
                                                    
                                                    <?php  break; 

                                                    case '2': ?>
                                                    
                                                    <ul class="default-rating">
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        
                                                        <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li>(<span> <?php echo $yorumcek['yorum_puan'] ?></span> )</li>
                                                    </ul>
                                                    
                                                    <?php  break; 

                                                    case '1': ?>
                                                    
                                                    <ul class="default-rating">
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li>(<span><?php echo $yorumcek['yorum_puan'] ?></span> )</li>
                                                    </ul>
                                                    
                                                    <?php  break; 

                                                    case '0': ?>
                                                    
                                                    <ul class="default-rating">
                                                        <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i style="color:grey;" class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li>(<span><?php echo $yorumcek['yorum_puan'] ?></span> )</li>
                                                    </ul>
                                                    
                                                    <?php  break; }

                                                    ?>
                                                    

                                                </div> 
                                                <?php echo $yorumcek['yorum_detay'] ?>
                                            </div>
                                        </div>
                                        <hr><br><br>  

                                    <?php  }
                                    if (isset($_SESSION['userkullanici_mail'])) { ?>
                                       <h4>Yorum yazın</h4>

                                       <form action="nedmin/netting/islem.php" method="POST" role="form">
                                           <div align="left" class="item-details">
                                            <p>Zəhmət olmasa qiymətləndirin.</p>
                                            <ul >
                                                <li><input type="radio" name="yorum_puan" value="1"> 1</li>
                                                <li><input type="radio" name="yorum_puan" value="2"> 2</li>
                                                <li><input type="radio" name="yorum_puan" value="3"> 3</li>
                                                <li><input type="radio" name="yorum_puan" value="4"> 4</li>
                                                <li><input type="radio" name="yorum_puan" value="5"> 5</li>
                                                <li></li>
                                            </ul>
                                        </div> <hr><br><br>
                                        <div class="form-group">

                                            <textarea class="form-control" name="yorum_detay" placeholder="Yorumunuzu daxil edin..." id="text"></textarea>
                                        </div>
                                        <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>" >
                                        <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>" >
                                        <input type="hidden" name="gelen_url" value="<?php  echo "http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."";?>" >

                                        <button type="submit" name="yorumkaydet"  class="btn btn-default btn-red btn-sm">Göndər</button>
                                    </form>
                                <?php  } else {  ?>

                                 <p>Yorum yaza bilmək üçün <a href="register">Qeydiyyatdan</a> keçin...</p>

                             <?php  } ?>

                         </div>
                         
                     </div>
                 </div>
             </div>
         </div> 
         <h3 class="title-inner-section">Bənzər məhsullar</h3>                               
         <div class="row more-product-item-wrapper">
            
            <?php 

            $kategori_id=$uruncek['kategori_id'];

            $urunaltsor=$db->prepare("SELECT urun.*,kategori.* FROM urun INNER JOIN kategori ON urun.kategori_id=kategori.kategori_id where urun.kategori_id=:id and urun.urun_durum=:durum order by rand() limit 3");
            $urunaltsor->execute(array(

                'id'=> $kategori_id,
                'durum' => 1
            ));


            while($urunaltcek=$urunaltsor->fetch(PDO::FETCH_ASSOC)){
               ?>
               

               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                <div class="more-product-item">
                    <div class="more-product-item-img">
                        <img  style="width: 102px; height: 102px;"  src="<?php echo $urunaltcek['urunfoto_resimyol'] ?>" alt="product" class="img-responsive">
                    </div>
                    <div class="more-product-item-details">
                       <h4> <a href="urun-<?=seo($urunaltcek['urun_ad'])."-".$urunaltcek['urun_id']?>"> <?php if (strlen($urunaltcek['urun_ad'])>16) {
                        echo substr($urunaltcek['urun_ad'],0,16)."...";
                    } else { echo $urunaltcek['urun_ad']; }?></a></h4>
                    <div class="p-title"><?php echo $urunaltcek['kategori_ad'] ?></div>
                    <div class="p-price"><?php echo $urunaltcek['urun_fiyat'] ?><span style="font-size: 12px;">AZN</span></div>
                </div>
            </div>
        </div>
        
    <?php  }  ?>
    
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
    <div class="fox-sidebar">
        <div class="sidebar-item">
            <div class="sidebar-item-inner">
                <h3 class="sidebar-item-title">Məhsulun qiyməti</h3>
                <ul class="sidebar-product-price">

                   <li> <span><?php  echo $uruncek['urun_fiyat'];  ?></span><span style="font-size: 12px;">AZN</span></li>
                   <li>
                     
                   </li>
               </ul>

               <ul class="sidebar-product-btn">
                 
                 <?php 

                 if (empty($_SESSION['userkullanici_id'])) { ?>
                   <li><button class="add-to-cart-btn" id="cart-button"><i class="fa fa-ban" aria-hidden="true"></i> İndi al</button></li>
               <?php  } else if ($_SESSION['userkullanici_id']==$uruncek['kullanici_id']) { ?>
                <li><button class="add-to-cart-btn" id="oz-mehsul" ><i class="fa fa-ban" aria-hidden="true"></i> Öz məhsulunuz</button></li>
            <?php   } else { ?>
                <form action="odeme-detay" method="POST">
                   <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id']  ?>">
                   <input type="hidden" name="kullanici_id" value="<?php echo $uruncek['kullanici_id']  ?>">
                   <input type="hidden" name="urun_fiyat" value="<?php echo $uruncek['urun_fiyat']  ?>">

                   <li><button class="add-to-cart-btn" name="indial" > <i class="fa fa-shopping-cart" aria-hidden="true"></i> İndi al</button></li>
                   
               <?php  } ?>
               
           </ul ></form>
       </div>
   </div>                                
   <div class="sidebar-item">
    <div class="sidebar-item-inner">
        <ul class="sidebar-sale-info">
            <li><i class="fa fa-shopping-cart" aria-hidden="true"></i></li>
            <li><?php 

            $urunsay=$db->prepare("SELECT COUNT(urun_id) as say FROM siparis_detay where urun_id=:id");
            $urunsay->execute(array(

              'id' => $_GET['urun_id']
          ));

            $saycek=$urunsay->fetch(PDO::FETCH_ASSOC);
            echo $saycek['say'];
            ?> </li>
            <li>Satış</li>                                           
        </ul>
    </div>
</div>
<div class="sidebar-item">
    
</div>
<div class="sidebar-item">
    <div class="sidebar-item-inner">
        <h3 class="sidebar-item-title">Məhsulun sahibi</h3>
        <div class="sidebar-author-info">
            <img style="width: 73px; height: 67px;" src="<?php echo $uruncek['kullanici_magazafoto']  ?>" alt="product" class="img-responsive">
            <div class="sidebar-author-content">
                <h3> <span><?php echo $uruncek['kullanici_ad']." ".substr($uruncek['kullanici_soyad'], 0,1) ?>.</span></h3>
                <a href="satici-<?=seo($uruncek['kullanici_ad']."-".$uruncek['kullanici_soyad'])."-".$uruncek['kullanici_id']?>" class="view-profile">Profili göstər </a>
            </div>
        </div>
        <ul class="sidebar-badges-item">
            <li><img src="img\profile\badges1.png" alt="badges" class="img-responsive"></li>
            <li><img src="img\profile\badges2.png" alt="badges" class="img-responsive"></li>
            <li><img src="img\profile\badges3.png" alt="badges" class="img-responsive"></li>
            <li><img src="img\profile\badges4.png" alt="badges" class="img-responsive"></li>
            <li><img src="img\profile\badges5.png" alt="badges" class="img-responsive"></li>
        </ul>
    </div>
</div>
</div>
</div>                        
</div>
</div>
</div>
<!-- Product Details Page End Here -->

<?php  require_once 'footer.php' ; ?>
