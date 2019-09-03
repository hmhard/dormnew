<?php

// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
// Note that is just an example. Should take precautions such as filtering the input data.

// header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);

$mysqli = new mysqli('localhost', 'root', 'vertrigo', 'dormnew');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

if ($input['action'] === 'edit') {
    $mysqli->query("UPDATE dorm SET dormname='" . $input['dormname'] . "', capacity=" . $input['capacity'] . " WHERE dormno=" . $input['dno'] . "");
} else if ($input['action'] === 'delete') {
    $mysqli->query("UPDATE users SET deleted=1 WHERE id='" . $input['id'] . "'");
} else if ($input['action'] === 'restore') {
    $mysqli->query("UPDATE users SET deleted=0 WHERE id='" . $input['id'] . "'");
}

mysqli_close($mysqli);

echo json_encode($input);
