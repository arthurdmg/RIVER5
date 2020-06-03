<?php



include ("riverrun.php");

$url = $_GET['URL'];

$host = file_get_contents("SERVERS_POOL/$url", 0);

$host = str_replace("_", ":", $host);

$port;

$i = 0;

$available;

$page = "";
$off = "";
$host_on;

$host_check;

while ($i <= 2){

switch ($i) {
    case "0":
        $port = "80";
        break;
    case "1":
        $port = "8080";
        break;
    case "2":
        $port = "8000";
        break;
}

$hosted = "";
$hosted = $host . ':' . $port;

if(check_online($hosted)) {$available[$i] = "<a href='$hosted' target='_blank'>yes</a>"; $page = "<a href='$hosted' target='_blank'>$host</a>";$host_on = $hosted; }
else{$available[$i] = "no";}
$i++;
}

if ($available[0] == "no" && $available[1] == "no" && $available[2] == "no"){$page = $host; $off=1;}

echo $page;

if ($off != 1){

$url = "http://" . $host_on;

$cvs = fopen("$url" . "/ADVANCED/file.csv","r");

$day = date("d");

$month = date("m");

$year = date("y");


$date = current_date();

$i = 0;

while (($data = fgetcsv($cvs)) !== FALSE)
{

if(!file_exists("FILES/$data[0]")){


$format = "$url/FILES/$data[0]";

$content =  file_get_contents("$format");

file_put_contents("FILES/$data[0]", $content);

$dir = "WORDS";



$x = 1;

while ($x <= 14){


if ($data[$x] != "") {


$file = $data[$x];


mkdir("$dir/$file", 0700);

mkdir("$dir/$file/$year", 0700);

mkdir("$dir/$file/$year/$month", 0700);

mkdir("$dir/$file/$year/$month/$day", 0700);


$fp2 = fopen("$dir/$file/$year/$month/$day/$data[$i]", "w");

fclose($fp2);
}
$x++;
}

	

}


}

$i++;
}


?>