<?php
/*
Plugin Name: Yoodule Stripe
Description: A wordpress plugin for Stripe
Author: Ekun Abdulhakeem
Version: 0.1
*/
add_action('admin_menu', 'Yoodule_Stripe_menu');
 
function Yoodule_Stripe_menu(){
    add_menu_page( 'Test Plugin Page', 'Yoodule-Stripe', 'manage_options', 'test-plugin', 'Stripe_api' );
}
 
function Stripe_api(){
    echo "<h1>Hello World!</h1>";
}
?>
