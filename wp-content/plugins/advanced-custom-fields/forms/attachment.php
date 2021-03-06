<?php

/*
*  ACF Attachment Form Class
*
*  All the logic for adding fields to attachments
*
*  @class 		acf_form_attachment
*  @package		ACF
*  @subpackage	Forms
*/

if( ! class_exists('acf_form_attachment') ) :

class acf_form_attachment {
	
	
	/*
	*  __construct
	*
	*  This function will setup the class functionality
	*
	*  @type	function
	*  @date	5/03/2014
	*  @since	5.0.0
	*
	*  @param	n/a
	*  @return	n/a
	*/
	
	function __construct() {
		
		// actions
		add_action('admin_enqueue_scripts',			array($this, 'admin_enqueue_scripts'));
		
		
		// render
		add_filter('attachment_fields_to_edit', 	array($this, 'edit_attachment'), 10, 2);
		
		
		// save
		add_filter('attachment_fields_to_save', 	array($this, 'save_attachment'), 10, 2);
		
	}
	
	
	/*
	*  validate_page
	*
	*  This function will check if the current page is for a post/page edit form
	*
	*  @type	function
	*  @date	23/06/12
	*  @since	3.1.8
	*
	*  @param	n/a
	*  @return	(boolean)
	*/
	
	function validate_page() {
		
		// global
		global $pagenow, $typenow, $wp_version;
		
		
		// validate page
		if( $pagenow === 'post.php' && $typenow === 'attachment' ) {
			
			return true;
			
		}
		
		
		// validate page
		if( $pagenow === 'upload.php' && version_compare($wp_version, '4.0', '>=') ) {
			
			add_action('admin_footer', array($this, 'admin_footer'), 1);
			
			return true;
			
		}
		
		
		// return
		return false;		
	}
	
	
	/*
	*  admin_enqueue_scripts
	*
	*  This action is run after post query but before any admin script / head actions. 
	*  It is a good place to register all actions.
	*
	*  @type	action (admin_enqueue_scripts)
	*  @date	26/01/13
	*  @since	3.6.0
	*
	*  @param	N/A
	*  @return	N/A
	*/
	
	function admin_enqueue_scripts() {
		
		// bail early if not valid page
		if( !$this->validate_page() ) {
			
			return;
			
		}
		
		
		// load acf scripts
		acf_enqueue_scripts();
				
	}
	
	
	/*
	*  admin_footer
	*
	*  This function will add acf_form_data to the WP 4.0 attachment grid
	*
	*  @type	action (admin_footer)
	*  @date	11/09/2014
	*  @since	5.0.0
	*
	*  @param	n/a
	*  @return	n/a
	*/
	
	function admin_footer() {
		
		// render post data
		acf_form_data(array( 
			'post_id'	=> 0, 
			'nonce'		=> 'attachment' 
		));
		
	}
	
	
	/*
	*  edit_attachment
	*
	*  description
	*
	*  @type	function
	*  @date	8/10/13
	*  @since	5.0.0
	*
	*  @param	$post_id (int)
	*  @return	$post_id (int)
	*/
	
	function edit_attachment( $form_fields, $post ) {
		
		// vars
		$el = 'tr';
		$post_id = $post->ID;
		$args = array(
			'attachment' => 'All'
		);
		
		
		// $el
		if( $this->validate_page() ) {
			
			//$el = 'div';
			
		}
		
		// get field groups
		$field_groups = acf_get_field_groups( $args );
		
		
		// render
		if( !empty($field_groups) ) {
			
			// get acf_form_data
			ob_start();
			
			
			acf_form_data(array( 
				'post_id'	=> $post_id, 
				'nonce'		=> 'attachment',
			));
			
			
			if( $this->validate_page() ) {
				
				echo '<style type="text/css">
					.compat-attachment-fields {
						width: 100%;
					}
					tr.acf-field {
						display: block;
						margin: 0 0 13px;
					}
					tr.acf-field td.acf-label {
						display: block;
						margin: 0;
					}
					tr.acf-field td.acf-input {
						display: block;
						margin: 0;
					}
				</style>';
				
			}
			
			
			// $el
			//if( $el == 'tr' ) {
				
				echo '</td></tr>';
				
			//}
			
			
			foreach( $field_groups as $field_group ) {
				
				$fields = acf_get_fields( $field_group );
				
				acf_render_fields( $post_id, $fields, $el, 'field' );
				
			}
			
			
			// $el
			//if( $el == 'tr' ) {
				
				echo '<tr class="compat-field-acf-blank"><td>';
				
			//}
			
			
			$html = ob_get_contents();
			
			
			ob_end_clean();
			
			
			$form_fields[ 'acf-form-data' ] = array(
	       		'label' => '',
	   			'input' => 'html',
	   			'html' => $html
			);
						
		}
		
		
		// return
		return $form_fields;
		
	}
	
	
	/*
	*  save_attachment
	*
	*  description
	*
	*  @type	function
	*  @date	8/10/13
	*  @since	5.0.0
	*
	*  @param	$post_id (int)
	*  @return	$post_id (int)
	*/
	
	function save_attachment( $post, $attachment ) {
		
		// bail early if not valid nonce
		if( ! acf_verify_nonce('attachment') ) {
		
			return $post;
			
		}
		
	    
	    // validate and save
	    if( acf_validate_save_post(true) ) {
	    
			acf_save_post( $post['ID'] );
			
		}
		
		
		// return
		return $post;
			
	}
	
			
}

new acf_form_attachment();

endif;

?>
