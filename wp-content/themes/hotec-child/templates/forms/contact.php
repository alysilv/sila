<form id="contact_form" name="contact_form" method="post" action="">
    <div class="row">
        <div class="twelve columns b0">
            <div class="form-row field_text">
                <label for="contact_name">Your Name </label><em>(*)</em><br>
                <input id="contact_name" class="input_text required" type="text" value="" name ="contact_name">
            </div>
            <div class="form-row field_text">
                <label for="contact_phone">Your Phone Number </label><br>
                <input id="contact_phone" class="input_text" type="text" value="" name ="contact_phone">
            </div>
        </div>
        <div class="twelve columns b0">
            <div class="form-row field_text">
                <label for="contact_email">Your E-Mail Address </label><em>(*)</em><br>
                <input id="contact_email" class="input_text required" type="text" value="" name ="contact_email">
            </div>
            <div class="form-row field_text">
                <label for="contact_subject">Subject </label><em>(*)</em><br>
                <input id="contact_subject" class="input_text required" type="text" value="" name ="contact_subject">
            </div>
        </div>
        <div class="twelve columns b0">
            <div class="form-row field_text">
                <label for="contact_message">Message <em>(*)</em></label><br>
                <textarea id="contact_message" class="input_textarea required" type="text" value="" name ="contact_message" rows="3"></textarea>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="form-row field_submit">
        <input type="submit" value="Submit Now" id="contact_submit" class="btn">
        <span class="loading hide"><img src="<?php echo st_img('loader.gif'); ?>"></span>
    </div>
    <div class="form-row notice_bar">
        <p class="notice notice_ok hide"><?php _e('Thank you for contacting us. We will get back to you as soon as possible.','smooththemes'); ?></p>
        <p class="notice notice_error hide"><?php _e('Due to an unknown error, your form was not submitted. Please resubmit it or try later.','smooththemes'); ?></p>
    </div>
    <input type="hidden" name="to_email" value="<?php echo esc_attr($data['to_email']); ?>" />
</form> <!-- END #contact_form -->