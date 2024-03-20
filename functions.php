<?php
    add_theme_support( 'menus' );
 
    add_theme_support('custom-logo');
 
    $defaults = array(
        'width'                  => 0,
        'height'                 => 0,
        'flex-height'            => false,
        'flex-width'             => false,
    );
    
    function _4w4_modifie_requete_principal( $query ) {
        if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
          $query->set( 'category_name', 'populaire' );
          $query->set( 'orderby', 'title' );
          $query->set( 'order', 'ASC' );
          }
         }
         add_action( 'pre_get_posts', '_4w4_modifie_requete_principal' );

 
?>