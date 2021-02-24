<?php 
    include "lib/database.php";
    include "helpers/format.php";
    include "classes/loaisim.php";
?>
<?php
    $loaisim = new loaisim();
    if (isset($_POST['update-blog'])) {
        $loaisim->update_loaisim($_POST['tenloaisim'],$_GET['update']);
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
                        <?php
                            $get_loaisim = $loaisim->show_loaisim();
                            if($get_loaisim){
                                while($result_loaisim = $get_loaisim->fetch_assoc()){
                                    if(isset($_GET['update']) && $_GET['update'] == $result_loaisim['id']){
                            ?>
                        <form class="post-form" method="POST" action="">
                            <h1 class="text-center">Update Loại Sim</h1>
                            <div class="form-group row">
                                <label for="id" class="col-sm-2 col-form-label">ID :</label>
                                <div class="col-sm-10">
                                    <input type="text" id="id" class="form-control" placeholder="<?php echo $result_loaisim['id'] ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tenloaisim" class="col-sm-2 col-form-label">Tên Loại Sim :</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="tenloaisim" name="tenloaisim" value="<?php echo $result_loaisim['tenloaisim'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="content" class="col-sm-2 col-form-label">Chi Tiết :</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="content" name="content"><?php echo $result_loaisim['content'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group text-md-center">
                                <button type="submit" name="update-blog" class="btn btn-primary col-sm-2">Cập Nhật</button>
                            </div>
                        </form>
                        <?php
                                    }
                                }
                            }
                        ?>
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
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<script src="https://cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>

<script src="js/scripts.js"></script>
</body>

</html>