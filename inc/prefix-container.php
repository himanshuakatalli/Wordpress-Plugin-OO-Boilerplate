<?php
/**
*
*/
class PREFIX_Container implements ArrayAccess {

	protected $contents;

	public function __construct () {
		$this->contents = array();
	}

	public function offsetSet ($offset, $value) {
		if (is_null($offset )) $this->contents[] = $value;
		else $this->contents[$offset] = $value;
	}

	public function offsetGet ($offset) {
		return isset($this->contents[$offset]) ? $this->contents[$offset] : null;
	}

	public function offsetExists ($offset) {
		return isset($this->contents[$offset]);
	}

	public function offsetUnset ($offset) {
		if (isset($this->contents[$offset])) unset($this->contents[$offset]);
	}
}
