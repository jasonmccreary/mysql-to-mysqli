<?php
$link      = mysqli_connect('localhost', 'mysql_user', 'mysql_password');
$thread_id = mysqli_thread_id($link);

mysqli_select_db("mydb", $mysql_link);

$result = mysqli_query("SELECT id, name FROM mytable", $mysql_link);

while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf("ID: %s  Name: %s", $row[0], $row[1]);
}

mysqli_free_result($result);

mysqli_query("SELECT id, name FROM mytable", $link);
mysqli_real_escape_string('some string', $mysql_link);
mysqli_real_escape_string('another string', $link);
mysqli_real_escape_string('another string', $mysql_link);

mysql_list_tables('stuff');

mysqli_connect('localhost', 'mysql_user', 'mysql_password');
mysqli_connect('localhost', 'mysql_user', 'mysql_password');
mysql_connect('localhost', 'mysql_user', 'mysql_password', 5, 1);

mysqli_fetch_field($result);
mysql_fetch_field($result, 5);
