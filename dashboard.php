<?php
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
	$result = $link->query('SELECT * FROM sensor ORDER BY id DESC LIMIT 100');
    $resultMonth = $link->query('SELECT DATE_FORMAT(date, "%Y-%m") as date FROM sensor GROUP BY DATE_FORMAT(date, "%Y-%m")');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Neloz - Responsive Bootstrap 4 Landing Page Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
        <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
        <meta content="Themesdesign" name="author" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">

        <!--Slider-->
        <link rel="stylesheet" href="css/owl.carousel.min.css" />
        <link rel="stylesheet" href="css/owl.theme.default.min.css" />

        <!-- Pixeden Icon -->
        <link rel="stylesheet" type="text/css" href="css/pe-icon-7.css" />

        <!-- Magnific-popup -->
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

        <!-- css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
		<link href="css/dataTable.min.css" rel="stylesheet" type="text/css" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
		<link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.min.css" rel="stylesheet" type="text/css" />
        <style>
            .progress {
                width: 150px;
                height: 150px;
                background: none;
                position: relative
            }

            .progress::after {
                content: "";
                width: 100%;
                height: 100%;
                border-radius: 50%;
                border: 6px solid #eee;
                position: absolute;
                top: 0;
                left: 0
            }

            .progress>span {
                width: 50%;
                height: 100%;
                overflow: hidden;
                position: absolute;
                top: 0;
                z-index: 1
            }

            .progress .progress-left {
                left: 0
            }

            .progress .progress-bar {
                width: 100%;
                height: 100%;
                background: none;
                border-width: 6px;
                border-style: solid;
                position: absolute;
                top: 0
            }

            .progress .progress-left .progress-bar {
                left: 100%;
                border-top-right-radius: 80px;
                border-bottom-right-radius: 80px;
                border-left: 0;
                transform-origin: center left
            }

            .progress .progress-right {
                right: 0
            }

            .progress .progress-right .progress-bar {
                left: -100%;
                border-top-left-radius: 80px;
                border-bottom-left-radius: 80px;
                border-right: 0;
                transform-origin: center right
            }

            .progress .progress-value {
                position: absolute;
                top: 0;
                left: 0
            }
            .counter-bg {
                padding: 0;
            }
            select[name="dataTable_length"] {
                padding: .375rem 1.75rem .375rem .75rem;
            }
			div.dt-buttons {
				float: right;
			}
			
			.input-daterange {
				width: 60% !important;
				float: left;
			}
        </style>

    </head>

    <body>

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="sk-chase">
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                </div>
            </div>
        </div>

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand logo" href="layout-one-1.html">
                    <img src="images/logo-dark.png" alt="" class="logo-dark" height="21">
                    <img src="images/logo-light.png" alt="" class="logo-light" height="21">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                        <li class="nav-item active">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#features" class="nav-link">Monitoring</a>
                        </li>
						<li class="nav-item">
                            <a href="#table" class="nav-link">Tabel</a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Hero Start -->
        <section class="hero-5-bg position-relative" id="home">
            <div class="container-fluid">
                <div class="row">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active d-flex align-items-center" style="background: url(images/slider/img-1.jpg) center center;">
                                <div class="bg-overlay"></div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7 col-md-10">
                                            <div class="text-center">
                                                <h1 class="text-white hero-5-title mb-0">A Clean & Minimal Landing Template</h1>
                                                <p class="text-white-70 hero-5-subtitle mt-4 f-15 mb-0">Ut enim ad minima veniam quis nostrum exercitationem ullam corporis suscipit laboriosam nisi ut aliquid a commodi consequatur Quis autem vel eum iure reprehenderit qui in ea voluptate.</p>
                                                <div class="watch-video mt-5">
                                                    <a href="#" class="btn btn-primary mr-4">Learn More</a>
                                                    <a href="http://vimeo.com/99025203" class="video-play-icon text-white"><i class="mdi mdi-play play-icon-circle text-muted mr-2"></i> 
                                                        <span class="f-14">Watch The Video!</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col end -->
                                    </div>
                                    <!-- row end -->
                                </div>
                                <!-- container end -->
                            </div>
                            <!-- carousel-item end -->

                            <div class="carousel-item d-flex align-items-center" style="background: url(images/slider/img-2.jpg) center center;">
                                <div class="bg-overlay"></div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7 col-md-10">
                                            <div class="text-center">
                                                <h1 class="text-white hero-5-title mb-0">Professional, Multipurpose Landing Page</h1>
                                                <p class="text-white-70 mt-4 hero-5-subtitle f-15 mb-0">Ut enim ad minima veniam quis nostrum exercitationem ullam corporis suscipit laboriosam nisi ut aliquid a commodi consequatur Quis autem vel eum iure reprehenderit qui in ea voluptate.</p>
                                                <div class="watch-video mt-5">
                                                    <a href="#" class="btn btn-primary mr-4">Learn More</a>
                                                    <a href="http://vimeo.com/99025203" class="video-play-icon text-white"><i class="mdi mdi-play play-icon-circle text-muted mr-2"></i> 
                                                        <span class="f-14">Watch The Video!</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col end -->
                                    </div>
                                    <!-- row end -->
                                </div>
                                <!-- container end -->
                            </div>
                            <!-- carousel-item end -->

                            <div class="carousel-item d-flex align-items-center" style="background: url(images/slider/img-3.jpg) center center;">
                                <div class="bg-overlay"></div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7 col-md-10">
                                            <div class="text-center">
                                                <h1 class="text-white hero-5-title mb-0">Performancect Solution For Small Businesses</h1>
                                                <p class="text-white-70 mt-4 hero-5-subtitle f-15 mb-0">Ut enim ad minima veniam quis nostrum exercitationem ullam corporis suscipit laboriosam nisi ut aliquid a commodi consequatur Quis autem vel eum iure reprehenderit qui in ea voluptate.</p>
                                                <div class="watch-video mt-5">
                                                    <a href="#" class="btn btn-primary mr-4">Learn More</a>
                                                    <a href="http://vimeo.com/99025203" class="video-play-icon text-white"><i class="mdi mdi-play play-icon-circle text-muted mr-2"></i> 
                                                        <span class="f-14">Watch The Video!</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col end -->
                                    </div>
                                    <!-- row end -->
                                </div>
                                <!-- container end -->
                            </div>
                            <!-- carousel-item end -->
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <div class="slide-icon">
                                <i class="pe-7s-angle-left"></i>
                            </div>
                            <span class="sr-only">Previous</span>
                        </a>

                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <div class="slide-icon">
                                <i class="pe-7s-angle-right"></i>
                            </div>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero End -->

        <!-- Fetures Start -->
        <section class="section" id="features">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="text-center mb-5">
                            <h4 class="text-uppercase mb-0">Sensor Monitoring</h4>
                            <div class="my-3">
                                <img src="images/title-border.png" alt="" class="img-fluid mx-auto d-block">
                            </div>
                            <p class="text-muted f-14">Last Update: <span id="last">2021-12-28 08:29:05</span></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="feature-box text-center px-4 py-5">
                            <div class="text-primary feature-icon mb-3">
                                <div class="progress mx-auto" id="suhu" data-value='0' data-max='100'> <span class="progress-left"> <span class="progress-bar border-primary"></span> </span> <span class="progress-right"> <span class="progress-bar border-primary"></span> </span>
                                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                        <div class="h2 font-weight-bold"  id="suhu1">0</div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-uppercase mb-1 title f-18">Suhu Udara (°C)</h6>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="feature-box text-center px-4 py-5">
                            <div class="text-primary feature-icon mb-3">
                                <div class="progress mx-auto" id="kelembapan" data-value='0' data-max='100'> <span class="progress-left"> <span class="progress-bar border-primary"></span> </span> <span class="progress-right"> <span class="progress-bar border-primary"></span> </span>
                                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                        <div class="h2 font-weight-bold" id="kelembapan1">0</div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-uppercase mb-1 title f-18">Kelembapan Tanah (%)</h6>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="feature-box text-center px-4 py-5">
                            <div class="text-primary feature-icon mb-3">
                                <div class="progress mx-auto" id="lux" data-value='0' data-max='65535'> <span class="progress-left"> <span class="progress-bar border-primary"></span> </span> <span class="progress-right"> <span class="progress-bar border-primary"></span> </span>
                                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                        <div class="h2 font-weight-bold" id="lux1">0</div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-uppercase mb-1 title f-18">Intensitas Cahaya (Lux)</h6>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="feature-box text-center px-4 py-5">
                            <div class="text-primary feature-icon mb-3">
                                <div class="progress mx-auto" id="ldr" data-value='0' data-max='100'> <span class="progress-left"> <span class="progress-bar border-primary"></span> </span> <span class="progress-right"> <span class="progress-bar border-primary"></span> </span>
                                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                        <div class="h2 font-weight-bold" id="ldr1">0</div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-uppercase mb-1 title f-18">pH Air</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fetures End -->
		
		<section class="section bg-light" id="table">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="text-center mb-5">
                        <h4 class="text-uppercase mb-0">Tabel Suhu</h4>
                        <div class="my-3">
                            <img src="images/title-border.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                        <p class="text-muted f-14">Silahkan Reload Halaman untuk mengupdate data terbaru.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!--<div class="col-md-6 pull-right" style="padding-left:0px; float: left">
                        <div class="input-group input-daterange date">
                            <input type="text" id="min-date" class="form-control date-range-filter" data-date-format="yyyy-mm-dd" placeholder="From:">
                            <div class="input-group-addon" style="padding-right:10px; padding-left:10px;">to</div>
                            <input type="text" id="max-date" class="form-control date-range-filter" data-date-format="yyyy-mm-dd" placeholder="To:">
                        </div>
                    </div>-->
					<br />
                    <table id="dataTable" class="table table-bordered">
						<thead>
							<tr>
								<th>Suhu Udara</th>
								<th>Kelembapan Tanah</th>
								<th>Intensitas Cahaya</th>
								<th>ph Air</th>
								<th>Waktu</th>
							</tr>
						</thead>
						<tbody>
							<?php
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) { ?>
										<tr>
											<td><?= $row['temp'] ?></td>
											<td><?= $row['hum'] ?></td>
											<td><?= $row['light'] ?></td>
											<td><?= $row['ph'] ?></td>
											<td><?= $row['date'].' '.$row['time'] ?></td>
										</tr>
									<?php }
								} else {
									echo "<tr><td colspan='5' style='text-align:center;'>0 data</td></tr>";
								}
							?>
						</tbody>
					</table>
                </div>
            </div>
        </div>
    </section>

        <!-- Counter Start -->
        <Section class="section counter-bg">
            <div class="counter-bg-overlay"></div>
            <div class="container">
                <div class="row align-items-center" id="counter">
                </div>
            </div>
        </Section>
        <!-- Counter End -->

        <!-- Fetures Start -->
        <section class="section" id="features">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="text-center mb-5">
                            <h4 class="text-uppercase mb-0">cHART</h4>
                            <div class="my-3">
                                <img src="images/title-border.png" alt="" class="img-fluid mx-auto d-block">
                            </div>
                            <div class="form-group">
                                <label for="selectMonth">pilih bulan grafik</label>
                                <select class="form-control" id="selectMonth">
                                    <?php
                                        if ($resultMonth->num_rows > 0) {
                                            while ($row = $resultMonth->fetch_assoc()) { ?>
                                                <option value="<?= $row['date']; ?>"><?= date_format(new DateTime($row['date']."-01"), "F Y") ?></option>
                                            <?php }
                                        }
                                    ?>
                                </select>
                            </div>
                            <button type="button" id="loadChart" class="btn btn-outline-primary">Load</button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="feature-box text-center px-4 py-5">
                            <canvas id="tempChart"></canvas>
                            <h6 class="text-uppercase mb-1 title f-18">Suhu Udara (°C)</h6>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="feature-box text-center px-4 py-5">
                            <canvas id="humChart"></canvas>
                            <h6 class="text-uppercase mb-1 title f-18">Kelembapan Tanah (%)</h6>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="feature-box text-center px-4 py-5">
                            <canvas id="lightChart"></canvas>
                            <h6 class="text-uppercase mb-1 title f-18">Intensitas Cahaya (Lux)</h6>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="feature-box text-center px-4 py-5">
                            <canvas id="phChart"></canvas>
                            <h6 class="text-uppercase mb-1 title f-18">pH Air</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fetures End -->

        <!-- Footer Start -->
        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt-3">
                        <div class="text-center footer-alt my-3">
                            <p class="f-15">2022 © Neloz. Design by Themesdesign</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer End -->

        <!-- javascript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <!-- COUNTER -->
        <script src="js/counter.int.js"></script>
        <!-- Magnific Popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnificpopup.int.js"></script>
        <!-- carousel -->
        <script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.dataTable.min.js"></script>
		<script src="js/dataTable.bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
        <!-- Main Js -->
        <script src="js/app.js"></script>
        <script>
		
			function sleep(ms) {
				return new Promise(resolve => setTimeout(resolve, ms));
			}
		
			$(document).ready(function() {

                $('#loadChart').click((e) => {
                    e.preventDefault();
                    const chart = Chart.getChart("tempChart");
                    const chart1 = Chart.getChart("humChart");
                    const chart2 = Chart.getChart("lightChart");
                    const chart3 = Chart.getChart("phChart");
                    if (chart) { 
                        chart.destroy();
                        chart1.destroy();
                        chart2.destroy();
                        chart3.destroy();
                    }
                    $('#loadChart').html('<i class="fa fa-spinner fa-pulse fa-fw"></i>')
                    let val = $('#selectMonth').val();
                    $.ajax({
                        url: 'function.php?action=chart',
                        type: 'get',
                        data: {
                            month: val
                        },
                        dataType:'json',
                        success: (response) => {
                            //suhu
                            let tempChart = $('#tempChart')[0].getContext('2d');
                            let chartTemp = new Chart(tempChart, {
                                type: 'line',
                                data: {
                                    labels: response.data.date,
                                    datasets: [
                                        {
                                            label: 'Suhu',
                                            data: response.data.temp,
                                            borderColor: 'rgba(54, 162, 235, 0.5)',
                                            backgroundColor: 'rgba(54, 162, 235, 1)'
                                        }
                                    ]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: response.data.month
                                        }
                                    }
                                }
                            })

                            //hum
                            let humpChart = $('#humChart')[0].getContext('2d');
                            let chartHum = new Chart(humChart, {
                                type: 'line',
                                data: {
                                    labels: response.data.date,
                                    datasets: [
                                        {
                                            label: 'Kelembapan',
                                            data: response.data.hum,
                                            borderColor: 'rgba(255, 99, 132, 0.5)',
                                            backgroundColor: 'rgba(255, 99, 132, 1)'
                                        }
                                    ]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: response.data.month
                                        }
                                    }
                                }
                            })

                            //light
                            let lightChart = $('#lightChart')[0].getContext('2d');
                            let chartLight = new Chart(lightChart, {
                                type: 'line',
                                data: {
                                    labels: response.data.date,
                                    datasets: [
                                        {
                                            label: 'Intensitas Cahaya',
                                            data: response.data.light,
                                            borderColor: 'rgba(75, 192, 192, 0.5)',
                                            backgroundColor: 'rgba(75, 192, 192, 1)'
                                        }
                                    ]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: response.data.month
                                        }
                                    }
                                }
                            })

                            //ph
                            let phChart = $('#phChart')[0].getContext('2d');
                            let chartPh = new Chart(phChart, {
                                type: 'line',
                                data: {
                                    labels: response.data.date,
                                    datasets: [
                                        {
                                            label: 'pH',
                                            data: response.data.ph,
                                            borderColor: 'rgba(241, 196, 15, 0.5)',
                                            backgroundColor: 'rgba(241, 196, 15, 1)'
                                        }
                                    ]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: response.data.month
                                        }
                                    }
                                }
                            })
                            $('#loadChart').html('Load')
                        }
                    })
                })

				$('#dataTable').DataTable({
					order: [[ 4, "desc" ]],
                    //searching: false,
                    dom : '<"top"Bf>rt<"bottom"ilp><"clear">',
					buttons: [
						{
							text: 'Download PDF',
							extend: 'pdf',
							className: 'btn btn-success',
							title: 'Table Data Sensor'
						}
					]
				});

                // Re-draw the table when the a date range filter changes
               
                var table = $('#dataTable').DataTable();

                $('#dataTable_filter').hide();
				
				$('.top').prepend('<div class="input-group input-daterange date"> <input type="text" id="min-date" class="form-control date-range-filter" data-date-format="yyyy-mm-dd" placeholder="From:"> <div class="input-group-addon" style="padding-right:10px; padding-left:10px;">to</div> <input type="text" id="max-date" class="form-control date-range-filter" data-date-format="yyyy-mm-dd" placeholder="To:"> </div>')
				
				$('.input-daterange input').each(function() {
					$(this).datepicker({});
				});
				
				$.fn.dataTable.ext.search.push(
					function(settings, data, dataIndex) {
						var min = $('#min-date').val();
						var max = $('#max-date').val();
						var createdAt = data[4] || 0; // Our date column in the table
						if ((min == "" || max == "") || (moment(createdAt).isSameOrAfter(min+" 00:00:00") && moment(createdAt).isSameOrBefore(max+" 23:59:59"))) {
							return true;
						}
						return false;
					}
				);
				
				$('.date-range-filter').change(function() {
                    table.draw();
                });
				
				(async () => {
					while(true){
						$.ajax({
							url: 'function.php?action=latest',
							type: 'get',
							dataType:'json',
							success: (data) => {
								//console.log(data)
								$('#suhu').attr('data-value', data.temp)
								$('#suhu1').html(data.temp)
								$('#kelembapan').attr('data-value', data.hum)
								$('#kelembapan1').html(data.hum)
								$('#lux').attr('data-value', data.light)
								$('#lux1').html(data.light)
								$('#ldr').attr('data-value', data.ph)
								$('#ldr1').html(data.ph)
								$('#last').html(data.date+' '+data.time)
								
								$(".progress").each(function() {

									var value = $(this).attr('data-value');
									var max = $(this).attr('data-max');
									var val = value / max * 100;
									var left = $(this).find('.progress-left .progress-bar');
									var right = $(this).find('.progress-right .progress-bar');

									if (val > 0) {
									if (val <= 50) {
										right.css('transform', 'rotate(' + percentageToDegrees(val) + 'deg)')
									} else {
										right.css('transform', 'rotate(180deg)')
										left.css('transform', 'rotate(' + percentageToDegrees(val - 50) + 'deg)')
									}
									}

									})

									function percentageToDegrees(percentage) {

										return percentage / 100 * 360

									}
							}
						})
						await sleep(5000)
					}
				})()
			} );
			
            $(".progress").each(function() {

                var value = $(this).attr('data-value');
				var max = $(this).attr('data-max');
				var val = value / max * 100;
                var left = $(this).find('.progress-left .progress-bar');
                var right = $(this).find('.progress-right .progress-bar');

                if (val > 0) {
                if (val <= 50) {
                    right.css('transform', 'rotate(' + percentageToDegrees(val) + 'deg)')
                } else {
                    right.css('transform', 'rotate(180deg)')
                    left.css('transform', 'rotate(' + percentageToDegrees(val - 50) + 'deg)')
                }
                }

                })

                function percentageToDegrees(percentage) {

					return percentage / 100 * 360

				}
        </script>

    </body>
</html>