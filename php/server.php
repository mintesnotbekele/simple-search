<?php
// Example from Laravel framework 
return call_user_func(function () {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $publicDir = __DIR__ . '/public';
    $uri = urldecode($uri);
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_URL, 'https://jsonplaceholder.typicode.com/comments?postId=3');
    // $result = curl_exec($ch);
    // curl_close($ch);
    // $obj = json_decode($result);
    // echo $result;
     $requested = $publicDir . '/' . $uri;
     
    if ($uri !== '/' && file_exists($requested)) {
        return false;
    }
 
    require_once $publicDir . '/index.php';
});