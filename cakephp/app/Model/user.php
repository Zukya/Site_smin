<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class User extends AppModel {
    public $hasMany = array(
        'Post' => array(
            'className' => 'Post',
    		'foreignKey' => 'user_id',
            //'conditions' => array('Job.approved' => '1'),
            'order' => 'Post.created DESC',
        )
    );

	public $validate = array(
        'name' => array(
			'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A name is required'
                ),
            'rule' => array('minLength', '3'),
            'message' => 'Minimum 3 characters long'    
        ),
        'fname'=> array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A first name is required'
                ),
            'rule' => array('minLength', '3'),
            'message' => 'Minimum 3 characters long'    
        ),

        	'birthdate'=> array(
   			/*'rule'       => array('date', 'dMy'),*/
         	'allowEmpty' => true
        ),

       
        
       


        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            ),
            'rule' => array('minLength', '3'),
            'message' => 'Minimum 3 characters long'
            ),
        'username'=> array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'An email address is required'
            ),
            'rule' => array('email'),
            'message' => 'You must enter a valid email address',
        ),	
        'city' => array(
        	'allowEmpty' => true,
        	'rule' => array('minLength', '3'),
        'message' => 'Minimum 3 characters long'
        ),
        /*'skills' => array(
        	'allowEmpty' =>true
        ),
        'context' => array(
        	'allowEmpty' => true
        ),
        'hobbies' => array(
        	'allowEmpty' => true
        ),*/
        'avatar' => array (
        	'allowEmpty' => true,
        	'rule' => 'url'
        )
        	
        	
        	   
        
    );
    

public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $passwordHasher = new SimplePasswordHasher();
        $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
    }
    return true;
}
	
}