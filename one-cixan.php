   <div class="newest-products-area bg-secondary section-space-default">                
    <div class="container">
        <h2 class="title-default">Önə çıxan məhsullar</h2>  
    </div>
    <div class="container-fluid" id="isotope-container">
                   <!-- <div class="isotope-classes-tab isotop-box-btn-white"> 
                        
                        <a href="#" data-filter="*" class="current">Önə çıxan</a>
                        <a href="#" data-filter=".wordpress">Çox satılan</a>
                        <a href="#" data-filter=".joomla">Yeni</a>
                        
                    </div>  -->

                    <div class="row featuredContainer">

                        <?php 

                        $urunsor=$db->prepare("SELECT urun.*,kategori.*,kullanici.* FROM urun INNER JOIN kategori ON urun.kategori_id=kategori.kategori_id INNER JOIN kullanici ON urun.kullanici_id=kullanici.kullanici_id where urun_durum=:durum and urun_onecikar=:onecikar order by urun_zaman DESC limit 8");
                        $urunsor->execute(array(

                            'durum' => 1,
                            'onecikar' => 1
                        ));
                        while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC) ) { ; 
                         ?>

                         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 joomla plugins component">
                            <div class="single-item-grid">
                                <div class="item-img">
                                    <a href="urun-<?=seo($uruncek['urun_ad'])."-".$uruncek['urun_id']?>">  <img style="width: 451px; height: 252px;" src="<?php echo $uruncek['urunfoto_resimyol'] ?>" alt="product" class="img-responsive"></a>
                                    <div class="trending-sign" data-tips="Trending"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                                </div>
                                <div class="item-content">
                                    <div class="item-info">
                                        <h3> <a href="urun-<?=seo($uruncek['urun_ad'])."-".$uruncek['urun_id']?>"> <?php if (strlen($uruncek['urun_ad'])>16) {
                                            echo substr($uruncek['urun_ad'],0,16)."...";
                                        } else { echo $uruncek['urun_ad']; }?></a></h3>
                                        <a href="kategori-<?=seo($uruncek['kategori_ad'])."-".$uruncek['kategori_id']; ?>">  <span><?php echo $uruncek['kategori_ad'] ?></span> </a>
                                        <div class="price"><?php echo $uruncek['urun_fiyat'] ?><span style="font-size: 12px;">AZN</span></div>
                                    </div>
                                    <div class="item-profile">
                                        <div class="profile-title">
                                            <div class="img-wrapper"><img style="width: 38px; height: 38px;" src="<?php echo $uruncek['kullanici_magazafoto'] ?>" alt="profile" class="img-responsive img-circle"></div>
                                            <span><?php echo $uruncek['kullanici_ad']." ".substr($uruncek['kullanici_soyad'], 0,1) ?>.</span>

                                        </div>
                                        <div class="profile-rating">
                                           <a href="urun-<?=seo($uruncek['urun_ad'])."-".$uruncek['urun_id']?>" class="btn btn-primary btn-xs">Ətraflı </a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                   <?php  } ?>
               </div>

           </div>
       </div>
            <!-- Newest Products Area End Here -->