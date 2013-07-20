<?php
/**
 * Controler objects extend the FoundationControler
 * Framework code and utiloty functions for controlers go in here.
 * 
 * @package framework
 * @author simondelliott <simon@simondelliott.com>
 * @version @@@version
 */
class FoundationControler {

    /**
     * The parameters that are specified on the URL from the route object
     * @var Object 
     */
    public $params = array();
    
    private $action = "";

    public function __construct( $act, $params = NULL ) {
        $this->action = $act;
        $this->params = $params;

        if ($this->action != NULL){
            call_user_func_array(array($this, $this->action), array());
        }
        else{
            header("HTTP/1.0 404 Not Found");
            exit();
        }
    }

}
?>