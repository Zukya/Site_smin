<?php
class Post extends AppModel {

	 public $belongsTo = array(
        'User' => array(
            'className' => 'User',
			'foreignKey' => 'user_id'
        )
    );

    public $actsAs = array(
        'Upload.Upload' => array(
            'fields' => array(
            'image' => 'img/posts/:id'
            )
        )
    );    
    public $validate = array(
        'image_file' => array(
            'rule' => array('fileExtension', array('jpg','png')),
            'message' => 'blbal',
            'allowEmpty' => true,
        ),
        'title' => array(
            'rule' => 'notEmpty',
            'message' => 'Le titre ne peut etre vide'
        ),
        'content' => array(
            'rule' => 'notEmpty',
            'message' => 'Le contenu ne peut etre vide'
        )
    );

}
// 'message' => 'Le format ne correspond pas au format accepte'