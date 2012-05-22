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
          'plugin' => 'CcNyancat',
          'controller' => 'Chart',
          'action' => 'index',
          'class' => '',
          'caption' => 'Nyan Down Chart',
          'params' => 'project_id',
          '_allowed' => true // for bypassing permmission system.
  )
);
// make sure put new route setting which includes project_id
CakePlugin::loadAll(
	array(
    'CcNyancat' => array('routes' => true)
	)
);

/**
 * Injecting specific template before or after a templete.
 */
$hookContainer = ClassRegistry::getObject('HookContainer');
$hookContainer->registerElementHook(
	'issues/relations', // target element name.
	'../../Plugin/CcNyancat/View/Element/nyancat', // additional template you want to inject.
	false // it should be true when you want to inject before the target template.
);

/**
 * register plugin information into container
 */
$pluginContainer = ClassRegistry::getObject('PluginContainer');
$pluginContainer->installed('cc_nyancat','0.3');
