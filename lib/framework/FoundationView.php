<?php
/**
 * All view objects created by the developer should extend this class
 * 
 * @package framework
 * @author simondelliott <simon@simondelliott.com>
 * @version @@@version
 */
class FoundationView {
	
    public function get_validation_error_div($message){
        if(!$message){
                return;
        }
?>
        <div class="validation_error"><?php echo $message ?></div>
<?php
	}
}
?>