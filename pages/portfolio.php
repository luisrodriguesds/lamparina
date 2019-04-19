<?php 
    $res = query_posts('post_type=portfolio&orderby=date&order=ASC');
    if (have_posts()) {

?>
 <!-- Testiminial Part Start -->
 <section class="testimonial-part section-p">
        <div class="container">
            <div class="row">
                <?php
                    $i=1;
                   while (have_posts()) {
                        the_post();
                        
                        if ($i == 1 || $i == 2) {

                            if ($i == 1) {
                               
                     
                ?>
                                <div class="col-12 col-xl-6 col-lg-6 mb-5 mb-lg-0">
                                    <div class="section-head-2 mb-3">
                                        <h2>
                                            <?php 
                                                $txt    = get_the_title();
                                                $txt_arr= explode(' ', $txt);
                                                echo '<span>'.$txt_arr[0].'</span>'.str_replace($txt_arr[0], ' ', $txt);
                                            ?>
                                            
                                        </h2>
                                        <p><?php the_field('texto'); ?></p>
                                    </div>
                                    <div class="row no-gutters justify-content-center">
                                        <div class="item">
                                            <?php 
                                                $img = get_field('imagem_01');
                                                if (!empty($img)) {
                                                 
                                            ?>
                                            <a href="<?php the_field('imagem_01') ?>" data-fancybox="images_1" rel="images_1" class="images_1">
                                                <img src="<?php the_field('imagem_01') ?>">
                                            </a>
                                        <?php } ?>
                                        </div>
                                        <div class="item" style="display: none;">
                                            <?php 
                                                $img = get_field('imagem_02');
                                                if (!empty($img)) {
                                                 
                                            ?>
                                            <a href="<?php the_field('imagem_02') ?>" data-fancybox="images_1" rel="images_1" class="images_1">
                                                <img src="<?php the_field('imagem_02') ?>">
                                            </a>
                                        <?php } ?>
                                        </div>
                                        <div class="item" style="display: none;">
                                            <?php 
                                                $img = get_field('imagem_03');
                                                if (!empty($img)) {
                                                 
                                            ?>
                                            <a href="<?php the_field('imagem_03') ?>" data-fancybox="images_1" rel="images_1" class="images_1">
                                                <img src="<?php the_field('imagem_03') ?>">
                                            </a>
                                        <?php } ?>
                                        </div>
                                        <div class="item" style="display: none;">
                                            <?php 
                                                $img = get_field('imagem_04');
                                                if (!empty($img)) {
                                                 
                                            ?>
                                            <a href="<?php the_field('imagem_04') ?>" data-fancybox="images_1" rel="images_1" class="images_1">
                                                <img src="<?php the_field('imagem_04') ?>">
                                            </a>
                                        <?php } ?>
                                        </div>
                                        <div class="item" style="display: none;">
                                            <?php 
                                                $img = get_field('imagem_05');
                                                if (!empty($img)) {
                                                 
                                            ?>
                                            <a href="<?php the_field('imagem_05') ?>" data-fancybox="images_1" rel="images_1" class="images_1">
                                                <img src="<?php the_field('imagem_05') ?>">
                                            </a>
                                        <?php } ?>
                                        </div>

                                    </div>
                                </div>
                <?php 
                            } 

                            if ($i == 2) {
                            
                ?>
                                <div class="col-12 col-xl-5 col-lg-6 offset-xl-1">
                                    <div class="testimonial-box">
                                        <div class="section-head-2">
                                            <h2>
                                                <?php 
                                                    $txt    = get_the_title();
                                                    $txt_arr= explode(' ', $txt);
                                                    echo '<span>'.$txt_arr[0].'</span>'.str_replace($txt_arr[0], ' ', $txt);
                                                ?>
                                            </h2>
                                            <p><?php the_field('texto'); ?></p>
                                        </div>
                                        <div class="swiper-container testimonial-slider" data-swiper-config='{"loop": true, "effect": "slide", "speed": 800, "autoplay": 5000, "paginationClickable": true, "spaceBetween": 25 }' >
                                            <div class="swiper-wrapper">
                                                <div class="row no-gutters justify-content-center">
                                                     <div class="item">
                                                        <?php 
                                                            $img = get_field('imagem_01');
                                                            if (!empty($img)) {
                                                             
                                                        ?>
                                                        <a href="<?php the_field('imagem_01') ?>" data-fancybox="images_2" rel="images_2" class="images_2">
                                                            <img src="<?php the_field('imagem_01') ?>">
                                                        </a>
                                                    <?php } ?>
                                                    </div>
                                                    <div class="item" style="display: none;">
                                                        <?php 
                                                            $img = get_field('imagem_02');
                                                            if (!empty($img)) {
                                                             
                                                        ?>
                                                        <a href="<?php the_field('imagem_02') ?>" data-fancybox="images_2" rel="images_2" class="images_2">
                                                            <img src="<?php the_field('imagem_02') ?>">
                                                        </a>
                                                    <?php } ?>
                                                    </div>
                                                    <div class="item" style="display: none;">
                                                        <?php 
                                                            $img = get_field('imagem_03');
                                                            if (!empty($img)) {
                                                             
                                                        ?>
                                                        <a href="<?php the_field('imagem_03') ?>" data-fancybox="images_2" rel="images_2" class="images_2">
                                                            <img src="<?php the_field('imagem_03') ?>">
                                                        </a>
                                                    <?php } ?>
                                                    </div>
                                                    <div class="item" style="display: none;">
                                                        <?php 
                                                            $img = get_field('imagem_04');
                                                            if (!empty($img)) {
                                                             
                                                        ?>
                                                        <a href="<?php the_field('imagem_04') ?>" data-fancybox="images_2" rel="images_2" class="images_2">
                                                            <img src="<?php the_field('imagem_04') ?>">
                                                        </a>
                                                    <?php } ?>
                                                    </div>
                                                    <div class="item" style="display: none;">
                                                        <?php 
                                                            $img = get_field('imagem_05');
                                                            if (!empty($img)) {
                                                             
                                                        ?>
                                                        <a href="<?php the_field('imagem_05') ?>" data-fancybox="images_2" rel="images_2" class="images_2">
                                                            <img src="<?php the_field('imagem_05') ?>">
                                                        </a>
                                                    <?php } ?>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                <?php  
                            }
                        }
                        $i++;
                    }
                ?>

            </div>
        </div>
    </section>
    <!-- Testiminial Part End -->


    <!-- Skill Part Start -->
    <section class="skill-part section-p">
        <div class="container">
            <div class="row">
                <?php 
                    $i=1;
                    while (have_posts()) {
                        the_post();

                        if ($i == 3 || $i == 4) {
                            if ($i == 3) {
                             
                ?>
                <div class="col-md-6 col-md-6 col-xl-5 offset-xl-1">
                    <div class="skill-box">
                        <div class="section-head-2">
                            <h2>
                                <?php 
                                    $txt    = get_the_title();
                                    $txt_arr= explode(' ', $txt);
                                    echo '<span>'.$txt_arr[0].'</span>'.str_replace($txt_arr[0], ' ', $txt);
                                ?>
    
                            </h2>
                            <p><?php the_field('texto'); ?></p>
                        </div>
                        <div class="row no-gutters justify-content-center">
                            <div class="item">
                                <?php 
                                    $img = get_field('imagem_01');
                                    if (!empty($img)) {
                                     
                                ?>
                                <a href="<?php the_field('imagem_01') ?>" data-fancybox="images_3" rel="images_3" class="images_3">
                                    <img src="<?php the_field('imagem_01') ?>">
                                </a>
                            <?php } ?>
                            </div>
                            <div class="item" style="display: none;">
                                <?php 
                                    $img = get_field('imagem_02');
                                    if (!empty($img)) {
                                     
                                ?>
                                <a href="<?php the_field('imagem_02') ?>" data-fancybox="images_3" rel="images_3" class="images_3">
                                    <img src="<?php the_field('imagem_02') ?>">
                                </a>
                            <?php } ?>
                            </div>
                            <div class="item" style="display: none;">
                                <?php 
                                    $img = get_field('imagem_03');
                                    if (!empty($img)) {
                                     
                                ?>
                                <a href="<?php the_field('imagem_03') ?>" data-fancybox="images_3" rel="images_3" class="images_3">
                                    <img src="<?php the_field('imagem_03') ?>">
                                </a>
                            <?php } ?>
                            </div>
                            <div class="item" style="display: none;">
                                <?php 
                                    $img = get_field('imagem_04');
                                    if (!empty($img)) {
                                     
                                ?>
                                <a href="<?php the_field('imagem_04') ?>" data-fancybox="images_3" rel="images_3" class="images_3">
                                    <img src="<?php the_field('imagem_04') ?>">
                                </a>
                            <?php } ?>
                            </div>
                            <div class="item" style="display: none;">
                                <?php 
                                    $img = get_field('imagem_05');
                                    if (!empty($img)) {
                                     
                                ?>
                                <a href="<?php the_field('imagem_05') ?>" data-fancybox="images_3" rel="images_3" class="images_3">
                                    <img src="<?php the_field('imagem_05') ?>">
                                </a>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                        }

                        if ($i == 4) {

                         
                ?>
                <div class="col-md-6 col-xl-5 offset-xl-1">
                    <div class="skill-contact-form">
                        <div class="section-head-2">
                            <h2>
                                <?php 
                                    $txt    = get_the_title();
                                    $txt_arr= explode(' ', $txt);
                                    echo '<span>'.$txt_arr[0].'</span>'.str_replace($txt_arr[0], ' ', $txt);
                                ?>
                            </h2>
                            <p><?php the_field('texto'); ?></p>
                        </div>
                        <div class="row no-gutters justify-content-center">
                            <div class="item">
                                <?php 
                                    $img = get_field('imagem_01');
                                    if (!empty($img)) {
                                     
                                ?>
                                <a href="<?php the_field('imagem_01') ?>" data-fancybox="images_4" rel="images_4" class="images_4">
                                    <img src="<?php the_field('imagem_01') ?>">
                                </a>
                            <?php } ?>
                            </div>
                            <div class="item" style="display: none;">
                                <?php 
                                    $img = get_field('imagem_02');
                                    if (!empty($img)) {
                                     
                                ?>
                                <a href="<?php the_field('imagem_02') ?>" data-fancybox="images_4" rel="images_4" class="images_4">
                                    <img src="<?php the_field('imagem_02') ?>">
                                </a>
                            <?php } ?>
                            </div>
                            <div class="item" style="display: none;">
                                <?php 
                                    $img = get_field('imagem_03');
                                    if (!empty($img)) {
                                     
                                ?>
                                <a href="<?php the_field('imagem_03') ?>" data-fancybox="images_4" rel="images_4" class="images_4">
                                    <img src="<?php the_field('imagem_03') ?>">
                                </a>
                            <?php } ?>
                            </div>
                            <div class="item" style="display: none;">
                                <?php 
                                    $img = get_field('imagem_04');
                                    if (!empty($img)) {
                                     
                                ?>
                                <a href="<?php the_field('imagem_04') ?>" data-fancybox="images_4" rel="images_4" class="images_4">
                                    <img src="<?php the_field('imagem_04') ?>">
                                </a>
                            <?php } ?>
                            </div>
                            <div class="item" style="display: none;">
                                <?php 
                                    $img = get_field('imagem_05');
                                    if (!empty($img)) {
                                     
                                ?>
                                <a href="<?php the_field('imagem_05') ?>" data-fancybox="images_4" rel="images_4" class="images_4">
                                    <img src="<?php the_field('imagem_05') ?>">
                                </a>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                            }
                        } 

                        $i++;
                    } 

                ?>

            </div>
        </div>
    </section>

    <?php } wp_reset_query(); ?>