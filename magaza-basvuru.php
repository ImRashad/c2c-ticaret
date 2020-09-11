<?php 

$title="Mağaza müraciəti";
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
                <h2 class="title-section">Mağaza müraciəti</h2>
                <div class="personal-info inner-page-padding"> 
                    <div class="form-group dob">
                        <?php   

                        if ($_GET['durum']=="basvuruiptal") { ?>

                          <div class="alert alert-danger">
                           <strong>XƏTA!</strong>  Müraciətiniz qəbul edilmədi.Zəhmət olmasa məlumatları dəqiq daxil edin...
                       </div>
                   <?php   } 

                   elseif ($_GET['durum']=="no") { ?>

                      <div class="alert alert-danger">
                        <strong>XƏTA!</strong>  Əməliyyatda səhv var...
                    </div>
                <?php }  ?>

            </div>
            
            <?php if ($kullanicicek['kullanici_magaza']=="0") { ?>
             
               <div class="form-group">
                <label class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input class="form-control" disabled="" name="kullanici_mail" value="<?php echo $kullanicicek['kullanici_mail'] ?>" type="text">
                </div>
            </div> 
            <div class="form-group">
                <label class="col-sm-3 control-label">Bank ad</label>
                <div class="col-sm-9">
                    <input class="form-control" required="" name="kullanici_banka" value="<?php echo $kullanicicek['kullanici_banka'] ?>" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">İBAN NO.</label>
                <div class="col-sm-9">
                    <input class="form-control" required="" name="kullanici_iban" value="<?php echo $kullanicicek['kullanici_iban'] ?>" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Ad</label>
                <div class="col-sm-9">
                    <input class="form-control" required="" name="kullanici_ad" value="<?php echo $kullanicicek['kullanici_ad'] ?>" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Soyad</label>
                <div class="col-sm-9">
                    <input class="form-control" required="" name="kullanici_soyad" value="<?php echo $kullanicicek['kullanici_soyad'] ?>" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Telefon</label>
                <div class="col-sm-9">
                    <input class="form-control" required="" name="kullanici_tel" value="<?php echo $kullanicicek['kullanici_tel'] ?>" type="text">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-3 control-label">Istifadəçi tipi</label>
                <div class="col-sm-9">
                    <div class="custom-select">
                        <select id="kullanici_tip" name="kullanici_tip" class='select2'>
                            <option 

                            <?php if ($kullanicicek['kullanici_tip']=="PERSONAL") {
                              echo "selected";
                          }  ?>

                          value="PERSONAL">Şəxsi</option>
                          <option  <?php if ($kullanicicek['kullanici_tip']=="PRIVATE_COMPANY") {
                              echo "selected";
                          }  ?>
                          value="PRIVATE_COMPANY">Ümumi</option>
                          
                      </select>
                  </div>
              </div>
          </div>
          <div id="tc">
            <div class="form-group">
                <label class="col-sm-3 control-label">Şəxsiyyət NO.</label>
                <div class="col-sm-9">
                    <input class="form-control" required="" name="kullanici_tc" value="<?php echo $kullanicicek['kullanici_tc']?>" type="text">
                </div>
            </div>
        </div>
        <div id="umumi" >
         <div  class="form-group">
            <label class="col-sm-3 control-label">Firma ünvan</label>
            <div class="col-sm-9">
                <input class="form-control"  name="kullanici_adress" value="<?php echo $kullanicicek['kullanici_adress']?>" type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Firma vergi dairəsi</label>
            <div class="col-sm-9">
                <input class="form-control"  name="kullanici_vdairesi" value="<?php echo $kullanicicek['kullanici_vdairesi']?>"  type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Firma vergi NO.</label>
            <div class="col-sm-9">
                <input class="form-control"  name="kullanici_vno" value="<?php echo $kullanicicek['kullanici_vno']?>" type="text">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Şəhər</label>
        <div class="col-sm-9">
            <input class="form-control" required="" name="kullanici_seher" value="<?php echo $kullanicicek['kullanici_seher']?>" type="text">
            <div class="checkbox">
                <label><input type="checkbox" required="" value="">Şərtləri qəbul edirəm.</label>
                
            </div>
            <button class="update-btn" name="magazabasvuru">Göndər</button> 
        </div>
    </div>


<?php   }  else  if ($kullanicicek['kullanici_magaza']=="1") { ?>

  <div class="alert alert-warning">
     Müraciətiniz göndərildi.Zəhmət olmasa, cavab gələnə qədər gözləyin...
 </div>
<?php   }  else  if ($kullanicicek['kullanici_magaza']=="2") { ?>

  <div class="alert alert-success">
     Müraciətiniz qəbul edildi.Mallarınızı menyudan idarə edə bilərsiniz...
 </div>
<?php   }   ?>

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
<script type="text/javascript">
    
    $(document).ready(function(){


        $("#kullanici_tip").change(function(){

            var tip=$("#kullanici_tip").val();


            if (tip=="PERSONAL") {

                $("#umumi").hide();
                $("#tc").show();


            } else if(tip=="PRIVATE_COMPANY"){


                $("#umumi").show();
                $("#tc").hide();

            }

        }).change();



    });

</script>