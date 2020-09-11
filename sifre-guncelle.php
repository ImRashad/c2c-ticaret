<?php  
$title="Şifrə dəyiş";
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
    <form action="nedmin/netting/islem.php" method="POST" class="form-horizontal" id="personal-info-form">
        <div class="settings-details tab-content">
            <div class="tab-pane fade active in" id="Personal">
                <h2 class="title-section">Şifrəni dəyiş</h2>
                <div class="personal-info inner-page-padding"> 
                 

                 <div class="form-group dob">
                    <?php   

                    if ($_GET['durum']=="farklisifre") { ?>

                      <div class="alert alert-danger">
                        <strong>HATA!</strong>  Girdiyiniz  şifrələr fərqlidir...
                    </div>
                <?php   } 

                elseif ($_GET['durum']=="eksisifre") { ?>

                  <div class="alert alert-danger">
                    <strong>HATA!</strong>  Girdiyiniz şifrələr 6 xarakterdən azdır...
                </div>
            <?php } elseif ($_GET['durum']=="basarisiz") { ?>

              <div class="alert alert-danger">
                <strong>HATA!</strong>  Əməliyyatda səhv var...
            </div>
        <?php   } elseif ($_GET['durum']=="eskisifreyanlis") { ?>

          <div class="alert alert-danger">
            <strong>HATA!</strong>   Girdiyiniz əvvəlki şifrələr səhvdir...
        </div>
    <?php } elseif ($_GET['durum']=="basarili") { ?>

      <div class="alert alert-success">
        <strong>TƏBRİKLƏR!</strong>  Şifrə dəyişdirildi...
    </div>

<?php  }   ?>

</div> 

<div class="form-group">
    <label class="col-sm-3 control-label">Əvvəlki şifrə</label>
    <div class="col-sm-9">
        <input class="form-control" name="kullanici_passwordeski" placeholder="Əvvəlki şifrə..." type="password">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Yeni şifrə</label>
    <div class="col-sm-9">
        <input class="form-control" name="kullanici_passwordone" placeholder="Yeni şifrə..."  type="password">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Yeni şifrə(təkrar)</label>
    <div class="col-sm-9">
        <input class="form-control" name="kullanici_passwordtwo" placeholder="Yeni şifrə(təkrar)..." type="password">
        <button class="update-btn" name="musterisifreguncelle">Dəyiş</button>
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