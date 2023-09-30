<?php
$cid = 1417698146920752799; //CID of a place can be genrated from https://pleper.com/index.php?do=tools&sdo=cid_converter
//execute curl
$url = 'https://maps.googleapis.com/maps/api/place/details/json?cid='.$cid.'&key=<API-KEY>';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
$data = curl_exec($ch);
curl_close($ch);

$arrayData = json_decode($data, true); // json object to array conversion
$result = $arrayData['result'];

$total_users    = $result['user_ratings_total']; // display total number of users who rated
$overall_rating = $result['rating']; // display total average rating
$reviews        = $result['reviews'];   //holds information like author_name, author_url, language, profile_photo_url, rating, relative_time_description, text, time

//display on view
var_dump($total_users);
var_dump($overall_ratings);
var_dump($reviews);
?>


