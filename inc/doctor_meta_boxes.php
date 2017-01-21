<?php

	add_action('add_meta_boxes', 'add_contact_meta');
	    function add_contact_meta(){
	        add_meta_box('doc_contact', 'Contact Information', 'dislpay_doc_contact_meta', 'doctors', 'normal', 'high');
	    }
	    function dislpay_doc_contact_meta( $post ){
	        global $post;
	        $values = get_post_custom( $post->ID );
	        wp_nonce_field( 'doc_meta_box_nonce', 'meta_box_nonce' );
	        $doc_name_txt    = isset( $values['doc_full_name_input'] ) ? esc_attr( $values['doc_full_name_input'][0] ) : '';
	        $doc_addr_txt    = isset( $values['doc_addr_input'] ) ? esc_attr( $values['doc_addr_input'][0] ) : '';
	        $doc_city_txt    = isset( $values['doc_addr_input'] ) ? esc_attr( $values['doc_addr_input'][0] ) : '';
	        $doc_state_txt   = isset( $values['doc_state_select'] ) ? esc_attr( $values['doc_state_select'][0] ) : '';
	        $doc_zip_txt     = isset( $values['doc_zip_input'] ) ? esc_attr( $values['doc_zip_input'][0] ) : '';
	        $doc_phone_txt   = isset( $values['doc_phone_input'] ) ? esc_attr( $values['doc_phone_input'][0] ) : '';
	        $doc_map_txt     = isset( $values['doc_map_input'] ) ? esc_attr( $values['doc_map_input'][0] ) : '';
	        $doc_email_txt   = isset( $values['doc_email_input'] ) ? esc_attr( $values['doc_email_input'][0] ) : '';
	        ?>
	        
	        <div class="meta-wrapper">
	            <label for="doc_full_name_input">Full Name:</label><br />
	            <input type="text" class="input" name="doc_full_name_input" id="doc_full_name_input" placeholder="John Smith" value="<?php echo $doc_name_txt; ?>" />
	        </div>

	        <div class="meta-wrapper">
	            <label for="doc_email_input">Email:</label><br />
	            <input type="email" class="input" name="doc_email_input" id="doc_email_input" placeholder="John@example.com" value="<?php echo $doc_email_txt; ?>" />
	        </div>

	        <div class="meta-wrapper">
	            <label for="doc_addr_input">Address:</label><br />
	            <input type="text" class="input" name="doc_addr_input" id="doc_addr_input" placeholder="123 Main Street Suite 2" value="<?php echo $doc_addr_txt; ?>" />
	        </div>

	        <div class="meta-wrapper">
	            <label for="doc_city_input">City:</label><br />
	            <input type="text" class="input" name="doc_city_input" id="doc_city_input" placeholder="New York" value="<?php echo $doc_city_txt; ?>" />
	        </div>

	        <div class="meta-wrapper">
	            <label for="doc_state_select">State:</label><br />
	            <select name="doc_state_select" id="doc_state_select">
	                <option value="Alabama" <?php selected( $doc_state_txt, 'Alabama' ); ?>>Alabama</option>
	                <option value="Alaska" <?php selected( $doc_state_txt, 'Alaska' ); ?>>Alaska</option>
	                <option value="Arizona" <?php selected( $doc_state_txt, 'Arizona' ); ?>>Arizona</option>
	                <option value="Arkansas" <?php selected( $doc_state_txt, 'Arkansas' ); ?>>Arkansas</option>
	                <option value="California" <?php selected( $doc_state_txt, 'California' ); ?>>California</option>
	                <option value="Colorado" <?php selected( $doc_state_txt, 'Colorado' ); ?>>Colorado</option>
	                <option value="Connecticut" <?php selected( $doc_state_txt, 'Connecticut' ); ?>>Connecticut</option>
	                <option value="Delaware" <?php selected( $doc_state_txt, 'Delaware' ); ?>>Delaware</option>
	                <option value="Florida" <?php selected( $doc_state_txt, 'Florida' ); ?>>Florida</option>
	                <option value="Georgia" <?php selected( $doc_state_txt, 'Georgia' ); ?>>Georgia</option>
	                <option value="Hawaii" <?php selected( $doc_state_txt, 'Hawaii' ); ?>>Hawaii</option>
	                <option value="Idaho" <?php selected( $doc_state_txt, 'Idaho' ); ?>>Idaho</option>
	                <option value="Illinois" <?php selected( $doc_state_txt, 'Illinois' ); ?>>Illinois</option>
	                <option value="Indiana" <?php selected( $doc_state_txt, 'Indiana' ); ?>>Indiana</option>
	                <option value="Iowa" <?php selected( $doc_state_txt, 'Iowa' ); ?>>Iowa</option>
	                <option value="Kansas" <?php selected( $doc_state_txt, 'Kansas' ); ?>>Kansas</option>
	                <option value="Kentucky" <?php selected( $doc_state_txt, 'Kentucky' ); ?>>Kentucky</option>
	                <option value="Louisiana" <?php selected( $doc_state_txt, 'Louisiana' ); ?>>Louisiana</option>
	                <option value="Maine" <?php selected( $doc_state_txt, 'Maine' ); ?>>Maine</option>
	                <option value="Maryland" <?php selected( $doc_state_txt, 'Maryland' ); ?>>Maryland</option>
	                <option value="Massachusetts" <?php selected( $doc_state_txt, 'Massachusetts' ); ?>>Massachusetts</option>
	                <option value="Michigan" <?php selected( $doc_state_txt, 'Michigan' ); ?>>Michigan</option>
	                <option value="Minnesota" <?php selected( $doc_state_txt, 'Minnesota' ); ?>>Minnesota</option>
	                <option value="Mississippi" <?php selected( $doc_state_txt, 'Mississippi' ); ?>>Mississippi</option>
	                <option value="Missouri" <?php selected( $doc_state_txt, 'Missouri' ); ?>>Missouri</option>
	                <option value="Montana" <?php selected( $doc_state_txt, 'Montana' ); ?>>Montana</option>
	                <option value="Nebraska" <?php selected( $doc_state_txt, 'Nebraska' ); ?>>Nebraska</option>
	                <option value="Nevada" <?php selected( $doc_state_txt, 'Nevada' ); ?>>Nevada</option>
	                <option value="New Hampshire" <?php selected( $doc_state_txt, 'New Hampshire' ); ?>>New Hampshire</option>
	                <option value="New Jersey" <?php selected( $doc_state_txt, 'New Jersey' ); ?>>New Jersey</option>
	                <option value="New Mexico" <?php selected( $doc_state_txt, 'New Mexico' ); ?>>New Mexico</option>
	                <option value="New York" <?php selected( $doc_state_txt, 'New York' ); ?>>New York</option>
	                <option value="North Carolina" <?php selected( $doc_state_txt, 'North Carolina' ); ?>>North Carolina</option>
	                <option value="North Dakota" <?php selected( $doc_state_txt, 'North Dakota' ); ?>>North Dakota</option>
	                <option value="Ohio" <?php selected( $doc_state_txt, 'Ohio' ); ?>>Ohio</option>
	                <option value="Oklahoma" <?php selected( $doc_state_txt, 'Oklahoma' ); ?>>Oklahoma</option>
	                <option value="Oregon" <?php selected( $doc_state_txt, 'Oregon' ); ?>>Oregon</option>
	                <option value="Pennsylvania" <?php selected( $doc_state_txt, 'Pennsylvania' ); ?>>Pennsylvania</option>
	                <option value="Rhode Island" <?php selected( $doc_state_txt, 'Rhode Island' ); ?>>Rhode Island</option>
	                <option value="South Carolina" <?php selected( $doc_state_txt, 'South Carolina' ); ?>>South Carolina</option>
	                <option value="South Dakota" <?php selected( $doc_state_txt, 'South Dakota' ); ?>>South Dakota</option>
	                <option value="Tennessee" <?php selected( $doc_state_txt, 'Tennessee' ); ?>>Tennessee</option>
	                <option value="Texas" <?php selected( $doc_state_txt, 'Texas' ); ?>>Texas</option>
	                <option value="Utah" <?php selected( $doc_state_txt, 'Utah' ); ?>>Utah</option>
	                <option value="Vermont" <?php selected( $doc_state_txt, 'Vermont' ); ?>>Vermont</option>
	                <option value="Virginia" <?php selected( $doc_state_txt, 'Virginia' ); ?>>Virginia</option>
	                <option value="Washington" <?php selected( $doc_state_txt, 'Washington' ); ?>>Washington</option>
	                <option value="West Virginia" <?php selected( $doc_state_txt, 'West Virginia' ); ?>>West Virginia</option>
	                <option value="Wisconsin" <?php selected( $doc_state_txt, 'Wisconsin' ); ?>>Wisconsin</option>
	                <option value="Wyoming" <?php selected( $doc_state_txt, 'Wyoming' ); ?>>Wyoming</option>
	            </select>
	        </div>

	        <div class="meta-wrapper">
	            <label for="doc_zip_input">Zip Code:</label><br />
	            <input type="text" class="input" name="doc_zip_input" id="doc_zip_input" placeholder="10019" value="<?php echo $doc_zip_txt; ?>" />
	        </div>

	        <div class="meta-wrapper">
	            <label for="doc_phone_input">Phone Number:</label><br />
	            <input type="text" class="input" name="doc_phone_input" id="doc_phone_input" placeholder="1-347-493-3944" value="<?php echo $doc_phone_txt; ?>" />
	        </div>

	        <div class="meta-wrapper">
	            <label for="doc_map_input">Google Maps:</label><br />
	            <input type="text" class="input" name="doc_map_input" id="doc_map_input" placeholder="<iframe src='https://www.google.com/maps/embed?sampleMap374639' frameborder='0'></iframe>" value="<?php echo $doc_map_txt; ?>" />
	        </div>

	        <div class="meta-wrapper">
	            <label for="doc_map_input">Google Maps:</label><br />
	            <div><?php echo get_post_meta($post->ID, 'doc_map_input', true); ?></div>
	        </div>

	        <?php 
	    }
	    // end of dislpay_doc_contact_meta

	    
	    add_action('add_meta_boxes', 'add_edu_meta');
	    function add_edu_meta(){
	        add_meta_box('doc_edu', 'Education Summary', 'dislpay_doc_edu_meta', 'doctors', 'normal', 'high');
	    }
	    function dislpay_doc_edu_meta( $post ){
	        global $post;
	        $values = get_post_custom( $post->ID );
	        $doc_edu_txt = isset( $values['doc_edu_input'] ) ? esc_attr( $values['doc_edu_input'][0] ) : '';
	        ?>

	        <div class="meta-wrapper">
	            <label for="doc_edu_input">Background:</label><br />
	            <textarea name="doc_edu_input" id="doc_edu_input" placeholder="Enter background here..."><?php echo $doc_edu_txt; ?></textarea>
	        </div>

	        <?php 
	    }
	    // end of dislpay_doc_edu_meta

	    add_action( 'save_post', 'doc_meta_box_save' );
	    function doc_meta_box_save( $post_id )
	    {
	        if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	        if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'doc_meta_box_nonce' ) ) return;
	        if( !current_user_can( 'edit_post' ) ) return;
	        $allowed = array();
	        if( isset( $_POST['doc_edu_input'] ) )
	            update_post_meta( $post_id, 'doc_edu_input', wp_kses( $_POST['doc_edu_input'], $allowed ) );
	        if( isset( $_POST['doc_full_name_input'] ) )
	            update_post_meta( $post_id, 'doc_full_name_input', wp_kses( $_POST['doc_full_name_input'], $allowed ) );
	        if( isset( $_POST['doc_addr_input'] ) )
	            update_post_meta( $post_id, 'doc_addr_input', wp_kses( $_POST['doc_addr_input'], $allowed ) );
	        if( isset( $_POST['doc_city_input'] ) )
	            update_post_meta( $post_id, 'doc_city_input', wp_kses( $_POST['doc_city_input'], $allowed ) );
	        if( isset( $_POST['doc_state_select'] ) )
	            update_post_meta( $post_id, 'doc_state_select', wp_kses( $_POST['doc_state_select'], $allowed ) );
	        if( isset( $_POST['doc_zip_input'] ) )
	            update_post_meta( $post_id, 'doc_zip_input', wp_kses( $_POST['doc_zip_input'], $allowed ) );
	        if( isset( $_POST['doc_phone_input'] ) )
	            update_post_meta( $post_id, 'doc_phone_input', wp_kses( $_POST['doc_phone_input'], $allowed ) );
	        if( isset( $_POST['doc_map_input'] ) )
	            update_post_meta( $post_id, 'doc_map_input', wp_kses( $_POST['doc_map_input'], array(
	                'iframe' => array(
	                    'src' => array(),
	                    'frameborder' => array()
	                    )
	                ) ) );
	        if( isset( $_POST['doc_email_input'] ) )
	            update_post_meta( $post_id, 'doc_email_input', wp_kses( $_POST['doc_email_input'], $allowed ) );
	    }
	    // end of doc_meta_box_save ~~~>

	    