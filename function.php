<?php
    error_reporting(0);
    session_start();
	
	$link = new mysqli("localhost", "root", "", "rifan");
	if ($link -> connect_errno) {
		http_response_code(500);
		echo json_encode(array("code"=>"500", "message" => "Database Error"));
		return;
	}
	
    if ($_GET['action'] == 'login') {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents("php://input"));
            $arr = array("status"=>"fail", "message"=>"username / password salah!");
            if ($_POST['user'] == 'rifan' && $_POST['pass'] == 'pekalongan10') {
                $arr = array("status"=>"success", "message"=>"Berhasil login");
                $_SESSION['user'] = "rifan";
            }
            echo json_encode($arr);
        }
    } else {
        if (!isset($_SESSION['user'])){
            http_response_code(403);
            echo json_encode(array("code"=>"403", "message" => "Unauthorize"));
            return;
        } else {
            if ($_GET['action'] == 'latest') {
                $result = $link->query('SELECT * FROM sensor ORDER BY id DESC LIMIT 1');
                echo json_encode($result->fetch_assoc());
            }
            if ($_GET['action'] == 'chart') {
                $result = $link->query('SELECT ROUND(AVG(`hum`), 2) as hum, ROUND(AVG(`temp`), 2) as temp, ROUND(AVG(`light`), 2) as light, ROUND(AVG(`ph`), 2) as ph, DATE(date) as date FROM sensor GROUP BY date');
                while($row = $result->fetch_assoc()){
                    $rows[$row['date']] = $row;
                }
                echo json_encode($rows);
            }
        }
    }
?>