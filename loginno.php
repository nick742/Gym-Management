<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body {
	background-image: url("oops.jpg");
	background-repeat: no-repeat;
	background-size: cover;
	
	font-size: 20px;
	}
	h4{
		color:white;
	}
	div {
	bottom: 300px;
    width: 300px;
	animation:ease-in;
	}
	</style>
</head>

<body >
<div><p><h4 > wrong id/password!!! redirecting in 2 seconds!</h4></p></div>
</body>
</html>
<?php
header( "refresh:4;url=intro.php");
exit;
?>
