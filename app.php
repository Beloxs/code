<?php
$db = mysql_connect('localhost', 'root', '');

mysql_query($db, 'delete from users');