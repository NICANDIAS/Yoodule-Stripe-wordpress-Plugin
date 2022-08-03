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
        wp_enqueue_style('jquery-datatables-css','//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css');
        wp_enqueue_script('jquery-datatables-js','//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js',array('jquery'));
               
        echo "<table id='example'>
                <thead>
                    <th>ID</th>
                    <th>Title</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Testing1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Testing2</td>
                    </tr>
                </tbody>
                <thead>
                    <th>ID</th>
                    <th>Title</th>
                </thead>
            </table>";

        return 'Follow us on <a rel="nofollow" href="https://twitter.com/Hostinger?s=20">Twitter</a>';
    }
    add_shortcode('yoodule_stripe', 'yoodule_stripe_shortcode');
    
    // Stripe Api Form
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