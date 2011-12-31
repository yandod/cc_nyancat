<?php
/**
 * Nyan Cat plugin for CandyCane.
 * This is an example of plugin.
 */

/**
 * Addning new link in top left menu.
 */
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

/**
 * Adding new link in porject tabs.
 */
$menuContainer->addProjectMenu(
  'nyancat',
  array(
          'plugin' => 'cc_nyancat',
          'controller' => 'cc_nyancat_chart',
          'action' => 'index',
          'class' => '',
          'caption' => 'Nyan Down Chart',
          'params' => 'project_id',
          '_allowed' => true // for bypassing permmission system.
  )
);
// make sure put new route setting which includes project_id
App::import('Core','Router');
Router::connect('/projects/:project_id/nyanchart/:action', array('plugin' => 'cc_nyancat','controller' => 'cc_nyancat_chart'));

/**
 * Injecting specific template before or after a templete.
 */
$hookContainer = ClassRegistry::getObject('HookContainer');
$hookContainer->registerElementHook(
	'issues/relations', // target element name.
	'../../plugins/cc_nyancat/views/elements/nyancat', // additional template you want to inject.
	false // it should be true when you want to inject before the target template.
);

/**
 * register plugin information into container
 */
$pluginContainer = ClassRegistry::getObject('PluginContainer');
$pluginContainer->installed('cc_nyancat','0.1');