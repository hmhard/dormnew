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
    $mysqli->query("UPDATE block SET blockname='" . $input['blockname'] . "', capacity=" . $input['capacity'] . ", blocktype='" . $input['type'] . "', noofdorms=" . $input['nodorms'] . ", proctor_id='" . $input['pid'] . "' WHERE blockno=" . $input['bno'] . "");
} else if ($input['action'] === 'delete') {
    $mysqli->query("UPDATE users SET deleted=1 WHERE id='" . $input['id'] . "'");
} else if ($input['action'] === 'restore') {
    $mysqli->query("UPDATE users SET deleted=0 WHERE id='" . $input['id'] . "'");
}

mysqli_close($mysqli);

echo json_encode($input);
