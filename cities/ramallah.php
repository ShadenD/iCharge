<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramallah</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        #map {
            height: 100%;
            width: 100%;
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script>
        function initMap() {
            var ramallah = {lat: 31.907, lng: 35.203};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: ramallah
            });
            var marker = new google.maps.Marker({
                position: ramallah,
                map: map
            });
        }
    </script>
</head>
<body onload="initMap()">
    <div id="map"></div>
</body>
</html>
