<?
define('HOST', 'localhost');
define('USER', 'okholod0_koleso');
define('PASS', 'okholod0_koleso');
define('DB', 'okholod0_koleso');

$dbcnx = mysql_connect(HOST, USER, PASS); 
mysql_select_db(DB,$dbcnx);
?>