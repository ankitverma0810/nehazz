<?php
App::uses('AppController', 'Controller');

class SpecialitiesController extends AppController {

	public $uses = array('Speciality', 'Page', 'Detail', 'Menu');
	public $components = array('Paginator');

	public function index() {
		$detail = $this->Detail->find('first');
		$page = $this->Page->find('first', array('conditions' => array('id' => 3)));
		$this->seo($page['Page']['id']);
		$this->menus();
		$this->Speciality->recursive = 0;
		$specialities = $this->Speciality->find('all', array('status_id' => 1));
		$this->set(compact('specialities', 'page', 'detail'));
	}

	public function seo($id=null) {
		$page = $this->Page->find('first', array('conditions' => array('id' => $id)));
		$page_title = $page['Page']['page_title'];
		$meta_keywords = $page['Page']['meta_keywords'];
		$meta_description = $page['Page']['meta_description'];
		$this->set(compact('page_title', 'meta_keywords', 'meta_description'));
	}

	public function menus() {
		$menus = $this->Menu->find('all', array('conditions' => array('Menu.status_id' => 1, 'Menu.parent_id' => NULL), 'fields' => array('id', 'title', 'controller', 'action')));
		foreach($menus as $key => $value) {
			$find = $this->Menu->find('all', array('conditions' => array('Menu.parent_id' => $value['Menu']['id'], 'Menu.status_id' => 1), 'fields' => array('id', 'title', 'controller', 'action')));
			if($find) {
				$menus[$key]['childs'] = $find;
			} else {
				$menus[$key]['childs'] = '';	
			}
		}
		$this->set(compact('menus'));
	}

	public function setstatus($id = null, $status = null) {
		$this->layout = 'ajax';
		$this->Speciality->id = $id;
		if (!$this->Speciality->exists()) {
			throw new NotFoundException(__('Invalid Speciality'));
		}
		$this->Speciality->save(array('status_id' => $status) );
		echo ($status);
        exit;
	}

	public function admin_index() {
		$this->Speciality->recursive = 0;
		$this->set('specialities', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		if (!$this->Speciality->exists($id)) {
			throw new NotFoundException(__('Invalid speciality'));
		}
		$options = array('conditions' => array('Speciality.' . $this->Speciality->primaryKey => $id));
		$this->set('speciality', $this->Speciality->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Speciality->create();
			if ($this->Speciality->save($this->request->data)) {
				$this->Session->setFlash(__('The speciality has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The speciality could not be saved. Please, try again.'));
			}
		}
		$statuses = $this->Speciality->Status->find('list');
		$this->set(compact('statuses'));
	}

	public function admin_edit($id = null) {
		if (!$this->Speciality->exists($id)) {
			throw new NotFoundException(__('Invalid speciality'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Speciality->save($this->request->data)) {
				$this->Session->setFlash(__('The speciality has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The speciality could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Speciality.' . $this->Speciality->primaryKey => $id));
			$this->request->data = $this->Speciality->find('first', $options);
		}
		$statuses = $this->Speciality->Status->find('list');
		$this->set(compact('statuses'));
	}

	public function admin_delete($id = null) {
		$this->Speciality->id = $id;
		if (!$this->Speciality->exists()) {
			throw new NotFoundException(__('Invalid speciality'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Speciality->delete()) {
			$this->Session->setFlash(__('The speciality has been deleted.'));
		} else {
			$this->Session->setFlash(__('The speciality could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
