<?php
	error_reporting(0);
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: Content-Type, X-Token");
    header("Content-Type: application/json; charset=UTF-8");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        function insert() {
            $header = apache_request_headers();
            if ($header['X-Token'] !== '0iR4CpdOxYZ0JvN76B45691FqOBvo3yE') {
                http_response_code(401);
                echo json_encode(array("code"=>"401", "message" => "Unauthorized"));
                return;
            }
            $link = new mysqli("localhost", "root", "", "rifan");
            if ($link -> connect_errno) {
                http_response_code(500);
                echo json_encode(array("code"=>"500", "message" => "Database Error"));
                return;
            }
            $data = json_decode(file_get_contents("php://input"));
            // make sure data is not empty
            if(
                !empty($data->hum) &&
                !empty($data->temp) &&
                !empty($data->bh1750) &&
                !empty($data->ph) &&
                !empty($data->date)
            ) {
                $stmt = $link->prepare("INSERT INTO sensor(hum, temp, bh1750, ph, date) VALUES(?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssss", $data->hum, $data->temp, $data->bh1750, $data->ph, $data->date);
                $stmt->execute();
                if ($stmt->affected_rows > 0){
                    http_response_code(201);
					echo json_encode(array("code"=>"201", "message" => "Success"));
					return;
                }
                http_response_code(500);
                echo json_encode(array("code"=>"500", "message" => "Error"));
                return;
            } else {
                http_response_code(400);
                echo json_encode(array("code"=>"400", "message" => "Missing Fields"));
                return;
            }
        }
        insert();
    }
?>