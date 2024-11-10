<?php
/**
 * Header Three
 *
 * @package Thrive Coach
 */

$ed_cart   = get_theme_mod( 'ed_shopping_cart', true );
$ed_search = get_theme_mod( 'ed_header_search', true ); ?>

<header id="masthead" class="site-header style-three" itemscope itemtype="https://schema.org/WPHeader">
	<div class="header-top">
		<div class="container">
			<div class="header-left">
				<?php seva_lite_secondary_navigation(); ?>				
				<div class="header-center">
					<?php seva_lite_header_contact(); ?>
				</div>
			</div>
			<div class="header-right">
				<?php if( seva_lite_social_links( false ) ){
					echo '<div class="header-social">';
                    seva_lite_social_links();
                    echo '</div>';
                } 
				if( $ed_search ) thrive_coach_header_search(); 
				if( seva_lite_is_woocommerce_activated() && $ed_cart ) {
					echo '<div class="header-cart">';
					thrive_coach_wc_cart_count();
					echo '</div>';
				} ?>			
			</div>
		</div>
	</div>
    <div class="header-middle">
		<div class="container">			
			<?php seva_lite_site_branding(); ?>
		</div>
	</div>
	<div class="header-main">
		<div class="container">
			<?php seva_lite_primary_navigation(); ?>
			<?php seva_lite_contact_button(); ?>
		</div>
	</div>
	<?php seva_lite_mobile_navigation(); ?>
	<?php seva_lite_sticky_header(); ?>
</header>