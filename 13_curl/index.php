<?php

// $url = 'https://www.youtube.com/watch?v=Wasc634R6-Y';
$url = "https://jsonplaceholder.typicode.com/users";
// What is cURL
    /*
    cURL is a PHP extension, that allows us to receive and send information via the URL syntax. 
    By doing so, cURL makes it easy to communicate between different websites and domains. 
    It returns a variable of type resource.
    */
// Sample example to get data.
$resource = curl_init($url);        //starts curl

curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);       // set options (the resource, constant, true/false)

$result = curl_exec($resource);     //makes the execution and return result

$info = curl_getinfo($resource);    //gets all information


// Get response status code
$code = curl_getinfo($resource, CURLINFO_HTTP_CODE);    //to get status code 

echo "<pre>";
var_dump($code);
echo "</pre>";

echo $result;


curl_close($resource);      //close curl






// set_opt_array

// Post request
    $person = curl_init();

    $user = [
        "name"=> "Lilian Ohangla",
        "username"=>"lily",
        "email"=>"ohangla@mail.com"
    ];

    curl_setopt_array($person, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => ['content-type: application/json'],
        CURLOPT_POSTFIELDS => json_encode($user)
    ]);

    $result = curl_exec($person);

    curl_close($person);

    echo $result;

?>