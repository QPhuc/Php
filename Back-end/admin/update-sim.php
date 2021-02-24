<?php 
    include "classes/loaisim.php";
    include "classes/kho.php";
    include "classes/sims.php";
    include "lib/database.php";
    include "helpers/format.php";
?>
<?php
    $loaisim = new loaisim();
    $kho = new kho();
    $sim = new sims();
    if (isset($_POST['update-sim'])) {
        $sim->update_sim($_POST['sdt'],$_POST['gianhap'],$_POST['giaban'],$_POST['loaisim'],$_POST['khosim'],$_GET['update']);
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
                        <?php
                            $get_sim = $sim->show_sim();
                            if($get_sim){
                                while($result_sim = $get_sim->fetch_assoc()){
                                    if(isset($_GET['update']) && $_GET['update'] == $result_sim['id']){
                            ?>
                        <form class="post-form" method="POST" action="">
                            <h1 class="text-center">Update Sim</h1>
                            <div class="form-group row">
                                <label for="sdt" class="col-sm-2 col-form-label">Số Thuê Bao :</label>
                                <div class="col-sm-10">
                                    <input type="text" id="sdt" name="sdt" class="form-control" value="<?php echo $result_sim['sdt'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gianhap" class="col-sm-2 col-form-label">Giá Nhập :</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="gianhap" name="gianhap" value="<?php echo $result_sim['gianhap'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="giaban" class="col-sm-2 col-form-label">Giá Bán :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="giaban" name="giaban" value="<?php echo $result_sim['giaban'] ?>">
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
                                        <option value = "<?php echo $result_loaisim['id'] ?>" <?php if($result_sim['tenloaisim'] == $result_loaisim['tenloaisim']): ?> selected="selected"<?php endif; ?>>
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
                                        <option value = "<?php echo $result_kho['id'] ?>" <?php if($result_sim['tenkho'] == $result_kho['tenkho']): ?> selected="selected"<?php endif; ?>>
                                            <?php echo $result_kho['tenkho'] ?>
                                        </option>
                                        <?php
                                            }
                                        }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-md-center">
                                <button type="submit" name="update-sim" class="btn btn-primary col-sm-2">Cập Nhật</button>
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