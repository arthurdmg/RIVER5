<?php
error_reporting(0);

include ("riverrun.php");
include ("spam_block.php");

$name = upload();

$file = $_POST['file'];

$file_title = $_POST['filenameTag1'];


$dir = './FILES/';



$day = date("d");

$month = date("m");

$year = date("y");



$date = current_date();

$dir = "WORDS";



$x = 0;

while ($x <= 380){


$filename = "tag" . $x;


if (isset($_POST[$filename]) and $_POST[$filename] != "") {

$files = "FILES/" . $name;


$file = $_POST[$filename];


//variable for csv.php
$tag[$x] = $_POST[$filename];


mkdir("$dir/$file", 0700);

mkdir("$dir/$file/$year", 0700);

mkdir("$dir/$file/$year/$month", 0700);

mkdir("$dir/$file/$year/$month/$day", 0700);


$files = "FILES/" . $name;


$fp2 = fopen("$dir/$file/$year/$month/$day/$name", "w");

fclose($fp2);
}

$x++;
}



$dir = "RECENT";



mkdir("$dir/$year", 0700);

mkdir("$dir/$year/$month", 0700);

mkdir("$dir/$year/$month/$day", 0700);


$fp3 = fopen("$dir/$year/$month/$day/$name", "w");

fclose($fp3);



$dir = "FILES_INFO";



$tag_content = $file_title . "," .  $tag[1] . "," . $tag[2] . "," . $tag[3] . "," . $tag[4] . "," . $tag[5];


$fp3 = fopen("$dir/$name", "w");

fwrite ($fp3, $tag_content);
fclose($fp3);



echo "ok";

$list = array (
    array($name,$tag[1], $tag[2], $tag[3], $tag[4], $tag[5], $tag[6], $tag[7], $tag[8], $tag[9], $tag[10], $tag[11], $tag[12], $tag[13], $tag[14], $tag[15], $date),
);

$fp4 = fopen('ADVANCED/file.csv', 'a');

foreach ($list as $line) {
    fputcsv($fp4, $line);
}

fclose($fp4);

?>