<?php 
$title="Gələn mesajlar";
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
      <h2 class="title-section">Gələn mesajlar</h2>
      <div class="personal-info inner-page-padding"> 

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tarix</th>
              <th scope="col">Göndərən</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>   
            </tr>
          </thead>
          <tbody>

            <?php     

            $mesajsor=$db->prepare("SELECT  mesaj.*,kullanici.* FROM mesaj INNER JOIN kullanici ON mesaj.kullanici_gon=kullanici.kullanici_id where mesaj.kullanici_gel=:id order by mesaj_okuma,mesaj_zaman DESC ");
            $mesajsor->execute(array(

              'id' => $_SESSION['userkullanici_id']

            ));

            $say=0;

            while ($mesajcek=$mesajsor->fetch(PDO::FETCH_ASSOC) ) { $say++; ?>



              <tr>
                <th scope="row"><?php  echo $say ?></th>
                <td><?php  echo $mesajcek['mesaj_zaman'] ?></td>
                <td><?php  echo $mesajcek['kullanici_ad'] ?></td>
                
                <td>


                  <?php 



                  if ($mesajcek['mesaj_okuma']== "1") { ?>


                    <center><button class="btn btn-success btn-xs" >Görüldü...</button></center>

                  <?php   }  else if ($mesajcek['mesaj_okuma']== "0") { ?>                        


                    <center><button class="btn btn-warning btn-xs" >Yeni...</button></center>


                  <?php   }  ?>


                </td>
                <td><center><a href="mesaj-detay?mesaj_id=<?php echo $mesajcek['mesaj_id'] ?>&kullanici_gon=<?php echo $mesajcek['kullanici_gon'] ?>">  <button class="btn btn-primary btn-xs">Ətraflı</button> </a></center></td>
              </td>
              <td><center><a href="nedmin/netting/islem.php?mesaj_id=<?php echo $mesajcek['mesaj_id'] ?>&mesajsilgelen=ok">  <button class="btn btn-danger btn-xs">sil</button> </a></center></td>
              
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