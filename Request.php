<?php

$curl = curl_init();

// curl_setopt_array($curl, [
// 	CURLOPT_URL => "https://google-jobs.p.rapidapi.com/?keyword=Desenvolvedor%20PHP&location=Brasil&offset=0",
// 	CURLOPT_RETURNTRANSFER => true,
// 	CURLOPT_FOLLOWLOCATION => true,
// 	CURLOPT_ENCODING => "",
// 	CURLOPT_MAXREDIRS => 10,
// 	CURLOPT_TIMEOUT => 30,
// 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// 	CURLOPT_CUSTOMREQUEST => "GET",
// 	CURLOPT_HTTPHEADER => [
// 		"X-RapidAPI-Host: google-jobs.p.rapidapi.com",
// 		"X-RapidAPI-Key: 2e1d81fe27msh126158a808415e3p1b9170jsn09c1b22997be"
// 	],
// ]);

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
//     \"location\": \"Brasil\"\r
// }",
// 	CURLOPT_HTTPHEADER => [
// 		"X-RapidAPI-Host: linkedin-jobs-search.p.rapidapi.com",
// 		"X-RapidAPI-Key: 2e1d81fe27msh126158a808415e3p1b9170jsn09c1b22997be",
// 		"content-type: application/json"
// 	],
// ]);



// curl_setopt_array($curl, [
// 	CURLOPT_URL => "https://jsearch.p.rapidapi.com/search?query=Desenvolvedor%20PHP%20in%20Brasil%20via%20linkedin&num_pages=1",
// 	CURLOPT_RETURNTRANSFER => true,
// 	CURLOPT_FOLLOWLOCATION => true,
// 	CURLOPT_ENCODING => "",
// 	CURLOPT_MAXREDIRS => 10,
// 	CURLOPT_TIMEOUT => 30,
// 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// 	CURLOPT_CUSTOMREQUEST => "GET",
// 	CURLOPT_HTTPHEADER => [
// 		"X-RapidAPI-Host: jsearch.p.rapidapi.com",
// 		"X-RapidAPI-Key: 2e1d81fe27msh126158a808415e3p1b9170jsn09c1b22997be"
// 	],
// ]);

curl_setopt_array($curl, [
	CURLOPT_URL => "https://linkedin-jobs-search.p.rapidapi.com/",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "{\r
    \"search_terms\": \"desenvolvedor php\",\r
    \"location\": \"Brasil\"\r
}",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: linkedin-jobs-search.p.rapidapi.com",
		"X-RapidAPI-Key: fce3ed9cb1msh8033dbba107253bp11a934jsn4b81d2ea74ff",
		"content-type: application/json"
	],
]);
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

// if ($err) {
// 	echo "cURL Error #:" . $err;
// } else {
// 	return $response;
// }
