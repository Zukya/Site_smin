<?php
class JobsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    /*
     * Fonction d'indexation
     * 
     */
    public function index() {
         $this->set('jobs', $this->Job->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid job'));
        }

        $job = $this->Job->findById($id);
        if (!$job) {
            throw new NotFoundException(__('Invalid job'));
        }
        $this->set('job', $job);
    }
    
    public function add() {
    	if ($this->request->is('Post')) {
    		$this->Job->create();
    		if ($this->Job->save($this->request->data)) {
    			$this->Session->setFlash(__('Your job has been saved.'));
    			return $this->redirect(array('action' => 'index'));
    		}
    		$this->Session->setFlash(__('Unable to add your job.'));
    	}
    }
    
	public function edit($id = null) {
	    if (!$id) {
	        throw new NotFoundException(__('Invalid job'));
	    }
	
	    $job = $this->Job->findById($id);
	    if (!$job) {
	        throw new NotFoundException(__('Invalid job'));
	    }
	
	    if ($this->request->is(array('job', 'put'))) {
	        $this->Job->id = $id;
	        if ($this->Job->save($this->request->data)) {
	            $this->Session->setFlash(__('Your job has been updated.'));
	            return $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('Unable to update your job.'));
	    }
	
	    if (!$this->request->data) {
	        $this->request->data = $job;
	    }
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Job->delete($id)) {
			$this->Session->setFlash(__('The job with id: %s has been deleted.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}
	}

    
    
    
    
    
    
}