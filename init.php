<?php
/**
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$hookContainer = ClassRegistry::getObject('HookContainer');
$hookContainer->registerElementHook('issues/relations', '../../plugins/cc_nyancat/views/elements/nyancat');
$menuContainer = ClassRegistry::getObject('MenuContainer');
$menuContainer->addTopMenu(
	array(
		'url' => '/cc_nyancat/nyan/index',
		'class' => 'nyan-cat',
		'caption' => 'Nyan Cat',
		'logged' => false,
		'admin' => false
	)
);
$menuContainer->addProjectMenu(
  'nyancat',
  array(
          'plugin' => 'cc_nyancat',
          'controller' => 'cc_nyancat_chart',
          'action' => 'index',
          'class' => '',
          'caption' => 'Nyan Down Chart',
          'params' => 'project_id',
          '_allowed' => true
  )
);
App::import('Core','Router');
Router::connect('/projects/:project_id/nyanchart/:action', array('plugin' => 'cc_nyancat','controller' => 'cc_nyancat_chart'));
