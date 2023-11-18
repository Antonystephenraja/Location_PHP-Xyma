<?php
$customerBaId = 'TNPA52350670'; 
$msisdn = '5754180682160';

$apiUrl = "https://openapi.airtel.in/locate/apis/customers/$customerBaId/resources/$msisdn/location";
$response = file_get_contents($apiUrl);
if ($response !== false) {
    $data = json_decode($response, true);
    if (isset($data['location'])) {
        $location = $data['location'];
        echo 'Location: ' . $location;
    } else {
        echo 'Location not found for the given mobile number.';
    }
} else {
    echo 'Failed to retrieve location data. Please check your API endpoint and parameters.';
}
?>
