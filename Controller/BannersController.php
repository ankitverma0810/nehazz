<?php
App::uses('AppController', 'Controller');

class BannersController extends AppController {

	public $components = array('Paginator');

	public function admin_index() {
		$this->Banner->recursive = 0;
		$this->set('banners', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		if (!$this->Banner->exists($id)) {
			throw new NotFoundException(__('Invalid banner'));
		}
		$options = array('conditions' => array('Banner.' . $this->Banner->primaryKey => $id));
		$this->set('banner', $this->Banner->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Banner->create();
			if ($this->Banner->save($this->request->data)) {
				$this->Session->setFlash(__('The banner has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banner could not be saved. Please, try again.'));
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$this->Banner->exists($id)) {
			throw new NotFoundException(__('Invalid banner'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Banner->save($this->request->data)) {
				$this->Session->setFlash(__('The banner has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banner could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Banner.' . $this->Banner->primaryKey => $id));
			$this->request->data = $this->Banner->find('first', $options);
		}
	}

	public function admin_delete($id = null) {
		$this->Banner->id = $id;
		if (!$this->Banner->exists()) {
			throw new NotFoundException(__('Invalid banner'));
		}
		//$this->request->onlyAllow('post', 'delete');
		if ($this->Banner->delete()) {
			$this->Session->setFlash(__('The banner has been deleted.'));
		} else {
			$this->Session->setFlash(__('The banner could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
