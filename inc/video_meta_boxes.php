<?php 
	
	add_action('add_meta_boxes', 'add_video_meta');
	    function add_video_meta(){
	        add_meta_box('video_meta_box', 'Video', 'dislpay_video_meta_box', 'video', 'normal', 'high');
	    }
	    function dislpay_video_meta_box( $post ){
	        global $post;
	        $values = get_post_custom( $post->ID );
	        wp_nonce_field( 'video_meta_box_nonce', 'meta_box_nonce' );
	        $video_meta_txt    = isset( $values['video_meta_input'] ) ? esc_attr( $values['video_meta_input'][0] ) : '';
	        ?>

	        <div class="row">
	        	<div class="col-md-6">
	        		<div class="meta-wrapper">
		            	<label for="video_meta_input">Video URL</label><br />
		            	<input type="text" class="input" name="video_meta_input" id="video_meta_input" placeholder="<iframe src='https://www.google.com/maps/embed?sampleMap374639' frameborder='0'></iframe>" value="<?php echo $video_meta_txt; ?>" />
		        	</div>
	        	</div>

	        	<div class="col-md-6">
	        		<div class="meta-wrapper">
		            	<label for="doc_map_input">Video Demo:</label><br />
		            	<div><?php echo get_post_meta($post->ID, 'video_meta_input', true); ?></div>
		        	</div>
	        	</div>
	        </div>

	        <?php 
	    }

	    add_action( 'save_post', 'video_meta_box_save' );
	    function video_meta_box_save( $post_id )
	    {
	        if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	        if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'video_meta_box_nonce' ) ) return;
	        if( !current_user_can( 'edit_post' ) ) return;
	        $allowed = array();
	        
	        if( isset( $_POST['video_meta_input'] ) )
	            update_post_meta( $post_id, 'video_meta_input', wp_kses( $_POST['video_meta_input'], array(
	                'iframe' => array(
	                    'src' => array(),
	                    'frameborder' => array(),
	                    'allowfullscreen' => array()
	                    )
	                ) ) );
	    }
	    // end of video_meta_box_save ~~~>
