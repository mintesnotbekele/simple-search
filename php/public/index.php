<?php

/**
 * https://www.php.net/manual/en/curl.examples-basic.php
 */
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
$method = $_SERVER['REQUEST_METHOD'];
$request = $_SERVER['REQUEST_URI'];
/* Based on the method, use the arguments to figure out
   whether you're working with an individual or a collection, 
   then do your processing, and ultimately set $returnObject */
  
   switch ($method) {
    case 'POST':
      do_something_with_post($request);  
      break;
    case 'GET':
      handle_getComments($request);  
      break;
    default:
      handle_error($request);  
      break;
  }

  function handle_getComments($request){
   
    if($_SERVER['REQUEST_URI'] == "/getComments")
    {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, 'https://jsonplaceholder.typicode.com/comments?postId=3');
    $result = curl_exec($ch);
    curl_close($ch);
    $obj = json_decode($result);
    echo $result;
     }
    else
    {
        echo "error";
    }
  }
