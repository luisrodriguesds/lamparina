
    <!-- Footer Part Start -->
    <footer class="footer-part footer-bg-dark">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <!-- Single widget-->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-logo">
                            <a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo-footer-2.png" alt=""></a>
                            <p style="margin-top:15px;">
                                <?php 
                                $texto = query_posts('post_type=textos-das-secoes&post_name=servicos&orderby=date&order=ASC');
                                wp_reset_query();

                                echo $texto[3]->post_content;
                                ?>
                                
                            </p>
                            <ol class="flat-list">
                                <li><a href="https://www.facebook.com/comunicalamparina/?ref=bookmarks" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                                <li><a href="https://www.instagram.com/lamparinacomunicacao/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/lamparinacomunicacao/about/?viewAsMember=true" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            </ol>
                        </div>
                    </div>
                    

                    <!-- Single widget-->
                    <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0">
                        <div class="footer-widget-item">
                            <h3>Contate-nos</h3>
                            <ul class="footer-widget-contact">
                                <li><i class="fa fa-envelope"></i>
                                    <p><a href="mailto::contato@lamparinacomunicacao.com">contato@lamparinacomunicacao.com</a></p>
                                </li>
                                
                                <li><i class="fa fa-phone"></i>
                                    <p><a href="callto::85997354788">(85)9 9735-4788</a></p>
                                </li>
                                
                                <!-- <li><i class="fa fa-phone"></i>
                                    <p><a href="callto::85991544138">(85)9 9154-4138</a></p>
                                </li> -->
                                <!-- <li><i class="fa fa-map-marker"></i> 132, My Street MIT42, <br> New York</li>
                                 -->
                            </ul>
                        </div>
                    </div>
                    <!-- Single widget-->
                    <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0">
                        <div class="footer-widget-item">
                            <h3>Funcionamento</h3>
                            <ul class="footer-widget-office-time">
                                <li>
                                    <p>Atendemos:</p>
                                    <p>Segunda - Sexta:</p>
                                    <p>8h às 12h</p>
                                    <p>14h às 18h</p>
                                </li>
                                <li>
                                    <p>Fechado:</p>
                                    <p>Sábado e Domundo</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0">
                        <div class="footer-widget-item">
                            <h3>Instagram</h3>
                            <ul class="flat-list footer-instagram-item">
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copy right Start -->
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <p>Copyright © 2019 | Todos os direitos reservados - Lamparina Comunicação | Developed By  <a href="http://luisrodriguesdev.com.br" target="_blank" style="color: #f2a22b;">Luis Rodrigues</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- <div class="backtotop">
        <i class="fa fa-angle-up backtotop_btn"></i>
    </div> -->
    

    <!--js Library  -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.min.js"></script>
    <!--Popper js  -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/popper.min.js"></script>
    <!--Bootstrap min js  -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
    <!--Plugins   -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/plugins.js"></script>
    <!--Gmap3 js  -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/gmap3.min.js"></script>
    <!--SwiperRunner  -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/swiperRunner.min.js"></script>
    <!--Custom js  -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/custom.js"></script>

    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
    

    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+55(85)997354788", // WhatsApp number
                call_to_action: "Olá! Está precisando de uma luz?", // Call to action
                position: "right", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();

        $(function(){
            var url_insta = 'https://api.instagram.com/v1/users/self/media/recent/'+
                            '?access_token=5507066318.8166f4b.263f13cdc7224c3c9aee72a3047d95e8';

            $.get(url_insta, function(data) {
                /*optional stuff to do after success */
                var imagens = data.data;
                var show = '';
                for (var i = 0; i < 6; i++) {
                    show+='<li><a href="'+imagens[i].images.standard_resolution.url+'" data-fancybox="images" rel="images" class="images"><img src="'+imagens[i].images.thumbnail.url+'" alt=""></a></li>';
                    
                }

                $('.footer-instagram-item').append(show);
                
            }).then(function(){

                $("body .images").fancybox({
                  prevEffect    : 'block',
                  nextEffect    : 'block',
                  closeBtn    : true,
                  helpers   : {
                    title : { type : 'inside' },
                    buttons : {},
                    media : {}
                    }
                });
            });

           
        });
    </script>
    <!-- /WhatsHelp.io widget -->
</body>

</html>