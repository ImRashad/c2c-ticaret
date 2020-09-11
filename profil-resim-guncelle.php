<?php 
$title="Profil şəkli";
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
    <form action="nedmin/netting/islem.php" method="POST" enctype="multipart/form-data" class="form-horizontal" id="personal-info-form">
        <div class="settings-details tab-content">
            <div class="tab-pane fade active in" id="Personal">
                <h2 class="title-section">Şifrəni dəyiş</h2>
                <div class="personal-info inner-page-padding"> 
                   <div class="form-group dob">
                    <?php   
                    if ($_GET['durum']=="no") { ?>

                      <div class="alert alert-danger">
                        <strong>HATA!</strong>  Əməliyyatda səhv var...
                    </div>
                <?php   } elseif ($_GET['durum']=="ok") { ?>

                  <div class="alert alert-success">
                    <strong>TƏBRİKLƏR!</strong>  Şəkil dəyişdirildi...
                </div>

            <?php  }   ?>
        </div> 
        
        <div class="form-group">
            <label class="col-sm-3 control-label">Mevcut</label>
            <div class="col-sm-9">
             <img width="128" height="128" src="<?php echo $kullanicicek['kullanici_magazafoto']; ?>">
         </div>
     </div>
     <div class="form-group">
        <label class="col-sm-3 control-label">Yeni yüklə</label>
        <div class="col-sm-9">
            <input class="form-control" name="kullanici_magazafoto"  type="file">

            <input class="form-control" name="eski_yol" value="<?php echo $kullanicicek['kullanici_magazafoto']; ?>" type="hidden">

            <button class="update-btn" name="profilresimguncelle">Dəyiş</button>
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