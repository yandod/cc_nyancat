<?php
Router::connect(
	'/projects/:project_id/nyanchart/:action',
	array(
		'plugin' => 'CcNyancat',
		'controller' => 'Chart'
	)
);
