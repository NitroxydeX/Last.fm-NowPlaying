<script type="text/javascript">
	design="<?php include 'design.txt';?>"; 
		if (design == "orange") {
			icon = " fa-music"
		}
		else {
			icon = " fa-volume-up"
		};
	username="<?php require_once 'username.txt';?>",
		$.get("//ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user="+username+"&api_key=1f633977acf0e2d0630ec11dbc350d3e&format=json",
	function(t){"undefined"!=typeof t.recenttracks.track[0]["@attr"]?(artist=t.recenttracks.track[0].artist["#text"],
		track=t.recenttracks.track[0].name,
		album=t.recenttracks.track[0].album["#text"],
	$("#scrobble").html("<p class='track'>"+track+"</p><p class='artist'>"+artist+"</p><p class='album'>"+album+"</p><p class='now'><i class='fa"+icon+"'></i>Scrobbelt gerade!</p>")):
	$("#scrobble").html("<p class='track'>Scrobblen nicht möglich ...</p><p class='artist'>Gerade wird keine Musik gestreamt.</p>")});
</script>