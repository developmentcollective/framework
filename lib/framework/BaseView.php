<?php
/**
 * @todo should this class be deprecated ?
 * @package framework
 * @author simondelliott <simon@simondelliott.com>
 * @version @@@version
 */
class BaseModelView extends ApplicationView {

    private $all;

    public function __construct( $all ) {
        $this->all = $all;
    }

    public function contents () {
        ?>
    <table>
        <tr>
            <th>id</th>
        </tr>
<?php
        foreach ($this->all as $BaseModel) {
?>
        <tr>
            <td><?php echo $BaseModel->id ?></td>
        </tr>
<?php
        }
        ?>
    </table>
<?php
    }
}
?>