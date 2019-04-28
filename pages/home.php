   
   <?php 
   $res = query_posts('post_type=slide&orderby=post_title&order=ASC');
    if (have_posts()) {
   ?>
   <!-- Banner Part Start -->
    <section class="banner-part">
        <div class="swiper-container banner-slider home-one" data-swiper-config='{"loop": true, "effect": "fade", "speed": 800, "autoplay": false, "paginationClickable": false }'>
            <div class="swiper-wrapper">
                <?php 
                while (have_posts()) {
                    the_post();
                ?>
                <div class="swiper-slide banner-item" data-bg-image="<?php the_field('imagem'); ?>">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-12 banner-caption text-center">
                                <h2 class="brand-color animated" data-animate="fadeInUp"><?php the_field('subtitulo') ?></h2>
                                <h1 data-animate="fadeInUp"><?php the_field('titulo') ?></h1>
                                <div class="banner-line"></div>
                                <p data-animate="fadeInUp">
                                    <?php the_field('texto') ?>
                                </p>

                                <a href="<?php bloginfo( 'url' ); ?>/contatos" class="btn-1 btn-orange" data-animate="fadeInUp" style="">CONTATE-NOS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <!-- <div class="swiper-slide banner-item" data-bg-image="images/bg/2.jpg">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-12 banner-caption text-center">
                                <h2 class="brand-color" data-animate="fadeInUp">welcome to globel business lawfirm</h2>
                                <h1 data-animate="fadeInUp">in the World</h1>
                                <p data-animate="fadeInUp">FiveStar comes with a collection of six astounding and fully customizable <br>.Lorem Ipsum is simply the world dummy text of the printing and typesetting industry.</p>
                                <a href="#" class="btn-1" data-animate="fadeInUp">EXPLORE MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                 -->
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- Banner Part End -->
    <?php } wp_reset_query(); ?>

    <?php 
       $texto = query_posts('post_type=textos-das-secoes&post_name=servicos&orderby=date&order=ASC');
       wp_reset_query();
       $res = query_posts('post_type=servicos&orderby=date&order=ASC');
        if (have_posts()) {
   ?>
    <!-- Practise Part Start -->
    <section class="practise-part section-p" style="background: #f6f6f6;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-head-2 section-head-2-servicos">
                        <h2><span>Serviços</span></h2>
                        <p style="margin: 0 auto;">
                            <?php echo $texto[0]->post_content; ?>
                        </p>                    
                    </div>
                </div>

                <?php 
                    while (have_posts()) {
                    the_post();
                ?>
                <!-- Single Practice -->
                <div class="col-sm-6 col-lg-6">
                    <div class="practise-item">
                        <div class="icon-box"><i class="fa <?php the_field('icone') ?>"></i></div>
                        <h2><a href="<?php bloginfo( 'url' ); ?>/servicos/"><?php the_title(); ?></a></h2>
                        <p>
                            <?php the_field('texto_pequeno'); ?>
                        </p>
                    </div>
                </div>
            <?php } ?>

                <!-- <div class="col-sm-6 col-lg-4">
                    <div class="practise-item">
                        <div class="icon-box"><i class="flaticon-bank-building"></i></div>
                        <h2><a href="#">Tax & Business Law</a></h2>
                        <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="practise-item">
                        <div class="icon-box"><i class="flaticon-criminal-hand-print-silhouette"></i></div>
                        <h2><a href="#">Criminal Defense</a></h2>
                        <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="practise-item">
                        <div class="icon-box"><i class="flaticon-money-laundering"></i></div>
                        <h2><a href="#">Money Laundering</a></h2>
                        <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="practise-item">
                        <div class="icon-box"><i class="flaticon-online-store"></i></div>
                        <h2><a href="#">Real Estate Constuction</a></h2>
                        <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="practise-item">
                        <div class="icon-box"><i class="flaticon-money"></i></div>
                        <h2><a href="#">Finance & Banking</a></h2>
                        <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                    </div>
                </div> -->

            </div>
        </div>
    </section>
    <!-- Practise Part End -->
    <?php } wp_reset_query(); ?>

    <?php 
        $res = query_posts('post_type=numeros&orderby=date&order=ASC');
        if (have_posts()) {
   ?>    
    <!-- Counter Part Start -->
    <section class="counter-part section-p">
        <div class="container">
            <div class="counter-box">
                <div class="row">
                    <!-- Single Counter -->
                    <?php 
                        while (have_posts()) {
                        the_post();
                    ?>
                    <div class="col-sm-6 col-lg-3 d-flex justify-content-center justify-content-lg-start">
                        <div class="counter-item">
                            <div class="count-des">
                                <i class="fa <?php the_field('icone') ?>"></i>
                            </div>
                            <div class="count-des">
                                <h2 class="counter"><?php the_field('numero') ?></h2>
                                <p><?php the_title(); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Part End -->
    <?php } wp_reset_query(); ?>

    <!-- Testiminial Part Start -->
    <section class="testimonial-part section-p">
        <div class="container">
            <div class="row">

                <?php 
                    $res = query_posts('post_type=nossa-historia&orderby=date&order=ASC');
                    if (have_posts()) {
               ?> 

                <div class="col-12 col-xl-6 col-lg-6 mb-5 mb-lg-0">
                    <div class="section-head-2 mb-3">
                        <h2><span>Nossa história de</span> sucesso</h2>
                        <p><?php echo $texto[1]->post_content; ?></p>
                    </div>
                    <div class="story-box">
                        <div class="row no-gutters justify-content-center">
                            
                            <!-- Single Success Story -->
                            <?php 
                                $i=true;
                                while (have_posts()) {
                                the_post();

                                if ($i == true) {
                                 
                            ?>
                            <div class="story-item d-sm-flex align-items-sm-center">
                                <div class="comment-box">
                                    <div class="story-comment text-right">
                                        <p><?php the_field('texto_pequeno') ?></p>
                                        <img src="<?php the_field('imagem') ?>" alt="">
                                    </div>
                                </div>
                                <div class="year year-right-box text-center text-sm-left">
                                    <div class="years year-right"><?php the_field('ano') ?></div>
                                </div>
                            </div> 
                            <?php 
                                }else{
                            ?>
                            <div class="story-item d-sm-flex align-items-sm-center">
                                <div class="year text-center text-sm-right">
                                    <div class="years year-left"><?php the_field('ano') ?></div>
                                </div>
                                <div class="comment-box">
                                    <div class="story-comment story-comment-right text-left mt-0">
                                        <p><?php the_field('texto_pequeno') ?></p>
                                        <img src="<?php the_field('imagem') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <?php
                                } 
                            ?>

                        <?php $i = (($i == true) ? false : true); } ?>
                           

                        </div>
                    </div>
                </div>
                <?php } ?>


                <?php 
                    $res = query_posts('post_type=nosso-time&orderby=date&order=ASC');
                    if (have_posts()) {
                ?>
                <div class="col-12 col-xl-5 col-lg-6 offset-xl-1">
                    <div class="testimonial-box">
                        <div class="section-head-2">
                            <h2><span>Nosso</span> Time </h2>
                            <p><?php echo $texto[2]->post_content; ?></p>
                        </div>
                        <div class="swiper-container testimonial-slider" data-swiper-config='{"loop": true, "effect": "slide", "speed": 800, "autoplay": 5000, "paginationClickable": true, "spaceBetween": 25 }' >
                            <div class="swiper-wrapper">
                                <?php 
                                    while (have_posts()) {
                                        the_post();
                                ?>
                                <!-- Single Testimonial -->
                                <div class="swiper-slide testimonial-item">
                                    <div class="row">
                                        <div class="col-8 offset-2 col-sm-5 col-xl-4 offset-sm-0 mb-3 mb-sm-0">
                                            <div class="person-detail">
                                                <div class="person-img">
                                                    <img src="<?php the_field('imagem'); ?>" alt="Image">
                                                </div>
                                                <h3><?php the_title(); ?></h3>
                                                <p><?php the_field('cargo'); ?></p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-7 col-xl-8">
                                            <div class="person-comment">
                                                <h4><?php the_field('frase'); ?></h4>
                                                <ul class="flat-list star">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                                <div class="mains-comment">
                                                    <p><i class="fa fa-quote-left"></i> 
                                                        <?php the_field('texto'); ?>
                                                    <i class="fa fa-quote-right"></i> </p>
                                                </div>
                                                <!-- <img src="<?php bloginfo('template_url') ?>/images/testmonial-signeture.png" alt=""> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Testiminial Part End -->


    <!-- Twiter Feed  Part Start -->

    <section class="twitter-feed-part">
        <div class="container">
            <div class="row">
                <div class="twitter-feed-box">
                    <div class="row no-gutters d-flex align-items-center">
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <div class="swiper-container twitter-feed-slider" data-swiper-config='{"loop": true, "effect": "slide","speed": 800,"autoplay": 5000,"paginationClickable":true,"nextButton":".swiper-button-next","prevButton":".swiper-button-prev"}'>
                                <div class="text-center" style="color:#fff">
                                    <h1>ACENDA A LAMPARINA!</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-4 col-sm-12">
                            <a href="<?php bloginfo( 'url' ); ?>/contatos" class="btn btn-1 btn-darks">SOLICITE UM ORÇAMENTO</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Twiter Feed  Part End -->
