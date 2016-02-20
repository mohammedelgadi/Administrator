<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Demo</title>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src="{!! asset('js/jquery.googlemap.js') !!}"></script>

</head>
<body>
    

	<script type="text/javascript">
		google.load("maps", "3.4", {
			other_params: "sensor=false&language=fr"
		});
	</script>
	
	<div id="map" style="width: 300px; height: 300px;"></div>
	<div id="way" style="width: 300px; height: 300px;"></div>
	<script type="text/javascript">
	  $(function() {
	    $("#map").googleMap();
	    $("#map").addWay({
	    	start: "15 avenue des champs Elysées 75008 Paris", // Postal address for the start marker (obligatory)
			end:  [48.895651, 2.290569], // Postal Address or GPS coordinates for the end marker (obligatory)
			route : 'way', // Block's ID for the route display (optional)
			langage : 'english' // language of the route detail (optional)
		});
	  })
	</script>

 
 	
</body>
</html>