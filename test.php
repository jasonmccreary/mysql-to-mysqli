<?php
$link      = mysql_connect('localhost', 'mysql_user', 'mysql_password');
$thread_id = mysql_thread_id();

mysql_select_db("mydb");

$result = mysql_query("SELECT id, name FROM mytable");

while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf("ID: %s  Name: %s", $row[0], $row[1]);
}

mysqli_free_result($result);

mysql_query("SELECT id, name FROM mytable");
mysql_query("SELECT id, name FROM mytable", $exisiting_link);
mysql_real_escape_string('some string');
mysql_real_escape_string('another string');
mysql_real_escape_string('another string', $existing_link);

mysql_list_tables('stuff');

mysql_connect('localhost', 'mysql_user', 'mysql_password');
mysql_connect('localhost', 'mysql_user', 'mysql_password', false);
mysql_connect('localhost', 'mysql_user', 'mysql_password', true, 1);

mysqli_fetch_field($result);
mysql_fetch_field($result, 5);
