<?php
    $resultMonth = $link->query("SELECT DATE_FORMAT(date, '%Y-%m') as date FROM sensor_pembibitan GROUP BY DATE_FORMAT(date, '%Y-%m')");
    $resultSettings = $link->query("SELECT * FROM settings WHERE type='pembibitan'")->fetch_assoc();
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
        <link rel="shortcut icon" href="images/icon/favicon.ico">

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
		<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css" />
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
                <a class="navbar-brand logo" href="#">
                    <img src="images/logo.png" alt="" class="logo-dark" height="31">
                    <img src="images/logo.png" alt="" class="logo-light" height="31">
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
                            <a href="#chart" class="nav-link">Grafik</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pindah" onclick="pindah(event)" class="nav-link">Pindah</a>
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
                            <div class="carousel-item active d-flex align-items-center" style="background: url(images/slider/gambar1.webp) center center;">
                                <div class="bg-overlay"></div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7 col-md-10">
                                            <div class="text-center">
                                                <h1 class="text-white hero-5-title mb-0">Sistem Monitoring Smart Greenhouse Melon</h1>
                                                <p class="text-white-70 hero-5-subtitle mt-4 f-15 mb-0">Selamat datang di Web ini. Ini merupakan tampilan dashboard untuk monitoring pembibitan tanaman melon.</p>
                                            </div>
                                        </div>
                                        <!-- col end -->
                                    </div>
                                    <!-- row end -->
                                </div>
                                <!-- container end -->
                            </div>
                            <!-- carousel-item end -->

                            <div class="carousel-item d-flex align-items-center" style="background: url(images/slider/gambar2.webp) center center;">
                                <div class="bg-overlay"></div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7 col-md-10">
                                            <div class="text-center">
                                                <h1 class="text-white hero-5-title mb-0">About</h1>
                                                <p class="text-white-70 mt-4 hero-5-subtitle f-15 mb-0">SIMON-SGM merupakan Sistem Monitoring Smart Green House Melon yang dapat memantau kondisi suhu udara, kelembapan udara, suhu tanah, kelembapan tanah, serta intensitas cahaya pada budidaya tanaman melon melalui web.</p>
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

                        <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
                            <div class="slide-icon">
                                <i class="pe-7s-angle-left"></i>
                            </div>
                            <span class="sr-only">Previous</span>
                        </a>

                        <a class="carousel-control-next" href="#" role="button" data-slide="next">
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
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box text-center px-4 py-5">
                            <div class="text-primary feature-icon mb-3">
                                <div class="progress mx-auto" id="temp_udr" data-value='0' data-max='100' data-alert-min='<?= $resultSettings["temp_udr_min"] ?>' data-alert-max='<?= $resultSettings["temp_udr_max"] ?>' data-title="Suhu Udara"> <span class="progress-left"> <span class="progress-bar border-primary"></span> </span> <span class="progress-right"> <span class="progress-bar border-primary"></span> </span>
                                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                        <div class="h2 font-weight-bold"  id="data">0</div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-uppercase mb-1 title f-18">Suhu Udara (°C)</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box text-center px-4 py-5">
                            <div class="text-primary feature-icon mb-3">
                                <div class="progress mx-auto" id="hum_udr" data-value='0' data-max='100' data-alert-min='<?= $resultSettings["hum_udr_min"] ?>' data-alert-max='<?= $resultSettings["hum_udr_max"] ?>' data-title="Kelembapan Udara"> <span class="progress-left"> <span class="progress-bar border-primary"></span> </span> <span class="progress-right"> <span class="progress-bar border-primary"></span> </span>
                                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                        <div class="h2 font-weight-bold" id="data">0</div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-uppercase mb-1 title f-18">Kelembapan Udara (%)</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box text-center px-4 py-5">
                            <div class="text-primary feature-icon mb-3">
                                <div class="progress mx-auto" id="temp_tnh" data-value='0' data-max='100' data-alert-min='<?= $resultSettings["temp_tnh_min"] ?>' data-alert-max='<?= $resultSettings["temp_tnh_max"] ?>' data-title="Suhu Tanah"> <span class="progress-left"> <span class="progress-bar border-primary"></span> </span> <span class="progress-right"> <span class="progress-bar border-primary"></span> </span>
                                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                        <div class="h2 font-weight-bold" id="data">0</div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-uppercase mb-1 title f-18">Suhu Tanah (°C)</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box text-center px-4 py-5">
                            <div class="text-primary feature-icon mb-3">
                                <div class="progress mx-auto" id="hum_tnh" data-value='0' data-max='100' data-alert-min='<?= $resultSettings["hum_tnh_min"] ?>' data-alert-max='<?= $resultSettings["hum_tnh_max"] ?>' data-title="Kelembapan Tanah"> <span class="progress-left"> <span class="progress-bar border-primary"></span> </span> <span class="progress-right"> <span class="progress-bar border-primary"></span> </span>
                                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                        <div class="h2 font-weight-bold" id="data">0</div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-uppercase mb-1 title f-18">Kelembapan Tanah (%)</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box text-center px-4 py-5">
                            <div class="text-primary feature-icon mb-3">
                                <div class="progress mx-auto" id="light" data-value='0' data-max='65535' data-alert-min='<?= $resultSettings["light_min"] ?>' data-alert-max='<?= $resultSettings["light_max"] ?>' data-title="Intensitas Cahaya"> <span class="progress-left"> <span class="progress-bar border-primary"></span> </span> <span class="progress-right"> <span class="progress-bar border-primary"></span> </span>
                                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                        <div class="h2 font-weight-bold" id="data">0</div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-uppercase mb-1 title f-18">Intensitas Cahaya (Lux)</h6>
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
                        <h4 class="text-uppercase mb-0">Data Suhu</h4>
                        <div class="my-3">
                            <img src="images/title-border.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                        <p class="text-muted f-14">Silahkan Reload Halaman untuk Melihat data terbaru.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
					<br />
                    <table id="dataTable" class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th>Suhu Udara</th>
								<th>Kelembapan Udara</th>
                                <th>Suhu Tanah</th>
								<th>Kelembapan Tanah</th>
								<th>Intensitas Cahaya</th>
								<th>Waktu</th>
							</tr>
						</thead>
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
        <section class="section" id="chart">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="text-center mb-5">
                            <h4 class="text-uppercase mb-0">GRAFIK</h4>
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
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box text-center px-4 py-5">
                            <canvas id="tempAirChart"></canvas>
                            <h6 class="text-uppercase mb-1 title f-18">Suhu Udara (°C)</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box text-center px-4 py-5">
                            <canvas id="humAirChart"></canvas>
                            <h6 class="text-uppercase mb-1 title f-18">Kelembapan Udara (%)</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box text-center px-4 py-5">
                            <canvas id="tempSoilChart"></canvas>
                            <h6 class="text-uppercase mb-1 title f-18">Suhu Tanah (°C)</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box text-center px-4 py-5">
                            <canvas id="humSoilChart"></canvas>
                            <h6 class="text-uppercase mb-1 title f-18">Kelembapan Tanah (%)</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box text-center px-4 py-5">
                            <canvas id="lightChart"></canvas>
                            <h6 class="text-uppercase mb-1 title f-18">Intensitas Cahaya (Lux)</h6>
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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <!-- Main Js -->
        <script src="js/app.js"></script>
        <script>
		
			const sleep = (ms) => {
				return new Promise(resolve => setTimeout(resolve, ms));
			}

            const pindah = (e) => {
                e.preventDefault()
                location.href = 'dashboard.php?type=pertumbuhan'
            }

            const percentageToDegrees = (percentage) => {
                return percentage / 100 * 360
            }

            const progressData = () => {
                $(".progress").each(function() {

                    var value = parseFloat($(this).attr('data-value'));
                    var max = parseFloat($(this).attr('data-max'));
                    var batasBawah = parseFloat($(this).attr('data-alert-min'));
                    var batasAtas = parseFloat($(this).attr('data-alert-mix'));
                    var title = $(this).attr('data-title');
                    var val = value / max * 100;
                    var left = $(this).find('.progress-left .progress-bar');
                    var right = $(this).find('.progress-right .progress-bar');

                    toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "3000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }

                    if (value < batasBawah) {
                        left.attr("style", "border-color: #dc3545 !important")
                        right.attr("style", "border-color: #dc3545 !important")
                        $(this).find('.h2').attr("style", "color: #dc3545 !important");

                        toastr.error(title+' dibawah batas normal')
                    } else if(value > batasAtas) {
                        left.attr("style", "border-color: #dc3545 !important")
                        right.attr("style", "border-color: #dc3545 !important")
                        $(this).find('.h2').attr("style", "color: #dc3545 !important");

                        toastr.error(title+' diatas batas normal')
                    } else {
                        left.attr("style", "border-color: #007bff !important")
                        right.attr("style", "border-color: #007bff !important")
                        $(this).find('.h2').attr("style", "color: #007bff !important");
                    }

                    if (val > 0) {
                        if (val <= 50) {
                            right.css('transform', 'rotate(' + percentageToDegrees(val) + 'deg)')
                        } else {
                            right.css('transform', 'rotate(180deg)')
                            left.css('transform', 'rotate(' + percentageToDegrees(val - 50) + 'deg)')
                        }
                    }

                })
            }
		
			$(document).ready(function() {

                $('#loadChart').click((e) => {
                    e.preventDefault();
                    const chart = Chart.getChart("tempAirChart");
                    const chart1 = Chart.getChart("humAirChart");
                    const chart2 = Chart.getChart("tempSoilChart");
                    const chart3 = Chart.getChart("humSoilChart");
                    const chart4 = Chart.getChart("lightChart");
                    if (chart) { 
                        chart.destroy();
                        chart1.destroy();
                        chart2.destroy();
                        chart3.destroy();
                        chart4.destroy();
                    }
                    $('#loadChart').html('<i class="fa fa-spinner fa-pulse fa-fw"></i>')
                    let val = $('#selectMonth').val();
                    $.ajax({
                        url: 'function.php?action=chart&type=pembibitan',
                        type: 'get',
                        data: {
                            month: val
                        },
                        dataType:'json',
                        success: (response) => {
                            //suhu Udara
                            let tempAirChart = $('#tempAirChart')[0].getContext('2d');
                            let charAirtTemp = new Chart(tempAirChart, {
                                type: 'line',
                                data: {
                                    labels: response.data.date,
                                    datasets: [
                                        {
                                            label: 'Suhu Udara',
                                            data: response.data.temp_udr,
                                            borderColor: 'rgba(51, 48, 228, 0.5)',
                                            backgroundColor: 'rgba(51, 48, 228, 1)'
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

                            //Kelembapan Udara
                            let humpAirChart = $('#humAirChart')[0].getContext('2d');
                            let chartAirHum = new Chart(humAirChart, {
                                type: 'line',
                                data: {
                                    labels: response.data.date,
                                    datasets: [
                                        {
                                            label: 'Kelembapan Udara',
                                            data: response.data.hum_udr,
                                            borderColor: 'rgba(0, 56, 101, 0.5)',
                                            backgroundColor: 'rgba(0, 56, 101, 1)'
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

                            //Suhu Tanah
                            let tempSoilChart = $('#tempSoilChart')[0].getContext('2d');
                            let chartSoilTemp = new Chart(tempSoilChart, {
                                type: 'line',
                                data: {
                                    labels: response.data.date,
                                    datasets: [
                                        {
                                            label: 'Suhu Tanah',
                                            data: response.data.temp_tnh,
                                            borderColor: 'rgba(239, 91, 12, 0.5)',
                                            backgroundColor: 'rgba(239, 91, 12, 1)'
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

                            //Kelembapan Tanah
                            let humpSoilChart = $('#humSoilChart')[0].getContext('2d');
                            let chartSoilHum = new Chart(humSoilChart, {
                                type: 'line',
                                data: {
                                    labels: response.data.date,
                                    datasets: [
                                        {
                                            label: 'Kelembapan Tanah',
                                            data: response.data.hum_tnh,
                                            borderColor: 'rgba(161, 114, 253, 0.5)',
                                            backgroundColor: 'rgba(161, 114, 253, 1)'
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
                                            borderColor: 'rgba(214, 28, 78, 0.5)',
                                            backgroundColor: 'rgba(214, 28, 78, 1)'
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
                    responsive: true,
					order: [[ 5, "desc" ]],
                    //searching: false,
                    dom : '<"top"Bf>rt<"bottom"ilp><"clear">',
					buttons: [
						{
							text: 'Download PDF',
							extend: 'pdf',
							className: 'btn btn-success',
							title: 'Table Data Sensor'
						}
					],
                    ajax: 'function.php?action=allData&type=pembibitan',
                    columns: [
                        { data: 'temp_udr' },
                        { data: 'hum_udr' },
                        { data: 'temp_tnh' },
                        { data: 'hum_tnh' },
                        { data: 'light' },
                        { data: 'date' }
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
						var createdAt = data[5] || 0; // Our date column in the table
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
							url: 'function.php?action=latest&type=pembibitan',
							type: 'get',
							dataType:'json',
							success: (data) => {
								//console.log(data)
								$('#temp_udr').attr('data-value', data.temp_udr).find('#data').text(data.temp_udr)
								$('#hum_udr').attr('data-value', data.hum_udr).find('#data').text(data.hum_udr)
                                $('#temp_tnh').attr('data-value', data.temp_tnh).find('#data').text(data.temp_tnh)
								$('#hum_tnh').attr('data-value', data.hum_tnh).find('#data').text(data.hum_tnh)
								$('#light').attr('data-value', data.light).find('#data').text(data.light)
								$('#last').html(data.date+' '+data.time)
								
                                progressData()
							}
						})
						await sleep(10000)
					}
				})()
			});
        </script>

    </body>
</html>