<?php 
$title="Qeydiyyat";
require_once  'header.php';
error_reporting(0);
?>
<!-- Main Banner 1 Area End Here --> 
<!-- Main Banner 1 Area Start Here -->
<div class="inner-banner-area">
    <div class="container">
        <div class="inner-banner-wrapper">

        </div>
    </div>
</div>
<!-- Main Banner 1 Area End Here -->         
<!-- Registration Page Area Start Here -->
<div class="registration-page-area bg-secondary section-space-bottom">
    <div class="container">
        <h2 class="title-section">Qeydiyyat</h2>
        <div class="registration-details-area inner-page-padding">


            <div class="form-group dob">
                <?php   

                if ($_GET['durum']=="farklisifre") { ?>

                  <div class="alert alert-danger">
                    <strong>XƏTA!</strong>  Girdiyiniz şifrələr fərqlidir...
                </div>
            <?php   } 

            elseif ($_GET['durum']=="eksisifre") { ?>

              <div class="alert alert-danger">
                <strong>XƏTA!</strong>  Girdiyiniz şifrələr 6 simvoldan azdır...
            </div>
        <?php } elseif ($_GET['durum']=="basarisiz") { ?>

          <div class="alert alert-danger">
            <strong>XƏTA!</strong>  İşləm başarısızdır...
        </div>
    <?php   } elseif ($_GET['durum']=="eynikayit") { ?>

      <div class="alert alert-danger">
        <strong>XƏTA!</strong>  Bu mail qeydiyyatdan keçib...
    </div>
<?php } elseif ($_GET['durum']=="basarili") { ?>

  <div class="alert alert-success">
    <strong>TƏBRİKLƏR!</strong>  Qeydiyyatdan uğurla keçdiniz...
</div>

<?php  }   ?>

</div> 

<form action="nedmin/netting/islem.php" method="POST" id="personal-info-form">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
            <div class="form-group">
                <label class="control-label" for="first-name">Ad *</label>
                <input type="text" id="first-name" required="" name="kullanici_ad" class="form-control" placeholder="Adınız...">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
            <div class="form-group">
                <label class="control-label" for="last-name">Soyad *</label>
                <input type="text" id="last-name" required="" name="kullanici_soyad" class="form-control" placeholder="Soyadınız...">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
            <div class="form-group">
                <label class="control-label" for="company-name">Email *</label>
                <input type="email" id="company-name" required="" placeholder="Email..." name="kullanici_mail" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
            <div class="form-group">
                <label class="control-label" for="email">Şifrə *</label>
                <input type="password" id="email" required="" placeholder="Şifrəniz..." name="kullanici_passwordone" class="form-control">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
            <div class="form-group">
                <label class="control-label" for="phone">Şifrə(təkrar) *</label>
                <input type="password" id="phone" required="" placeholder="Şifrəniz(təkrar)..." name="kullanici_passwordtwo" class="form-control">
            </div>
        </div>
    </div>                                  
    <div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
        <div class="pLace-order">
            <button class="update-btn disabled" type="submit" name="musterikaydet">Göndər</button>
        </div>
    </div>
</div> 
</form>                      
</div> 
</div>
</div>
<!-- Registration Page Area End Here -->
<?php require_once 'footer.php';  ?>
