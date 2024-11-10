<?php
/**
 * Active Callback
 * 
 * @package Seva_Lite
*/

if( ! function_exists('seva_lite_banner_ac') ):
/**
 * Active Callback for Banner Slider
*/
function seva_lite_banner_ac( $control ){
    $banner           = $control->manager->get_setting( 'ed_banner_section' )->value();
    $slider_type      = $control->manager->get_setting( 'slider_type' )->value();
    $control_id       = $control->id;
    
    if ( $control_id == 'header_image' && $banner == 'static_banner' ) return true;
    if ( $control_id == 'header_video' && $banner == 'static_banner' ) return true;
    if ( $control_id == 'external_header_video' && $banner == 'static_banner' ) return true;
    if ( $control_id == 'banner_caption_layout' && $banner == 'static_banner' ) return true;
    if ( $control_id == 'banner_title' && $banner == 'static_banner' ) return true;
    if ( $control_id == 'banner_subtitle' && $banner == 'static_banner' ) return true;
    if ( $control_id == 'banner_content' && $banner == 'static_banner' ) return true;
    if ( $control_id == 'banner_label' && $banner == 'static_banner' ) return true;
    if ( $control_id == 'banner_link' && $banner == 'static_banner' ) return true;
    
    if ( $control_id == 'slider_type' && $banner == 'slider_banner' ) return true;
    if ( $control_id == 'slider_auto' && $banner == 'slider_banner' ) return true;
    if ( $control_id == 'slider_loop' && $banner == 'slider_banner' ) return true;
    if ( $control_id == 'slider_caption' && $banner == 'slider_banner' ) return true;          
    if ( $control_id == 'slider_readmore' && $banner == 'slider_banner' ) return true;    
    if ( $control_id == 'slider_cat' && $banner == 'slider_banner' && $slider_type == 'cat' ) return true;
    if ( $control_id == 'no_of_slides' && $banner == 'slider_banner' && $slider_type == 'latest_posts' ) return true;
    if ( $control_id == 'slider_full_image' && $banner == 'slider_banner' ) return true;
    if ( $control_id == 'slider_animation' && $banner == 'slider_banner' ) return true;
    if ( $control_id == 'slider_speed' && $banner == 'slider_banner' ) return true;
    if ( $control_id == 'hr' && $banner == 'slider_banner' ) return true;
    
    return false;
}
endif;

/**
 * Active Callback for social title in contact section
*/
function seva_lite_contact_section_ac( $control ){

    $contact_widget = is_active_sidebar( 'contact' );
    $control_id = $control->id;

    if ( $control_id == 'follow_on_text' && $contact_widget == true ) return true;

    return false;
}

/**
 * Active Callback for post/page
*/
function seva_lite_post_page_ac( $control ){
    
    $ed_related = $control->manager->get_setting( 'ed_related' )->value();
    $ed_comment = $control->manager->get_setting( 'ed_comments' )->value();
    $control_id = $control->id;
    
    if ( $control_id == 'related_post_title' && $ed_related == true ) return true;
    if ( $control_id == 'toggle_comments' && $ed_comment == true ) return true;
    
    return false;
}


/**
 * Active Callback for blog section
*/
function seva_lite_blog_ac( $control ){
    
    $ed_blog_section = $control->manager->get_setting( 'ed_blog_section' )->value();
    $blog = get_option( 'page_for_posts' );
    $control_id = $control->id;

    if ( $control_id == 'blog_view_all' && $ed_blog_section && $blog ) return true;
    if ( $ed_blog_section ) return true;

    return false;
}

/**
 * Active Callback for Wheel of Life
*/
function seva_lite_wheeloflife_ac( $control ){
    $ed_wheeloflife = get_theme_mod( 'ed_wheeloflife_section' , false );
    $ed_tab         = $control->manager->get_setting( 'wheel_of_life_tab' )->value();
    $control_id     = $control->id;
    
    if ( $ed_wheeloflife && $control_id == 'wol_section_title'  ) return true;
    if ( $ed_wheeloflife && $control_id == 'wol_section_content'  ) return true;
    if ( $ed_wheeloflife && $control_id == 'wheeloflife_img'  ) return true;
    if ( $ed_wheeloflife && $control_id == 'wheel_of_life_tab'  ) return true;
    if ( $ed_wheeloflife && $control_id == 'wheeloflife_cp_text' && $ed_tab == 'coach' ) return true;
    if ( $ed_wheeloflife && $control_id == 'wheeloflife_url_cp' && $ed_tab == 'coach' ) return true;
    if ( $ed_wheeloflife && $control_id == 'wheeloflife_text_cp' && $ed_tab == 'coach' ) return true;
    if ( $ed_wheeloflife && $control_id == 'wol_activate_note' && $ed_tab == 'wol' ) return true;
    if ( $ed_wheeloflife && $control_id == 'wheeloflife_text' && $ed_tab == 'wol' ) return true;
    if ( $ed_wheeloflife && $control_id == 'wheeloflife_shortcode' && $ed_tab == 'wol' ) return true;
    if ( $ed_wheeloflife && $control_id == 'wheeloflife_learn_text' && $ed_tab == 'wol' ) return true;
    if ( $ed_wheeloflife && $control_id == 'wheeloflife_color' && $ed_tab == 'wol' ) return true;
    
    return false; 
}

/**
 * Active Callback for local fonts
*/
function seva_lite_ed_localgoogle_fonts(){
    $ed_localgoogle_fonts = get_theme_mod( 'ed_localgoogle_fonts' , false );

    if( $ed_localgoogle_fonts ) return true;
    
    return false; 
}

/**
 * Active Callback for instagram
*/
function seva_lite_instagram_ac( $control ){
    
    $ed_insta   = $control->manager->get_setting( 'ed_instagram' )->value();
    $control_id = $control->id;
    
    if ( $control_id == 'instagram_shortcode' && $ed_insta ) return true;
    
    return false;
}