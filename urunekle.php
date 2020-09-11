<?php 
$title="Məhsul əlavə et";
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
                <h2 class="title-section">Məhsul əlavə et</h2>
                <div class="personal-info inner-page-padding"> 
                   <div class="form-group dob">
                    <?php   
                    if ($_GET['durum']=="no") { ?>

                      <div class="alert alert-danger">
                        <strong>HATA!</strong>  Əməliyyatda səhv var...
                    </div>
                <?php   } elseif ($_GET['durum']=="ok") { ?>

                  <div class="alert alert-success">
                    <strong>TƏBRİKLƏR!</strong>  Məhsul əlavə edildi...
                </div>

            <?php  }   ?>

        </div> 
        
        <div class="form-group">
            <label class="col-sm-3 control-label">Yeni yüklə</label>
            <div class="col-sm-9">
              <input class="form-control" name="urunfoto_resimyol"  type="file">
          </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Kateqoriya ad</label>
        <div class="col-sm-9">
            <div class="custom-select">
                <select  name="kategori_id" class='select2'>

                    <?php 
                    $kategorisor=$db->prepare("SELECT * FROM kategori  order by kategori_sira ASC");
                    $kategorisor->execute();

                    while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) { ?>

                        <option value="<?php echo $kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_ad'] ?></option>
                        
                    <?php  } ?>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Məhsul adı</label>
        <div class="col-sm-9">
            <input class="form-control" name="urun_ad"  type="text">
        </div>
    </div>
    
    <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mətn<span class="required">*</span>
     </label>
     <div class="col-sm-9">
        <textarea name="urun_detay" class="ckeditor"></textarea>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Məhsul sayı</label>
    <div class="col-sm-9">
        <input class="form-control" name="urun_stok"  type="text">
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Məhsul qiyməti</label>
    <div class="col-sm-9">
        <input class="form-control" name="urun_fiyat"  type="text">
        <input type="hidden" name="urun_id">

        <button class="update-btn" name="urunekle">Əlavə et</button>
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