<?php
	$link = mysqli_connect('localhost', 'telkombc_rifan', 'kemenanganpasti17', 'telkombc_rifan');
	if(!$link) die("Can't connect to database");
	
	$user = 'rifan';
	$pass = 'pekalongan10';
	$date = date('Y-m-d');
	$time = date('H:i:s');
	
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['hcsr_distance'])){
		if(!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != $user || !isset($_SERVER['PHP_AUTH_PW']) || $_SERVER['PHP_AUTH_PW'] != $pass){
			header('WWW-Authenticate: Basic realm="My Website"');
			header('HTTP/1.0 401 Unauthorized');
			exit;
		}
		$query = mysqli_query($link, "INSERT INTO iot (db_date,db_time,hcsr_distance) VALUES ($date,$time,$_POST[hcsr_distance])");
		if(!query) die("Mysql query error");
	}
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Sensor</title>
		<meta http-equiv="refresh" content="5" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@400;700&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body style="font-family: 'Courier Prime', monospace;">
		<br />
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-lg-8">
					<div class="card border-primary">
						<div class="card-body text-center">
							<h1 class="card-title font-weight-bold">DATA SENSOR</h1>
							<p>Last Update : 
								<?php
									$query = mysqli_query($link, "SELECT db_date, db_time FROM iot ORDER BY id DESC limit 1");
									$data = mysqli_fetch_row($query);
									echo $data[0]." | ".$data[1];
								?>
							</p>
							<div class="row justify-content-sm-center">
								<div class="col-sm-5">
									<div class="card border-success">
										<div class="card-header border-success">
											<h4 class="font-weight-bold">SENSOR HCSR</h4>
										</div>
										<div class="card-body">
											<h5 class="font-weight-bold">
												<?php
													$query = mysqli_query($link, "SELECT hcsr_distance FROM iot ORDER BY id DESC limit 1");
													$data = mysqli_fetch_row($query);
													echo $data[0];
												?>
											</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
						<br />
					</div>
				</div>
			</div>
		</div>
	</body>
</html>