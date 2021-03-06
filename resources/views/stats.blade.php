<!DOCTYPE html>
<head>
<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAAAAAAk5OTAPv7+wACAgIA/f39AI6OjgDCwsIAY2NjAAQEBADLy8sA////AEFBQQAGBgYA+Pj4ANbW1gB5eXkAra2tAGBgYAABAQEA8/PzAMjIyAD8/PwA0dHRAKampgDj4+MAWVlZAAMDAwD19fUA/v7+ANPT0wAVFRUAqKioANzc3ADDw8MABQUFAPf39wDV1dUAS0tLACAgIABdXV0A+fn5AM7OzgB4eHgA19fXAOnp6QAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABISEhISEhISEhISEhISEgAAAAAAAAAAAAAFCgocIQAAAAASEQAAAAAAAAQKHBIAAAAAAAEcIgMlLAYCChwAAAAAAAAAHAAKCgoKCgoWAAAAAAAAABwbHBwcCgocDQ8AAAAAAAAEKQkJFAgcCgoTAAAeHSoLEB8XCgoDHAoKEwAAEgAAJwAABwocEhwKChMAAAASGiYVHAIEDhIkICsZAAASAAAAAAAYHAAAAAASAAAAAAAAAAgEIwwAAAAAAAAAAAAAAAAcCgooAAAAAAAAAAAAAAAABAoKHAAAAAAAAAAAAAAAAAMKGxIAAAAAAAAAABISEhISEhISEhISEhISEoAAAACAAAAAgAAAAIAAAACAAAAAgAAAAIAAAACAAAAAgAAAAIAAAACAAAAAgAAAAIAAAACAAAAAgAAAAIAAAAA=" rel="icon" type="image/x-icon" />
	<title>Cloud Leaks Internet Toilets</title>
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/morris.css" />
	<script	src="/js/jquery.min.js"></script>
	<script	src="/js/raphael-min.js"></script>
	<script	src="/js/morris.min.js"></script>
</head>
<body>
	<section class="rain"></section>
	<section class="content">
		<h1>Cloud Leaks Internet Toilets</h1>
		<div id="stats" style="height: 250px;"></div>
	</section>
	<script>
                var stats = new Morris.Line({
                    element: 'stats',
                    data: [
                        {  sample: 0, toilet: 0, duration: 0, volume: 0, temperature: 0, loudness: 0,
                            hue: 0, saturation: 0, brightness: 0, 
                            acidity: 0, salinity: 0, glucose: 0, pregnant: 0
                        }
                    ],
                    xkey: 'sample',
                    ykeys: ['toilet', 'duration', 'volume', 'temperature', 'loudness',
                                'hue', 'saturation', 'brightness', 
                                'acidity', 'salinity', 'glucose', 'pregnant'],
                    labels: ['Toilet', 'Duration', 'Volume', 'Tmperature', 'Loudness',
                                'Hue', 'Saturation', 'Brightness', 
                                'Acidity', 'Salinity', 'Glucose', 'Pregnant'],
                    hideHover: true,
                    resize: true
                });

                $.getJSON( "graph/stats", function( data ) {
                    stats.setData(data);
                });
                
                setInterval(function() {
                    $.getJSON( "graph/stats", function( data ) {
                        stats.setData(data);
                    });
                }, 2500);
                
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
