<?php
App::uses('AppController', 'Controller');

class TestimonialsController extends AppController {

	public $components = array('Paginator');

	public function setstatus($id = null, $status = null) {
		$this->layout = 'ajax';
		$this->Testimonial->id = $id;
		if (!$this->Testimonial->exists()) {
			throw new NotFoundException(__('Invalid Testimonial'));
		}
		$this->Testimonial->save(array('status_id' => $status) );
		echo ($status);
        exit;
	}

	public function admin_index() {
		$this->Testimonial->recursive = 0;
		$this->set('testimonials', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		if (!$this->Testimonial->exists($id)) {
			throw new NotFoundException(__('Invalid testimonial'));
		}
		$options = array('conditions' => array('Testimonial.' . $this->Testimonial->primaryKey => $id));
		$this->set('testimonial', $this->Testimonial->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Testimonial->create();
			if ($this->Testimonial->save($this->request->data)) {
				$this->Session->setFlash(__('The testimonial has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The testimonial could not be saved. Please, try again.'));
			}
		}
		$statuses = $this->Testimonial->Status->find('list');
		$this->set(compact('statuses'));
	}

	public function admin_edit($id = null) {
		if (!$this->Testimonial->exists($id)) {
			throw new NotFoundException(__('Invalid testimonial'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Testimonial->save($this->request->data)) {
				$this->Session->setFlash(__('The testimonial has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The testimonial could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Testimonial.' . $this->Testimonial->primaryKey => $id));
			$this->request->data = $this->Testimonial->find('first', $options);
		}
		$statuses = $this->Testimonial->Status->find('list');
		$this->set(compact('statuses'));
	}

	public function admin_delete($id = null) {
		$this->Testimonial->id = $id;
		if (!$this->Testimonial->exists()) {
			throw new NotFoundException(__('Invalid testimonial'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Testimonial->delete()) {
			$this->Session->setFlash(__('The testimonial has been deleted.'));
		} else {
			$this->Session->setFlash(__('The testimonial could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
