<!-- File where there are some functions that add more functionality to themes, such as the logo, menus, color, thumbnails, scripts, and stylesheets;-->
<?php



// Add Menu Support
add_theme_support('menus');


// Register Nav Menu 
function wct_custom_new_menu() {
    register_nav_menus(
      array(
        'top-menu' => __( 'Top Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }


//   Add the hook to make the menu 
add_action( 'init', 'wct_custom_new_menu' );


?>
