<?php

// $apiKey = 'db9115d8783279f12e064aa509c8d0ca';
// $ip = '152.58.227.197';

// $url = "http://api.ipstack.com/$ip?access_key=$apiKey";
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// $response = curl_exec($curl);
// curl_close($curl);

// $data = json_decode($response, true);

// if ($data && isset($data['city'], $data['region_name'], $data['country_name'], $data['latitude'], $data['longitude'])) {
//     $city = $data['city'];
//     $region = $data['region_name'];
//     $country = $data['country_name'];
//     $latitude = $data['latitude'];
//     $longitude = $data['longitude'];

//     echo "IP: $ip\n";
//     echo "Location: $city, $region, $country\n";
//     echo "Latitude: $latitude\n";
//     echo "Longitude: $longitude";
// } else {
//     echo "Unable to retrieve location information for the IP: $ip";
// }

// $apiKey = '6DM2WRfuliR6yKEuSP6XVqinam4j9koE';
// $msisdn = '5754180682159'; // Replace with the MSISDN you want to look up

// $url = "http://apilayer.net/api/validate?access_key=$apiKey&number=$msisdn";

// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// $response = curl_exec($curl);
// curl_close($curl);

// $data = json_decode($response, true);

// if ($data && isset($data['country_name'])) {
//     $country = $data['country_name'];

//     echo "MSISDN: $msisdn\n";
//     echo "Country: $country";
// } else {
//     echo "Unable to retrieve location information for the MSISDN: $msisdn";
// }
// $apiKey = 'AIzaSyDsxpnLbSVtV8b8cdgsiOpMKM7a1wmV_4k';
// $ip = '157.245.96.157'; // Replace with the IP address you want to look up

// $url = "https://www.googleapis.com/geolocation/v1/geolocate?key=$apiKey";

// $data = array(
//     'considerIp' => false,
//     'wifiAccessPoints' => array(),
//     'cellTowers' => array(),
//     'homeMobileCountryCode' => 0,
//     'homeMobileNetworkCode' => 0
// );

// $data_string = json_encode($data);

// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_POST, true);
// curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
// curl_setopt($curl, CURLOPT_HTTPHEADER, array(
//     'Content-Type: application/json',
//     'Content-Length: ' . strlen($data_string)
// ));

// $response = curl_exec($curl);
// curl_close($curl);

// $result = json_decode($response, true);

// if (isset($result['location']['lat'], $result['location']['lng'])) {
//     $latitude = $result['location']['lat'];
//     $longitude = $result['location']['lng'];

//     echo "IP: $ip\n";
//     echo "Latitude: $latitude\n";
//     echo "Longitude: $longitude";
// } else {
//     echo "Unable to retrieve location information for the IP: $ip";
// }

// $apiKey = '00a260073450ee35ac1e2dd8c73dc29a';
// $msisdn = 'YOUR_MSISDN'; // Replace with the MSISDN you want to look up

// $url = "http://apilayer.net/api/validate?access_key=$apiKey&number=$msisdn";

// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// $response = curl_exec($curl);
// curl_close($curl);

// $data = json_decode($response, true);

// if ($data && isset($data['country_name'])) {
//     $country = $data['country_name'];

//     echo "MSISDN: $msisdn\n";
//     echo "Country: $country";
// } else {
//     echo "Unable to retrieve location information for the MSISDN: $msisdn";
// }


$ip = '152.58.223.46'; // Replace with the IP address you want to look up

$url = "http://ip-api.com/json/$ip";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
curl_close($curl);

$data = json_decode($response, true);

if ($data && $data['status'] === 'success') {
    $country = $data['country'];
    $region = $data['regionName'];
    $city = $data['city'];
    $latitude = $data['lat'];
    $longitude = $data['lon'];

    echo "IP: $ip\n";
    echo "Country: $country\n";
    echo "Region: $region\n";
    echo "City: $city\n";
    echo "Latitude: $latitude\n";
    echo "Longitude: $longitude";
} 
else 
{
    echo "Unable to retrieve location information for the IP: $ip";
}



?> 
<!-- <script>
    fetch('http://ip-api.com/json/157.245.96.157')
  .then(res => res.json())
  .then(res => console.log(res));
</script> -->
