<?php

include 'header.php';


$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_yetki=:yetki and kullanici_magaza=:magaza");
$kullanicisor->execute(array(

'yetki' => 1,
'magaza' => 2

));



?>



<head><script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script></head>










        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Mağaza Siyahısı <small>




                    </small></h2>


                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

<!--         Basliq        -->


     <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                           <th>S.NO</th>
                          <th>Tarix</th>
                          <th>Ad</th>
                          <th>Soyad</th>
                          <th>telefon</th>
                          <th>Mail Adresi</th>
                     
                          
                         
                        </tr>
                      </thead>





                      <tbody>

<?php   
$say=0;
while ($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC) ) { 
$say++ ?>



 <tr>
        <td><?php echo  $say ?></td>
                          <td><?php echo  $kullanicicek['kullanici_zaman'] ?></td>
                          <td><?php echo  $kullanicicek['kullanici_ad'] ?></td>
                          <td><?php echo  $kullanicicek['kullanici_soyad'] ?></td>
                          <td><?php echo  $kullanicicek['kullanici_tel'] ?></td>
                          <td><?php echo  $kullanicicek['kullanici_mail'] ?></td>



                  

                          <td><center><a href="magaza-duzenle.php?kullanici_id=<?php echo $kullanicicek['kullanici_id'] ?>"> <button  class="btn btn-primary btn-xs">Ətraflı</button> </a> </center></td>
                        
                        
                        </tr>


<?php  }
 ?>




                       
                       
                      </tbody>
                    </table>




<!--   son          -->












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
