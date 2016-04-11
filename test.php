<?php
$link      = mysql_connect('localhost', 'mysql_user', 'mysql_password');
$thread_id = mysqli_thread_id($mysqli_link, );

mysqli_select_db($mysqli_link, "mydb");

$result = mysqli_query($mysqli_link, "SELECT id, name FROM mytable");

while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf("ID: %s  Name: %s", $row[0], $row[1]);
}

mysqli_free_result($result);

mysqli_query($mysqli_link, "SELECT id, name FROM mytable");
mysqli_query($exisiting_link, "SELECT id, name FROM mytable");
mysqli_real_escape_string($mysqli_link, 'some string');
mysqli_real_escape_string($mysqli_link, 'another string');
mysqli_real_escape_string($existing_link, 'another string');

mysql_list_tables('stuff');

mysql_connect('localhost', 'mysql_user', 'mysql_password');
mysql_connect('localhost', 'mysql_user', 'mysql_password', false);
mysql_connect('localhost', 'mysql_user', 'mysql_password', true, 1);

mysqli_fetch_field($result);
mysql_fetch_field($result, 5);
