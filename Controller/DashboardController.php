<?php	
	class DashboardController extends AppController {
		public $uses = 'Detail';

		public function admin_index(){
			if ($this->request->is(array('post', 'put'))) {
				if ($this->Detail->save($this->request->data)) {
					$this->Session->setFlash(__('Details has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('Details could not be saved. Please, try again.'));
				}
			} else {
				$this->request->data = $this->Detail->find('first');
			}
		}
	}
?>