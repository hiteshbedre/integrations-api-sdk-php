<?php
// URL to make HTTP request
$url = "http://www.google.com";

// Use file_get_contents to send HTTP GET request
$response = file_get_contents($url);

// Check if the request was successful
if ($response === FALSE) {
    // Handle error
    echo "Error making HTTP request";
} else {
    // Print response
    echo $response;
}
?>
