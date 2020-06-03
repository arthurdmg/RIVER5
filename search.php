

<html>

<head>

<title>search</title>

<style type="text/css">

.search_bar{
position: absolute;
top: 10px;
right: 10px;
}

</style>



</head>

<body>

<form action="search.php" method="post">

</br>
<span class="search_bar">
<input type="text" id="search01" name="search" placeholder="search...">

<input type="submit" id="button02" value="search">
</span>
</form>


<?php


include ("riverrun.php");

$search = $_POST['search'];


if ($search == ""){$search = $_GET['search'];}

if (!file_exists("WORDS/$search")){echo "no results"; die;}

if (file_exists("CACHE/$search.html")){include ("CACHE/$search.html"); die;}

if(file_exists("SEARCH_CACHE/$search.txt")){

$handle = fopen("SEARCH_CACHE/$search.txt", "rb+");
$contents = file_get_contents("SEARCH_CACHE/$search.txt");
$contents++;
fwrite($handle, $contents);
fclose($handle);

}else{

$fp2 = fopen("SEARCH_CACHE/$search.txt", "w");
fwrite($fp2, 1);
fclose($fp2);


}

$cache = search(1);

$limit = 99;

if ($cache > $limit || $contents > $limit ){cache();}

?>

</body>
</html>