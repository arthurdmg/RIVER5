<?php



include ("riverrun.php");

$user_ip = ip();

$user_ip2 = str_replace(":", "_", $user_ip);

$minute = date("i");

$hour = date("G");

$day = date("d");

$month = date("m");

$year = date("y");




$dir = "SERVERS";

if(!file_exists("SERVERS/$year/$month/$day/$user_ip2")){


mkdir("$dir/$year", 0700);

mkdir("$dir/$year/$month", 0700);

mkdir("$dir/$year/$month/$day", 0700);




$fp3 = fopen("$dir/$year/$month/$day/$user_ip2", "w");

fclose($fp3);



}

$search = "";


$x = 0;

$dir = "SERVERS_POOL";


foreach (glob("SERVERS/$search/*") as $file){


foreach (glob("$file/*") as $file2){


foreach (glob("$file2/*") as $file3){
echo $file3 . "</br>";


foreach (glob("$file3/*") as $file4){
$exp = explode("/", $file4);

$files = $exp[5];


$fp = fopen("$dir/$x","w");
fwrite($fp, "$files");
fclose($fp);


echo "$files</br>";

$x++;
if ($x > 100){die;}
}

}

}

}



echo "</br>results : " . $x;



?>