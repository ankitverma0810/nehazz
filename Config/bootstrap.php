<?php

// Setup a 'default' cache configuration for use in the application.
Cache::config('default', array('engine' => 'File'));

Configure::write('Dispatcher.filters', array(
	'AssetDispatcher',
	'CacheDispatcher'
));

App::uses('CakeLog', 'Log');
CakeLog::config('debug', array(
	'engine' => 'File',
	'types' => array('notice', 'info', 'debug'),
	'file' => 'debug',
));

CakeLog::config('error', array(
	'engine' => 'File',
	'types' => array('warning', 'error', 'critical', 'alert', 'emergency'),
	'file' => 'error',
));

//site Constants
define( 'SITE_NAME', 'Nehazz');
define( 'SITE_EMAIL', 'ankitverma_0810@yahoo.co.in');
