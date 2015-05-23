<?php
namespace ReusingDublin;
use ReusingDublin;

class View{

	/**
	 * Prints a view file.
	 */
	public static function getView(Controller $controller)
	{
		global $data;

		$config = Config::getInstance();
		$data 	= $controller->getData();
		$action = $controller->action;
		$class 	= $controller->class;

		if(!defined('REUSINGDUBLIN_API')){
			require_once(REUSINGDUBLIN_DIR . '/view/head.php');
			require_once(REUSINGDUBLIN_DIR . '/view/header.php');
			require_once(REUSINGDUBLIN_DIR . '/view/' . lcfirst($class) . $action . '.php');
			require_once(REUSINGDUBLIN_DIR . '/view/footer.php');
		}
	}
}