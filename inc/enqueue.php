<?php
function enqueue_bootstrap_5_2() {
    wp_enqueue_style ( 'BootstrapCSS',      'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css', array(), null, false ); // In <head>
    wp_enqueue_style ( 'BootstrapIcons',    'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css', array(), null, false ); // In <head>
    wp_enqueue_script( 'BootstrapJSBundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', array(), null, true  ); // Footer before </body>
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap_5_2' );
?>