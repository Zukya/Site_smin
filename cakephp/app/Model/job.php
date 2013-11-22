<?php
class Job extends AppModel {
	public $validate = array(
	        'title' => array(
	            'rule' => 'notEmpty',
				'message' => 'Obligatoire'
	),
	        'content' => array(
	            'rule' => 'notEmpty',
	            'message' => 'Obligatoire'
	),
			'firm' => array(
		            'rule' => 'notEmpty',
		        'message' => 'Obligatoire'
	),
			'contract' => array(
		            'rule' => 'notEmpty',
	'message' => 'Obligatoire'
	)	
	);
}