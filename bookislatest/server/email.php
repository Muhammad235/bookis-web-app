<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
$email = $_POST['email'];
//echo $email;
// Initialize cURL.
// $ch = curl_init();

// // Set the URL that you want to GET by using the CURLOPT_URL option.
// curl_setopt($ch, CURLOPT_URL, "https://emailvalidation.abstractapi.com/v1/?api_key=20986ee32543489bbf582bf598f7661b&email=$email");

// // Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// // Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

// // Execute the request.
// $data = curl_exec($ch);

// // Close the cURL handle.
// curl_close($ch);

// // Print the data out onto the page.
// //echo $data;


$ch = curl_init();

curl_setopt_array($ch,[
    // Set the URL that you want to GET by using the CURLOPT_URL option.
    CURLOPT_URL => "https://emailvalidation.abstractapi.com/v1/?api_key=20986ee32543489bbf582bf598f7661b&email=$email",
    // Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
    CURLOPT_RETURNTRANSFER => true,
    // Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
    CURLOPT_FOLLOWLOCATION => true
]);

$response = curl_exec($ch);

$data = json_decode($response, true);

if($data['deliverability'] === "UNDELIVERABLE" || $data['is_valid_format']['value'] === false || $data['is_disposable_email']['value'] === 'false' || $data['is_free_email']['value'] === false || $data['quality_score'] < 0.7){
    echo "Please provide a valid email";

}


function check_network_connection() {
    $connected = @fsockopen("www.google.com", 80);
    if ($connected){
        $is_conn = true; //action when connected
        fclose($connected);
    }else{
        $is_conn = false; //action in connection failure
    }
    return $is_conn;
}

if (check_network_connection()) {
    // Perform API call to validate email
    // code to validate email using API
} else {
    // Show error message indicating need for network connection to validate email
    echo "No network connection, Please try again later";
}



}




?>







