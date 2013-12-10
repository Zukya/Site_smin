<?php

/**
 * Controller des Posts.
 * @author TiDJ
 *
 */
class PostsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session','Js');
    public $components = array('Session','Paginator','RequestHandler');
    public $paginate = array(
        'limit' => 4,
        'order' => array(
            'Post.created' => 'desc'
        ),  
        'update' => '#content',
        'evalScripts' => true
    );
    
    /*
     * Fonction d'indexation
     * 
     * EDIT : Besoin de voir pour une pagination en AJAX
     * 
     * Ajouter dans le $paginate pour AJAX :
     * 'update' => '#content','evalScripts' => true
     * 
     */
    public function index() {
    	$this->Paginator->settings = $this->paginate;
    	$posts = $this->Paginator->paginate('Post');
    	$this->set('posts', $posts);
    }
    
     /*
     * Fonction de recherche
     * 
     * EDIT : Besoin de voir pour une pagination en AJAX
     * 
     * Ajouter dans le $paginate pour AJAX :
     * 'update' => '#content','evalScripts' => true
     * 
     */
	public function seek($word = null) {
    	//if ($this->request->is('post')) {
    	if (isset($_GET['word']))
    		$word = $_GET['word'];
    		$this->Paginator->settings = array('conditions' => array(
            array('Post.title LIKE','Post.fname LIKE','Post.name LIKE') => '%'.$word.'%'),
            'limit' => 4,
            'order' => array('Post.created' => 'desc'));


//                'Post.title LIKE' => '%'.$word.'%'),'limit' => 4,'order' => array('Post.created' => 'desc'));

    		$posts = $this->Paginator->paginate('Post');
    		$this->set('posts', $posts);
    	//}
    }

    
     /*
     * Fonction de vue unique d'un article
     */
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }

    /*
     * Fonction d'ajout d'un article
     */
    public function add() {
    	if ($this->request->is('post')) {
            $this->Post->create();
	        if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('Votre article a été ajouté.'));
                return $this->redirect(array('action' => 'index'));
            }
             $this->Session->setFlash(__('Nous sommes dans l\'incapacité d\'ajouter votre article.'));
        }
            //$this->Session->setFlash(__('Probleme majeur durant la creation de l\'article.'));
    }
    /*
    public function add() {
        if ($this->request->is('post')) {
            //$this->request->data['Post']['image'] = $this->request->data['Post']['image_file'];
            $this->Post->create();
            //debug($this->request->data);
            //die();
            //debug($this->request->data);
            //die();
           // if (!empty($this->request->data)) {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('Votre article a été ajouté.'));
                return $this->redirect(array('action' => 'index'));
            }
            else {    
                $this->Session->setFlash(__('Nous sommes dans l\'incapacité d\'ajouter votre article.'));
            }
        }
            //$this->Session->setFlash(__('Probleme majeur durant la creation de l\'article.'));
    }
    */
    /*
     * Fonction d'edition d'un article
     */
	public function edit($id = null) {
	    if (!$id) {
	        throw new NotFoundException(__('Invalid post'));
	    }
	
	    $post = $this->Post->findById($id);
	    if (!$post) {
	        throw new NotFoundException(__('Invalid post'));
	    }
	
	    if ($this->request->is(array('post', 'put'))) {
	        $this->Post->id = $id;
	        if ($this->Post->save($this->request->data)) {
	            $this->Session->setFlash('Votre article a ete mis a jour', 'flash_custom');
	            return $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('Unable to update your post.'));
	    }
	
	    if (!$this->request->data) {
	        $this->request->data = $post;
	    }
	}
	
	/*
     * Fonction de suppression d'un article
     */
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Post->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deleted.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}
	}  
}