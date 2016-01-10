<?php
	App::uses('CakeEmail', 'Network/Email');	

	class EmailComponent extends Component{

		public function sendemail($vars=array(), $template, $subject, $to=null) {
			//loading smtp details from database
			$detail = ClassRegistry::init('Detail');
			$config = $detail->find('first');
			//loading cake email and sending email
			$Email  = new CakeEmail();
			$Email->config(array('transport' => 'Smtp', 'host' => $config['Detail']['host'], 'port' => $config['Detail']['port'], 'username' => $config['Detail']['username'], 'password' => $config['Detail']['password']));
			$Email->viewVars($vars);
			$Email->template($template, 'default');
			$Email->emailFormat('html');
			$Email->from(array($config['Detail']['email'] => SITE_NAME));
			if($to != null){
				$Email->to($to);
			} else {
				$Email->to($config['Detail']['email']);
			}
			$Email->subject($subject);
			if($Email->send()) {
				return true;
			}	
		}
	}
?>