<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Define our Pt Elementor Call Out settings.
 */
class superjob_elementor_job_search extends Widget_Base {
	/**
	 * Define our get_name settings.
	 */
	public function get_name() {
		return 'superjob-job-search';
	}
	/**
	 * Define our get_title settings.
	 */
	public function get_title() {
		return __( 'Job Search Widget', 'superjob' );
	}
	/**
	 * Define our get_icon settings.
	 */
	public function get_icon() {
		return 'eicon-call-to-action';
	}
	/**
	 * Define our get_categories settings.
	 */
	public function get_categories() {
		return [ 'superjob-elementor-widget' ];
	}
	/**
	 * Define our _register_controls settings.
	 */

	/**
	 * Define our Content Display inline settings.
	 */
	protected function add_inline_editing_attributes( $key, $toolbar = 'basic' ) {
		if ( ! Plugin::$instance->editor->is_edit_mode() ) {
			return;
		}
		$this->add_render_attribute( $key, [
			'class' => 'elementor-inline-editing',
			'data-elementor-setting-key' => $key,
		] );
		if ( 'basic' !== $toolbar ) {
			$this->add_render_attribute( $key, [
				'data-elementor-inline-editing-toolbar' => $toolbar,
			] );
		}
	}

	/**
	 * Define our Content Display settings.
	 */
	protected function render() {
		$settings = $this->get_settings();



	$check_job_active          = in_array('wp-job-manager/wp-job-manager.php', apply_filters('active_plugins', get_option('active_plugins'))) ? true : false;
                 
                
	if($check_job_active){
		$job_regions = get_terms( array(
           'taxonomy' => 'job_listing_region',
           'hide_empty' => false,
         ) );

		$job_region = get_option('job_manager_regions_filter');
		  ?>
		  <div class="banner-filter-wrapper">
			<form  class="form-inline" method="GET" action="<?php echo job_manager_get_permalink( 'jobs' ); ?>">
			
			<div class="banner-search-input-wrap">
			  <div class="form-group">
				<label class="sr-only" for="search_keywords"><?php _e('Job Titles, Keywords, Phrase','superjob'); ?></label>

   <svg class="svg-icon" viewBox="0 0 20 20">
	<path fill="none" d="M7.228,11.464H1.996c-0.723,0-1.308,0.587-1.308,1.309v5.232c0,0.722,0.585,1.308,1.308,1.308h5.232
		c0.723,0,1.308-0.586,1.308-1.308v-5.232C8.536,12.051,7.95,11.464,7.228,11.464z M7.228,17.351c0,0.361-0.293,0.654-0.654,0.654
		H2.649c-0.361,0-0.654-0.293-0.654-0.654v-3.924c0-0.361,0.292-0.654,0.654-0.654h3.924c0.361,0,0.654,0.293,0.654,0.654V17.351z
		 M17.692,11.464H12.46c-0.723,0-1.308,0.587-1.308,1.309v5.232c0,0.722,0.585,1.308,1.308,1.308h5.232
		c0.722,0,1.308-0.586,1.308-1.308v-5.232C19,12.051,18.414,11.464,17.692,11.464z M17.692,17.351c0,0.361-0.293,0.654-0.654,0.654
		h-3.924c-0.361,0-0.654-0.293-0.654-0.654v-3.924c0-0.361,0.293-0.654,0.654-0.654h3.924c0.361,0,0.654,0.293,0.654,0.654V17.351z
		 M7.228,1H1.996C1.273,1,0.688,1.585,0.688,2.308V7.54c0,0.723,0.585,1.308,1.308,1.308h5.232c0.723,0,1.308-0.585,1.308-1.308
		V2.308C8.536,1.585,7.95,1,7.228,1z M7.228,6.886c0,0.361-0.293,0.654-0.654,0.654H2.649c-0.361,0-0.654-0.292-0.654-0.654V2.962
		c0-0.361,0.292-0.654,0.654-0.654h3.924c0.361,0,0.654,0.292,0.654,0.654V6.886z M17.692,1H12.46c-0.723,0-1.308,0.585-1.308,1.308
		V7.54c0,0.723,0.585,1.308,1.308,1.308h5.232C18.414,8.848,19,8.263,19,7.54V2.308C19,1.585,18.414,1,17.692,1z M17.692,6.886
		c0,0.361-0.293,0.654-0.654,0.654h-3.924c-0.361,0-0.654-0.292-0.654-0.654V2.962c0-0.361,0.293-0.654,0.654-0.654h3.924
		c0.361,0,0.654,0.292,0.654,0.654V6.886z"></path>
</svg>
   <input type="text" name="search_keywords" class="form-control" id="search-keywords" placeholder="<?php esc_attr_e( 'Job Titles, Keywords, Phrase', 'superjob' ); ?>">
				
				
				
				
			   
			  </div>

<?php if($job_region == '1') : ?>
                              <?php if ( ! empty( $job_regions ) && ! is_wp_error( $job_regions ) ) :?>
                                <div class="form-group">
                                  <label class="sr-only" for="search_region"><?php _e('Job Region','superjob') ?></label>
                                  <svg class="svg-icon" viewBox="0 0 20 20">
							<path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
						</svg>
                                  <select class="form-control" id="job-region" name="search_region"  >
                                    <option><?php _e('All Regions' ,'superjob') ?></option>
                                    <?php 
                                      foreach($job_regions as $r):
                                        echo '<option value="'.$r->term_id.'">'.$r->name.'</option>';
                                      endforeach; 
                                    ?>
                                  </select>
                                </div>
                            <?php endif; ?>
                            <?php else: ?>
                            <div class="form-group">
                              <label class="sr-only" for="search-location"><?php _e('All Location','superjob') ?></label>
                              <svg class="svg-icon" viewBox="0 0 20 20">
							<path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
						</svg>
                              <input type="text" name="search-location" class="form-control" id="search-location" placeholder="All Location">
                            </div>
                            <?php endif; ?>
			  <div class="form-group">
			  
			  <button type="submit" class="btn"><?php _e('Search','superjob'); ?></button>
			  </div>
			  
			</div>
			
 
			</form> 
		  </div>
	 <?php } 

	}
	
}
/*=============Call this every widget ====================*/
Plugin::instance()->widgets_manager->register_widget_type( new superjob_elementor_job_search() );

