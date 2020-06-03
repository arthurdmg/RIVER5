<html>

<head>

<title>simple search</title>

<style type="text/css">

.search_bar{
position: absolute;
top: 10px;
right: 10px;
}

</style>



</head>

<body>

<form action="search_simple.php" method="post">

<span class="search_bar">
<input type="text" id="search01" name="search" placeholder="search...">

<input type="submit" id="button02" value="search">
</span>
</form>

<?php


include("riverrun.php");

$search = $_POST['search'];


if ($search == ""){die();}

search(0);

?>

</body>
</html>