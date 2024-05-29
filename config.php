<?php
 define("DB_HOST","localhost");
 define("USERNAME","sporylzm_sportverified");
 define("PASS","SportVerified_2019");
 define("DBNAME","sporylzm_sportverified.com");
 define("DB_TYPE","mysql");
 define("PORT","3306");

//$host="localhost"; //hostname
//$username="root"; //mysql username
//$password=""; //mysql password
//$db_name="talk"; //Database name
//connect to database
$con=mysqli_connect(DB_HOST,USERNAME,PASS, DBNAME);
if(!$con)
{die('could not connect to server:'.mysql_error());}
//mysqli_select_db($db_name,$con)
//or die("could not connect to database: ".mysql_error());

?>