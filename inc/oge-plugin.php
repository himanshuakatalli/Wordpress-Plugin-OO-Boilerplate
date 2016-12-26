<?php
/**
*
*/
class OGE_Plugin extends OGE_Container {

	public static $container = null;

	public function getPluginInstance () {
		if (null == self::$instance) self::$instance = new self;
		return self::$instance;
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