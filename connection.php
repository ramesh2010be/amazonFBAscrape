<?php

$con = mysql_connect("localhost", "databaseUsername", "databasePassword");
if (!$con) {
 die('Could not connect: ' . mysql_error());
}
mysql_select_db("databasename", $con);
