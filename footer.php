<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	<?php 
		$social = array(
			'menu'            => 'Social Menu',
			'menu_class'      => 'menu',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
		);
	?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" class='cf' role="contentinfo">
		<div id='footer-inner' class='cf'>
			<div id='footer-site-logo'>
				<h1>DesignBuildBluff</h1>
				<a href='<?php echo get_site_url(); ?>'><img src="<?php echo get_stylesheet_directory_uri(); ?>/css/img/logo.png" /></a>
			</div>
			<div id='footer-right'>
				<div id='footer-social'>
					<p class='footer-section-title'>Connect</p>
					<?php dynamic_sidebar( 'footer_social' ); ?>
				</div>
				<div id='footer-contact'>
					<p class='footer-section-title'>Contact</p>
					<?php dynamic_sidebar( 'footer_contact' ); ?>
				</div>
			</div>
			
			<?php /*
			<div id='contact-details'>
				<p>The University of Utah</p>
				<p>College of Architecture + Planning</p>
				<p>375 S. 1530 E., Rm. 332 Arch</p>
				<p>SLC, UT 84112</p>
				<p>(801) 585-5354</p>
				<a href='mailto:galarza@arch.utah.edu'><p>galarza@arch.utah.edu</p></a>
			</div>
			*/ ?>
			
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>