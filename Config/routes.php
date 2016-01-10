<?php

	Router::connect('/', array('controller' => 'pages', 'action' => 'index'));

	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'view'));

	Router::connect('/gallery', array('controller' => 'Galleries', 'action' => 'index'));

	Router::connect(
		'/gallery/:category',
		array('controller' => 'galleries', 'action' => 'view'),
		array('pass' => array('category'))
	);

	Router::connect('/admin', array('controller' => 'dashboard', 'action' => 'index', 'admin' => 1));

	CakePlugin::routes();

	require CAKE . 'Config' . DS . 'routes.php';
