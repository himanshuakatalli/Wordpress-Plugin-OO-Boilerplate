<?php

namespace Bootstrap;

class PrefixPluginContainer implements ArrayAccess {

	protected $contents;

	public function __construct () {
		$this->contents = array();
	}

	public function offsetSet ($offset = null, $value) {
		if (is_null($offset)) $this->contents[] = $value;
		else $this->contents[$offset] = $value;
	}

	public function offsetGet ($offset) {
		if( is_callable($this->contents[$offset])) {
			return call_user_func($this->contents[$offset], $this);
		}
		return isset($this->contents[$offset]) ? $this->contents[$offset] : null;
	}

	public function offsetUnset ($offset) {
		if (isset($this->contents[$offset])) unset($this->contents[$offset]);
	}

	public function offsetExist ($offset) {
		return isset($this->contents[$offset]);
	}
}