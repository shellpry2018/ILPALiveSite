<label class="customizer-field" for="<?php echo $field_name ?>"><?php echo $field_info['description'] ?><?php echo $required_label ?>
	<input type="text" name="<?php echo $field_name ?>" class="phone" pattern="^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$" oninvalid="setCustomValidity('Please enter a 10 digit phone number')" onchange="try{setCustomValidity('')}catch(e){}" value="<?php echo ($post_id) ? get_field($field_name, $post_id) : '' ?>"<?php echo $required_input ?>>
</label>
