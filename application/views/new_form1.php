Test form
<?php
	
	echo form_open('look/submit_new_form');
		echo form_label('Player: ', 'player');
		echo form_input('player', set_value('player'));

		echo form_label('Is national player: ', 'is_national');
		$radio = array(
			'name' => 'is_national',
			'value' => 'yes'
		);
		echo form_radio($radio);
		echo 'Yes';
		$radio2 = array(
			'name' => 'is_national',
			'value' => 'no'
		);
		echo form_radio($radio2);
		echo 'No';

		echo form_submit('save', 'Add New Player');