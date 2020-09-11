<?php
$title="Mesaj göndərmə";
require_once 'header.php'; 

$kullanicisor=$db->prepare("SELECT * FROM kullanici  where kullanici_id=:id");
$kullanicisor->execute(array(

  'id'=> $_GET['kullanici_gel']

));
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
<?php  require_once 'hesab-sidebar.php'; ?>

<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"> 
  <form action="nedmin/netting/islem.php" method="POST" enctype="multipart/form-data" class="form-horizontal" id="personal-info-form">
    <div class="settings-details tab-content">
      <div class="tab-pane fade active in" id="Personal">
        <h2 class="title-section">Mesaj göndərmək</h2>
        <div class="personal-info inner-page-padding"> 
         <div class="form-group dob">
          <?php   
          if ($_GET['durum']=="no") { ?>

            <div class="alert alert-danger">
              <strong>HATA!</strong>  Əməliyyatda səhv var...
            </div>
          <?php   } elseif ($_GET['durum']=="ok") { ?>

            <div class="alert alert-success">
              <strong>TƏBRİKLƏR!</strong>  Mesaj göndərildi...
            </div>

          <?php  }   ?>

        </div> 
        <div class="form-group">
          <label class="col-sm-3 control-label">Göndərilən</label>
          <div class="col-sm-9">
            <input class="form-control"   value="<?php echo $kullanicicek['kullanici_ad']." ".$kullanicicek['kullanici_soyad']; ?>" type="text">
          </div>
        </div>
        
        <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mətn<span class="required">*</span>
         </label>
         <div class="col-sm-9">
           <textarea placeholder="Mesajınızı daxil edin*" class="textarea form-control" name="mesaj_detay" id="form-message" rows="20" cols="20" data-error="Message field is required" required=""></textarea>
           <input type="hidden" name="kullanici_gel" value="<?php echo $_GET['kullanici_gel'] ?>">   
           <button type="submit" class="update-btn" name="mesajekle">Göndər</button> 
         </div>
       </div>
     </div> 
   </div> 
   
 </div> 
</form> 
</div>  
</div>  
</div>  
</div> 
<!-- Settings Page End Here -->
<?php  require_once 'footer.php' ?>