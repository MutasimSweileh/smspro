<?php
$localhost="localhost";
$UserDb="id3740887_root";    /// ��� ������ �������
$PassDb="mohtasm10@@"; ///  ��������
$NameDb="id3740887_app";  /// ��� �������
/************************************************/
/*@mysql_connect($localhost,$UserDb,$PassDb)or die('<div style="text-align: center;font-size: 21px;"><p style="font-weight:bold;color:red;">Error</p><br>'.mysql_error()."</div>");
@mysql_select_db($NameDb);
@mysql_query("set character_set_server='utf8'");
mysql_query("SET NAMES 'utf8'");
date_default_timezone_set("Africa/Cairo");*/
$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);
$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
//$database = ltrim($dbparts['path'],'/');
$database = "cmxzdd8m1wu8idjy";
//echo $database;
$DBcon = new mysqli($hostname, $username, $password, $database);
if ($DBcon->connect_error) {
    die("Connection failed: " . $DBcon->connect_error);
}


?>
