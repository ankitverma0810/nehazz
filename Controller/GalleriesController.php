<?php

App::uses('AppController', 'Controller');



class GalleriesController extends AppController {



	public $uses = array('Gallery', 'Category', 'Page', 'Detail', 'Menu');

	public $components = array('Paginator');



	public function index() {

		$detail = $this->Detail->find('first');

		$page = $this->Page->find('first', array('conditions' => array('id' => 4)));

		$this->seo($page['Page']['id']);

		$this->menus();

		$categories = $this->Category->find('all', array('conditions' => array('Category.status_id' => 1)));

		$this->set(compact('categories', 'detail', 'page'));

	}



	public function view($id = null) {

		$detail = $this->Detail->find('first');

		$page = $this->Page->find('first', array('conditions' => array('id' => 4)));

		$this->seo($page['Page']['id']);

		$this->menus();

		$galleries = $this->Gallery->find('all', array('conditions' => array('category_id' => $id), 'order' => array('Gallery.created' => 'DESC')));

		$this->set(compact('galleries', 'detail', 'page'));

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



	public function admin_index() {

		$this->Gallery->recursive = 0;

		$galleries = $this->Gallery->find('all');

		$this->set(compact('galleries'));

	}



	public function admin_view($id = null) {

		if (!$this->Gallery->exists($id)) {

			throw new NotFoundException(__('Invalid gallery'));

		}

		$options = array('conditions' => array('Gallery.' . $this->Gallery->primaryKey => $id));

		$this->set('gallery', $this->Gallery->find('first', $options));

	}



	public function admin_add() {

		if ($this->request->is('post')) {

			$this->Gallery->create();

			if ($this->Gallery->save($this->request->data)) {

				$this->Session->setFlash(__('The gallery has been saved.'));

				return $this->redirect(array('action' => 'index'));

			} else {

				$this->Session->setFlash(__('The gallery could not be saved. Please, try again.'));

			}

		}

		$categories = $this->Gallery->Category->find('list');

		$this->set(compact('categories'));

	}



	public function admin_edit($id = null) {

		if (!$this->Gallery->exists($id)) {

			throw new NotFoundException(__('Invalid gallery'));

		}

		if ($this->request->is(array('post', 'put'))) {

			if ($this->Gallery->save($this->request->data)) {

				$this->Session->setFlash(__('The gallery has been saved.'));

				return $this->redirect(array('action' => 'index'));

			} else {

				$this->Session->setFlash(__('The gallery could not be saved. Please, try again.'));

			}

		} else {

			$options = array('conditions' => array('Gallery.' . $this->Gallery->primaryKey => $id));

			$this->request->data = $this->Gallery->find('first', $options);

		}

		$categories = $this->Gallery->Category->find('list');

		$this->set(compact('categories'));

	}



	public function admin_delete($id = null) {

		$this->Gallery->id = $id;

		if (!$this->Gallery->exists()) {

			throw new NotFoundException(__('Invalid gallery'));

		}

		//$this->request->onlyAllow('post', 'delete');

		if ($this->Gallery->delete()) {

			$this->Session->setFlash(__('The gallery has been deleted.'));

		} else {

			$this->Session->setFlash(__('The gallery could not be deleted. Please, try again.'));

		}

		return $this->redirect(array('action' => 'index'));

	}

}

