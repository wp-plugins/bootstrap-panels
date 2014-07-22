<p>
	<label for="<?php echo $this->get_field_id('title'); ?>">Panel Heading: </label>
	<input class="widefat"
		id="<?php echo $this->get_field_id('title'); ?>"
		name="<?php echo $this->get_field_name('title'); ?>"
		value="<?php if (isset($title)) echo esc_attr($title); ?>"
	/>
</p>

<p>
	<label for="<?php echo $this->get_field_id('content'); ?>">Panel Content: </label>
	<textarea class="widefat"
		rows="5"
		id="<?php echo $this->get_field_id('content'); ?>"
		name="<?php echo $this->get_field_name('content'); ?>"><?php if (isset($content)) echo esc_attr($content); 
	?></textarea>
</p>

<p>
	<label for="<?php echo $this->get_field_id('color'); ?>">Panel Type: </label>
	<input class="widefat"
		id="<?php echo $this->get_field_id('color'); ?>"
		name="<?php echo $this->get_field_name('color'); ?>"
		value="<?php if (isset($color)) echo esc_attr($color); else { echo 'default';} ?>"
	/>
</p>

<p>
	Hint: primary, success, info, warning, danger
</p>