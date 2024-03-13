<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/wp-content//themes//CustomTheme/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/wp-content/themes/CustomTheme/styleOnePage.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../../../favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../favicons/favicon-16x16.png">
    <!-- <link rel="manifest" href="../../../favicons/site.webmanifest"> -->
    <link rel="mask-icon" href="../../../favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <title>Home - Detail Ridez</title>
</head>
<script>
    // const navbar = document.getElementById("navbar");
    // function myFunction(){
    //     if(window.scrollY >= 50){
    //         navbar.style = 'filter: blur(10px)';
    //     }
    //     else{
    //         navbar.style = 'filter: blur(0)';
    //     }
    // }
</script>
<style>
    .noblur{
        z-index: 2;
        filter: blur(0px);
    }
</style>
<body <?php body_class('bg-dark'); ?> >
<nav id="navbar" class="navbar fixed-top bg-black bg-opacity-75 py-3">
    <div class="container">
        <div class="float-left">
            <a href="#" class="text-danger" >
                <img src="/wp-content/themes/CustomTheme/assets/Detail-ridez-logo.png" alt="Logo Detail Ridez" height="35">
            </a>
        </div>
        <div class="float-center">
            <a href="#" class="text-light text-decoration-none px-2 mx-2 hover-underline-animation hover-color-nav" >Diensten</a>
            <a href="#" class="text-light text-decoration-none px-2 mx-2 hover-underline-animation hover-color-nav" >Over ons</a>
            <a href="#" class="text-light text-decoration-none px-2 mx-2 hover-underline-animation hover-color-nav" >Contact</a>
        </div>
        <div class="float-right">
            <a href="tel:+32472607368"><button type="button" class="btn px-4" id="nav-btn" >+32 472 60 73 68</button></a>
        </div>
    </div>
</nav>
