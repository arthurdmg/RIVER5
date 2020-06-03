<?php

$user_ip = ip();
$user_ip_ = str_replace(":", "", $user_ip);

$minute = date("i");

$hour = date("G");

$day = date("d");

$month = date("m");

$year = date("y");




if(file_exists("IP/$year/$month/$day/$hour/$minute/$user_ip_")){
echo "Wait one minute for post again!";
die;
}



$dir = "IP";

mkdir("$dir/$year", 0700);

mkdir("$dir/$year/$month", 0700);

mkdir("$dir/$year/$month/$day", 0700);

mkdir("$dir/$year/$month/$day/$hour", 0700);

mkdir("$dir/$year/$month/$day/$hour/$minute", 0700);




$fp3 = fopen("$dir/$year/$month/$day/$hour/$minute/$user_ip_", "w");

fclose($fp3);




?>