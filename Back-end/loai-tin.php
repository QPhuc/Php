<?php
    ob_start();
    include "admin/classes/news.php";
?>
<?php
	$news = new news();
	
	function makeUrl($string){
		$string = trim($string);
		$string = str_replace(' ', '-', $string);
		$string = strtolower($string);
		$string = preg_replace('/(á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ)/' ,'a',$string);
		$string = preg_replace('/(đ)/','d',$string);
		$string = preg_replace('/(é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ)/' ,'e',$string);
		$string = preg_replace('/(í|ì|ỉ|ĩ|ị)/' ,'i',$string);
		$string = preg_replace('/(ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ)/' ,'o',$string);
		$string = preg_replace('/(ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự)/' ,'u',$string);
		$string = preg_replace('/(ý|ỳ|ỷ|ỹ|ỵ)/' ,'y',$string);
		return $string;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Dịch Vụ Viettel Ở Kiên Giang">
	<meta name="keywords" content="Viettel Kiên Giang, Viettel Telecom,my viettel, Khuyến mại nạp thẻ, data, 3G, 4G, 5G, nạp tiền điện thoại, sim số đẹp, gói cước di động, cửa hàng Viettel, tổng đài Viettel, chăm sóc khách hàng Viettel">
	<meta name="og"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="img/v-logo.png" rel="shortcut icon" type="image/x-icon" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=David+Libre:wght@400;700&display=swap" rel="stylesheet">
	
	<!-- <link rel="stylesheet" href="ow_/css/docs.theme.min.css"> -->

	<!-- Owl Stylesheets -->
	<link rel="stylesheet" href="ow_/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="ow_/owlcarousel/assets/owl.theme.default.min.css">

	<!--<link rel="stylesheet" href="css/icon-font.css">-->

	<link rel="stylesheet" href="css/style.css">

	<title>Tin Tức Viettel</title>
</head>
<body>
	<?php
	include "view/navigation.php";
	include "view/header.php";
	?>
    <main class="mainBlog">
		<?php
			include "view/navigation-blog.php";
		?>
        <?php
        if(isset($_GET['status']) && $_GET['status'] == '0'){
        ?>
        
		<section class="mainBlog__news">
			<div class="mainBlog__news__recent">
				<div class="mainBlog__news__recent--h1">
					<p>Tin Tức Viettel
						<svg viewBox="0 0 185.343 185.343">
							<path d="M51.707 185.343a10.692 10.692 0 01-7.593-3.149 10.724 10.724 0 010-15.175l74.352-74.347L44.114 18.32c-4.194-4.194-4.194-10.987 0-15.175 4.194-4.194 10.987-4.194 15.18 0l81.934 81.934c4.194 4.194 4.194 10.987 0 15.175l-81.934 81.939a10.678 10.678 0 01-7.587 3.15z" fill="#324B4C"></path>
						</svg>
					</p>
					
				</div>
				<?php
				$get_1tintuc = $news->show_1tintuc();
				if($get_1tintuc){
					while($result_1tintuc = $get_1tintuc->fetch_assoc()){
				?> 
				<div class="mainBlog__news__recent--bigNew">
					<a href="<?php echo 'blog-detail/'.$result_1tintuc['id'].'/'.$result_1tintuc['status'].'/'.makeUrl($result_1tintuc['title']).'.html'?>"><img src="img/<?php echo $result_1tintuc['thumbnail'] ?>" alt=""></a>
					<div class="mainBlog__news__recent--bigNew-layout">
						<a href="<?php echo 'blog-detail/'.$result_1tintuc['id'].'/'.$result_1tintuc['status'].'/'.makeUrl($result_1tintuc['title']).'.html'?>"><?php echo $result_1tintuc['title'] ?></a>
						<p><?php echo $result_1tintuc['descripsion'] ?></p>
					</div>
				</div>
				<?php 
					}
				} 
				?>
				<?php
				$get_tintucform2 = $news->show_tintucform2();
				if($get_tintucform2){
					while($result_tintucform2 = $get_tintucform2->fetch_assoc()){
				?> 
				<div class="mainBlog__news__recent--smaillNew">
					<a href="<?php echo 'blog-detail/'.$result_tintucform2['id'].'/'.$result_tintucform2['status'].'/'.makeUrl($result_tintucform2['title']).'.html'?>"><img src="img/<?php echo $result_tintucform2['thumbnail'] ?>" alt=""></a>
					<div class="mainBlog__news__recent--bigNew-layout">
						<a href="<?php echo 'blog-detail/'.$result_tintucform2['id'].'/'.$result_tintucform2['status'].'/'.makeUrl($result_tintucform2['title']).'.html'?>"><?php echo $result_tintucform2['title'] ?></a>
						<p><?php echo $result_tintucform2	['descripsion'] ?></p>
					</div>
				</div>
				<?php 
					}
				} 
				?>
			</div>
			<div class="mainBlog__navi">
				<a href="#">Tiếp</a>
				<a href="#">Sau</a>
			</div>
		</section>
        <?php 
        }else if(isset($_GET['status']) && $_GET['status'] == '1'){
        ?>
        <section class="mainBlog__news">
			<div class="mainBlog__news__recent">
				<div class="mainBlog__news__recent--h1">
					<p>Tin Khuyến Mãi
						<svg viewBox="0 0 185.343 185.343">
							<path d="M51.707 185.343a10.692 10.692 0 01-7.593-3.149 10.724 10.724 0 010-15.175l74.352-74.347L44.114 18.32c-4.194-4.194-4.194-10.987 0-15.175 4.194-4.194 10.987-4.194 15.18 0l81.934 81.934c4.194 4.194 4.194 10.987 0 15.175l-81.934 81.939a10.678 10.678 0 01-7.587 3.15z" fill="#324B4C"></path>
						</svg>
					</p>
					
				</div>
				<?php
				$get_1khuyenmai = $news->show_1khuyenmai();
				if($get_1khuyenmai){
					while($result_1khuyenmai = $get_1khuyenmai->fetch_assoc()){
				?> 
				<div class="mainBlog__news__recent--bigNew">
					<a href="<?php echo 'blog-detail/'.$result_1khuyenmai['id'].'/'.$result_1khuyenmai['status'].'/'.makeUrl($result_1khuyenmai['title']).'.html'?>"><img src="img/<?php echo $result_1khuyenmai['thumbnail'] ?>" alt=""></a>
					<div class="mainBlog__news__recent--bigNew-layout">
						<a href="<?php echo 'blog-detail/'.$result_1khuyenmai['id'].'/'.$result_1khuyenmai['status'].'/'.makeUrl($result_1khuyenmai['title']).'.html'?>"><?php echo $result_1khuyenmai['title'] ?></a>
						<p><?php echo $result_1khuyenmai['descripsion'] ?></p>
					</div>
				</div>
				<?php 
					}
				} 
				?>
				<?php
				$get_khuyenmaiform2 = $news->show_khuyenmaiform2();
				if($get_khuyenmaiform2){
					while($result_khuyenmaiform2 = $get_khuyenmaiform2->fetch_assoc()){
				?> 
				<div class="mainBlog__news__recent--smaillNew">
					<a href="<?php echo 'blog-detail/'.$result_khuyenmaiform2['id'].'/'.$result_khuyenmaiform2['status'].'/'.makeUrl($result_khuyenmaiform2['title']).'.html'?>"><img src="img/<?php echo $result_khuyenmaiform2['thumbnail'] ?>" alt=""></a>
					<div class="mainBlog__news__recent--bigNew-layout">
						<a href="<?php echo 'blog-detail/'.$result_khuyenmaiform2['id'].'/'.$result_khuyenmaiform2['status'].'/'.makeUrl($result_khuyenmaiform2['title']).'.html'?>"><?php echo $result_khuyenmaiform2['title'] ?></a>
						<p><?php echo $result_khuyenmaiform2['descripsion'] ?></p>
					</div>
				</div>
				<?php 
					}
				} 
				?>
			</div>
			<div class="mainBlog__navi">
				<a href="#">Tiếp</a>
				<a href="#">Sau</a>
			</div>
		</section>
        <?php 
        }else{
        ?>
        <section class="mainBlog__news">
			<div class="mainBlog__news__recent">
				<div class="mainBlog__news__recent--h1">
					<p>Tin Mới
						<svg viewBox="0 0 185.343 185.343">
							<path d="M51.707 185.343a10.692 10.692 0 01-7.593-3.149 10.724 10.724 0 010-15.175l74.352-74.347L44.114 18.32c-4.194-4.194-4.194-10.987 0-15.175 4.194-4.194 10.987-4.194 15.18 0l81.934 81.934c4.194 4.194 4.194 10.987 0 15.175l-81.934 81.939a10.678 10.678 0 01-7.587 3.15z" fill="#324B4C"></path>
						</svg>
					</p>
					
				</div>
				<?php
				$get_new = $news->show_1news();
				if($get_new){
					while($result_new = $get_new->fetch_assoc()){
				?> 
				<div class="mainBlog__news__recent--bigNew">
					<a href="<?php echo 'blog-detail/'.$result_new['id'].'/'.$result_new['status'].'/'.makeUrl($result_new['title']).'.html'?>"><img src="img/<?php echo $result_new['thumbnail'] ?>" alt=""></a>
					<div class="mainBlog__news__recent--bigNew-layout">
						<a href="<?php echo 'blog-detail/'.$result_new['id'].'/'.$result_new['status'].'/'.makeUrl($result_new['title']).'.html'?>"><?php echo $result_new['title'] ?></a>
						<p><?php echo $result_new['descripsion'] ?></p>
					</div>
				</div>
				<?php 
					}
				} 
				?>
				<?php
				$get_news = $news->show_newsform2();
				if($get_news){
					while($result_news = $get_news->fetch_assoc()){
				?> 
				<div class="mainBlog__news__recent--smaillNew">
					<a href="<?php echo 'blog-detail/'.$result_news['id'].'/'.$result_news['status'].'/'.makeUrl($result_news['title']).'.html'?>"><img src="img/<?php echo $result_news['thumbnail'] ?>" alt=""></a>
					<div class="mainBlog__news__recent--bigNew-layout">
						<a href="<?php echo 'blog-detail/'.$result_news['id'].'/'.$result_news['status'].'/'.makeUrl($result_news['title']).'.html'?>"><?php echo $result_news['title'] ?></a>
						<p><?php echo $result_news['descripsion'] ?></p>
					</div>
				</div>
				<?php 
					}
				} 
				?>
			</div>
			<div class="mainBlog__navi">
				<a href="#">Tiếp</a>
				<a href="#">Sau</a>
			</div>
		</section>
		
        <?php
        }
        ?>

	</main>

    <?php
		include "view/footer.php";
	?>

		<!-- javascript -->
		<script src="ow_/vendors/jquery.min.js"></script>
		
		<script>
			

			const inputs = document.querySelectorAll(".form-2__contact-form--input");

			function focusFunc() {
				let parent = this.parentNode;
				parent.classList.add("focus");
			}

			function blurFunc() {
				let parent = this.parentNode;
				if (this.value == "") {
					parent.classList.remove("focus");
				}
			}

			inputs.forEach((input) => {
				input.addEventListener("focus", focusFunc);
				input.addEventListener("blur", blurFunc);
			});
		</script>
		<script src="js/index.js"></script>
		<script src="js/ajax.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<!-- Load Facebook SDK for JavaScript -->
		<div id="fb-root"></div>
		<script>
			window.fbAsyncInit = function () {
				FB.init({
					xfbml: true,
					version: 'v9.0'
				});
			};

			(function (d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s);
				js.id = id;
				js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>

		<!-- Your Chat Plugin code -->
		<div class="fb-customerchat" attribution=setup_tool page_id="119868136598056" theme_color="#14AFB4"
		logged_in_greeting="Chào anh/chị !!! Anh chị muốn đăng kí dịch vụ Viettel nào ạ ?"
		logged_out_greeting="Chào anh/chị !!! Anh chị muốn đăng kí dịch vụ Viettel nào ạ ?">
	</div>
</body>
</html>   