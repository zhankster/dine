<?php
require "php/env.php";
//echo "test";

echo $GLOBALS["loc_name"]."<br />";

echo $street_address."<br />";

echo $city."<br />";

function printAddr(){
    echo $GLOBALS["state"]."<br />" ;
}

printAddr();

echo $_SERVER['SERVER_ADDR']."<br />" ;

echo $_SERVER['SERVER_SOFTWARE']."<br />" ;


?>