<?php

namespace Bootstrap;

class PrefixPlugin extends PrefixPluginContainer {

	public static $container = null;

	public static function getPluginInstance () {
		if (null === self::$container) self::$container = new self;
		return self::$container;
	}

	public function run () {
		foreach ($this->contents as $offset => $content) {
			if (is_callable($content)) $content = $this[$offset];

			if (is_object($content)) {
				$reflection = new ReflectionClass($content);
				if ($reflection->hasMethod('run')) $content->run();
			}
		}
	}

}