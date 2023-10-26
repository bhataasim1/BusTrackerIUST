<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{asset ('images/favicon.ico')}}" type="image/x-icon">
    <title>Student Dashboard</title>
</head>
<body>
    <p>Tracking Bus</p>
    <div id="map" style="height: 500px;"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxiV9BrVa6Ia8jVOSxcr4iJZE6jDYUqgU&callback=initMap" async defer></script>
    {{-- <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 33.921379, lng: 75.011981},
                zoom: 13
            });
            var marker = new google.maps.Marker({
                position: {lat: 33.921379, lng: 75.011981},
                map: map
            });
        }
     </script> --}}

<button id="startTracking">Start Tracking</button>
    
<script>
    var map;
    var marker;

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 28.6542, lng: 77.2373},
            zoom: 13
        });
        marker = new google.maps.Marker({
            position: {lat: 28.6542, lng: 77.2373},
            map: map
        });
    }

    document.getElementById('startTracking').addEventListener('click', function() {
        if ("geolocation" in navigator) {
            // Extract the bus_no from the URL dynamically
            var urlParts = window.location.pathname.split('/');
            var bus_no = urlParts[urlParts.length - 1];

            // Start tracking immediately
            trackLocation(bus_no);

            // Set up tracking to occur every 5 seconds
            setInterval(function() {
                trackLocation(bus_no);
            }, 5000); // 5000 milliseconds (5 seconds)
        } else {
            alert("Geolocation is not available in your browser.");
        }
    });

    function trackLocation(bus_no) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            // Call sendLocation with the retrieved bus_no
            sendLocation(bus_no, latitude, longitude);

            // Update the marker's position on the map
            var newLatLng = new google.maps.LatLng(latitude, longitude);
            marker.setPosition(newLatLng);
            map.setCenter(newLatLng);
        }, function(error) {
            console.error('Geolocation error:', error);
        });
    }

    function sendLocation(bus_no, latitude, longitude) {
        // Use AJAX to send the latitude and longitude to your Laravel controller
        fetch(`/updatebus/${bus_no}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}', // Add CSRF token if needed
            },
            body: JSON.stringify({
                latitude: latitude,
                longitude: longitude,
            }),
        })
        .then(response => response.json())
        .then(data => {
            console.log('Location updated successfully:', data.message);
        })
        .catch(error => {
            console.error('Failed to update location:', error);
        });
    }
</script>

</body>
</html>