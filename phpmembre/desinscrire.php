<?php

session_start();

mysql_connect('localhost','root','');
mysql_select_db('phpmembre');

mysql_query("DELETE FROM users WHERE username = '{$_session['pseudo']}'");

header("Location : logout.php");

?>