<?php
    error_reporting(1);
    session_start();
	
	$link = new mysqli("localhost", "root", "", "rifan");
	if ($link -> connect_errno) {
		http_response_code(500);
		echo json_encode(array("code"=>"500", "message" => "Database Error"));
		return;
	}
	
    if ($_GET['action'] == 'login') {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $arr = array("status"=>"fail", "message"=>"username / password salah!");
            $username = $link->real_escape_string($_POST["user"]);
            $password = $link->real_escape_string($_POST["pass"]);
            $stmt = $link->prepare("SELECT * FROM user WHERE username=?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $resultData = $result->fetch_assoc();
                if (password_verify($password, $resultData["password"])) {
                    $arr = array("status"=>"success", "message"=>"Berhasil login");
                    $_SESSION['user'] = $resultData["username"];
                }
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
                $month = $_GET['month'];
                $result = $link->query("SELECT ROUND(AVG(`hum`), 2) as hum, ROUND(AVG(`temp`), 2) as temp, ROUND(AVG(`light`), 2) as light, ROUND(AVG(`ph`), 2) as ph, DATE_FORMAT(date, '%d') as day FROM sensor WHERE date LIKE '$month%' GROUP BY date");
                $data = array('status'=>'success');
                $data['data'] = array();
                $data['data']['month'] = date_format(new DateTime($month."-01"), "F Y");
                $data['data']['date'] = array();
                $data['data']['hum'] = array();
                $data['data']['temp'] = array();
                $data['data']['light'] = array();
                $data['data']['ph'] = array();
                while($row = $result->fetch_assoc()){
                    array_push($data['data']['date'], $row['day']);
                    array_push($data['data']['hum'], $row['hum']);
                    array_push($data['data']['temp'], $row['temp']);
                    array_push($data['data']['light'], $row['light']);
                    array_push($data['data']['ph'], $row['ph']);
                }
                echo json_encode($data);
            }
        }
    }
?>