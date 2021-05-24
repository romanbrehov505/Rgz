<?

require "mysql.php";
$mysql = new Mysql();
$mysql->connect();
$mysql->zeroScore($_GET['login'], 0);
header('Location: show-rank.php');

?>