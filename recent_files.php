<?php error_reporting(0); ?>

<html>
<head>

<link rel="stylesheet" type="text/css" href="default.css">

</head>

<body>

<?php



include ("riverrun.php");

$x = 0;


foreach (glob("RECENT/$search/*") as $file){


foreach (glob("$file/*") as $file2){


foreach (glob("$file2/*") as $file3){
foreach (glob("$file3/*") as $file4){
$exp = explode("/", $file4);

$files = $exp[5];


$filesize = filesize("FILES/$files");
$filesize = file_size_readable($filesize);

    $extension = substr($files, -3);

    if ($extension == "png" || $extension == "jpg" || $extension == "gif" || $extension == "jpeg"){

    echo "<a href='FILES/$files'><img src='FILES/$files' alt='$files'></a> ";

    } elseif ($extension == "mp4" || $extension == "webm"){

    echo "<a href='FILES/$files'><img src='THUMBS/$files.jpg' alt='$files'></a> ";	
  
    } 

    $x++;


if ($x > 100){die;}
}

}

}

}


//echo "</br>results : " . $x;


?>

</body>
</html>