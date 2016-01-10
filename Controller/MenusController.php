<?php
App::uses('AppController', 'Controller');

class MenusController extends AppController {

	public $components = array('Paginator');

	public function setstatus($id = null, $status = null) {
		$this->layout = 'ajax';
		$this->Menu->id = $id;
		if (!$this->Menu->exists()) {
			throw new NotFoundException(__('Invalid Menu'));
		}
		$this->Menu->save(array('status_id' => $status) );
		echo ($status);
        exit;
	}

	public function admin_index() {
		$this->Menu->recursive = 0;
		$this->set('menus', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		if (!$this->Menu->exists($id)) {
			throw new NotFoundException(__('Invalid menu'));
		}
		$options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
		$this->set('menu', $this->Menu->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Menu->create();
			if ($this->Menu->save($this->request->data)) {
				$this->Session->setFlash(__('The menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu could not be saved. Please, try again.'));
			}
		}
		$parents = $this->Menu->find('list', array('conditions' => array('parent_id' => NULL, 'status_id' => 1)));
		$statuses = $this->Menu->Status->find('list');
		$this->set(compact('statuses', 'parents'));
	}

	public function admin_edit($id = null) {
		if (!$this->Menu->exists($id)) {
			throw new NotFoundException(__('Invalid menu'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Menu->save($this->request->data)) {
				$this->Session->setFlash(__('The menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
			$this->request->data = $this->Menu->find('first', $options);
		}
		$parents = $this->Menu->find('list', array('conditions' => array('parent_id' => NULL, 'status_id' => 1)));

		//when we are editing main menu then that particular menu should not come in parents list//
		foreach($parents as $key => $value) {
			if($key == $id){
				unset($parents[$key]);
			}
		}
		$statuses = $this->Menu->Status->find('list');
		$this->set(compact('statuses', 'parents'));
	}

	public function admin_delete($id = null) {
		$this->Menu->id = $id;
		if (!$this->Menu->exists()) {
			throw new NotFoundException(__('Invalid menu'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Menu->delete()) {
			$this->Session->setFlash(__('The menu has been deleted.'));
		} else {
			$this->Session->setFlash(__('The menu could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
