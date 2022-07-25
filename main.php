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
        <link href="css/style.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6 col-md-8">
                    <div class="feature-box text-center px-4 py-5" onclick="lanjut('pembibitan')">
                        <img src="images/grain.png" alt="" class="img-fluid mx-auto d-block m-5">
                        <h6 class="text-uppercase mb-1 title f-18">Pembibitan</h6>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="feature-box text-center px-4 py-5" onclick="lanjut('pertumbuhan')">
                        <img src="images/sprout.png" alt="" class="img-fluid mx-auto d-block m-5">
                        <h6 class="text-uppercase mb-1 title f-18">Pertumbuhan</h6>
                    </div>
                </div>
            </div>
        </div>

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
        <!-- Main Js -->
        <script src="js/app.js"></script>
        <script>
            const lanjut = (type) => {
                location.href = "?type="+type
            }
        </script>
    </body>
</html>