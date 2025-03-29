<?php 
//  connecting the php with sokets 

//  create sokets is used to create sokets using these parameters
//  1 => AF_INET => IPv4 family -- Address Family
//  2 => SOCK_STREAM => TCP protocol / type -- sokets type
//  3 => 0 => protocol level -- Protocol 



$sokets = socket_create(AF_INET , SOCK_STREAM , 0) or die("Could not create sokets");

// After creating sokets we need to create the binding with sokets using bind function
// 1 => sokets => sokets id
// 2 => IP address => IP address of the server
// 3 => port number => port number of the server

$host = '127.0.0.1';
$port = 8080;

$bind = socket_bind($sokets , $host , $port)
or die("Could not bind sokets");

// After it we need to create the listening using listen function
// 1 => sokets => sokets id
// 2 => backlog => number of the sokets that can be waiting in the queue

$listen = socket_listen($sokets , 3)
or die("Could not listen sokets");

// now we are creating a function to accept the sokets using sockets_accept function
 // 1 => sokets => sokets id

 do{
$accept = socket_accept($sokets) or die("Could not accept sokets");

//  now we create the function to read the data from sokets using socket_read function
// 1 => sokets => sokets id
// 2 => buffer size => buffer size of the data that we want to read
// 3 => timeout => time out of the sokets -- default parameter 
$read = socket_read($accept , 1024) or die("Could not read sokets");

// we not nedd to read space so we need to remove the space from the data using trim function
$read = trim($read);
echo $read . "\n";
// reply code here
echo "Enter reply ..." . "\n";
$reply = trim(fgets(STDIN));
socket_write($accept, $reply, strlen($reply));
socket_close($accept);

}while(true);
// After it close the sokets using socket_close function
socket_close($accept);


//  now we ready to accept the message from user 
?>


<!--
$accept = socket_accept($sokets) or die("Could not accept sokets");
 $read = socket_read($accept , 1024) or die("Could not read sokets");
// we not nedd to read space so we need to remove the space from the data using trim function
$read = trim($read);
echo $read; -->


<!-- 
this coud be run at one time mean the message send to the client are listen one time but 
we need to be a loop to lestin message again and again we need a loop that run at first time but 
and after it run when true okkk -->


