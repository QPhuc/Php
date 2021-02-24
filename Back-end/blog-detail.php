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
	<base href="http://localhost/Support-For-Job/Back-end/">
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
		// $get_new = $news->show_news();
		// if($get_new){
		// 	while($result_new = $get_new->fetch_assoc()){
		// 		if(isset($_GET['id']) && $_GET['id'] ==  $result_new['id']){

		// 		}
		?>    
		<?php 
		// 	}
		// }	
		?>
		<section class="blogDetail">
			<?php

			$get_new = $news->show_news();
			if($get_new){
				while($result_new = $get_new->fetch_assoc()){
					if(isset($_GET['id']) && $_GET['id'] ==  $result_new['id']){
			?>  
					<div class="blogDetail__heading">
						<h1><?php echo $result_new['title'] ?></h1>
						<p><?php echo $result_new['createddate'] ?></p>
					</div>
						<div class="blogDetail__content">
							<div class="blogDetail__content--img">
								<img src="admin/images/<?php echo $result_new['thumbnail'] ?>" alt="">
							</div>
							<p><?php echo $result_new['descripsion'] ?></p>
							<div class="blogDetail__content--ct">
								<?php echo $result_new['content'] ?>
							</div>
							
						</div>
			<?php 

					}
				}
			} 
			?>  
			<div class="blogDetail__foot">
				<div class="blogDetail__foot--releted">
					<h3>Tin Liên Quan</h3>
					<svg viewBox="0 0 185.343 185.343">
						<path d="M51.707 185.343a10.692 10.692 0 01-7.593-3.149 10.724 10.724 0 010-15.175l74.352-74.347L44.114 18.32c-4.194-4.194-4.194-10.987 0-15.175 4.194-4.194 10.987-4.194 15.18 0l81.934 81.934c4.194 4.194 4.194 10.987 0 15.175l-81.934 81.939a10.678 10.678 0 01-7.587 3.15z" fill="#14AFB4"></path>
					</svg>
				</div>

				<div class="blogDetail__foot__list">
				<?php
				if(isset($_GET['status']) && $_GET['status'] == '1'){
					$get_2khuyenmai = $news->show_2khuyenmai();
					if($get_2khuyenmai){
						while($result_2khuyenmai = $get_2khuyenmai->fetch_assoc()){
							
					?> 
						<div class="blogDetail__foot__list--card">
							<a href="<?php echo 'blog-detail/'.$result_2khuyenmai['id'].'/'.$result_2khuyenmai['status'].'/'.makeUrl($result_2khuyenmai['title']).'.html'?>">
								<img src="admin/images/<?php echo $result_2khuyenmai['thumbnail'] ?>" alt=""></a>
							<a href="<?php echo 'blog-detail/'.$result_2khuyenmai['id'].'/'.$result_2khuyenmai['status'].'/'.makeUrl($result_2khuyenmai['title']).'.html'?>">
								<?php echo $result_2khuyenmai['title'] ?></a>
							<?php echo $result_2khuyenmai['descripsion'] ?>
						</div>
				<?php 
						}
					}
				}else{
					$get_2tintuc = $news->show_2tintuc();
					if($get_2tintuc){
						while($result_2tintuc = $get_2tintuc->fetch_assoc()){
					?>
					<div class="blogDetail__foot__list--card">
						<a href="<?php echo 'blog-detail/'.$result_2tintuc['id'].'/'.$result_2tintuc['status'].'/'.makeUrl($result_2tintuc['title']).'.html'?>">
							<img src="admin/images/<?php echo $result_2tintuc['thumbnail'] ?>" alt=""></a>
						<a href="<?php echo 'blog-detail/'.$result_2tintuc['id'].'/'.$result_2tintuc['status'].'/'.makeUrl($result_2tintuc['title']).'.html'?>">
							<?php echo $result_2tintuc['title'] ?></a>
						<?php echo $result_2tintuc['descripsion'] ?>
					</div>
				<?php
						}
					}
				} 
				?>
				</div>
				
			</div>
		</section>
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