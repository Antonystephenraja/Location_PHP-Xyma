<!DOCTYPE html>
<html>
<head>
    <title>Location Map</title>
    <script src="https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.js"></script>
    <link href="https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.css" rel="stylesheet" />
    <style>
        #map {
            height: 600px;
            width: 900px;
        }
    </style>
</head>
<body>
    <div id="map"></div>
    <script>
        var indiaBounds = [
            [8.4, 68.7], 
            [37.1, 97.4] 
        ];
        var map = L.map('map', {
            maxBounds: indiaBounds,
            maxZoom: 18
        }).setView([20.5937, 98.9629], 5.3);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: '&copy; <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 20,
            id: 'mapbox/streets-v11',
            accessToken: 'pk.eyJ1Ijoic2thcnRoaWtleWFuYWxwIiwiYSI6ImNrZWY4OGYxbDAxcDgzMXFiY2t4dDlhOGEifQ.I8iI7N_U4A8Zc-kOT2cnoA' // Replace with your Mapbox access token
        }).addTo(map);

        function addMarker(lat, lon, logoPath) {
            var customIcon = L.icon({
                iconUrl: logoPath, 
                iconSize: [20, 20]
            });

            var marker = L.marker([lat, lon], { icon: customIcon }).addTo(map);
        }

        var locations = [
            {
                latitude: 12.991112712718312,
                longitude:  80.2430963278796,
                logoPath: './image/cylinder.png' 
            },
            {
                latitude: 13.41442905062648, 
                longitude: 80.09432842234213,
                logoPath: './image/cylinder.png' 
            },
            {
                latitude: 28.15947313578188,
                longitude:  76.8385356380778,
                logoPath: './image/cylinder.png'
            },
            {
                latitude: 18.5204,
                longitude: 73.8567,
                logoPath: './image/cylinder.png'
            } // New location coordinates
        ];
        locations.forEach(function(location) {
            addMarker(location.latitude, location.longitude, location.logoPath);
        });
        var latlngs = [
            [locations[0].latitude, locations[0].longitude],
            [locations[1].latitude, locations[1].longitude],
            [locations[2].latitude, locations[2].longitude]
        ];
        var animatedPolyline = L.polyline(latlngs, {
            color: 'blue',
            dashArray: '10, 10',
            dashOffset: '0',
            className: 'animated-polyline'
        }).addTo(map);
        var movingMarker = L.Marker.movingMarker(latlngs, [5000, 5000], {
            icon: L.icon({
                iconUrl: './image/map.png',
                iconSize: [10, 10]
            }),
            autostart: true,
            loop: true,
            keepInView: true
        }).addTo(map);
        movingMarker.on('end', function() {
            movingMarker.moveTo(latlngs, 200);
        });
        movingMarker.start();
    </script>
</body>
</html>
