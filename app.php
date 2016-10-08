<?php
$db = mysql_connect('localhost', 'root', '');

mysql_query($db, 'select * from users');