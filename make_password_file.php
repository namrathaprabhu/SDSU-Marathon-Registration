<?php

if($_GET) exit;
if($_POST) exit;


$pass = array('cs545','fall2017','sdsu');

#### Using SHA256 #######
$salt='gj9@9i8mf659';  # 12 character salt starting with $1$

for($i=0; $i<count($pass); $i++) 
        echo crypt($pass[$i],$salt)."..........";
?>