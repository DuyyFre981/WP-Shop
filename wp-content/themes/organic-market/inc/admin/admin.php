<?php
//about theme info
add_action( 'admin_menu', 'organic_market_abouttheme' );
function organic_market_abouttheme() {    	
	add_theme_page( esc_html__('Organic Market Theme', 'organic-market'), esc_html__('Organic Market Theme', 'organic-market'), 'edit_theme_options', 'organic_market_guide', 'organic_market_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function organic_market_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) .'/inc/admin/admin.css');
}
add_action('admin_enqueue_scripts', 'organic_market_admin_theme_style');

//guidline for about theme
function organic_market_mostrar_guide() {
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="header">
	 	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/logo.png" alt="" />
	 	<h2><?php esc_html_e('Welcome to Organic Market Theme', 'organic-market'); ?></h2>
 		<p><?php esc_html_e('Organic Market WordPress theme is a beautiful and clean WordPress theme perfect for any type of food blog or online food store. This theme is packed with features and options that make it easy to customize according to your needs. With its responsive and mobile-friendly design, your site will look great on all devices. Additionally, the theme is packed with stunning animations, interactive elements, and a Bootstrap framework. If you are looking for a theme to create a food blog or online store, then Organic Market is the perfect choice for you. The Organic Market WordPress Theme is a great theme for those looking to sell organic products online. This theme comes with a beautiful design and plenty of features to help you sell your products. The theme is also Responsive and Retina Ready, so it will look great on all devices. The Organic markets include foods that are produced without the use of synthetic pesticides, fertilizers, or other chemicals. They are also not processed with food additives or irradiation. Organic market is becoming more popular as people become more health conscious. The term “organic” can be used in different ways, and it’s important to know what it means when you’re shopping for organic products. In general, organic things are produced in a way that is sustainable and protects nature. For example, organic farmers use crop rotation to replenish the soil and they avoid using synthetic pesticides and fertilizers. So that the product stays organic and pesticides free.', 'organic-market'); ?></p>
		<div class="main-button">
			<a href="<?php echo esc_url( ORGANIC_MARKET_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'organic-market'); ?></a>
			<a href="<?php echo esc_url( ORGANIC_MARKET_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'organic-market'); ?></a>
			<a href="<?php echo esc_url( ORGANIC_MARKET_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'organic-market'); ?></a>
		</div>
	</div>
	<div class="button-bg">
		<button  role="tab" class="tablink" onclick="openPage('Home', this, '')"><?php esc_html_e('Lite Theme Setup', 'organic-market'); ?></button>
		<button role="tab" class="tablink" onclick="openPage('Contact', this, '')"><?php esc_html_e('Premium Theme info', 'organic-market'); ?></button>
	</div>
	<div id="Home" class="tabcontent tab1">
	  	<h3><?php esc_html_e('How to set up homepage', 'organic-market'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( ORGANIC_MARKET_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'organic-market'); ?></a>
			<a href="<?php echo esc_url( ORGANIC_MARKET_CONTACT ); ?>" target="_blank"><?php esc_html_e('Support', 'organic-market'); ?></a>
			<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" target="_blank"><?php esc_html_e('Start Customizing', 'organic-market'); ?></a>
		</div>
	  	<div class="documentation">
		  	<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 1.', 'organic-market'); ?></b> <?php esc_html_e('Follow these instructions to setup Home page.', 'organic-market'); ?></li>
					<li> <b><?php esc_html_e('Step 2.', 'organic-market'); ?></b> <?php esc_html_e(' Create Page to set template: Go to Dashboard >> Pages >> Add New Page.Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.', 'organic-market'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/home-page-template.png" alt="" />	
		  	</div>
		  	<div class="clearfixed">
				<div class="doc-image1">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/set-front-page.png" alt="" />	
			    </div>
			    <div class="image-docs1">
				    <ul>
						<li> <b><?php esc_html_e('Step 3.', 'organic-market'); ?></b> <?php esc_html_e('Set the front page: Go to Setting -> Reading --> Set the front page display static page to home page', 'organic-market'); ?></li>
					</ul>
			  	</div>
			</div>
		</div>
	</div>
	<div id="Contact" class="tabcontent">
	 	<h3><?php esc_html_e('Premium Theme Info', 'organic-market'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( ORGANIC_MARKET_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'organic-market'); ?></a>
			<a href="<?php echo esc_url( ORGANIC_MARKET_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'organic-market'); ?></a>
			<a href="<?php echo esc_url( ORGANIC_MARKET_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'organic-market'); ?></a>
		</div>
	  	<div class="features-section">
	  		<div class="col-4">
	  			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/screenshot.png" alt="" />
	  			<p><?php esc_html_e( 'The premium Organic Market WordPress Theme is the ideal choice for displaying your excellent work to the public. Whether you manage an Organic Market business or an international one, this premium Organic Market WordPress Theme is all you need to showcase your work and promote your workspace in every possible way. It is crucial that your website looks different and unique from your competitors. And what better way to achieve this than to choose our premium Organic Market WordPress Theme? Not only will it speed up your website, but it will also increase the view of the theme’s attractiveness.
The Organic Market WordPress Theme is equipped with all the features necessary to build a website. Furthermore, the theme is compatible with multiple browsers, translation-ready, and SEO-friendly. Its social media sharability will enable your herbal products to reach a wider audience. It also allows for easy online payment through a safe and reliable payment gateway. Other features include the ability to enable/disable sections, Google font choices for sections, gallery, short codes, and support for custom CSS/JS. The gallery feature allows you to showcase your work. This theme is equipped with short codes that allow you to integrate them into any section of your website. Additionally, we offer live support in case you encounter any problems. These factors combine to make ours the best premium Organic Market WordPress Theme available.
', 'organic-market' ); ?></p>
	  		</div>
	  		<div class="col-4">
	  			<h4><?php esc_html_e( 'Theme Features', 'organic-market' ); ?></h4>
				<ul>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Theme options using customizer API', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Responsive Design', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Favicon, Logo, Title and Tagline Customization', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advanced Color Options and Color Pallets', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( '100+ Font Family Options', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Support to Add Custom CSS/JS', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'SEO Friendly', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Pagination Option', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Compatible With Different WordPress Famous Plugins Like Contact Form 7 and Woocommerce', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Enable-Disable Options on All Sections', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Footer Customization Options', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Fully Integrated with Font Awesome Icon', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Short Codes', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Background Image Option', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Page Templates', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Featured Product Images, HD Images and Video display', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Make Post About Firms News, Events, Achievements and So On.', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Left and Right Sidebar', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Sticky Post & Comment Threads', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Parallax Image-Background Section', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Customizable Home Page', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Full-Width Template', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'organic-market' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Social Media Feature', 'organic-market' ); ?></li>
				</ul>
			</div>
		</div>
	</div>
<script>
	function openPage(pageName,elmnt,color) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablink");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].style.backgroundColor = "";
	    }
	    document.getElementById(pageName).style.display = "block";
	    elmnt.style.backgroundColor = color;
	}
</script>
<?php } ?>