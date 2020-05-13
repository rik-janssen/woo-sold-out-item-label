<?php
/*
Plugin Name: Sold-out label for WooCommerce
Plugin URI: https://betacore.tech
Description: Add a sold-out label to WooCommerce product list when stock hits 0. The label is still unstyled so you'll have to do that yourself.
Version: 0.1
Author: Rik Janssen / Betacore
Author URI: https://www.betacore.tech
Text Domain: betalbl
Domain Path: /lang
*/


// product list
add_action( 'woocommerce_before_shop_loop_item_title', function() {
   global $product;
   if ( !$product->is_in_stock() ) {
       echo '<span class="now_sold">Sold out!</span>';
   }
});

// single product
add_action( 'woocommerce_before_single_product_summary', function() {
   global $product;
   if ( !$product->is_in_stock() ) {
       echo '<span class="now_sold">Sold out!</span>';
   }
});



?>
