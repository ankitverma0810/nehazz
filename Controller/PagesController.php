<?php
App::uses('AppController', 'Controller');

class PagesController extends AppController {

	public $uses = array('Page', 'Detail', 'Menu', 'Banner', 'Speciality', 'Testimonial', 'Contact');
	public $components = array('Paginator');

	public function index() {
		$detail = $this->Detail->find('first');
		$page = $this->Page->find('first', array('conditions' => array('id' => 1)));
		$banners = $this->Banner->find('all');
		$specialities = $this->Speciality->find('all', array('conditions' => array('Speciality.status_id' => 1), 'limit' => 4));
		$testimonials = $this->Testimonial->find('all', array('conditions' => array('Testimonial.status_id' => 1)));
		$this->seo($page['Page']['id']);
		$this->menus();
		$this->set(compact('page', 'detail', 'banners', 'specialities', 'testimonials'));
	}

	public function view($url = null) {
		$detail = $this->Detail->find('first');
		$page = $this->Page->find('first', array('conditions' => array('url' => $url)));
		$this->seo($page['Page']['id']);
		$this->menus();
		$this->set(compact('page', 'detail'));
		if($page['Page']['id'] == 5) {
			if ($this->request->is('post')) {
				$this->Contact->set($this->request->data);
				if($this->Contact->validates()) {
					$var = array('name' => $this->request->data['Contact']['name'],
								 'email' => $this->request->data['Contact']['email'],
								 'phone' => $this->request->data['Contact']['phone'],
								 'message' => $this->request->data['Contact']['message']);
					if($this->Email->sendemail($var , 'contact', 'Nehazz Contact Form')){
						$this->Session->setFlash(__('Thank you! Your information has been sent sucessfully.'));
						return $this->redirect(array('controller' => 'pages', 'action' => $url));
					}
				}
			}
			$this->render('contact');
		} else {	
			$this->render('view');
		}
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

	public function add() {
		if ($this->request->is('post')) {
			$this->Page->create();
			if ($this->Page->save($this->request->data)) {
				$this->Session->setFlash(__('The page has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page could not be saved. Please, try again.'));
			}
		}
	}

	public function edit($id = null) {
		if (!$this->Page->exists($id)) {
			throw new NotFoundException(__('Invalid page'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Page->save($this->request->data)) {
				$this->Session->setFlash(__('The page has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Page.' . $this->Page->primaryKey => $id));
			$this->request->data = $this->Page->find('first', $options);
		}
	}

	public function delete($id = null) {
		$this->Page->id = $id;
		if (!$this->Page->exists()) {
			throw new NotFoundException(__('Invalid page'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Page->delete()) {
			$this->Session->setFlash(__('The page has been deleted.'));
		} else {
			$this->Session->setFlash(__('The page could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function admin_index() {
		$this->Page->recursive = 0;
		$this->set('pages', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		if (!$this->Page->exists($id)) {
			throw new NotFoundException(__('Invalid page'));
		}
		$options = array('conditions' => array('Page.' . $this->Page->primaryKey => $id));
		$this->set('page', $this->Page->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->request->data['Page']['url'] = strtolower(Inflector::slug($this->request->data['Page']['title'], '-'));
			$this->Page->create();
			if ($this->Page->save($this->request->data)) {
				$this->Session->setFlash(__('The page has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page could not be saved. Please, try again.'));
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$this->Page->exists($id)) {
			throw new NotFoundException(__('Invalid page'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Page']['url'] = strtolower(Inflector::slug($this->request->data['Page']['title'], '-'));
			if ($this->Page->save($this->request->data)) {
				$this->Session->setFlash(__('The page has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Page.' . $this->Page->primaryKey => $id));
			$this->request->data = $this->Page->find('first', $options);
		}
	}

	public function admin_delete($id = null) {
		$this->Page->id = $id;
		if (!$this->Page->exists()) {
			throw new NotFoundException(__('Invalid page'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Page->delete()) {
			$this->Session->setFlash(__('The page has been deleted.'));
		} else {
			$this->Session->setFlash(__('The page could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
