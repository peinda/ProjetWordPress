<?php
/**
 * Theme information page
 * @package Niva Store
 */

//Add the theme page
add_action('admin_menu', 'niva_store_add_theme_info');
function niva_store_add_theme_info(){
	$theme_info = add_theme_page( esc_html__('Niva Store Info','niva-store'), esc_html__('Niva Store Info','niva-store'), 'manage_options', 'nivastore-info.php', 'niva_store_info_page' );
    add_action( 'load-' . $theme_info, 'niva_store_info_hook_styles' );
}

//Callback
function niva_store_info_page() {
?>
	<div class="info-container">
		<h2 class="info-title"><?php esc_html_e('Niva Store Info','niva-store'); ?></h2>
		<div class="info-block"><div class="dashicons dashicons-book-alt info-icon"></div>
        	<p class="info-text"><a href="<?php echo esc_url('https://blazethemes.com/documentation/niva-store/');?>" target="_blank"><?php esc_html_e('Setup Tutorials (Documentation)','niva-store'); ?></a></p></div>
          <div class="info-block"><div class="dashicons dashicons-book-alt info-icon"></div>
        	<p class="info-text"><a href="<?php echo esc_url('https://blazethemes.com/documentation/niva-store-pro/');?>" target="_blank"><?php esc_html_e('Setup Tutorials Pro version (Documentation)','niva-store'); ?></a></p></div>
    <div class="info-block"><div class="dashicons dashicons-sos info-icon"></div>
        	<p class="info-text"><a href="<?php echo esc_url('https://www.blazethemes.com/support'); ?>" target="_blank"><?php esc_html_e('Support','niva-store'); ?></a></p></div>       
        <div class="info-block"><div class="dashicons dashicons-desktop info-icon"></div>
        	<p class="info-text"><a href="<?php echo esc_url('https://demo.blazethemes.com/niva-store'); ?>" target="_blank"><?php esc_html_e('Theme demo','niva-store'); ?></a></p></div> 

        <div class="info-block"><div class="dashicons dashicons-embed-video info-icon"></div>
        	<p class="info-text"><a href="<?php echo esc_url('https://blazethemes.com/theme/niva-store-pro/');?>" target="_blank"><?php esc_html_e('Get Pro Version','niva-store'); ?></a></p></div>      
		<div class="info-block"><div class="dashicons dashicons-laptop info-icon"></div>
        	<p class="info-text"><a href="<?php echo esc_url('https://demo.blazethemes.com/niva-store-pro/'); ?>" target="_blank"><?php esc_html_e('Pro Theme demo','niva-store'); ?></a></p></div>       
	</div>
<?php
}

//Styles
function niva_store_info_hook_styles(){
   	add_action( 'admin_enqueue_scripts', 'niva_store_info_page_styles' );
}
function niva_store_info_page_styles() {
	wp_enqueue_style( 'niva_store-info-style', get_template_directory_uri() . '/css/info-page.css', array(), true );
}