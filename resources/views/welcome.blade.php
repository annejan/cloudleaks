<!DOCTYPE html>
<head>
<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAAAAAAk5OTAPv7+wACAgIA/f39AI6OjgDCwsIAY2NjAAQEBADLy8sA////AEFBQQAGBgYA+Pj4ANbW1gB5eXkAra2tAGBgYAABAQEA8/PzAMjIyAD8/PwA0dHRAKampgDj4+MAWVlZAAMDAwD19fUA/v7+ANPT0wAVFRUAqKioANzc3ADDw8MABQUFAPf39wDV1dUAS0tLACAgIABdXV0A+fn5AM7OzgB4eHgA19fXAOnp6QAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABISEhISEhISEhISEhISEgAAAAAAAAAAAAAFCgocIQAAAAASEQAAAAAAAAQKHBIAAAAAAAEcIgMlLAYCChwAAAAAAAAAHAAKCgoKCgoWAAAAAAAAABwbHBwcCgocDQ8AAAAAAAAEKQkJFAgcCgoTAAAeHSoLEB8XCgoDHAoKEwAAEgAAJwAABwocEhwKChMAAAASGiYVHAIEDhIkICsZAAASAAAAAAAYHAAAAAASAAAAAAAAAAgEIwwAAAAAAAAAAAAAAAAcCgooAAAAAAAAAAAAAAAABAoKHAAAAAAAAAAAAAAAAAMKGxIAAAAAAAAAABISEhISEhISEhISEhISEoAAAACAAAAAgAAAAIAAAACAAAAAgAAAAIAAAACAAAAAgAAAAIAAAACAAAAAgAAAAIAAAACAAAAAgAAAAIAAAAA=" rel="icon" type="image/x-icon" />
	<title>Cloud Leaks Internet Toilets</title>
        <link rel="stylesheet" href="/css/style.css" />
	<script	src="/js/jquery.min.js"></script>
</head>
<body>
	<section class="rain"></section>
	<section class="content">
		<h1>Cloud Leaks Internet Toilets</h1>
		<h2>intel IoT roadshow</h2>
		<h3><a href="/vid/video.mp4" target="_blank">Video</a></h3>
                <h3><a href="/statistics">Statistics</a> &nbsp; <a href="/portal">Cloud Portal</a></h3>
                <h4>team: Intranet of Things</h4>
	</section>
	<section class="blocks">
	<div>
	<h5>Prevent disease</h5>
	Keep your family and loved ones safe.
	<img src="/img/prevention.jpg" alt="Prevent disease" />
	<ul>
            <li>Early detection</li>
            <li>Instant feedback</li>
            <li>Epidemic detection</li>
            <li>Pandemic prevention</li>
	</ul>
	</div>
	<div>
	<h5>Sustainable</h5>
	Powered by the energy of flushing water
        <img src="/img/green.jpg" alt="Sustainable power" />
	<ul>
            <li>No batteries</li>
            <li>No waste</li>
            <li>No maintenance</li>
	</ul>
	</div>
	<div>
	<h5>Zero Effort</h5>
	You don't have to do anything extra
        <img src="/img/zero_effort.jpg" alt="Zero effort" />
	<ul>
            <li>Nothing to think about</li>
            <li>Nothing to remember</li>
            <li>No training required</li>
	</ul>
	</div>
	</section>
	<script>
		// number of drops created.
		var nbDrop = randRange(512, 1337); 

		// function to generate a random number range.
		function randRange( minNum, maxNum) {
			return (Math.floor(Math.random() * (maxNum - minNum + 1)) + minNum);
		}

		// function to generate drops
		function createRain() {

			for( i=1;i<nbDrop;i++) {
				var dropLeft = randRange(0,$(document).width());
				var dropTop = randRange(-1000,1400);

				$('.rain').append('<div class="drop" id="drop'+i+'"></div>');
				$('#drop'+i).css('left',dropLeft);
				$('#drop'+i).css('top',dropTop);
			}

		}
		// Make it rain
		createRain();
	</script>
</body>
</html>
