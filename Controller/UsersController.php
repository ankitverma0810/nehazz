<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

	public $components = array('Paginator');

	public function admin_login() {
		if( $this->Auth->loggedIn() ){
			$this->redirect(array('controller' => 'dashboard', 'action' => 'index'));
		} else {
			if( $this->request->is('post') ) {
				if($this->Auth->login()) {
					$this->redirect(array('controller' => 'dashboard', 'action' => 'index'));
				} else {
					$this->Session->setFlash(__('email or password is incorrect'), 'default', array(), 'auth');
					$this->layout = 'login';
				}
			} else {
				$this->layout = 'login';
			}
		}
	}
	

	public function admin_logout() {
		$this->redirect($this->Auth->logout());
	}

	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->request->data['User']['password'] = $this->Auth->password($this->request->data['User']['password']);
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$statuses = $this->User->Status->find('list');
		$this->set(compact('statuses'));
	}

	public function admin_edit($id = null) {
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$user = $this->User->find('first', $options);
		if($this->request->is('post') || $this->request->is('put')) {
			if ($user['User']['password'] == $this->Auth->password($this->request->data['User']['password'])) {
				$this->request->data['User']['password'] = $this->Auth->password($this->request->data['User']['new_password']);
				if($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('Password Change Successfully'), 'default', array(), 'auth');
					$this->redirect(array('action' => 'logout'));
				} else {
					$this->Session->setFlash(__('Password could not be saved. Please try again.'));
				}
			} else {
				$this->Session->setFlash(__('Old Password did not match. Please try again.'));
			}
		} else {
			$user['User']['password'] = '';
			$this->request->data = $user;
		}
		$statuses = $this->User->Status->find('list');
		$this->set(compact('statuses'));
	}

	public function admin_forgot_password() {
		if($this->request->is('post') || $this->request->is('put')) {
			$user = $this->User->find('first', array('conditions' => array('email' => $this->request->data['User']['email'], 'User.status_id' => 1)));
			if($user) {
				$var = array('email' => $this->request->data['User']['email'],
						 'hash' => $user['User']['password']);
				if($this->Email->sendemail($var , 'forgot_password', 'Nehazz Forgot Password Form', $this->request->data['User']['email'])){
					$this->Session->setFlash(__('Please check the registered email-id for more information regarding changing your password.'));
					return $this->redirect(array('controller' => 'users', 'action' => 'forgot_password'));
				}
			} else {
				$this->Session->setFlash(__('Invaild Email Id.'));
				return $this->redirect(array('controller' => 'users', 'action' => 'forgot_password'));
			}
		} else {
			$this->layout = 'login';
		}
	}

	public function admin_change_password($hash=null) {
		if($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['User']['password'] = $this->Auth->password($this->request->data['User']['password']);
			if($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Password Change Successfully'), 'default', array(), 'auth');
					$this->redirect(array('action' => 'login'));
			} else {
				$this->Session->setFlash(__('Some error occured. Please try again later!!!'));
			}
		}
		$user = $this->User->find('first', array('conditions' => array('password' => $hash, 'status_id' => 1)));
		if(!$user) {
			return $this->redirect(array('controller' => 'users', 'action' => 'login'));
		} else {
			$user['User']['password'] = '';
			$this->request->data = $user;
		}
		$this->layout = 'login';
	}
}