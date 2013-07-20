<?php
/**
 * @todo should this class be deprecated ?
 * @package framework
 * @author simondelliott <simon@simondelliott.com>
 * @version @@@version
 */
class BaseModelTest extends PHPUnit_Framework_TestCase {

    private $_fixture_valid_BaseModel;

    function setUp(){
        $this->_fixture_valid_BaseModel = array(
                "id"=> null);
    }
 
    public function test_fixture_is_valid(){
        $valid_BaseModel = new BaseModel($this->_fixture_valid_BaseModel);
        $res = $valid_BaseModel->validate();
        $this->assertTrue($res != 0, "cannot validate BaseModel");
    }
	
}
?>