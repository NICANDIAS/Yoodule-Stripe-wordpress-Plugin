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
    
    function Stripe_api(){
        echo "<h1>Yoodule Stripe api credentials</h1>";
        echo "<h2>Enter Credentials</h2>";
?>
        
        <!-- Form to handle stripe Api -->
        <form  action="secret-key.php" method="post" enctype="multipart/form-data">
            Api key:  <input type="text" name="api" /><br />
            Shortcode:  <input type="text" name="" /><br />
            <?php submit_button('Submit') ?>
        </form>
    <?php
    }

?>
