<?php


//dont forget to add a / to the end of complex paths see the RouteTest complex path
$routes["user_login"] = new Route(array("controler"=>"user", "action"=>"login"));
$routes["admin_index"] = new Route(array("controler"=>"admin", "action"=>"index"));
$routes["root"] = new Route(array("controler"=>"site", "action"=>"index"));

?>
