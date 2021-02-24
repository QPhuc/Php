<?php 
    include "classes/loaisim.php";
    include "classes/kho.php";
    include "classes/sims.php";
    include "lib/database.php";
    include "helpers/format.php"
?>
<?php
    $loaisim = new loaisim();
    $kho = new kho();
    $sim = new sims();
?>
<?php
    if( isset($_POST['add-sim'])){
        $sim->insert_sim($_POST['sdt'],$_POST['gianhap'],$_POST['giaban'],$_POST['loaisim'],$_POST['khosim']);
        header("Location:sim.php"); 
    }
    if (isset($_GET['delete'])){
        $sim->delete_sim($_GET['delete']);
        header("Location:sim.php");
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
                <div class="container">
                    <div class="row">
                        <div class="col">
                        <form action="sim.php" method="post" enctype="multipart/form-data" class="post-form">
                            <h1 class="text-center">SIM</h1>
                            <div class="form-group row">
                                <label for="sdt" class="col-sm-2 col-form-label" >Số Thuê Bao :</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="sdt" name="sdt" placeholder="SĐT">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gianhap" class="col-sm-2 col-form-label" >Giá Nhập :</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="gianhap" name="gianhap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="giaban" class="col-sm-2 col-form-label">Giá Bán :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="giaban" name="giaban">
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="loaisim" class="col-sm-2 col-form-label">Loại Sim :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="loaisim" name="loaisim">
                                    <?php
                                    $get_loaisim = $loaisim->show_loaisim();
                                    if($get_loaisim){
                                        while($result_loaisim = $get_loaisim->fetch_assoc()){
                                    ?>
                                        <option value = "<?php echo $result_loaisim['id'] ?>">
                                            <?php echo $result_loaisim['tenloaisim'] ?>
                                        </option>
                                    <?php
                                            }
                                        }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="khosim" class="col-sm-2 col-form-label">Kho Sim :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="khosim" name="khosim">
                                    <?php
                                    $get_kho = $kho->show_kho();
                                    if($get_kho){
                                        while($result_kho = $get_kho->fetch_assoc()){
                                    ?>
                                        <option value = "<?php echo $result_kho['id'] ?>"><?php echo $result_kho['tenkho'] ?></option>
                                        <?php
                                            }
                                        }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-md-center">
                                <button type="submit" name="add-sim" class="btn btn-primary col-sm-2">Thêm Sim</button>
                            </div>
                        </form>

                        <!-- Pop-up Modal to display image URL -->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh Sách Sim</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-md-center">Số Thuê Bao</th>
                        <th class="text-md-center">Giá Nhập</th>
                        <th class="text-md-center">Giá Bán</th>
                        <th class="text-md-center">Loại Sim</th>
                        <th class="text-md-center">Kho Sim</th>
                        <th class="text-md-center">Ngày Nhập</th>
                        <th class="text-md-center">Thao Tác</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th class="text-md-center">Số Thuê Bao</th>
                        <th class="text-md-center">Giá Nhập</th>
                        <th class="text-md-center">Giá Bán</th>
                        <th class="text-md-center">Loại Sim</th>
                        <th class="text-md-center">Kho Sim</th>
                        <th class="text-md-center">Ngày Nhập</th>
                        <th class="text-md-center">Thao Tác</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    $getall_sim = $sim->show_sim();
                    if($getall_sim){
                        while($result_sim = $getall_sim->fetch_assoc()){
                ?> 
                    <tr>
                        <td class="text-md-center"><?php echo $result_sim['sdt'] ?></td>
                        <td><?php echo number_format($result_sim['gianhap']) ?></td>
                        <td><?php echo number_format($result_sim['giaban']) ?></td>
                        <td><?php echo $result_sim['tenloaisim'] ?></td>
                        <td><?php echo $result_sim['tenkho'] ?></td>
                        <td class="text-md-center"><?php echo $result_sim['createddate'] ?></td>
                        <td class="text-md-center">
                            <a href="update-sim.php?update=<?php echo $result_sim['id'] ?>">
                                <button type="submit" class="btn btn-primary" name= "update" value="">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </button>
                            </a>
                            <a href="sim.php?delete=<?php echo $result_sim['id'] ?>">
                                <button type="submit" class="btn btn-primary" name="delete">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi bi-x-circle-fill" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                        </svg>
                                </button>
                            </a>
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
    <!-- End of Footer -->

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