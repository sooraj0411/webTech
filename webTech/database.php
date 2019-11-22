<?php
$url='127.0.0.1:3306';
$username='root';
$password='sooraj0411';
$conn=mysqli_connect($url,$username,$password,"signin_info");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>