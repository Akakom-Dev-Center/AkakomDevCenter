<?php
/*$username = "root" ;
$pasword = "" ;
$id_mysql= mysql_connect ("localhost",
							$username,
							$pasword);
mysql_select_db ("adc_db",$id_mysql);
if (!$id_mysql)
die ("Database MySQL tak dapat dibuka");

//if(! mysql_select_db ("adc_db",$id_mysql))
//die ("Database tidak bisa dipilih");
*/
$db = new mysqli('localhost', 'root', '', 'adc_db');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}
?>