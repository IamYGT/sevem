<?php
/**
 * @package		OpenCart
 * @author		Daniel Kerr
 * @copyright	Copyright (c) 2005 - 2017, OpenCart, Ltd. (https://www.opencart.com/)
 * @license		https://opensource.org/licenses/GPL-3.0
 * @link		https://www.opencart.com
*/

/**
* Router class
*/
final class Router {
	private $registry;
	private $pre_action = array();
	private $error;
	
	/**
	 * Constructor
	 *
	 * @param	object	$route
 	*/
	public function __construct($registry) {
		$this->registry = $registry;
	}
	
	/**
	 * 
	 *
	 * @param	object	$pre_action
 	*/	
	public function addPreAction(Action $pre_action) {
		$this->pre_action[] = $pre_action;
	}

	/**
	 * 
	 *
	 * @param	object	$action
	 * @param	object	$error
 	*/		
	public function dispatch(Action $action, Action $error) {
		$this->error = $error;

		foreach ($this->pre_action as $pre_action) {
			$result = $this->execute($pre_action);

			if ($result instanceof Action) {
				$action = $result;

				break;
			}
		}


                // START: NitroPack.io (https://nitropack.io)
                if (basename(DIR_APPLICATION) == "catalog" && is_file(DIR_CONFIG . 'nitropackio/compatibility.php')) {
                    $this->registry->get('config')->load('nitropackio/compatibility');

                    $nitro_config = $this->registry->get('config')->get('nitropackio');

                    $nitro_action = new \Action($nitro_config['route']['module']['nitropack'] . '/postSeoUrl');

                    $nitro_action->execute($this->registry);
                }
                // END: NitroPack.io (https://nitropack.io)
            
		while ($action instanceof Action) {
			$action = $this->execute($action);
		}
	}
	
	/**
	 * 
	 *
	 * @param	object	$action
	 * @return	object
 	*/
	private function execute(Action $action) {
		$result = $action->execute($this->registry);

		if ($result instanceof Action) {
			return $result;
		} 
		
		if ($result instanceof Exception) {
			$action = $this->error;
			
			$this->error = null;
			
			return $action;
		}
	}
}