<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Now playing</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
	<meta name="description" content="This is a fancy description.">
	<meta name="keywords" content="lastfm,last,fm,music,listening,twitter,now,playing,np">
	<link rel="stylesheet" type="text/css" href="css/<?php include 'design.txt';?>.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script>$(document).ready(function(){setInterval(function(){$("#reload").load('lastfm.php')}, 10000);});</script>
</head>

<body>
	<div id="reload">
		<?php require_once 'lastfm.php';?>
	</div>
	<main id="main">
		<div id="scrobble"></div>
		<div id="creator">
			<div class="creator">created by <a href="//twitter.com/keintobi" target="_blank">@keintobi</a> <a href="https://github.com/tobiasreinhard/Last.fm-NowPlaying" target="_blank">(Github)</a></div>
			<div class="creator">improved by <a href="//twitter.com/nitroxydex" target="_blank">@NitroxydeX</a>&nbsp;//&nbsp;v1.0.5&nbsp; <a href="https://github.com/NitroxydeX/Last.fm-NowPlaying" target="_blank">(Github)</a></div>
		</div>
	</main>
</body>

</html>