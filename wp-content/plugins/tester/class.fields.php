<?php 

namespace tester\fields;

class Fields {
	
	public function updateHeader($value) {
		update_field('header_text', $value, 'option');
	}
}


