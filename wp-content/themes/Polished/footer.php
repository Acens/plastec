</div>
	<!-- End Content -->
    <img src="<?php bloginfo('template_directory') ?>/images/content-bottom<?php global $fullwidth; if(is_page_template('page-full.php') || (($fullwidth))) echo '-full'?>.gif" alt="content top" class="content-wrap" />
	
	<!-- Footer Widgets -->
	<div id="footer_widgets">
		<!-- Footer Widget Start-->
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?> 
		<?php endif; ?>
		
	</div>
	<!-- Footer Widgets Done -->
	<div id="footer">
		<p id="copyright"> <a href="http://www.acens.com.br/"><img style="margin-bottom:-11px;" src="http://localhost/plastec/wp-content/themes/Polished/images/acen.png" alt="logo"></a> </p>
			</div> <!-- end .container -->
	</div>
</div>
<!-- Wrap End -->


<?php get_template_part('includes/scripts'); ?>

<?php wp_footer(); ?>	
</body>
</html>