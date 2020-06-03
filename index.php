<html>
<title>riverrrun</title>

<style type="text/css">

img{
width: 150px;
height: 150px;
}

.description{
font-size: 10px;
}

.icons{
height:5%;
width:5%;
}

.icons:hover{
height:10%;
width:10%;
}

.search {
font-family: arial;
font-size: 32px;
color: #666666;
border: 2px solid #AAAAAA;
border-radius: 10px 10px 10px 10px;
padding: 20px;
margin: 5px;
}

.big_picture{
width: 7%;
height: 10%;
}

body{
font-family: arial;
font-size: 16px;
color: #666666;
}

</style>



</head>

<body>
<body>
</br>
</br>
<div align="center" class="tools">

<a href="upload.php"><img src="TEMPLATES/fatcow/compile.png" class="big_picture"></a>
<a href="index02.php"><img class="icons" src="TEMPLATES/fatcow/http.png"></a>
<a href="RIVER4.zip"><img class="icons" src="TEMPLATES/fatcow/backpack.png"></a>
<a href="search.php?search=mp3"><img class="icons" src="TEMPLATES/fatcow/ilike.png"></a>
<a href="search.php?search=jpg"><img class="icons" src="TEMPLATES/fatcow/image.png"></a>
<a href="search.php?search=mp4"><img class="icons" src="TEMPLATES/fatcow/movies.png"></a>
<a href="search.php?search=apk"><img class="icons" src="TEMPLATES/fatcow/android.png"></a>
<a href="about.php"><img class="icons" src="TEMPLATES/fatcow/help.png"></a>

</div>

</br>

<div align="center">


<form action="search.php" method="POST">

<input type="text" class="search" name="search">
<input type="submit" class="search" value="search">
</form>

<span class="description">Icons by <a href="http://www.fatcow.com/free-icons" target="_blank">fatcow</a> under  CC Attribution 3.0 License.</span>
</div>

<div align="center">


</br></br>RECENT FILES</br>

<?php

include ("recent_files.php");

?>

</br></br></br>

</div>


</body>
</html>
