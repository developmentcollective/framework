<?php
/**
 * @package framework
 * @author simondelliott <simon@simondelliott.com>
 * @version @@@version
 */
class Location {
    public $path = '';
    public $autoload = false;

    public function Location($path, $autoload = false) {
        $this->path = $path;
        $this->autoload = $autoload;
    }
}

?>