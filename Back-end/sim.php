<?php
	include "admin/classes/loaisim.php";
	include "admin/classes/sims.php";
    include "lib/database.php";
    include "helpers/format.php"
?>
<?php
	$loaisim = new loaisim();
	$sim = new sims();
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

	<title>Mua Sim Viettel</title>
</head>
<body>
	<?php
	include "view/navigation.php";
	include "view/header.php";
	?>
	
	<main>
		<section class="sim__header">
			<!-- <div class="sim__header__logo-box">
			<img src="img/logo-white-viettel.png" alt="Logo Viettel" class="sim__header__logo">  			
			</div> -->
			<div class="sim__header__text-box">
				<h1 class="heading-primary">
					<span class="heading-primary--main">Viettel</span>
					<span class="heading-primary--sub">Mua Sim Điện Thoại</span>
				</h1>	
				<div class="wrapper-shine">
					<a href="#" class="button-shine">Mua Sim!</a>
				</div>
			</div>
		</section>
		<section class="sim__content">
			<div class="sim__content__option">
				<div class="sim__content__option--select">
					<h2>Sim Theo Giá</h2>
					<ul>
						<a href="#"><li>Sim giá 100 Nghìn</li></a>
						<a href="#"><li>Sim giá 500 Nghìn</li></a>
						<a href="#"><li>Sim giá 1 Triệu</li></a>
						<a href="#"><li>Sim giá 1 - 10 Triệu</li></a>
						<a href="#"><li>Sim giá 10 - 50 Triệu</li></a>
						<a href="#"><li>Sim giá 50 - 100 Triệu</li></a>
					</ul>
				</div>
				<p></p>
				<div class="sim__content__option--select">
					<h2>Sim Theo Loại</h2>
					<ul>
					<?php
					$getall_loaisim = $loaisim->show_loaisimExceptNamsinh();
					if($getall_loaisim){
						while($result_loaisim = $getall_loaisim->fetch_assoc()){
					?>
						<a href="sim-detail.php?id=<?php echo $result_loaisim['id'] ?>">
							<li><?php echo $result_loaisim['tenloaisim'] ?></li>
						</a>
					<?php
						}
					}
					?>
					</ul>
				</div>
				<p></p>
				<div class="sim__content__option--select">
					<h2>Sim Năm Sinh</h2>
					<ul>
						<a href="#"><li>Sim Năm Sinh 1995</li></a>
						<a href="#"><li>Sim Năm Sinh 1996</li></a>
						<a href="#"><li>Sim Năm Sinh 1997</li></a>
						<a href="#"><li>Sim Năm Sinh 1998</li></a>
						<a href="#"><li>Sim Năm Sinh 1999</li></a>
						<a href="#"><li>Sim Năm Sinh 2000</li></a>
					</ul>
				</div>
			</div>
			<div class="sim__content__selection">
				<div class="sim__content__selection--search">
					<form action="">
						<input type="text" class="sim__content__selection--search-input" placeholder="Nhập Số Cần Tìm">
						<button class="sim__content__selection--search-button">
							<svg class="sim__content__selection--search-icon">
								<use xlink:href="img/sprite.svg#icon-magnifier"></use>
							</svg>
						</button>
					</form>
					<p>Hỗ Trợ Đăng Kí Sim Chính Chủ Nếu Khách Hàng Ở Rạch Giá-Kiên Giang</p>
					<ul>
						<li>Tìm sim có số 8888 hãy gõ: 8888</li>
						<li>Tìm sim có đầu 09 đuôi có 8888 hãy gõ: 09<font size="5">*</font>8888</li>
						<li>Tìm sim bắt đầu bằng 09 đuôi bất kỳ hãy gõ: 09<font size="5">*</font>
					</ul>
				</div>
				<div class="sim__content__selection--choose">
					<ul>
					<?php
					$getall_sim = $sim->show_simchuaban();
					if($getall_sim){
						while($result_sim = $getall_sim->fetch_assoc()){
					?>
						<li>
							<div class="change-color"  style="">
								<div class="sim__content__selection--choose-viettel">	
								</div>
								<div class="sim__content__selection--choose-imfomation">
									<div class="sim__content__selection--choose-imfomation-name"><?php echo $result_sim['sdt'] ?></div>
									<div class="sim__content__selection--choose-imfomation-price"><?php echo number_format($result_sim['giaban'])?>₫</div>
								</div>
							</div>
						</li>
					<?php
						}
					}
					?>
					</ul>
				</div>
			</div>
		</section>

    </main>


    <?php
    include "view/footer.php";
    ?>


    <!-- javascript -->
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
    logged_in_greeting="Chào anh/chị !!! Anh chị muốn đăng kí dịch vụ Viettel nào ạ ?."
    logged_out_greeting="Chào anh/chị !!! Anh chị muốn đăng kí dịch vụ Viettel nào ạ ?.">
</div>
	<script src="ow_/vendors/jquery.min.js"></script>
	<script src="js/ajax.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>