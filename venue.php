<?php
session_start();
require_once './php/DataProvider.php';
?>
<!doctype html>
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/3d02397db2.js" crossorigin="anonymous"></script>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon Icon Css -->
  <link rel="icon" type="image/png" sizes="100x100" href="img/favicon.png">
  <!-- Animation CSS -->
  <link rel="stylesheet" href="css/animate.css" type="text/css">
  <!-- Font Css -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="css/font-awesome.css" type="text/css" rel="stylesheet">
  <link href="css/ionicons.min.css" type="text/css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700" rel="stylesheet">
  <!-- Owl Css -->
  <link href="css/owl.carousel.min.css" type="text/css" rel="stylesheet">
  <link href="css/owl.theme.default.min.css" type="text/css" rel="stylesheet">
  <!-- Magnific Popup Css -->
  <link href="css/magnific-popup.css" type="text/css" rel="stylesheet">
  <!-- Bootstrap Css -->
  <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <!-- Price Filter Css -->
  <link href="css/jquery-ui.css" type="text/css" rel="stylesheet">
  <!-- Scrollbar Css -->
  <link href="css/mCustomScrollbar.min.css" type="text/css" rel="stylesheet">
  <!-- Select2 Css -->
  <link href="css/select2.min.css" type="text/css" rel="stylesheet">
  <!-- main css -->
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <link href="css/responsive.css" type="text/css" rel="stylesheet">
  <title>Boardgame.vn</title>

  <script src=".\js\jquery-3.4.1.min.js"></script>

  <link href="css/custom/CSS-index.css" type="text/css" rel="stylesheet">

</head>

<body class="theme-3">


  <!-- Start Header Section -->
  <?php
  include './interface/header.php'
  ?>
  <!-- End Header Section -->


  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary d-inline">Doanh thu</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align:center">
          <thead>
            <tr>
              <th>Tổng doanh thu của chúng tôi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT sum(total) as TotalMoney FROM bill WHERE Status = 2";
            $result = DataProvider::executeQuery($sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
              <tr>
                <td><?php echo number_format($row['TotalMoney'], 0, ".", ".") ?>₫</td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
















  <!-- Start Footer Section -->
  <?php
  include './interface/footer.php'
  ?>
  <!-- End Footer Section -->

  <!-- Start Quickview Popup Section -->
  <?php
  include './interface/quickview.php'
  ?>
  <!-- End Quickview Popup Section -->


  <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

  <!-- Jquery js -->
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <!-- popper.min js -->
  <script src="js/popper.min.js" type="text/javascript"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <!-- Magnific Popup js -->
  <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
  <!-- Map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ" type="text/javascript"></script>
  <!-- Owl js -->
  <script src="js/owl.carousel.min.js" type="text/javascript"></script>
  <!-- Countdown js -->
  <script src="js/countdown.min.js" type="text/jscript"></script>
  <!-- Counter js -->
  <script src="js/jquery.countup.js" type="text/javascript"></script>
  <!-- waypoint js -->
  <script src="js/waypoint.js" type="text/javascript"></script>
  <!-- Select2 js -->
  <script src="js/select2.min.js" type="text/javascript"></script>
  <!-- Price Slider js -->
  <script src="js/jquery-price-slider.js" type="text/javascript"></script>
  <!-- jquery.elevatezoom js -->
  <script src='js/jquery.elevatezoom.js' type="text/javascript"></script>
  <!-- imagesloaded.pkgd.min js -->
  <script src='js/imagesloaded.pkgd.min.js' type="text/javascript"></script>
  <!-- isotope.min js -->
  <script src='js/isotope.min.js' type="text/javascript"></script>
  <!-- jquery.fitvids js -->
  <script src='js/jquery.fitvids.js' type="text/javascript"></script>
  <!-- mCustomScrollbar.concat.min js -->
  <script src="js/mCustomScrollbar.concat.min.js" type="text/javascript"></script>
  <!-- Custom css -->
  <script src="js/custom.js" type="text/javascript"></script>

  <script src="./js/custom/JS-index.js"></script>

  <script src="./js/custom/JS-cart.js"></script>
  <script src="./js/custom/JS-user.js"></script>

</body>

</html>