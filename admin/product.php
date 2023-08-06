<?php
    session_start();
    if(!isset($_SESSION['isLogin'])){
      header("Location: login.php");
		  exit;
    } else {
      $role ="";
      foreach ($_SESSION["isLogin"] as $k => $v) {
        $role = $_SESSION['isLogin'][$k]["Role"];
      }
    }
    require_once '../php/DataProvider.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Boardgame.vn - Dashboard</title>
  <!-- Favicon Icon Css -->
  <link rel="icon" type="image/jpg" sizes="32x32" href="../img/logo1.jpg">
  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php include './interface/sidebar.php'?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      <?php include './interface/topbar.php'?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading 
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>-->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary d-inline">Sản phẩm</h4>
              <a href="productform.php" class="btn btn-success float-right">Thêm</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align:center">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Hình</th>
                      <th>Tên</th>
                      <th>Giá Tiền</th>
                      <th>Số lượng</th>
                      <th>Trạng thái</th>
                      <th style="width:150px">Thao Tác</th>
                    </tr>
                  </thead>
                  <tbody id="tbody-sanpham">
                    <?php
                    require_once '../php/DataProvider.php';
                    $sql = "SELECT * FROM product ORDER BY ID ASC";
                    $result = DataProvider::executeQuery($sql);
                    while ($row = mysqli_fetch_array($result)) {
                      echo "<tr>" .
                          "<td>" . $row['ID'] . "</td>" .
                          "<td> <img src=\"../img/sanpham/" . $row['Pic'] . "\" style=\" max-width:100px; max-height: 100px;\"></td>" .
                          "<td>" . $row['Name'] . "</td>" .
                          "<td>" .  number_format($row['Price'],0,".",".") . "₫</td>".
                          "<td>" . $row['Quantity'] . "</td>";
                          if($row['Status'] == 0){
                            echo "<td>Hoạt động</td>";
                          } else {
                            echo "<td>Không hoạt động</td>";
                          }
                          echo"<td>" .
                            "<div>" .
                              "<a href=\"productform.php?id=" . $row['ID'] . "\">Sửa thông tin</a>" .
                            "</div>" .
                            "<div>" .
                              "<a href=\"productpicture.php?id=" . $row['ID'] . "\">Quản lý ảnh</a>" .
                            "</div>" .
                          "</td>" .
                      "</tr>";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include './interface/footer.php' ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>
  
  <script src="../js/custom/JS-admin-product-form.js"></script>
  <script src="../js/custom/JS-admin-login.js"></script>
</body>

</html>