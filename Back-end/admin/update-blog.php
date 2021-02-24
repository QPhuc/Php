<?php 
    session_start();
    include "classes/news.php";
?>
<?php
    $news = new news();
    if (isset($_POST['update-blog'])) {
        $news->update_news($_POST['title'],$_POST['descripsion'],$_POST['status'],$_POST['file'],$_POST['body'],$_GET['id']);
        header("Location:quanly-blog.php");
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
                            $get_new = $news->show_news();
                            if($get_new){
                                while($result_new = $get_new->fetch_assoc()){
                                    if(isset($_GET['id']) && $_GET['id'] ==  $result_new['id']){
                        ?>
                        <form action="update-blog.php?id=<?php echo $result_new['id'] ?>" method="post" enctype="multipart/form-data" class="post-form">
                            <h1 class="text-center">Update Blog</h1>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Tiêu Đề :</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" value="<?php echo $result_new['title'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="descripsion" class="col-sm-2 col-form-label">Giới Thiệu :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="descripsion" name="descripsion" value="<?php echo $result_new['descripsion'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="loaitin" class="col-sm-2 col-form-label">Loại Tin Tức :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="loaitin" name="status">
                                        <option value="0"<?php if($result_new['status'] == '0'): ?> selected="selected"<?php endif; ?>>Tin Tức</option>
                                        <option value="1"<?php if($result_new['status'] == '1'): ?> selected="selected"<?php endif; ?>>Khuyến Mãi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="file" class="col-sm-2 col-form-label">Chọn Hình Ảnh :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="file" name="file" value="<?php echo $result_new['thumbnail'] ?>">
                                </div>
                            </div>
                            <div class="form-group " style="position: relative;">
                                <label for="post">Nội Dung :</label>
                                
                                <!-- Upload image button -->
                                <a href="#" class="btn btn-outline-primary upload-img-btn" data-toggle="modal" data-target="#myModal">upload image</a>
                                <!-- Input to browse your machine and select image to upload -->
                                <input type="file" id="image-input" style="display: none;">
							<textarea name="body" id="body" class="form-control" cols="30" rows="5"><?php echo $result_new['content'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="update-blog" class="btn btn-success pull-right">Cập Nhật</button>
                            </div>
                        </form>
                        <?php
                                }
                            }
                        }
                        ?>
                        <!-- Pop-up Modal to display image URL -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Click below to copy image url</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    
                                    </div>
                                    <div class="modal-body">
                                        <!-- returned image url will be displayed here -->
                                        <input 
                                        type="text" 
                                        id="post_image_url" 
                                        onclick="return copyUrl()" 
                                        class="form-control"
                                        >
                                        <p id="feedback_msg" style="color: green; display: none;"><b>Image url copied to clipboard</b></p>
                                    </div>
                                </div>
                            </div>
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
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<script src="https://cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>

<script src="js/scripts.js"></script>
</body>

</html>