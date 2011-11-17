<?php
/**
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
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
