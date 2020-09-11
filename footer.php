<!-- Footer Area Start Here -->
<footer>
    <div class="footer-area-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-left title-bar-footer">Adresimiz</h3>
                        <ul class="corporate-address">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="Phone(01)800433633"><?php  echo $ayarcek['ayar_adress'];  ?></a></li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i><?php  echo $ayarcek['ayar_tel'];  ?></li>
                            <li><i class="fa fa-fax" aria-hidden="true"></i><?php  echo $ayarcek['ayar_gsm'];  ?></li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i><?php  echo $ayarcek['ayar_mail'];  ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box">

                     
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box">
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-left title-bar-footer">Sosyal Şəbəkə</h3>
                        <ul class="footer-social">
                            <li><a href="<?php  echo $ayarcek['ayar_facebook'];  ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php  echo $ayarcek['ayar_twitter'];  ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="<?php  echo $ayarcek['ayar_youtube'];  ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li><a href="<?php  echo $ayarcek['ayar_google'];  ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>

                        </ul>
                        <div class="newsletter-area">
                            
                            <div class="input-group stylish-input-group">
                             
                                
                              
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <p>@ 2020 C2C. Alıcı və satıcıları birləşdirən sayt.</p>
        </div>
    </div>
</footer>
<!-- Footer Area End Here -->
</div>
<!-- Main Body Area End Here -->
<!-- jquery-->  
<script src="js\jquery-2.2.4.min.js" type="text/javascript"></script>

<!-- Plugins js -->
<script src="js\plugins.js" type="text/javascript"></script>

<!-- Bootstrap js -->
<script src="js\bootstrap.min.js" type="text/javascript"></script>

<!-- WOW JS -->     
<script src="js\wow.min.js"></script>

<!-- Owl Cauosel JS -->
<script src="vendor\OwlCarousel\owl.carousel.min.js" type="text/javascript"></script>

<!-- Meanmenu Js -->
<script src="js\jquery.meanmenu.min.js" type="text/javascript"></script>

<!-- Srollup js -->
<script src="js\jquery.scrollUp.min.js" type="text/javascript"></script>

<!-- jquery.counterup js -->
<script src="js\jquery.counterup.min.js"></script>
<script src="js\waypoints.min.js"></script>
<!-- Select2 Js -->
<script src="js\select2.min.js" type="text/javascript"></script>
<!-- Isotope js -->
<script src="js\isotope.pkgd.min.js" type="text/javascript"></script>

<!-- Gridrotator js -->
<script src="js\jquery.gridrotator.js" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Custom Js -->
<script src="js\main.js" type="text/javascript"></script>
<script type="text/javascript">


    $(function() {
        $("#buy-button").click(function() {

            swal({

                title: "Məlumat",
                text: "Mesaj göndərmək üçün giriş edin...",
                icon: "info",
                buttons: "OK",
            }) ;   


        });

    });

    $(function() {
        $("#oz-mesaj").click(function() {

            swal({

                title: "Məlumat",
                text: " Özünə mesaj göndərmək mümkün deyil...",
                icon: "error",
                buttons: "OK",
            }) ;   


        });

    });
    $(function() {
        $("#cart-button").click(function() {

            swal({

                title: "Məlumat",
                text: "Məhsul almaq üçün giriş edin...",
                icon: "info",
                buttons: "OK",
            }) ;   


        });

    });
    $(function() {
        $("#oz-mehsul").click(function() {

            swal({

                title: "Məlumat",
                text: "Öz məhsulunuzu almaq mümkün deyil...",
                icon: "error",
                buttons: "OK",
            }) ;   


        });

    });



</script>
</body>
</html>

