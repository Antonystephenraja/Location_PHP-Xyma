<?php

function getPlaceName($latitude, $longitude) {
    $accessToken = 'pk.eyJ1Ijoic2thcnRoaWtleWFuYWxwIiwiYSI6ImNrZWY4OGYxbDAxcDgzMXFiY2t4dDlhOGEifQ.I8iI7N_U4A8Zc-kOT2cnoA';
    $url = "https://api.mapbox.com/geocoding/v5/mapbox.places/{$longitude},{$latitude}.json?access_token={$accessToken}";

    // Make a GET request to the API
    $response = file_get_contents($url);

    // Parse the JSON response
    $data = json_decode($response, true);

    // Check if the response has any features
    if (!empty($data['features'])) {
        // Retrieve the first feature
        $feature = $data['features'][0];

        // Extract the place name
        $placeName = $feature['place_name'];

        return $placeName;
    }

    return null;
}

$latitude = 12.8996;
$longitude = 80.2209;
$place = getPlaceName($latitude, $longitude);

if ($place) {
    echo "Place Name: " . $place;
} else {
    echo "Failed to retrieve place name.";
}
?>