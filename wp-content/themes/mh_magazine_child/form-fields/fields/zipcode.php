<label class="customizer-field" for="<?php echo $field_name ?>"><?php echo $field_info['description'] ?><?php echo $required_label ?>
	<input type="text" name="<?php echo $field_name ?>" pattern="(\d{5}([\-]\d{4})?)" oninvalid="setCustomValidity('Please enter a 5 digit number')" onchange="try{setCustomValidity('')}catch(e){}" value="<?php echo ($post_id) ? get_field($field_name, $post_id) : '' ?>"<?php echo $required_input ?>>
</label>