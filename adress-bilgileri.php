<?php 

$title="Adress məlumatı";

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
<?php  require_once 'hesab-sidebar.php' ?>

<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"> 
    <form action="nedmin/netting/islem.php" method="POST" class="form-horizontal" id="personal-info-form">
        <div class="settings-details tab-content">
            <div class="tab-pane fade active in" id="Personal">
                <h2 class="title-section">Adress məlumatları</h2>
                <div class="personal-info inner-page-padding"> 
                   

                   <div class="form-group dob">
                    <?php   

                    if ($_GET['durum']=="ok") { ?>

                      <div class="alert alert-success">
                        <strong>TƏBRİKLƏR!</strong>  Məlumtlarınız yeniləndi...
                    </div>
                <?php   } 

                elseif ($_GET['durum']=="no") { ?>

                  <div class="alert alert-danger">
                    <strong>XƏTA!</strong>  Əməliyyatda səhv var...
                </div>
            <?php }  ?>

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
                <input class="form-control" name="kullanici_tc" value="<?php echo $kullanicicek['kullanici_tc']?>" type="text">
            </div>
        </div>
    </div>
    <div id="umumi" >
       <div  class="form-group">
        <label class="col-sm-3 control-label">Firma ünvan</label>
        <div class="col-sm-9">
            <input class="form-control" name="kullanici_adress" value="<?php echo $kullanicicek['kullanici_adress']?>" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Firma vergi dairəsi</label>
        <div class="col-sm-9">
            <input class="form-control" name="kullanici_vdairesi" value="<?php echo $kullanicicek['kullanici_vdairesi']?>"  type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Firma vergi NO.</label>
        <div class="col-sm-9">
            <input class="form-control" name="kullanici_vno" value="<?php echo $kullanicicek['kullanici_vno']?>" type="text">
        </div>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Şəhər</label>
    <div class="col-sm-9">
        <input class="form-control" name="kullanici_seher" value="<?php echo $kullanicicek['kullanici_seher']?>" type="text">
        <button class="update-btn" name="musteriadressguncelle">Yenilə</button> 
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