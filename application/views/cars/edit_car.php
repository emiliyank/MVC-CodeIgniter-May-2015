<?php

	echo validation_errors();

	echo form_open("cars/update_car/$car[id]");
	echo form_hidden('car_id', $car['id']);


	echo form_label('Brand:', 'brand');
	echo form_input('brand', $car['brand']);
	echo '<br/>';

	echo form_label('Model:', 'model');
	echo form_input('model', $car['model']);
	echo '<br/>';

	echo form_label('Year:', 'year_created');
	echo form_input('year_created', $car['year_created']);
	echo '<br/>';

	echo form_label('Price:', 'price');
	echo form_input('price', $car['price']);
	echo '<br/>';

	echo form_label('Category (TODO-select):', 'category');
	echo form_input('category', $car['category']);
	echo '<br/>';

	echo form_submit('update', 'Update');

?>