<?php 

//this will avoid mysql_conncet() deprecation error
error_reporting( ~E_DEPRECATED & ~E_NOTICE);

define('DBHOST', 'localhost');
 define('DBUSER', 'adamlwr');
 define('DBPASS', '');
 define('DBNAME', 'c9');
 
 $conn = mysql_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysql_select_db(DBNAME);
 
 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
 }
 
