<?php
if (!isset($_SESSION))
{
	session_start();
}

$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'optimus rhyme';
$sqlmsg = "SELECT meddelanden.msg, meddelanden.date, userbase.username FROM meddelanden INNER JOIN userbase ON meddelanden.userid=userbase.id ORDER BY meddelanden.date DESC";




?>