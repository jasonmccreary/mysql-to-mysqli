<?php
$link      = mysql_connect('localhost', 'mysql_user', 'mysql_password');
$thread_id = mysql_thread_id($link);

mysql_select_db($mysql_link, "mydb");

$result = mysql_query($mysql_link, "SELECT id, name FROM mytable");

while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf("ID: %s  Name: %s", $row[0], $row[1]);
}

mysqli_free_result($result);

mysql_query($link, "SELECT id, name FROM mytable");
mysql_real_escape_string($mysql_link, 'some string');
mysql_real_escape_string($link, 'another string');
mysql_real_escape_string($mysql_link, 'another string');

mysql_list_tables('stuff');

mysql_connect('localhost', 'mysql_user', 'mysql_password');
mysql_connect('localhost', 'mysql_user', 'mysql_password');
mysql_connect('localhost', 'mysql_user', 'mysql_password', 5, 1);

mysqli_fetch_field($result);
mysql_fetch_field($result, 5);
