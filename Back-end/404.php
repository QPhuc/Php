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

	<title>Trang Không Tồn Tại</title>
</head>
<body>
	<?php
	include "view/navigation.php";
	include "view/header.php";
	?>
	<section class="navigation-pc">
		<ul class="navigation-pc-lists">
			<a href="trang-chu.php" class="navigation-pc-lists--item"><li>Trang Chủ</li></a>
			<a href="wifi-gia-dinh" class="navigation-pc-lists--item"><li>Internet-Truyền Hình</li></a>
			<a href="tra-sau" class="navigation-pc-lists--item "><li>Dịch Vụ Di Động</li></a>
			<a href="404" class="navigation-pc-lists--item"><li>Mua Sim</li></a>
			<!-- <a href="404" class="navigation-pc-lists--item"><li>Mua Điện Thoại</li></a> -->
			<a href="404" class="navigation-pc-lists--item"><li>Tin Khuyến Mãi</li></a>
		</ul>
	</section>
	<section class="error">
		<div class="error--heading">
			Trang đang được phát triển mong quý khách vui lòng quay lại sau :((
		</div>
	</section>


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

</body>
</html>