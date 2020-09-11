<?php
$title="Məhsullarım";
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
      <h2 class="title-section">Məhsullarım</h2>
      <div class="personal-info inner-page-padding"> 

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tarix</th>
              <th scope="col">Ad</th>
              <th scope="col">Qiymət</th>
              <th scope="col"></th>
              <th scope="col"></th>   
            </tr>
          </thead>
          <tbody>

            <?php     

            $urunsor=$db->prepare("SELECT * FROM urun where kullanici_id=:id ");
            $urunsor->execute(array(

              'id' => $_SESSION['userkullanici_id']
            ));

            $say=0;

            while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC) ) { $say++; ?>



              <tr>
                <th scope="row"><?php  echo $say ?></th>
                <td><?php  echo $uruncek['urun_zaman'] ?></td>
                <td><?php  echo $uruncek['urun_ad'] ?></td>
                <td><?php  echo $uruncek['urun_fiyat'] ?></td>
                <td>

                 <?php 

                 if ($uruncek['urun_durum']== "1") { ?>


                  <center><button class="btn btn-success btn-xs" >Qəbul edildi...</button></center>

                <?php   }  else if ($uruncek['urun_durum']== "0") { ?>                        


                 <center><button class="btn btn-warning btn-xs" >Gözlənilir...</button></center>


               <?php   }  ?>

             </td>
             <td><center><a href="nedmin/netting/islem.php?urun_id=<?php echo $uruncek['urun_id'] ?>&urunsil=ok">  <button class="btn btn-danger btn-xs">sil</button> </a></center></td>
             
           </tr>
         <?php  } ?>
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