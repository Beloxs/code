<?php
$db = mysql_connect('localhost', 'root', '');

mysql_query('delete from users',$db);
