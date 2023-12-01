<?php
//about theme info
add_action( 'admin_menu', 'digital_advertising_gettingstarted' );
function digital_advertising_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started', 'digital-advertising'), esc_html__('Get Started', 'digital-advertising'), 'edit_theme_options', 'digital_advertising_guide', 'digital_advertising_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function digital_advertising_admin_theme_style() {
   wp_enqueue_style('digital-advertising-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/getstart.css');
   wp_enqueue_script('tabs', esc_url(get_template_directory_uri()) . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'digital_advertising_admin_theme_style');

//guidline for about theme
function digital_advertising_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'digital-advertising' );
?>

<div class="wrapper-info">  
    <div class="tab-sec">
		<div class="tab">
			<div class="logo">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/logo.png" alt="" />
			</div>
			<button role="tab" class="tablinks home" onclick="digital_advertising_openCity(event, 'tc_index')"><?php esc_html_e( 'Free Theme Information', 'digital-advertising' ); ?></button>
		  	<button role="tab" class="tablinks" onclick="digital_advertising_openCity(event, 'tc_pro')"><?php esc_html_e( 'Premium Theme Information', 'digital-advertising' ); ?></button>
		  	<button role="tab" class="tablinks" onclick="digital_advertising_openCity(event, 'tc_create')"><?php esc_html_e( 'Theme Support', 'digital-advertising' ); ?></button>				
		</div>

		<div  id="tc_index" class="tabcontent">
			<h2><?php esc_html_e( 'Welcome to Digital Advertising Theme', 'digital-advertising' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
			<hr>
			<div class="info-link">
				<a href="<?php echo esc_url( digital_advertising_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'digital-advertising' ); ?></a>
				<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'digital-advertising'); ?></a>
				<a class="get-pro" href="<?php echo esc_url( digital_advertising_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'digital-advertising'); ?></a>
			</div>
			<div class="col-tc-6">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/screenshot.png" alt="" />
			</div>
			<div class="col-tc-6">
				<P><?php esc_html_e( 'Digital Advertising is a fantastic free WordPress theme with a professional appeal and minimal look for branding agencies, advertising agencies, creative studios, portfolios, development agencies, freelancing, portfolio, consulting agencies, corporates, eCommerce marketing as well as relevant businesses. It is a clean and user-friendly theme having an interactive and intuitive theme interface making it easy for novices as well as beginners to get the best out of this theme without even knowing how to code. It has a professional appeal along with a responsive design making your website fit every screen with perfection. Apart from that, this theme brings many personalization options available using which tweaking becomes a breeze. With social media options present in this theme, you can smartly utilize the various social media platforms for the promotion of your business on a bigger scale. Call to Action Buttons (CTA) will make the design entirely interactive for the users and will also help in boosting the conversion rates. Along with that, you will observe faster page load time as this theme has many well-optimized codes. Apart from that, the secure and clean codes also enhance the performance of your website. This is a stunning theme created with the Bootstrap framework as a base and also includes translation-ready options.', 'digital-advertising' ); ?></P>
			</div>
    	</div>

		<div id="tc_pro" class="tabcontent">
			<h3><?php esc_html_e( 'Digital Advertising Theme Information', 'digital-advertising' ); ?></h3>
			<hr>
			<div class="pro-image">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/resize.png" alt="" />
			</div>
			<div class="info-link-pro">
				<p><a href="<?php echo esc_url( digital_advertising_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Buy Now', 'digital-advertising' ); ?></a></p>
				<p><a href="<?php echo esc_url( digital_advertising_LIVE_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Live Demo', 'digital-advertising' ); ?></a></p>
				<p><a href="<?php echo esc_url( digital_advertising_PRO_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Pro Documentation', 'digital-advertising' ); ?></a></p>
			</div>
			<div class="col-pro-5">
				<h4><?php esc_html_e( 'Digital Advertising Pro Theme', 'digital-advertising' ); ?></h4>
				<P><?php esc_html_e( 'If you’re trying to launch a successful advertising agency website, you must try this Advertising Agency WordPress Theme. A professional appeal is a must for any business website that is exactly what this theme provides you with. Created with performance in mind, this theme makes use of the standard and well-optimized HTML codes that further makes the web load at tremendous speed. You can pick from the stylish and outstanding templates designed for advertising agencies and brings a phenomenal homepage that can attract the target audience. Its slider will never fail to draw the attention of your viewers as it gives them an idea regarding your work.
               Advertising Agency WordPress Theme also makes sure that there is hardly any need for you to write codes as it brings you an immensely user-friendly theme options panel. It has many customization options for you so that you can obtain a personalized look for your website. On top of that, you will have a drag-and-drop page builder tool that will let you create custom-built pages just like that. In case you want to add more features to your website, you may use the various plugins as this theme is designed to support various third-party plugins. You may also use the shortcodes and widgets that come inbuild. This Advertising Agency WordPress Theme makes sure that you have every possible option for the effective promotion of your business..', 'digital-advertising' ); ?></P>		
			</div>
			<div class="col-pro-6">				
				<h4><?php esc_html_e( 'Theme Features', 'digital-advertising' ); ?></h4>
				<ul>
					<li><?php esc_html_e( 'Theme Options using Customizer API', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Responsive design', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Favicon, Logo, title and tagline customization', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Advanced Color options', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( '100+ Font Family Options', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Background Image Option', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Simple Menu Option', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Additional section for products', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Enable-Disable options on All sections', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Home Page setting for different sections', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Advance Slider with unlimited slides', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Partner Section', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Promotional Banner Section for Products', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Seperate Newsletter Section', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Text and call to action button for each slides', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Pagination option', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Custom CSS option', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Translations Ready', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Customizable Home Page', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Full-Width Template', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Footer Widgets & Editor Style', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Banner & Post Type Plugin Functionality', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Woo Commerce Compatible', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Multiple Inner Page Templates', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Product Sliders', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Slider', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Posttype', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Listing With Shortcode', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Contact page template', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Contact Widget', 'digital-advertising' ); ?></li>
					<li><?php esc_html_e( 'Advance Social Media Feature', 'digital-advertising' ); ?></li>
				</ul>				
			</div>
		</div>	

		<div id="tc_create" class="tabcontent">
			<h3><?php esc_html_e( 'Support', 'digital-advertising' ); ?></h3>
			<hr>
			<div class="tab-cont">
		  		<h4><?php esc_html_e( 'Need Support?', 'digital-advertising' ); ?></h4>				
				<div class="info-link-support">
					<P><?php esc_html_e( 'Our team is obliged to help you in every way possible whenever you face any type of difficulties and doubts.', 'digital-advertising' ); ?></P>
					<a href="<?php echo esc_url( digital_advertising_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support Forum', 'digital-advertising' ); ?></a>
				</div>
			</div>
			<div class="tab-cont">	
				<h4><?php esc_html_e('Reviews', 'digital-advertising'); ?></h4>				
				<div class="info-link-support">
					<P><?php esc_html_e( 'It is commendable to have such a theme inculcated with amazing features and robust functionalities. I feel grateful to recommend this theme to one and all.', 'digital-advertising' ); ?></P>
					<a href="<?php echo esc_url( digital_advertising_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'digital-advertising'); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>