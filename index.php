<?php
/**
 * This file is the front controler
 * All the requests that hit the web site are routed to this file
 * by the rewrite rules in the .htaccess file. This code then unpacks the 
 * request and sees if it matches any of the routes that the developer
 * has specified in the routes file. If it does the action specified 
 * in the route is executed.
 */
require_once ( 'lib/framework/common.php');
require_once ( 'routes.php');

$selected_route = "";
$route = null;

foreach ($routes as $name => $r){
    $selected_route = $name;
    if ($r->match()){
        $route = $r;
        break;
    }
    if ($name == "root")
        $root_route = $r;
}

if ($route ==NULL)
    $route = $root_route; //note could still be null

if ($route ==NULL){
    handle_error("No route to follow");
}

$GLOBALS["route"] = $route;
$controler = $route->get_controler_class();
$action = $route->action;

$controler = new $controler($action, $route->matches);

?>