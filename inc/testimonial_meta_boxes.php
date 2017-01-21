<?php 
	
	add_action('add_meta_boxes', 'add_testimonial_meta');
	    function add_testimonial_meta(){
	        add_meta_box('testimonial_meta_box', 'Patient Testimonial', 'dislpay_testimonial_meta', 'patient_testimonials', 'normal', 'high');
	    }
	    function dislpay_testimonial_meta( $post ){
	        global $post;
	        $values = get_post_custom( $post->ID );
	        wp_nonce_field( 'testimonials_meta_box_nonce', 'meta_box_nonce' );
	        $quote_txt    				= isset( $values['patient_quote_input'] ) ? esc_attr( $values['patient_quote_input'][0] ) : '';
	        $name_txt     				= isset( $values['patient_name_input'] ) ? esc_attr( $values['patient_name_input'][0] ) : '';
	        $testimonial_state_txt      = isset( $values['testimonal_state_select'] ) ? esc_attr( $values['testimonal_state_select'][0] ) : '';
	       
	       ?>

	       <div class="meta-wrapper">
	            <label for="patient_name_input">Full Name:</label><br />
	            <input type="text" class="input" name="patient_name_input" id="patient_name_input" placeholder="John Smith" value="<?php echo $name_txt; ?>" />
	        </div>

	       <div class="meta-wrapper">
	            <label for="patient_quote_input">Patient Quote:</label><br />
	            <textarea name="patient_quote_input" id="patient_quote_input" placeholder="Enter background here..."><?php echo $quote_txt; ?></textarea>
	        </div>

	        <div class="meta-wrapper">
	            <label for="testimonal_state_select">State:</label><br />
	            <select name="testimonal_state_select" id="testimonal_state_select">
	                <option value="Alabama" <?php selected( $testimonial_state_txt, 'Alabama' ); ?>>Alabama</option>
	                <option value="Alaska" <?php selected( $testimonial_state_txt, 'Alaska' ); ?>>Alaska</option>
	                <option value="Arizona" <?php selected( $testimonial_state_txt, 'Arizona' ); ?>>Arizona</option>
	                <option value="Arkansas" <?php selected( $testimonial_state_txt, 'Arkansas' ); ?>>Arkansas</option>
	                <option value="California" <?php selected( $testimonial_state_txt, 'California' ); ?>>California</option>
	                <option value="Colorado" <?php selected( $testimonial_state_txt, 'Colorado' ); ?>>Colorado</option>
	                <option value="Connecticut" <?php selected( $testimonial_state_txt, 'Connecticut' ); ?>>Connecticut</option>
	                <option value="Delaware" <?php selected( $testimonial_state_txt, 'Delaware' ); ?>>Delaware</option>
	                <option value="Florida" <?php selected( $testimonial_state_txt, 'Florida' ); ?>>Florida</option>
	                <option value="Georgia" <?php selected( $testimonial_state_txt, 'Georgia' ); ?>>Georgia</option>
	                <option value="Hawaii" <?php selected( $testimonial_state_txt, 'Hawaii' ); ?>>Hawaii</option>
	                <option value="Idaho" <?php selected( $testimonial_state_txt, 'Idaho' ); ?>>Idaho</option>
	                <option value="Illinois" <?php selected( $testimonial_state_txt, 'Illinois' ); ?>>Illinois</option>
	                <option value="Indiana" <?php selected( $testimonial_state_txt, 'Indiana' ); ?>>Indiana</option>
	                <option value="Iowa" <?php selected( $testimonial_state_txt, 'Iowa' ); ?>>Iowa</option>
	                <option value="Kansas" <?php selected( $testimonial_state_txt, 'Kansas' ); ?>>Kansas</option>
	                <option value="Kentucky" <?php selected( $testimonial_state_txt, 'Kentucky' ); ?>>Kentucky</option>
	                <option value="Louisiana" <?php selected( $testimonial_state_txt, 'Louisiana' ); ?>>Louisiana</option>
	                <option value="Maine" <?php selected( $testimonial_state_txt, 'Maine' ); ?>>Maine</option>
	                <option value="Maryland" <?php selected( $testimonial_state_txt, 'Maryland' ); ?>>Maryland</option>
	                <option value="Massachusetts" <?php selected( $testimonial_state_txt, 'Massachusetts' ); ?>>Massachusetts</option>
	                <option value="Michigan" <?php selected( $testimonial_state_txt, 'Michigan' ); ?>>Michigan</option>
	                <option value="Minnesota" <?php selected( $testimonial_state_txt, 'Minnesota' ); ?>>Minnesota</option>
	                <option value="Mississippi" <?php selected( $testimonial_state_txt, 'Mississippi' ); ?>>Mississippi</option>
	                <option value="Missouri" <?php selected( $testimonial_state_txt, 'Missouri' ); ?>>Missouri</option>
	                <option value="Montana" <?php selected( $testimonial_state_txt, 'Montana' ); ?>>Montana</option>
	                <option value="Nebraska" <?php selected( $testimonial_state_txt, 'Nebraska' ); ?>>Nebraska</option>
	                <option value="Nevada" <?php selected( $testimonial_state_txt, 'Nevada' ); ?>>Nevada</option>
	                <option value="New Hampshire" <?php selected( $testimonial_state_txt, 'New Hampshire' ); ?>>New Hampshire</option>
	                <option value="New Jersey" <?php selected( $testimonial_state_txt, 'New Jersey' ); ?>>New Jersey</option>
	                <option value="New Mexico" <?php selected( $testimonial_state_txt, 'New Mexico' ); ?>>New Mexico</option>
	                <option value="New York" <?php selected( $testimonial_state_txt, 'New York' ); ?>>New York</option>
	                <option value="North Carolina" <?php selected( $testimonial_state_txt, 'North Carolina' ); ?>>North Carolina</option>
	                <option value="North Dakota" <?php selected( $testimonial_state_txt, 'North Dakota' ); ?>>North Dakota</option>
	                <option value="Ohio" <?php selected( $testimonial_state_txt, 'Ohio' ); ?>>Ohio</option>
	                <option value="Oklahoma" <?php selected( $testimonial_state_txt, 'Oklahoma' ); ?>>Oklahoma</option>
	                <option value="Oregon" <?php selected( $testimonial_state_txt, 'Oregon' ); ?>>Oregon</option>
	                <option value="Pennsylvania" <?php selected( $testimonial_state_txt, 'Pennsylvania' ); ?>>Pennsylvania</option>
	                <option value="Rhode Island" <?php selected( $testimonial_state_txt, 'Rhode Island' ); ?>>Rhode Island</option>
	                <option value="South Carolina" <?php selected( $testimonial_state_txt, 'South Carolina' ); ?>>South Carolina</option>
	                <option value="South Dakota" <?php selected( $testimonial_state_txt, 'South Dakota' ); ?>>South Dakota</option>
	                <option value="Tennessee" <?php selected( $testimonial_state_txt, 'Tennessee' ); ?>>Tennessee</option>
	                <option value="Texas" <?php selected( $testimonial_state_txt, 'Texas' ); ?>>Texas</option>
	                <option value="Utah" <?php selected( $testimonial_state_txt, 'Utah' ); ?>>Utah</option>
	                <option value="Vermont" <?php selected( $testimonial_state_txt, 'Vermont' ); ?>>Vermont</option>
	                <option value="Virginia" <?php selected( $testimonial_state_txt, 'Virginia' ); ?>>Virginia</option>
	                <option value="Washington" <?php selected( $testimonial_state_txt, 'Washington' ); ?>>Washington</option>
	                <option value="West Virginia" <?php selected( $testimonial_state_txt, 'West Virginia' ); ?>>West Virginia</option>
	                <option value="Wisconsin" <?php selected( $testimonial_state_txt, 'Wisconsin' ); ?>>Wisconsin</option>
	                <option value="Wyoming" <?php selected( $testimonial_state_txt, 'Wyoming' ); ?>>Wyoming</option>
	            </select>
	        </div>	        

	        <?php
	    }

	    add_action( 'save_post', 'testimonial_meta_box_save' );
	    function testimonial_meta_box_save( $post_id )
	    {
	        if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	        if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'testimonials_meta_box_nonce' ) ) return;
	        if( !current_user_can( 'edit_post' ) ) return;
	        $allowed = array();
	        if( isset( $_POST['patient_name_input'] ) )
	            update_post_meta( $post_id, 'patient_name_input', wp_kses( $_POST['patient_name_input'], $allowed ) );
	        if( isset( $_POST['patient_quote_input'] ) )
	            update_post_meta( $post_id, 'patient_quote_input', wp_kses( $_POST['patient_quote_input'], $allowed ) );
	        if( isset( $_POST['testimonal_state_select'] ) )
	            update_post_meta( $post_id, 'testimonal_state_select', wp_kses( $_POST['testimonal_state_select'], $allowed ) );
	    }
	    // end of testimonial_meta_box_save ~~~>
