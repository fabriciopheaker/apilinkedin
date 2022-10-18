<?php

$curl = curl_init();

// curl_setopt_array($curl, [
// 	CURLOPT_URL => "https://linkedin-jobs-search.p.rapidapi.com/",
// 	CURLOPT_RETURNTRANSFER => true,
// 	CURLOPT_FOLLOWLOCATION => true,
// 	CURLOPT_ENCODING => "",
// 	CURLOPT_MAXREDIRS => 10,
// 	CURLOPT_TIMEOUT => 30,
// 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// 	CURLOPT_CUSTOMREQUEST => "POST",
// 	CURLOPT_POSTFIELDS => "{\r
//     \"search_terms\": \"desenvolvedor php\",\r
//     \"location\": \"Brazil\"\r
// }",
// 	CURLOPT_HTTPHEADER => [
// 		"X-RapidAPI-Host: linkedin-jobs-search.p.rapidapi.com",
// 		"X-RapidAPI-Key: 9f6437b109msh6c40dc08e4bf1a7p1a2c84jsnc0f885d0e53e",
// 		"content-type: application/json"
// 	],
// ]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

// if ($err) {
// 	echo "cURL Error #:" . $err;
// } else {
// 	return $response;
// }
