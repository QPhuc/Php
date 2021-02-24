<?php
    ob_start();
    include "classes/khachhangthuong.php";
?>
<?php
    $khachhang = new khachhangthuong();

    if( isset($_GET['update'])){
        $khachhang->update_khachhangthuong($_GET['update'],0,Session::get('username'));
        header("Location:tables.php"); 
    }
    if (isset($_GET['delete'])){
        $khachhang->delete_khachhangthuong($_GET['delete']);
        header("Location:tables.php");
    }                                      
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include "view/header.php";
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    <?php
        include "view/sidebar.php";
    ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php 
                    include "view/topbar.php";
                ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Khách Hàng</h6>
                        </div>
                        

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-md-center">SĐT</th>
                                            <th class="text-md-center">Địa Chỉ</th>
                                            <th class="text-md-center">Dịch Vụ</th>
                                            <th class="text-md-center">Yêu Cầu</th>
                                            <th class="text-md-center">Đã Tiếp Xúc</th>
                                            <th class="text-md-center">Người Liên Hệ</th>
                                            <th class="text-md-center">Ngày Đăng Ký</th>
                                            <th class="text-md-center">Thao Tác</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th class="text-md-center">SĐT</th>
                                            <th class="text-md-center">Địa Chỉ</th>
                                            <th class="text-md-center">Dịch Vụ</th>
                                            <th class="text-md-center">Yêu Cầu</th>
                                            <th class="text-md-center">Đã Tiếp Xúc</th>
                                            <th class="text-md-center">Người Liên Hệ</th>
                                            <th class="text-md-center">Ngày Đăng Ký</th>
                                            <th class="text-md-center">Thao Tác</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                                $getall_khachhangthuong = $khachhang->show_khachhangthuong();
                                                if($getall_khachhangthuong){
                                                    while($result_allkhachhang = $getall_khachhangthuong->fetch_assoc()){
                                                    
                                            ?>    
                                        <tr>
                                                <td><?php echo $result_allkhachhang['sdt'] ?></td>
                                                <td><?php echo $result_allkhachhang['diachi'] ?></td>
                                                <td><?php echo $result_allkhachhang['dichvudangky'] ?></td>
                                                <td><?php echo $result_allkhachhang['content'] ?></td>
                                                <td>
                                                <form  action="" method="POST">    
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" name="status" value=<?php echo $result_allkhachhang['id'] ?> 
                                                            <?php if ($result_allkhachhang['status'] == 0) {
                                                                    echo "checked='checked'"; 
                                                                } else{
                                                                    echo "";
                                                                }
                                                                
                                                            ?>
                                                        > 
                                                    </div>
                                                </form>
                                                <?php 
                                                    // if($result_allkhachhang['status'] == 1){
                                                    //     echo "Chưa tiếp xúc"; 
                                                    // }else{
                                                    //     echo "Đã tiếp xúc";
                                                    // } 
                                                    ?>
                                                </td>
                                                <td><?php echo $result_allkhachhang['modifiedby'] ?></td>
                                                <td><?php echo $result_allkhachhang['createddate'] ?></td>
                                            <td>
                                                <form action = "tables.php" method="GET">
                                                    <button type="submit" class="btn btn-primary" name= "update" value=<?php echo $result_allkhachhang['id'] ?>>
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary" name="delete" value=<?php echo $result_allkhachhang['id'] ?>>
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-x-circle-fill" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                                            </svg>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php 
                                            }
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

        <?php 
            include "view/footer.php";
        ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>