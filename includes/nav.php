 <?php 
    $menu_name = 'header-menu';
    $local = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $local[ $menu_name ] );
    $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
   

 ?>
 <!-- Navigation Part Start -->
 <nav id="navigation" class="navbar navbar-expand-lg nav-bg-white">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/logo-horizontal-3.png" alt=""></a>
                <div class="collapse navbar-collapse" id="nav-list">

                    <ul class="navbar-nav ml-auto">
                        <?php 
                            foreach ($menuitems as $item) {
                                $url_item = str_replace($url_base, '', $item->url);
                                $url_item = explode('/', $url_item);

                               if ($url[0] == $url_item[0]) {
                                    $active = 'class="active"';
                                }else{
                                    $active = '';
                                }
                            
                        ?>
                        <li class="nav-item custom-dropdown-box">
                            <a href="<?php echo $item->url ?>" <?php echo $active; ?>> <?php echo $item->title ?></a>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
                <button class="second-nav-toggler" type="button">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
        </nav>
        <!-- mobile manu  -->
        <div id="mobile-nav" data-prevent-default="true" data-mouse-events="true">
            <div class="mobile-nav-box">
                <div class="mobile-logo">
                    <a href="index.html" class="mobile-main-logo"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo-horizontal-3.png" alt="Mobile LOGO"></a>
                    <a href="#" class="manu-close">MENU <i class="fa fa-times"></i></a>
                </div>
                <ul class="mobile-list-nav">
                    <?php 
                            foreach ($menuitems as $item) {
                                $url_item = str_replace($url_base, '', $item->url);
                                $url_item = explode('/', $url_item);
                                
                               if ($url[0] == $url_item[0]) {
                                    $active = 'class="active"';
                                }else{
                                    $active = '';
                                }
                            
                        ?>
                        <li class="nav-item custom-dropdown-box">
                            <a href="<?php echo $item->url ?>" <?php echo $active; ?>> <?php echo $item->title ?></a>
                        </li>
                    <?php } ?>
                </ul>

            <div class="achivement-blog">
                <ul class="flat-list sociais">
                    <li>
                        <a href="https://www.facebook.com/comunicalamparina/?ref=bookmarks" target="_blank">
                            <i class="fa fa-facebook"></i>
                            <h6>Facebook</h6>
                            <span class="counter">1000</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/lamparinacomunicacao/" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <h6>Instagram</h6>
                            <span class="counter">1000</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/lamparinacomunicacao/about/?viewAsMember=true" target="_blank">
                            <i class="fa fa-linkedin"></i>
                            <h6>Linkedin </h6>
                            <span class="counter">1000</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>