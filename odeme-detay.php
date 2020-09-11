<?php
$title="Ödəmə səhifəsi";
require_once 'header.php'; 
if (isset($_POST['indial'])) {
 $urun_id = $_POST['urun_id'];
 $kullanici_id = $_POST['kullanici_id'];
 $urun_fiyat = $_POST['urun_fiyat'];
 $urunsor=$db->prepare("SELECT urun.*,kullanici.* FROM urun INNER JOIN kullanici ON urun.kullanici_id=kullanici.kullanici_id where urun_id=:id ");
 $urunsor->execute(array(

    'id' => $urun_id
));

 $uruncek=$urunsor->fetch(PDO::FETCH_ASSOC) ;
}

?>


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
<div class="settings-page-area bg-secondary section-space-bottom">
    <div align="center" class="container">
        <div class="row settings-wrapper">  
           

            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"> 
                
                
                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:50%">Məhsul</th>
                            <th style="width:10%">Qiymət</th>
                            <th style="width:8%">Satıcı</th>
                            
                            <th style="width:10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-2 hidden-xs"><img style="width: 60px; height: 60px;" src="<?php echo $uruncek['urunfoto_resimyol'] ?>" alt="..." class="img-responsive"/></div>
                                    <div class="col-sm-10">
                                        <h4 class="nomargin"><?php echo $uruncek['urun_ad']  ?></h4>
                                        
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price"><?php echo $uruncek['urun_fiyat']  ?>AZN</td>
                            <td data-th="Quantity">
                                <?php echo $uruncek['kullanici_ad']." ".$uruncek['kullanici_soyad'];  ?>
                            </td>
                            
                            
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="visible-xs">
                          
                        </tr>
                        <form action="nedmin/netting/islem.php" method="POST">
                            <tr>
                                <td><button onclick="geridon()" class="btn btn-warning"><i class="fa fa-angle-left"></i> Əvvəl</button></td>
                                <td colspan="2" class="hidden-xs"></td>
                                <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>">
                                <input type="hidden" name="urun_fiyat" value="<?php echo $uruncek['urun_fiyat'] ?>">
                                <input type="hidden" name="kullanici_idsatici" value="<?php echo $uruncek['kullanici_id'] ?>">
                                
                                <td><button id="sifaris" type="submit" name="sifarisver" class="btn btn-success btn-block">Sifariş ver <i class="fa fa-angle-right"></i></button></td>
                            </tr>
                        </tfoot>
                    </table>
                    
                    
                </div> 
            </form>
            
        </div>  
    </div>  
</div> 
<!-- Settings Page End Here -->
<?php  require_once 'footer.php' ?>
<script type="text/javascript">
    
 function geridon() {
    window.history.back();
}

$(function () {
    // body...

    $("#sifaris").click(function () {
        // body...
        
        swal({

            title: "Uğurlar",
            text: "Siz bu məhsulu sifariş verdiniz.Zəhmət olmasaç qəbul olmağını gözləyin.Ətraflı məlumat üçün sifarişlərim menyusuna daxil ola bilərsiniz.",
            icon:"success"
            

        });



    });
});


</script>