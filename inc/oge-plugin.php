<?php
/**
*
*/
class PREFIX_Plugin extends PREFIX_Container {

	public static $container = null;

	public function getPluginInstance () {
		if (null == self::$container) self::$container = new self;
		return self::$container;
	}

	public function run () {
		foreach ($this->contents as $key => $content) {
			if (is_callable($content)) {
				$content = $this[$key];
			}

			if (is_object($content)) {
				$reflection = new ReflectionClass($content);
				if ($reflection->hasMethod('run')) {
					$content->run();
				}
			}
		}
	}
}