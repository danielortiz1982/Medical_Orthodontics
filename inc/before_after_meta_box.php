<?php 
	
	add_action('add_meta_boxes', 'add_before_after_video_meta');
	    function add_before_after_video_meta(){
	        add_meta_box('before_after_video', 'Before & After Video', 'dislpay_before_after_video_meta', 'before_and_after', 'normal', 'high');
	    }
	    function dislpay_before_after_video_meta( $post ){
	        global $post;
	        $values = get_post_custom( $post->ID );
	        wp_nonce_field( 'before_after_meta_box_nonce', 'meta_box_nonce' );
	        $before_after_video_txt    = isset( $values['before_after_video_input'] ) ? esc_attr( $values['before_after_video_input'][0] ) : '';
	        ?>

	        <div class="meta-wrapper">
	            <label for="before_after_video_input">Video URL</label><br />
	            <input type="text" class="input" name="before_after_video_input" id="before_after_video_input" placeholder="<iframe src='https://www.google.com/maps/embed?sampleMap374639' frameborder='0'></iframe>" value="<?php echo $before_after_video_txt; ?>" />
	        </div>

	        <div class="meta-wrapper">
	            <label for="doc_map_input">Video Demo:</label><br />
	            <div><?php echo get_post_meta($post->ID, 'before_after_video_input', true); ?></div>
	        </div>

	        <?php 
	    }

	    add_action( 'save_post', 'before_after_meta_box_save' );
	    function before_after_meta_box_save( $post_id )
	    {
	        if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	        if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'before_after_meta_box_nonce' ) ) return;
	        if( !current_user_can( 'edit_post' ) ) return;
	        $allowed = array();
	        
	        if( isset( $_POST['before_after_video_input'] ) )
	            update_post_meta( $post_id, 'before_after_video_input', wp_kses( $_POST['before_after_video_input'], array(
	                'iframe' => array(
	                    'src' => array(),
	                    'frameborder' => array()
	                    )
	                ) ) );
	    }
	    // end of before_after_meta_box_save ~~~>
