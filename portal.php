<!DOCTYPE html>
<head>
<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAAAAAAk5OTAPv7+wACAgIA/f39AI6OjgDCwsIAY2NjAAQEBADLy8sA////AEFBQQAGBgYA+Pj4ANbW1gB5eXkAra2tAGBgYAABAQEA8/PzAMjIyAD8/PwA0dHRAKampgDj4+MAWVlZAAMDAwD19fUA/v7+ANPT0wAVFRUAqKioANzc3ADDw8MABQUFAPf39wDV1dUAS0tLACAgIABdXV0A+fn5AM7OzgB4eHgA19fXAOnp6QAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABISEhISEhISEhISEhISEgAAAAAAAAAAAAAFCgocIQAAAAASEQAAAAAAAAQKHBIAAAAAAAEcIgMlLAYCChwAAAAAAAAAHAAKCgoKCgoWAAAAAAAAABwbHBwcCgocDQ8AAAAAAAAEKQkJFAgcCgoTAAAeHSoLEB8XCgoDHAoKEwAAEgAAJwAABwocEhwKChMAAAASGiYVHAIEDhIkICsZAAASAAAAAAAYHAAAAAASAAAAAAAAAAgEIwwAAAAAAAAAAAAAAAAcCgooAAAAAAAAAAAAAAAABAoKHAAAAAAAAAAAAAAAAAMKGxIAAAAAAAAAABISEhISEhISEhISEhISEoAAAACAAAAAgAAAAIAAAACAAAAAgAAAAIAAAACAAAAAgAAAAIAAAACAAAAAgAAAAIAAAACAAAAAgAAAAIAAAAA=" rel="icon" type="image/x-icon" />
	<title>Cloud Leaks Internet Toilet</title>
	<link rel="stylesheet" href="style.css" />
	<script	src="jquery.min.js"></script>
</head>
<body>
	<section class="rain"></section>
        <section class="content">

            <h1>Cloud Leaks Internet of Toilets</h1>
            <h2>Login Portal</h2>
            <form method="post">
                    <label for="login">Login:</label>
                    <input name="login" id="login">
                    <label for="passowrd">Password:</label>
                    <input name="password" id="password" type="password">
                    <input type="submit" value="Submit">
            </form>
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
