<?php
function northernwychwood_styles()
{
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_register_style('customstyles', get_template_directory_uri() . '/css/stylesheet.css', array(), '1.0', 'all');

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('customstyles');
}

add_action('wp_enqueue_scripts', 'northernwychwood_styles'); // Add Theme Stylesheet


function northernwychwood_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
      // wp_register_script('typescript', 'https://use.typekit.net/jse5fqe.css', array('jquery'), '1.0.0'); // TypeScript
      wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '1.14.3'); // Popper
      wp_register_script('lodash', 'https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.min.js', array('jquery'), '1.14.3'); // Lodash
      wp_register_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.1.3', true); // Bootstrap
      wp_register_script('scrollto', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.js', array('jquery'), '2.1.2', true); // ScrollTo
      // wp_register_script('clamp', get_template_directory_uri() . '/js/lib/clamp.min.js', array('jquery'), '1.0.0'); // Clamp
      wp_register_script('customscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), microtime(), true); // Custom scripts

      // wp_enqueue_script('typescript');
      wp_enqueue_script('popper');
      wp_enqueue_script('bootstrap-js');
      wp_enqueue_script('scrollto');
      // wp_enqueue_script('clamp');
      wp_enqueue_script('lodash');
      wp_enqueue_script('customscripts');
    }
}
add_action('wp_enqueue_scripts', 'northernwychwood_scripts'); // Add Theme Stylesheet

?>
