<?php 
$title="Sifarişlərim";
require_once 'header.php'; ?>
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
<?php  require_once 'hesab-sidebar.php'; ?>
<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"> 
 <div class="settings-details tab-content">
  <div class="tab-pane fade active in" id="Personal">
    <h2 class="title-section">Sifarişlərim</h2>
    <div class="personal-info inner-page-padding"> 
     <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tarix</th>
          <th scope="col">Ad</th>
          <th scope="col">Qiymət</th>
          <th scope="col">Satıcı</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>

        <?php     

        $siparissor=$db->prepare("SELECT siparis.*,siparis_detay.*,urun.*,kullanici.* FROM siparis INNER JOIN siparis_detay ON siparis_detay.siparis_id=siparis.siparis_id INNER JOIN urun ON urun.urun_id=siparis_detay.urun_id INNER JOIN kullanici ON kullanici.kullanici_id=siparis_detay.kullanici_idsatici where siparis.kullanici_id=:kullanici_id order by siparis.siparis_zaman DESC");
        $siparissor->execute(array(

          'kullanici_id' => $_SESSION['userkullanici_id']

        ));

        $say=0;

        while ($sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC)) { $say++; ?>

          <tr>
            <th scope="row"><?php  echo $say ?></th>
            <td><?php  echo $sipariscek['siparis_zaman'] ?></td>
            <td><?php  echo $sipariscek['urun_ad'] ?></td>
            <td><?php  echo $sipariscek['urun_fiyat'] ?></td>
            <td><?php  echo $sipariscek['kullanici_ad'] ?></td>
            <td>

             <?php 

             if ($sipariscek['siparisdetay_onay']== "1") { ?>
               

              <center><button class="btn btn-success btn-xs" >Qəbul edildi...</button></center>

            <?php   }  else if ($sipariscek['siparisdetay_onay']== "0") { ?>                        
             
              
              <center><button class="btn btn-warning btn-xs" >Gözlənilir...</button></center>


            <?php   }  ?>

          </td>
          
        </tr>
      <?php   }  ?>
    </tbody>
  </table>
</div> 
</div> 
</div> 
</div>  
</div>  
</div>  
</div> 
<!-- Settings Page End Here -->
<?php  require_once 'footer.php' ?>