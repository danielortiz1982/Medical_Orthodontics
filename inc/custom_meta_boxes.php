<?php
	add_action('add_meta_boxes', 'add_sample_meta');
	    function add_sample_meta(){
	        add_meta_box('sample', 'Sample Meta Box', 'dislpay_sample_meta', 'sample', 'normal', 'high');
	    }
	    function dislpay_sample_meta( $post ){
	        global $post;
	        $values = get_post_custom( $post->ID );
	        wp_nonce_field( 'sample_meta_box_nonce', 'meta_box_nonce' );
	        $sample_input_txt 	 = isset( $values['sample_input'] ) ? esc_attr( $values['sample_input'][0] ) : '';
	        $sample_select_txt 	 = isset( $values['sample_select'] ) ? esc_attr( $values['sample_select'][0] ) : '';
	        $sample_radio_txt 	 = isset( $values['sample_radio'] ) ? esc_attr( $values['sample_radio'][0] ) : '';
	        $sample_textarea_txt 	 = isset( $values['sample_textarea'] ) ? esc_attr( $values['sample_textarea'][0] ) : '';
	        $filearray = get_post_meta( get_the_ID(), 'sample_file_upload', true );
			$this_file = $filearray['url'];
	        ?>

	        <div class="meta-wrapper">
	    		<label for="sample_input">Sample Input:</label><br />
	    		<input name="sample_input" id="sample_input" placeholder="Enter Sample here..." value="<?php echo $sample_input_txt; ?>">
			</div>

			<div class="meta-wrapper">
	            <label for="sample_select">Sample Select:</label><br />
	            <select name="sample_select" id="sample_select">
	                <option value="Sample001" <?php selected( $sample_select_txt, 'Sample001' ); ?>>Sample001</option>
	                <option value="Sample002" <?php selected( $sample_select_txt, 'Sample002' ); ?>>Sample002</option>
	                <option value="Sample003" <?php selected( $sample_select_txt, 'Sample003' ); ?>>Sample003</option>
	                <option value="Sample004" <?php selected( $sample_select_txt, 'Sample004' ); ?>>Sample004</option>
	                <option value="Sample005" <?php selected( $sample_select_txt, 'Sample005' ); ?>>Sample005</option>
	            </select>
			</div>

			<div class="meta-wrapper">
			  <label for="sample_radio">Sample Radio:</label><br />
			  <input type="radio" name="sample_radio" value="sample1" <?php checked( $sample_radio_txt, 'sample1' ); ?>> Sample 1<br>
			  <input type="radio" name="sample_radio" value="sample2" <?php checked( $sample_radio_txt, 'sample2' ); ?>> Sample 2<br>
			  <input type="radio" name="sample_radio" value="other" <?php checked( $sample_radio_txt, 'other' ); ?>> other
			</div>

			<div class="meta-wrapper">
			  <label for="sample_textarea">Sample Textarea:</label><br />
			  <textarea name="sample_textarea"><?php echo $sample_textarea_txt; ?></textarea>
			</div>

			<div class="meta-wrapper">
				<label for="sample_file_upload">Upload your PDF here:</label>
				<input type="file" id="sample_file_upload" name="sample_file_upload" value="" />
				<a href="<?php echo $this_file; ?>" target="_blank"><?php echo $this_file; ?></a>

			</div>

	        <?php
	    }
	    // end of dislpay_sample_meta
	add_action( 'save_post', 'sample_meta_box_save' );
	    function sample_meta_box_save( $post_id )
	    {
	        if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	        if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'sample_meta_box_nonce' ) ) return;
	        if( !current_user_can( 'edit_post' ) ) return;
	        $allowed = array();
	        if( isset( $_POST['sample_input'] ) )
	            update_post_meta( $post_id, 'sample_input', wp_kses( $_POST['sample_input'], $allowed ) );
	        if( isset( $_POST['sample_select'] ) )
	            update_post_meta( $post_id, 'sample_select', wp_kses( $_POST['sample_select'], $allowed ) );
	        if( isset( $_POST['sample_radio'] ) )
	            update_post_meta( $post_id, 'sample_radio', wp_kses( $_POST['sample_radio'], $allowed ) );
	        if( isset( $_POST['sample_textarea'] ) )
	            update_post_meta( $post_id, 'sample_textarea', wp_kses( $_POST['sample_textarea'], $allowed ) );
	        if(!empty($_FILES['sample_file_upload']['name'])) {
		        $supported_types = array('application/pdf');
		        $arr_file_type = wp_check_filetype(basename($_FILES['sample_file_upload']['name']));
		        $uploaded_type = $arr_file_type['type'];
		        if(in_array($uploaded_type, $supported_types)) {
		            $upload = wp_upload_bits($_FILES['sample_file_upload']['name'], null, file_get_contents($_FILES['sample_file_upload']['tmp_name']));
		            if(isset($upload['error']) && $upload['error'] != 0) {
		                wp_die('There was an error uploading your file. The error is: ' . $upload['error']);
		            } else {
		                update_post_meta($post_id, 'sample_file_upload', $upload);
		            }
		        }
		        else {
		            wp_die("The file type that you've uploaded is not a PDF. " . '<a href="#" onclick="history.back();">Return to Post</a>');
		        }
		    }
	    }
	    // end of sample_meta_box_save ~~~>
