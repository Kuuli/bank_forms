<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  try {

    print_r($_POST);
    
    exit;

    $jsonPayload = [
      "ok" => false,
      "error" => null,
      "msg" => null
    ];


    // $jsonPayload['ok'] = true;
    // $jsonPayload['msg'] = "Successfully executed";
    // echo json_encode($jsonPayload);



  } catch (\PDOException $p) {
    $jsonPayload['msg'] = "Sorry! Adding form failed. An internal error occured";
    $jsonPayload['error'] = $p->getMessage();
    echo json_encode($jsonPayload);
  }
} else {
  header("HTTP/1.0 403 Access denied");
}
