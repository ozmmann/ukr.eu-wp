<?php
/**
 * The template for displaying product category thumbnails within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product_cat.php
 *
 * @author         WooThemes
 * @package     WooCommerce/Templates
 * @version
 */
?>


<?php
global $product;
$c = 0;
$subheadingvalues = get_the_terms( $product->id, 'pa_serverspace');
foreach ($subheadingvalues as $val){
 echo $val->name;
}
var_dump($subheadingvalues[0]->name) ;
//var_dump(get_the_terms( $product->id, 'pa_serverspace'));
    $attributes = $product->get_attributes();
//var_dump($attributes);
    foreach ( $attributes as $attribute ) :
        $c++;
    if ( empty( $attribute['is_visible'] ) || ( $attribute['is_taxonomy'] && ! taxonomy_exists( $attribute['name'] ) ) ) {
        continue;
    } else {
        $has_row = true;
    } ?>

    <tr class="<?php if ( ( $alt = $alt * -1 ) == 1 ) echo 'alt'; ?>">
        <th><?php echo wc_attribute_label( $attribute['name'] ); ?></th>

        <td><?php
            if ( $attribute['is_taxonomy']) {

                $values = wc_get_product_terms( $product->id, $attribute['name'], array( 'fields' => 'names' ) );
                echo apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values );

            } else {

                // Convert pipes to commas and display values
                $values = array_map( 'trim', explode( WC_DELIMITER, $attribute['value'] ) );
                echo apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values );

            }
            ?></td>
    </tr>
<?php endforeach; ?>
<tr>
<!--    <td class="product_name"><a href="--><?php //the_permalink() ?><!--" >--><?php //the_title(); ?><!--</a></td>-->
<!---->
<!--    <td class="product_okp">--><?php //global $product;
//        $product->list_attributes(); ?><!--</td>-->
<!---->
<!--    <td class="product_year">--><?php //echo (get_post_meta($post->ID, 'year', true)); ?><!--</td>-->
<!---->
<!--    <td class="product_pages">--><?php //echo (get_post_meta($post->ID, 'pages', true)); ?><!--</td>-->
<!---->
<!--    <td class="product_price">--><?php //do_action( 'woocommerce_after_shop_loop_item_title' ); ?><!--</td>-->
<!---->
<!--    <td class="product-price">--><?php //do_action( 'woocommerce_after_shop_loop_item' ); ?><!--</td>-->
</tr>

<?php
///**
// * The template for displaying product content within loops
// *
// * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
// *
// * HOWEVER, on occasion WooCommerce will need to update template files and you
// * (the theme developer) will need to copy the new files to your theme to
// * maintain compatibility. We try to do this as little as possible, but it does
// * happen. When this occurs the version of the template file will be bumped and
// * the readme will list any important changes.
// *
// * @see     https://docs.woocommerce.com/document/template-structure/
// * @author  WooThemes
// * @package WooCommerce/Templates
// * @version 3.0.0
// */
//
//if ( ! defined( 'ABSPATH' ) ) {
//	exit; // Exit if accessed directly
//}
//
//global $product;
//
//// Ensure visibility
//if ( empty( $product ) || ! $product->is_visible() ) {
//	return;
//}
//?>
<!--<li --><?php //post_class(); ?><!-->-->
<!--	--><?php
//	/**
//	 * woocommerce_before_shop_loop_item hook.
//	 *
//	 * @hooked woocommerce_template_loop_product_link_open - 10
//	 */
//	do_action( 'woocommerce_before_shop_loop_item' );
//
//	/**
//	 * woocommerce_before_shop_loop_item_title hook.
//	 *
//	 * @hooked woocommerce_show_product_loop_sale_flash - 10
//	 * @hooked woocommerce_template_loop_product_thumbnail - 10
//	 */
//	do_action( 'woocommerce_before_shop_loop_item_title' );
//
//	/**
//	 * woocommerce_shop_loop_item_title hook.
//	 *
//	 * @hooked woocommerce_template_loop_product_title - 10
//	 */
//	do_action( 'woocommerce_shop_loop_item_title' );
//
//	/**
//	 * woocommerce_after_shop_loop_item_title hook.
//	 *
//	 * @hooked woocommerce_template_loop_rating - 5
//	 * @hooked woocommerce_template_loop_price - 10
//	 */
//	do_action( 'woocommerce_after_shop_loop_item_title' );
//
//	/**
//	 * woocommerce_after_shop_loop_item hook.
//	 *
//	 * @hooked woocommerce_template_loop_product_link_close - 5
//	 * @hooked woocommerce_template_loop_add_to_cart - 10
//	 */
//	do_action( 'woocommerce_after_shop_loop_item' );
//	?>
<!--</li>-->
