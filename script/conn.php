<?php
/*
 * @Author: darkless
 * @Date:   2016-02-26 16:19:25
 * @Last Modified by:   darkless
 * @Last Modified time: 2016-02-26 16:20:04
*/
// SAE MySQL
 // $hostname = SAE_MYSQL_HOST_M. ':'. SAE_MYSQL_PORT;
 // $dbuser = SAE_MYSQL_USER;
 // $dbpass = SAE_MYSQL_PASS;
 // $dbname = SAE_MYSQL_DB; 

// Local MySQL
 $hostname = 'localhost'. ':'. '3306';
 $dbuser = 'root';
 $dbpass = '';
 $dbname = 'navdata';

 
 $link = @mysql_connect($hostname, $dbuser, $dbpass);
 if(!$link){
     die("Connect to database failure!". mysql_errno());    
 }

 mysql_query("set charactor set 'utf8';");
 mysql_query("set names 'utf8';");
 date_default_timezone_set('PRC'); 

 mysql_select_db($dbname, $link);

?>
