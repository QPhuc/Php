<?php
    include "classes/loaisim.php";
    include "lib/database.php";
    include "helpers/format.php";
?>
<?php
    $loaisim = new loaisim();
    
    if( isset($_POST['add-loaisim'])){
        $loaisim->insert_loaisim($_POST['tenloaisim'],$_POST['chitiet']);
        header("Location:loaisim.php"); 
    }
    if (isset($_GET['delete'])){
        $loaisim->delete_loaisim($_GET['delete']);
        header("Location:loaisim.php");
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
                        <form action="loaisim.php" method="post" enctype="multipart/form-data" class="post-form">
                            <h1 class="text-center">Quản Lý Loại Sim</h1>
                            <div class="form-group row">
                                <label for="tenloaisim" class="col-sm-2 col-form-label">Tên Loại Sim :</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="tenloaisim" name="tenloaisim">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="chitiet" class="col-sm-2 col-form-label" >Chi Tiết :</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" class="form-control" rows="5" id="chitiet" name="chitiet"> </textarea>
                                </div>
                            </div>
                            <div class="form-group text-md-center">
                                <button type="submit" name="add-loaisim" class="btn btn-primary col-sm-2">Thêm Loại Sim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
                    <!-- Begin Page Content -->
        <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DANH SÁCH LOẠI SIM</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-md-center">STT</th>
                                <th class="text-md-center">Tên Loại Sim</th>
                                <th class="text-md-center">Chi Tiết</th>
                                <th class="text-md-center">Thao Tác</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="text-md-center">STT</th>
                                <th class="text-md-center">Tên Loại Sim</th>
                                <th class="text-md-center">Chi Tiết</th>
                                <th class="text-md-center">Thao Tác</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                                $getall_loaisim = $loaisim->show_loaisim();
                                $stt=0;
                                if($getall_loaisim){
                                    while($result_loaisim = $getall_loaisim->fetch_assoc()){
                                        $stt++;
                            ?> 
                            <tr>
                                <td class="text-md-center"><?php echo $stt ?></td>
                                <td><?php echo $result_loaisim['tenloaisim'] ?></td>
                                <td><?php echo $result_loaisim['content'] ?></td>
                                <td class="text-md-center">
                                    <a href="update-loaisim.php?update=<?php echo $result_loaisim['id'] ?>">
                                        <button type="submit" class="btn btn-primary" name= "update" value="<?php echo $result_loaisim['id'] ?>">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                        </button>
                                    </a>
                                    <a href="loaisim.php?delete=<?php echo $result_loaisim['id'] ?>">
                                        <button type="submit" class="btn btn-primary" name="delete" value="<?php echo $result_loaisim['id'] ?>">
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