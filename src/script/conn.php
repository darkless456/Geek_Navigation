<?php
/*
 * @Author: darkless
 * @Date:   2016-02-26 16:19:25
 * @Last Modified by:   darkless
 * @Last Modified time: 2016-03-23 15:38:16
*/
// SAE MySQL
 $hostname = SAE_MYSQL_HOST_M. ':'. SAE_MYSQL_PORT;
 $dbuser = SAE_MYSQL_USER;
 $dbpass = SAE_MYSQL_PASS;
 $dbname = SAE_MYSQL_DB; 

// Local MySQL
 // $hostname = 'localhost'. ':'. '3306';
 // $dbuser = 'root';
 // $dbpass = '';
 // $dbname = 'navdata';

 $link = new mysqli($hostname, $dbuser, $dbpass, $dbname); 
 // $link = @mysqli_connect($hostname, $dbuser, $dbpass);
 if(!$link){
     die("Connect to database failure!". mysqli_errno());    
 }

 $link->query("set charactor set 'utf8';");
 $link->query("set names 'utf8';");
 date_default_timezone_set('PRC'); 

 $link->select_db($dbname);

?>
