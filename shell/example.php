<?php

require_once 'abstract.php';

class SliRx_Shell_Example extends Mage_Shell_Abstract {
	protected $_argname = array();

	public function __construct() {
		parent::__construct();
		// Time limit to infinity
		set_time_limit(0);

		Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);
	}

	// Shell script point of entry
	public function run() {
		// do something
	}

	// Usage instructions
	public function usageHelp() {
		return <<<USAGE
Usage:  php -f scriptname.php -- [options]
	--argname <argvalue>       Argument description
	help                   This help
USAGE;
	}
}

// Initialization
$shell = new SliRx_Shell_Example();
$shell->run();