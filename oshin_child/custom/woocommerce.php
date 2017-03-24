<?php /* woocommerce custom coding */

// since we dont have product images,
// 1. remove image from shopping cart.
add_filter( 'woocommerce_cart_item_thumbnail', '__return_false' );
// remove image from single product
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
// remove thumbnail image from loop (archive or shop )
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );


// since only one product, no sense going to "shop page"
function skyverge_change_empty_cart_button_url() {
	return get_site_url();
}
add_filter( 'woocommerce_return_to_shop_redirect', 'skyverge_change_empty_cart_button_url' );

// remove share icons on woocommerce.  dont want to share payment "product"
 add_action( 'after_setup_theme', 'reach_after_theme_setup' );
 function reach_after_theme_setup() {
     remove_action('woocommerce_single_product_summary', 'be_themes_share_woo_products', 59);
}
