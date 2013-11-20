<?php
class Job extends AppModel {
	public $validate = array(
	        'title' => array(
	            'rule' => 'notEmpty'
	),
	        'content' => array(
	            'rule' => 'notEmpty',
	            'message' => 'Obligatoire'
	),
			'firm' => array(
		            'rule' => 'notEmpty'
	),
			'contract' => array(
		            'rule' => 'notEmpty'
	)	
	);
}