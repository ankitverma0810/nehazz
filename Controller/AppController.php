<?php
class AppController extends Controller {	
	public $components = array(
								'Session','Cookie','Email',
								'Auth' => array(
									'authenticate' => array(
										'Form' => array(
											'fields' => array('username' => 'email'),
											'scope' => array('User.status_id' => 1)
										)
									)
								)
						 );
	
	public function beforeFilter() {
		if( isset($this->params['admin']) && $this->params['admin'] ){
			$this->layout = 'default';
			$this->Auth->allow('admin_login', 'admin_forgot_password', 'admin_change_password');
		} else {
			$this->layout = 'frontend';
			$this->Auth->allow();
		}
	}
	
	public function beforeRender() {
		$this->response->disableCache();
	}
}