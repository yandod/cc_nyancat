<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$menu_container = ClassRegistry::getObject('MenuContainer');
$menu_container->addTopMenu(
	array(
		'url' => '/cc_nyancat/nyan/index',
		'class' => 'nyan-cat',
		'caption' => 'Nyan Cat',
		'logged' => false,
		'admin' => false
	)
);
