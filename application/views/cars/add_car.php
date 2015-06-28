<?php

	echo validation_errors();

	echo form_open('cars/submit_car');

	echo form_label('Brand:', 'brand');
	echo form_input('brand', set_value('brand'));
	echo '<br/>';

	echo form_label('Model:', 'model');
	echo form_input('model', set_value('model'));
	echo '<br/>';

	echo form_label('Year:', 'year_created');
	echo form_input('year_created', set_value('year_created'));
	echo '<br/>';

	echo form_label('Price:', 'price');
	echo form_input('price', set_value('price'));
	echo '<br/>';

	echo form_label('Category:', 'category');
	echo form_dropdown('category', $all_categories);
	echo '<br/>';

	echo form_submit('save', 'Save');
?>