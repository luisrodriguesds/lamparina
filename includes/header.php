<?php
global $wp;
  
    $url_base = 'http://lamparinacomunicacao.com/';
    // $url_base = 'http://localhost/lamparina/';
    $current_url = home_url( add_query_arg( array(), $wp->request ) );
    $url = str_replace($url_base, '', $current_url);
    //Problemas com a barra
    $url = explode('/', $url);
  

    function texto($texto, $maximo = 200){
        $texto = strip_tags($texto);
        $conta = strlen($texto);
        
        if($conta <= $maximo){
            return $texto;
        }else{
            $limita = substr($texto, 0, $maximo);
            $espaco = strrpos($limita, " ");
            $limita = substr($texto, 0, $espaco);
            return $limita.'...';
        }
    }
?>
<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/images/icon-2.png" type="image/x-icon">
    
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.min.css">
    <!-- Swiper css -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/swiper.min.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/animate.min.css">
    <!-- Venbox css -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/venobox.css">
    <!-- Rateyo css -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/rateyo.min.css">
    <!-- Flaticon css -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/flaticon.css">
    <!-- Magnific css -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/magnific-popup.css">
    <!-- Main style css -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/style.css">
</head>

<body>
    
    <div class="preloader"></div>
       <?php include 'nav.php'; ?>
    </div>
    <!-- Navigation Part End -->