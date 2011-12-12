<?php
/**
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class CcNyancatChartController extends CcNyancatAppController {

/**
 * No models required
 *
 * @var array
 * @access public
 */
	public $uses = array('Report');

	public function index() {
		$this->set('reports',$this->Report->findIssuesByAssignedTo($this->_project['Project']['id']));
	}

}