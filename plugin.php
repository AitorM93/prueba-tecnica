<?php
/*
Plugin Name: Menú Responsive
Description: Un menú responsivo creado para la prueba técnica.
Version: 1.0
Author: Aitor
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function menu_responsive_enqueue_styles() {
    wp_enqueue_style( 'menu-responsive-styles', plugin_dir_url( __FILE__ ) . 'styles.css' );
    wp_enqueue_script( 'menu-responsive-scripts', plugin_dir_url( __FILE__ ) . 'main.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'menu_responsive_enqueue_styles' );

function menu_responsive_shortcode() {
    ob_start(); 
    ?>
     <nav class="menu">
<div class="menu__nav">
        <div class="menu__container">
            <div class="menu__logo">
            <img src="img/Logo.png" alt="KSchool Logo">
            </div>

            <ul class="menu__list">
            <li class="menu__item" data-toggle="dropdown">
                <a class="menu__link" href="#">Formación</a>
                <ul class="menu__dropdown">
                <li class="menu__dropdown-item"><a href="#">Digital Marketing School</a></li>
                <li class="menu__dropdown-item"><a href="#">Tech School</a></li>
                <li class="menu__dropdown-item"><a href="#">Business School</a></li>
                <li class="menu__dropdown-item"><a href="#">Education School</a></li>
                </ul>
            </li>
            <li class="menu__item" data-toggle="dropdown">
                <a class="menu__link" href="#">Servicios HR</a>
                <ul class="menu__dropdown">
                <li class="menu__dropdown-item"><a href="#">Network</a></li>
                <li class="menu__dropdown-item"><a href="#">Eventos</a></li>
                </ul>
            </li>
            <li class="menu__item"><a class="menu__link" href="#">KS Talent</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Blog</a></li>
            </ul>
        </div>
    <div class="menu__container menu__container--botton">
            <div class="menu__actions">
                <span class="menu__actions--logo"> 
                    <img src="img/empleo.png" alt="">
                    <a class="menu__action" href="#">Empleo</a>
                </span>
                <span class="menu__actions--logo">
                    <img src="img/user.png" alt="">
                    <a class="menu__action" href="#">Campus</a>
                </span>
            </div>
            <div class="menu__separator"></div>
            <div class="menu__extra-logo">
            <a href="#"><img src="img/unir-logo.png" alt="UNIR Logo"></a>
            </div>
    </div>
</div>
    <div class="menu__toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>
    <?php
    return ob_get_clean(); 
}
add_shortcode( 'menu_responsive', 'menu_responsive_shortcode' );
