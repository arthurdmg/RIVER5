<html>
<head>


<link rel="icon" href="favicon.jpg" type="image/x-icon">
<title>riverrun</title>

<style type="text/css">

.logo_font{
font-size: 72px;
color: #333333;
border-right: 1px solid #333333;
margin: 50px;
}

a{
color: #333333;
text-decoration: none;
font-size: 16px;
}

a:hover {
color: #111111;
text-decoration: underline;
}

.search_bar{
position: absolute;
top: 10px;
right: 10px;
}

</style>



</head>


<body>
<form action="search.php" method="post">

<span class="search_bar">
<input type="text" id="search01" name="search" placeholder="search...">

<input type="submit" id="button02" value="search">
</span>
</form>

<div class="main">

<table align="center">
<tr>
<td> <span class="logo_font">riverrun &nbsp;&nbsp;</span></td>
<td> 
<table>
<tr>
<td>

<a href="upload.html"> Upload</a>

</td>
</tr>
<tr>
<td>

<a href="recent_files.php"> Recent Files</a>
</td>
<tr>
<td>
<a href="README.txt"> About</a>
</td>
</tr>
</td>
</tr>

</table>
</td>
</tr>
</table>

<a href="RIVER4.zip">Download Source Code</a>

<iframe src="servers.php" width="100%" name="targetframe" allowTransparency="true" scrolling="no" frameborder="1" ></iframe>

</body>
</html>

<script type="text/javascript">

	function sleep(ms) {
 	return new Promise(resolve => setTimeout(resolve, ms));
	}

    var i = 0;	
	
    while (i < 100) {
        var ifrm = document.createElement("iframe");
        ifrm.setAttribute("src", "servers_check.php?URL="+i);
        ifrm.style.width = "100%";
        ifrm.style.height = "25px";
        document.body.appendChild(ifrm);
	i++;
	sleep(300);
    }

</script> 