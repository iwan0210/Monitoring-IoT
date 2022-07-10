<?php
    if(!isset($_GET['type']) || $_GET['type'] != "pembibitan" && $_GET['type'] != "pertumbuhan") {
        include_once 'main.php';
        die();
    }
    setlocale(LC_ALL, 'id_ID.UTF8', 'id_ID.UTF-8', 'id_ID.8859-1', 'id_ID', 'IND.UTF8', 'IND.UTF-8', 'IND.8859-1', 'IND', 'Indonesian.UTF8', 'Indonesian.UTF-8', 'Indonesian.8859-1', 'Indonesian', 'Indonesia', 'id', 'ID');
	session_start();	
	if(!isset($_SESSION['user'])) {
		header('Location: login.php');
	}
	$link = new mysqli("localhost", "root", "", "rifan");
	if ($link -> connect_errno) {
		http_response_code(500);
		echo json_encode(array("code"=>"500", "message" => "Database Error"));
		return;
	}

    if ($_GET['type'] == 'pembibitan') {
        include_once 'pembibitan.php';
    } elseif ($_GET['type'] == 'pertumbuhan') {
        include_once 'pertumbuhan.php';
    }

?>