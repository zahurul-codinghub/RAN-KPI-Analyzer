<?php

ini_set("memory_limit", "1000M");
set_time_limit(0);
date_default_timezone_set('Asia/Dhaka');

$host = 'localhost';
$username = 'root';
$password = '';
$db = 'ran_kpi';
$res = mysql_connect($host, $username, $password);
if (!$res)
    die('Could not connect to the server, mysql error: ' . mysql_error($res));
$res = mysql_select_db($db);
if (!$res)
    die('Could not connect to the database, mysql error: ' . mysql_error($res));

mysql_query("SET CHARACTER SET utf8");
mysql_query("SET SESSION collation_connection =utf8_general_ci");

$date = date("Ymd", time());
$file_name = "alarm.csv";
$file_path = "input/" . "NBL.csv";
$file = fopen("$file_path", "r");

$data = fgetcsv($file);

while (!feof($file)) {
    $data = fgetcsv($file);
    mysql_query("INSERT INTO nbl_dis VALUES ('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]','$data[12]','$data[13]','$data[14]','$data[15]','$data[16]','$data[17]','$data[18]','$data[19]','$data[20]','$data[21]','$data[22]','$data[23]','$data[24]','$data[25]','$data[26]','$data[27]','$data[28]','$data[29]','$data[30]','$data[31]','$data[32]','$data[33]','$data[34]','$data[35]','$data[36]','$data[37]','$data[38]','$data[39]','$data[40]','$data[41]','$data[42]','$data[43]','$data[44]','$data[45]','$data[46]','$data[47]','$data[48]','$data[49]','$data[50]','$data[51]','$data[52]','$data[53]','$data[54]','$data[55]','$data[56]','$data[57]','$data[58]','$data[59]','$data[60]','$data[61]','$data[62]','$data[63]','$data[64]','$data[65]','$data[66]','$data[67]','$data[68]','$data[69]','$data[70]','$data[71]','$data[72]','$data[73]','$data[74]','$data[75]','$data[76]','$data[77]','$data[78]','$data[79]','$data[80]','$data[81]','$data[82]','$data[83]','$data[84]','$data[85]','$data[86]','$data[87]','$data[88]','$data[89]','$data[90]','$data[91]','$data[92]')");
}
?>