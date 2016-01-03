<script type="text/javascript">
// Change your username here
username = "txbi";
// ---------------------- //
$.get("//ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=" + username + "&api_key=1f633977acf0e2d0630ec11dbc350d3e&format=json", function(data) {
    if (typeof data.recenttracks.track[0]["@attr"] != "undefined") {
        artist = data.recenttracks.track[0].artist["#text"];
        track = data.recenttracks.track[0].name;
        album = data.recenttracks.track[0].album["#text"];
        $("#main").html("<p class='track'>" + track + "</p>" + "<p class='artist'>" + artist + "</p>" + "<p class='album'>" + album + "</p>");
    } else {
    	$("#main").html("<p class='track'>Scrobblen nicht möglich ...</p>"+"<p class='artist'>Gerade wird keine Musik gestreamt.</p>");
    }
});
</script>
