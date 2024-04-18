<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package superjob
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="prefooter">
		 	<div class="container">
	            <div class="row">
	            	<div class="col-md-12">
	                <?php if (is_active_sidebar('superjob_footer_1')) : ?>
	                    <div class="col-md-4">
	                        <?php dynamic_sidebar('superjob_footer_1') ?>
	                    </div>
	                    <?php
	                else: superjob_blank_widget();
	                endif; ?>
	                <?php if (is_active_sidebar('superjob_footer_2')) : ?>
	                    <div class="col-md-4">
	                        <?php dynamic_sidebar('superjob_footer_2') ?>
	                    </div>
	                    <?php
	                else: superjob_blank_widget();
	                endif; ?>
	                <?php if (is_active_sidebar('superjob_footer_3')) : ?>
	                    <div class="col-md-4">
	                        <?php dynamic_sidebar('superjob_footer_3') ?>
	                    </div>
	                    <?php
	                else: superjob_blank_widget();
	                endif; ?>
	            </div>
	        </div>
	        </div>
       </div>
		<div class="site-info">
			<div class="container">
	            <div class="row">
	            	<div class="col-md-12">
			<span><a target="_blank" rel="nofollow"
                       href="<?php echo esc_url('https://themesartist.com/superjob/'); ?>"><?php esc_html_e('Superjob' , 'superjob'); ?></a><?php esc_html_e(' By Themes Artist.' , 'superjob'); ?> <?php esc_html_e('Powered By WordPress', 'superjob');
             ?></span>
				    </div>
				     </div>
	        </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
