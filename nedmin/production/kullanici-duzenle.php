<?php

include 'header.php';

$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
$kullanicisor->execute(array(

'id'=> $_GET['kullanici_id']

));


$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);



?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>İstifadəçi düzənləmə <small>


                    <?php

                    if ($_GET['durum']=="ok") { ?>
                      
                      <b style="color: green;"><i>Əməliyyat uğurla həyata keçirildi...</i></b>
                    
                  <?php   } elseif ($_GET['durum']=="no") { ?>
                   
                    <b style="color: red;"><i>Əməliyyat səhv var...</i></b>
                 
                 <?php }

                    ?>



                    </small></h2>


              
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />




                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

<?php 

$zaman=explode(" ", $kullanicicek['kullanici_zaman']);

 ?>

 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Qeydiyyat tarixi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled="" type="date" id="first-name" name="kullanici_zaman" value="<?php echo $zaman[0] ?>"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>



 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Qeydiyyat zamanı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled="" type="time" id="first-name" name="kullanici_zaman" value="<?php echo $zaman[1] ?>"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
 <div class="form-group">
                                                <label class="col-sm-3 control-label">Istifadəçi tipi</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="custom-select">
                                                        <select id="kullanici_tip" name="kullanici_tip" class='form-control'>
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
                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control" required="" name="kullanici_adress" value="<?php echo $kullanicicek['kullanici_adress']?>" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Firma vergi dairəsi</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control" required="" name="kullanici_vdairesi" value="<?php echo $kullanicicek['kullanici_vdairesi']?>"  type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Firma vergi NO.</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control" required="" name="kullanici_vno" value="<?php echo $kullanicicek['kullanici_vno']?>" type="text">
                                                </div>
                                            </div>
                                        </div>

              
                      <div class="form-group">
                                                <label class="col-sm-3 control-label">Ad</label>
                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control" required="" name="kullanici_ad" value="<?php echo $kullanicicek['kullanici_ad'] ?>" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Soyad</label>
                                               <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control" required="" name="kullanici_soyad" value="<?php echo $kullanicicek['kullanici_soyad'] ?>" type="text">
                                                </div>
                                            </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mail <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled="" type="text" id="first-name" name="kullanici_mail"  value="<?php echo $kullanicicek['kullanici_mail'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                              <div class="form-group">
                                                <label class="col-sm-3 control-label">Bank ad</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control" required="" name="kullanici_banka" value="<?php echo $kullanicicek['kullanici_banka'] ?>" type="text">
                                                </div>
                                            </div>
                                               <div class="form-group">
                                                <label class="col-sm-3 control-label">İBAN NO.</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control" required="" name="kullanici_iban" value="<?php echo $kullanicicek['kullanici_iban'] ?>" type="text">
                                                </div>
</div>










                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Vəziyyət <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12"> 
<select id="heard" class="form-control" name="kullanici_durum" required="">
  


<option value="1" <?php echo $kullanicicek['kullanici_durum'] == "1" ? 'selected=""' : '' ; ?>>Aktiv</option>


<option value="0" <?php echo $kullanicicek['kullanici_durum'] == "0" ? 'selected=""' : '' ; ?>>Passiv</option>



</select>

                          
                        </div>
                      </div>




                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                         <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">

                         
                        </div>
                      </div>

                    </form>




                  </div>
                </div>
              </div>
            </div>

 
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
      <?php   
include 'footer.php';

?>
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
