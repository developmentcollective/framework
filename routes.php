<?php
/* 
 * This file contains all the patterns for the ReST calls that your application 
 * will handel and will route the call to your controler. 
 * Each route you need is declared in teh same way. 
 * 
 * 
 * This example would be to call the Cab controler in a application that knows
 * all the Cabs in new york. Imagine the application receives a request like this
 *    http://cabs.com/city/NewYork/cabs/GH567
 * 
 * the route would look like this
 * $routes["cab_show"]   
 *      = new Route(array(
 *          "controler"=>"cab", 
 *          "action"=>"show",   
 *          "pattern"=>"/city\/:city_name\/cabs\/:reg/", 
 *          "city_name" => "[\w ]+", 
 *          "reg" => "[\w ]+"));
 * 
 * controler - this is the lower case class name of the controler to call
 * action - the metod of the controler to call
 * pattern - the regex pattern to match, note that it can take symbols denoted by a starting colon e.g. :city
 * the symbols - the regex for each symbol
 * 
 * each route is named but the one named "root" will be called if no route can
 * be found
 */

//dont forget to add a / to the end of complex paths see the RouteTest complex path
$routes["user_login"] = new Route(array("controler"=>"user", "action"=>"login"));
$routes["admin_index"] = new Route(array("controler"=>"admin", "action"=>"index"));
$routes["root"] = new Route(array("controler"=>"site", "action"=>"index"));

?>
