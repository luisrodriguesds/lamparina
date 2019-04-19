<?php 
    $texto = query_posts('post_type=textos-das-secoes&post_name=servicos&orderby=date&order=ASC');
    wp_reset_query();

    $res = query_posts('post_type=servicos&orderby=post_title&order=ASC');
    if (have_posts()) {

?>

    <!-- Prictise area Part start -->
    <section class="section-p" style="padding: 80px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-head-3-1">
                        <h2>Serviços</h2>
                        <p><?php echo $texto[4]->post_content; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <?php 
                        $i = true;
                        while (have_posts()) {
                            the_post();

                            if ($i == true) {
                        ?>
                            <!-- Single Practice -->
                            <div class="single-practice">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-sm-4 col-xd-3">
                                                <div class="pra-img d-flex align-items-center">
                                                    <!-- <img src="images/practice/1.jpg" alt=""> -->
                                                    <div class="bloco">
                                                        <i class="fa <?php the_field('icone') ?>" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="pra-img-overlay">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-sm-7 col-xd-3">
                                                <div class="pra-cont">
                                                    <h3><?php the_title(); ?></h3>
                                                    <p>
                                                        <?php the_content(); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            //right
                            }else{
                        ?>

                    <!-- Segundo item imprmir dois, lg screen e sm screen -->
                    <!-- Single Practice -->
                    <div class="single-practice bloco-right-lg">
                        <div class="row">
                            <div class="col-lg-4"> </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-sm-7 col-xd-3">
                                        <div class="pra-cont text-right">
                                            <h3><?php the_title(); ?></h3>
                                            <p>
                                                <?php the_content(); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xd-3">
                                        <div class="pra-img d-flex align-items-center">
                                            <!-- <img src="images/practice/2.jpg" alt=""> -->
                                            <div class="bloco">
                                                <i class="fa <?php the_field('icone') ?>" aria-hidden="true"></i>
                                            </div>
                                            <div class="pra-img-overlay">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Practice -->
                    <div class="single-practice bloco-right-sm">
                        <div class="row">
                            <div class="col-lg-4"> </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-sm-4 col-xd-3">
                                        <div class="pra-img d-flex align-items-center">
                                            <!-- <img src="images/practice/2.jpg" alt=""> -->
                                            <div class="bloco">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </div>
                                            <div class="pra-img-overlay">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7 col-xd-3">
                                        <div class="pra-cont text-center">
                                            <h3>Business (Corporate) Law</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's  standard dummy standard dummy text ever since the when an unknown printer took a galley of type.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php

                            }
                   
                    $i = (($i == true) ? false : true); } ?>


                </div>
            </div>
        </div>
    </section>
    <!-- Prictise area Part End -->
    <?php } wp_reset_query(); ?>
    
    <?php 
    $res = query_posts('post_type=clienttes&orderby=post_title&order=ASC');

    if (have_posts()) {

    ?>
    <!-- Testimonial-3 Part Start -->
    <section class="testimonial-3-part section-p-2">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-head-3-1">
                        <h2 class="white">Clientes <span>Satisfeitos</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-10 offset-1">
                    <div class="swiper-container testimonial-3-slider" data-swiper-config='{"loop": true, "effect": "slide", "speed": 2000, "autoplay": 5000,"slidesPerView": 1,"paginationClickable": true}'>
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <?php 
                                while (have_posts()) {
                                the_post();
                            ?>
                            <!-- Slides -->
                            <div class="swiper-slide testimonial-3-item">
                                <div class="person-3-comment">
                                    <i class="fa fa-quote-left"></i>
                                    <h3>“<?php the_field('texto'); ?>”</h3>
                                </div>
                                <div class="person-3-detail">
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_field('profissao') ?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial-3 Part End -->
<?php } ?>

    <!-- Clint logo 4 Part Start -->

    <!-- <section class="clint-logo-4-part">
        <div class="container">
            <div class="row">
                <div class="swiper-container clint-logo-4-slider" data-swiper-config='{"loop": true, "effect": "slide", "speed": 900, "autoplay": 1500, "paginationClickable": true, "slidesPerView" : 4 ,"breakpoints": { "575": { "slidesPerView": 2, "spaceBetween": 10}, "767": { "slidesPerView": 3, "spaceBetween": 10}}}'>
                   
                    <div class="swiper-wrapper d-flex align-items-center">
                        
                        <div class="swiper-slide clint-logo-4-item">
                            <a href="#"><img src="images/clint-logo-4-3.png" alt=""></a>
                        </div>
                        <div class="swiper-slide clint-logo-4-item">
                            <a href="#"><img src="images/clint-logo-4-2.png" alt=""></a>
                        </div>
                        <div class="swiper-slide clint-logo-4-item">
                            <a href="#"><img src="images/clint-logo-4-3.png" alt=""></a>
                        </div>
                        <div class="swiper-slide clint-logo-4-item">
                            <a href="#"><img src="images/clint-logo-4-4.png" alt=""></a>
                        </div>
                        <div class="swiper-slide clint-logo-4-item">
                            <a href="#"><img src="images/clint-logo-4-5.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Clint logo 4 Part End -->

