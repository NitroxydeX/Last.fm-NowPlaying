<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Now playing</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
	<meta name="description" content="This is a fancy description.">
	<meta name="keywords" content="lastfm,last,fm,music,listening,twitter,now,playing,np">
	<link rel="stylesheet" type="text/css" href="css/meow.css">
	<script src="js/loader.js"></script>
</head>

<body>
	<div id="reload">
		<?php require_once 'lastfm.php';?>
	</div>
	<main id="main">
	</main>
	<p class="profile">created by <a href="//twitter.com/keintobi" target="_blank">@keintobi</a>&nbsp;//&nbsp;<a href="https://github.com/tobiasreinhard/Last.fm-NowPlaying">v1.0.2 (Github)</a></p>
</body>

</html>
