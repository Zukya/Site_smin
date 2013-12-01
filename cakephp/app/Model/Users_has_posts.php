<?php
class Users_has_posts extends AppModel {
	public $validate = array(
	        'users_id' => array(
	            'rule' => 'notEmpty',
				'message' => 'Obligatoire'
	),
	        'posts_id' => array(
	            'rule' => 'notEmpty',
	            'message' => 'Obligatoire'
	)	
	);
}