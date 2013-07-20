<?php
/**
 * @todo should this class be deprecated ?
 * @package framework
 * @author simondelliott <simon@simondelliott.com>
 * @version @@@version
 */
class BaseModelControler extends ApplicationControler{
	
    public function index(){

        $all = BaseModel::get_all();
        $view = new BaseModelView($all);
        $view->show();
    }

}

?>
