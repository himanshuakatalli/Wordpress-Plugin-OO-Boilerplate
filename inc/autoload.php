<?php
/**
*
*/
class PREFIX_AutoLoad
 {
	public static function register() {
		if (version_compare(phpversion(), '5.3.0', '>=')) {
			spl_autoload_register(array(new self, 'autoload'), true, $prepend);
		} else {
			spl_autoload_register(array(new self, 'autoload'));
		}
	}

	public static function autoload($classname) {

	}
}