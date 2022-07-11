<?php
    error_reporting(1);
    session_start();
	
	include_once 'config.php';
	
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
            return;
        }
    } else {
        if (!isset($_SESSION['user'])){
            http_response_code(403);
            echo json_encode(array("code"=>"403", "message" => "Unauthorize"));
            return;
        } else {
            if(isset($_GET['type']) && $_GET['type'] == "pembibitan" || $_GET['type'] == "pertumbuhan") {
                $type = $_GET['type'];
                if ($type == 'pembibitan') {
                    if ($_GET['action'] == 'latest') {
                        $result = $link->query("SELECT * FROM sensor_pembibitan ORDER BY id DESC LIMIT 1");
                        echo json_encode($result->fetch_assoc());
                        return;
                    }
                    if ($_GET['action'] == 'chart') {
                        $month = $_GET['month'];
                        $result = $link->query("SELECT ROUND(AVG(`temp_udr`), 2) as temp_udr, ROUND(AVG(`hum_udr`), 2) as hum_udr, ROUND(AVG(`temp_tnh`), 2) as temp_tnh, ROUND(AVG(`hum_tnh`), 2) as hum_tnh, ROUND(AVG(`light`), 2) as light, DATE_FORMAT(date, '%d') as day FROM sensor_pembibitan WHERE date LIKE '$month%' GROUP BY date");
                        $data = array('status'=>'success');
                        $data['data'] = array();
                        $data['data']['month'] = date_format(new DateTime($month."-01"), "F Y");
                        $data['data']['date'] = array();
                        $data['data']['temp_udr'] = array();
                        $data['data']['hum_udr'] = array();
                        $data['data']['temp_tnh'] = array();
                        $data['data']['hum_tnh'] = array();
                        $data['data']['light'] = array();
                        while($row = $result->fetch_assoc()){
                            array_push($data['data']['date'], $row['day']);
                            array_push($data['data']['temp_udr'], $row['temp_udr']);
                            array_push($data['data']['hum_udr'], $row['hum_udr']);
                            array_push($data['data']['temp_tnh'], $row['temp_tnh']);
                            array_push($data['data']['hum_tnh'], $row['hum_tnh']);
                            array_push($data['data']['light'], $row['light']);
                        }
                        echo json_encode($data);
                        return;
                    } 
                }
                if ($type == 'pertumbuhan') {
                    if ($_GET['action'] == 'latest') {
                        $result = $link->query("SELECT * FROM sensor_pertumbuhan ORDER BY id DESC LIMIT 1");
                        echo json_encode($result->fetch_assoc());
                        return;
                    }
                    if ($_GET['action'] == 'chart') {
                        $month = $_GET['month'];
                        $result = $link->query("SELECT ROUND(AVG(`temp_udr`), 2) as temp_udr, ROUND(AVG(`hum_udr`), 2) as hum_udr, ROUND(AVG(`temp_tnh`), 2) as temp_tnh, ROUND(AVG(`hum_tnh`), 2) as hum_tnh, ROUND(AVG(`light`), 2) as light, ROUND(AVG(`ph`), 2) as ph, DATE_FORMAT(date, '%d') as day FROM sensor_pertumbuhan WHERE date LIKE '$month%' GROUP BY date");
                        $data = array('status'=>'success');
                        $data['data'] = array();
                        $data['data']['month'] = date_format(new DateTime($month."-01"), "F Y");
                        $data['data']['date'] = array();
                        $data['data']['temp_udr'] = array();
                        $data['data']['hum_udr'] = array();
                        $data['data']['temp_tnh'] = array();
                        $data['data']['hum_tnh'] = array();
                        $data['data']['light'] = array();
                        $data['data']['ph'] = array();
                        while($row = $result->fetch_assoc()){
                            array_push($data['data']['date'], $row['day']);
                            array_push($data['data']['temp_udr'], $row['temp_udr']);
                            array_push($data['data']['hum_udr'], $row['hum_udr']);
                            array_push($data['data']['temp_tnh'], $row['temp_tnh']);
                            array_push($data['data']['hum_tnh'], $row['hum_tnh']);
                            array_push($data['data']['light'], $row['light']);
                            array_push($data['data']['ph'], $row['ph']);
                        }
                        echo json_encode($data);
                        return;
                    }
                }
            }
        }
    }
    header('HTTP/1.0 404 Not Found', true, 404);
    die();
?>