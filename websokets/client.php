<?php 


if(isset($_POST['submit'])){
$host = '127.0.0.1';
$port = 8080;
$sockets = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

socket_connect($sockets , $host , $port) or die("Could not connect to server");

$msg = $_POST['msg'];
socket_write($sockets, $msg, strlen($msg));

//  this part is used for reply to terminal 
$reply = socket_read($sockets , 1024);

$read = trim($reply);
echo $read . "\n";

socket_close($sockets);

}


?>

<form action="" method="post">
    <input type="text" name="msg">
    <input type="submit" name="submit" value="send">
</form>