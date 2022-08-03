<?php
    /*
    Plugin Name: Yoodule Stripe
    Description: A wordpress plugin for Stripe
    Author: Ekun Abdulhakeem
    Version: 0.1
    */
    add_action('admin_menu', 'Yoodule_Stripe_menu');

    
    function Yoodule_Stripe_menu(){
        add_menu_page( 'Test Plugin Page', 'Yoodule Stripe', 'manage_options', 'test-plugin', 'Stripe_api' );
    }

    function yoodule_stripe_shortcode(){
        return 'Follow us on <a rel="nofollow" href="https://twitter.com/Hostinger?s=20">Twitter</a>';
    }
    add_shortcode('yoodule_stripe', 'yoodule_stripe_shortcode');
    
    function Stripe_api(){
        echo "<h1>Yoodule Stripe api credentials</h1>";
        echo "<h2>Enter Credentials</h2>";

            //Form to handle stripe Api
        echo "<form  action='secret-key.php' method='post' enctype='multipart/form-data'>
                Api key:  <input type='text' name='api' /><br />
                <input type='Submit' name='Submit' />
            </form>";
    }

?>