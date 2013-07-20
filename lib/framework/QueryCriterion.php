<?php
/**
 * @package framework
 * @author simondelliott <simon@simondelliott.com>
 * @version @@@version
 */
class QueryCriterion {
	
	public $operator = "=";
	public $value = "";
	
	public function __construct($op, $val){
	 	$this->operator = $op;
	 	$this->value = $val;
	}
	
}
?>