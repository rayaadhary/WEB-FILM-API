<?php

function trending()
{
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, 'https://api.themoviedb.org/3/trending/all/day?api_key=83947dcc2a7ecb046b933119c3ea90af'); 
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    // curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    // $headers = array();
    // $headers[] = 'Accept: application/json';
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // $result = curl_exec($ch);
    // if (curl_errno($ch)) {
    // echo 'Error:' . curl_error($ch);
    // }
    // curl_close($ch);
    $result = file_get_contents('https://api.themoviedb.org/3/trending/all/day?api_key=83947dcc2a7ecb046b933119c3ea90af');
    return json_decode($result, true);
}

function top()
{
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, 'https://api.themoviedb.org/3/movie/top_rated?api_key=83947dcc2a7ecb046b933119c3ea90af&language=en-US'); 
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    // curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    // $headers = array();
    // $headers[] = 'Accept: application/json';
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // $result = curl_exec($ch);
    // if (curl_errno($ch)) {
    // echo 'Error:' . curl_error($ch);
    // }
    // curl_close($ch);
    $result = file_get_contents('https://api.themoviedb.org/3/movie/top_rated?api_key=83947dcc2a7ecb046b933119c3ea90af&language=en-US');
    return json_decode($result, true);
}

function popular()
{
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, 'https://api.themoviedb.org/3/movie/popular?api_key=83947dcc2a7ecb046b933119c3ea90af&language=en-US&page=1'); 
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    // curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    // $headers = array();
    // $headers[] = 'Accept: application/json';
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // $result = curl_exec($ch);
    // if (curl_errno($ch)) {
    // echo 'Error:' . curl_error($ch);
    // }
    // curl_close($ch);
    $result = file_get_contents('https://api.themoviedb.org/3/movie/popular?api_key=83947dcc2a7ecb046b933119c3ea90af&language=en-US&page=1');
    return json_decode($result, true);
}

function search($q)
{
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, 'https://api.themoviedb.org/3/search/movie?api_key=83947dcc2a7ecb046b933119c3ea90af&query='.$q.'&language=en-US'); 
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    // curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    // $headers = array();
    // $headers[] = 'Accept: application/json';
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // $result = curl_exec($ch);
    // if (curl_errno($ch)) {
    // echo 'Error:' . curl_error($ch);
    // }
    // curl_close($ch);
    $result = file_get_contents('https://api.themoviedb.org/3/search/movie?api_key=83947dcc2a7ecb046b933119c3ea90af&query='.$q.'&language=en-US'); 
    return json_decode($result, true);
}

function upcoming()
{
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, 'https://api.themoviedb.org/3/movie/upcoming?api_key=83947dcc2a7ecb046b933119c3ea90af'); 
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    // curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    // $headers = array();
    // $headers[] = 'Accept: application/json';
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // $result = curl_exec($ch);
    // if (curl_errno($ch)) {
    // echo 'Error:' . curl_error($ch);
    // }
    // curl_close($ch);
    $result = file_get_contents('https://api.themoviedb.org/3/movie/upcoming?api_key=83947dcc2a7ecb046b933119c3ea90af'); 
     $data = json_decode($result,true);
    return $data;
    }

function genre()
{
    //  $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, 'https://api.themoviedb.org/3/genre/movie/list?api_key=83947dcc2a7ecb046b933119c3ea90af'); 
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    // curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    // $headers = array();
    // $headers[] = 'Accept: application/json';
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // $result = curl_exec($ch);
    // if (curl_errno($ch)) {
    // echo 'Error:' . curl_error($ch);
    // }
    // curl_close($ch);
    $result = file_get_contents('https://api.themoviedb.org/3/genre/movie/list?api_key=83947dcc2a7ecb046b933119c3ea90af');  
    return json_decode($result, true);
}

function getGenre($q)
{
    //  $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, 'https://api.themoviedb.org/3/discover/movie?api_key=83947dcc2a7ecb046b933119c3ea90af&with_genres='.$q); 
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    // curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    // $headers = array();
    // $headers[] = 'Accept: application/json';
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // $result = curl_exec($ch);
    // if (curl_errno($ch)) {
    // echo 'Error:' . curl_error($ch);
    // }
    // curl_close($ch);
    $result = file_get_contents('https://api.themoviedb.org/3/discover/movie?api_key=83947dcc2a7ecb046b933119c3ea90af&with_genres='.$q);   $data = json_decode($result,true);
    return json_decode($result, true);
}

function getDetail($q)
{
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, 'https://api.themoviedb.org/3/movie/'.$q.'?api_key=83947dcc2a7ecb046b933119c3ea90af&language=en-US'); 
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    // curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    // $headers = array();
    // $headers[] = 'Accept: application/json';
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // $result = curl_exec($ch);
    // if (curl_errno($ch)) {
    // echo 'Error:' . curl_error($ch);
    // }
    // curl_close($ch);
    $result = file_get_contents('https://api.themoviedb.org/3/movie/'.$q.'?api_key=83947dcc2a7ecb046b933119c3ea90af&language=en-US');
    return json_decode($result, true); 
}

function similiar($q)
{
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, 'https://api.themoviedb.org/3/movie/'.$q.'/similar?api_key=83947dcc2a7ecb046b933119c3ea90af&language=en-US&page=1'); 
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    // curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    // $headers = array();
    // $headers[] = 'Accept: application/json';
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // $result = curl_exec($ch);
    // if (curl_errno($ch)) {
    // echo 'Error:' . curl_error($ch);
    // }
    // curl_close($ch);
    $result = file_get_contents('https://api.themoviedb.org/3/movie/'.$q.'/similar?api_key=83947dcc2a7ecb046b933119c3ea90af&language=en-US&page=1'); 
    return json_decode($result, true);
}

function searchYoutube($q){
    $q=urlencode($q);

    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/search?part=snippet&regionCode=ID&maxResults=4&q='.$q.'&key=AIzaSyDuup9R603lc9dRwFkZsP2RjhePmMBXd54'); 
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    // curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    // $headers = array();
    // $headers[] = 'Accept: application/json';
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // $result = curl_exec($ch);
    // if (curl_errno($ch)) {
    // echo 'Error:' . curl_error($ch);
    // }
    // curl_close($ch);
    $result = file_get_contents('https://www.googleapis.com/youtube/v3/search?part=snippet&regionCode=ID&maxResults=4&q='.$q.'&key=AIzaSyDuup9R603lc9dRwFkZsP2RjhePmMBXd54');
    return json_decode($result,true);
}