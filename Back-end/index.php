<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Google Meta Tags -->
	<meta name="description"
	content="Lắp đặt wifi cáp quang Viettel,đăng kí trả sau cho khách hàng ở Kiên Giang.Đăng kí ViettelPay,nâng cấp sim 3G lên 4G,chuyển mạng giữ số miễn phí và tận nơi.Tin tức khuyến mãi Viettell mỗi tháng.Hỗ trợ và giải đáp thắc mắc khách hàng về Viettel 24/7 Kiên Giang">
	<meta name="keywords"
	content="Lắp đặt wifi cáp quang Viettel,đăng kí trả sau cho khách hàng ở Kiên Giang.Đăng kí ViettelPay,nâng cấp sim 3G lên 4G tận nơi và miễn phí.Tin tức khuyến mãi Viettell mỗi tháng.Hỗ trợ và giải đáp thắc mắc khách hàng về Viettel 24/7 Kiên Giang">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Facebook Meta Tags -->
	<meta property="og:url" content="https://nothing.com">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Cổng thông tin hỗ trợ dịch vụ Di động, Internet, Truyền hình Viettel Rạch Giá">
	<meta property="og:description"
	content="Cung cấp thông tin đầy đủ,chính xác mọi dịch vụ về wifi,trả sau của Viettel ở Kiên Giang.Đăng Ký để tận hưởng trải nghiệm lên mạng & dịch vụ chăm sóc khách hàng tốt nhất">
	<meta property="og:image" content="img/Picture/7.jpg">
	<link href="img/v-logo.png" rel="shortcut icon" type="image/x-icon" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=David+Libre:wght@400;700&display=swap" rel="stylesheet">


	<!--<link rel="stylesheet" href="css/icon-font.css">-->

	<link rel="stylesheet" href="css/style.css">

	<title>Viettet - Lắp mạng cáp quang Viettel ở Kiên Giang</title>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155251028-1">
	</script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-155251028-1');
	</script>
</head>


<?php
// error_reporting(E_ALL ^ E_WARNING); 
include "config/config.php";
include "view/navigation.php";
// include "view/header.php";

?>
<main>		
<!-- 	<section class="navigation-pc">
		<ul class="navigation-pc-lists">
			<a href="#" class="navigation-pc-lists--item active-navigation"><li>Trang Chủ</li></a>
			<a href="wifi-cho-ho-gia-dinh" class="navigation-pc-lists--item"><li>Internet-Truyền Hình</li></a>
			<a href="dich-vu-tra-sau-viettel" class="navigation-pc-lists--item "><li>Dịch Vụ Di Động</li></a>
			<a href="404" class="navigation-pc-lists--item"><li>Mua Sim</li></a> -->
			<!-- 			<a href="404" class="navigation-pc-lists--item"><li>Mua Điện Thoại</li></a> -->
<!-- 		<a href="404" class="navigation-pc-lists--item"><li>Tin Tức</li></a>
		</ul>
	</section> -->
	<section class="wifi">		
		<div class="wifi__header">
			<img src="img/logo-white-viettel.png" alt="Logo Viettel" class="wifi__header__logo">
			<div class="header__contact">
				<div class="header__contact__line header__contact__line--1">
					<svg class="header__contact-icon" style="width: 2rem;height: 2rem;fill: #162A23">
						<use xlink:href="img/sprite.svg#icon-phone1"></use>
					</svg>
					<div style="font-size: 2rem;color: #162A23">Hotline:<a href="tel:0383617161" class="header__contact-phone"
						style="margin-top: 0;font-weight: 700;font-size: 2rem;margin-left: 2px">0383.61.71.61</a></div>
					</div>
				</div>
				<ul class="wifi__header__navigation">
					<li class="wifi__header__navigation--item wifi__header__navigation--item--1" id="wifiScroll">Wifi</li>
					<li class="wifi__header__navigation--item" id="phoneScroll">Di Động</li>
				</ul>
			</div>
			<div class="wifi__info">
				<div class="wifi__info--left">
					<h1 class="heading-secondary--3 wifi__info--heading">Hỗ Trợ Lắp Đặt Mạng Wifi Viettel Ở Kiên Giang</h1>
					<!-- <p class="wifi__info--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt nemo libero, ullam provident repellat expedita nihil beatae explicabo, maiores facere reprehenderit voluptatibus omnis sapiente nisi non tempore dicta saepe rem!</p> -->
				</div>
				<div class="wifi--info-right">
					<div class="form">
						<form action="config/server" method="POST" class="form-ui" id="test-form">

							<div class="form--info u-margin-bottom-smaill">
								<h1 class="form--heading">LIÊN HỆ</h1>
								<p class="form--text">Cung Cấp Những Dịch Vụ Tốt Nhất Cho Khách Hàng</p>
							</div>
							<div class="form__group">
								<label for="name" class="form__label">SĐT</label>
								<input type="tel"  name="sdt" class="form__input" autocomplete="off" placeholder="SĐT" id="name" required pattern="(09|01|03|08|[2|6|8|9])+([0-9]{8})\b" >

							</div>

							<div class="form__group">
								<label for="contact" class="form__label">Địa Chỉ</label>
								<input type="text" name="diachi" class="form__input" autocomplete="off" maxlength="80" placeholder="Địa Chỉ Liên Lạc" id="contact" required >								

							</div>

							<div class="form__group">
								<label for="res-info" class="form__label">Dịch Vụ Liên Hệ</label>
								<select  name="res-info" class="form__input form__input--select">

									<option value="Lắp Wifi">Lắp đặt wifi</option>
									<option value="Lắp Truyền Hình">Lắp đặt truyền hình</option>
									<option value="Lắp Wifi + Truyền Hình">Lắp đặt wifi + truyền hình</option>
									<option value="Gói Trả Sau">Đăng ký trả sau</option>
									<option value="Gói Trả Trước">Đăng ký gói 4G và gọi điện</option>
								</select>
							</div>

							<div class="form__group ">
								<button name="submit"  class="button__fly">
									<p>Đăng Kí</p>
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
										<path id="paper-plane-icon" d="M462,54.955L355.371,437.187l-135.92-128.842L353.388,167l-179.53,124.074L50,260.973L462,54.955z
										M202.992,332.528v124.517l58.738-67.927L202.992,332.528z"></path> 
									</svg>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<section class="viettel-infomation">
			<h1 class="viettel-infomation--h1">Tại Sao Bạn Nên Đăng Ký Dịch Vụ Bên Viettel</h1>
			<div class="viettel-infomation__deep">
				<div class="viettel-infomation__deep__change viettel-infomation__deep__change--1 active">
					<div class="viettel-infomation__deep--left">
						<h3>Tập đoàn Công nghệ – Viễn thông Quân đội Viettel</h3>
						<p>Môt trong những công ty hàng đầu về công nghệ lớn nhất Việt Nam,là nơi được nhiều khách hàng tin tưởng và gửi gắm niền tin lựa chọn dịch vụ wifi và điện thoại</p>
					</div>
					<div class="viettel-infomation__deep--right">
						<img class="viettel-infomation__deep--right-img" src="img/img-s/Viettel-cong-ty-s.jpg" alt="Công Ty Viettel">

					</div>
				</div>
				<div class="viettel-infomation__deep__change viettel-infomation__deep__change--2">
					<div class="viettel-infomation__deep--left">
						<h3>Đặt sự tín nhiệm và hài lòng của khách hàng lên hàng đầu</h3>
						<p>Chúng tôi hiểu rằng, muốn làm được điều đó thì trước hết phải thấu hiểu khách hàng, phải lắng nghe khách hàng.Và vì vậy, khách hàng luôn được khuyến khích nói theo cách mà họ mong muốn và bằng tiếng nói của chính mình – “Hãy nói theo cách của bạn”.</p>

					</div>
					<div class="viettel-infomation__deep--right">
						<img class="viettel-infomation__deep--right-img" src="img/Picture/11.jpg" alt="Công Ty Viettel">
					</div>
				</div>
				<div class="viettel-infomation__deep__change viettel-infomation__deep__change--3">
					<div class="viettel-infomation__deep--left">
						<h3>Hỗ Trợ Khách Hàng nhanh chóng khi có yêu cầu</h3>
						<p>Phục vụ khách hàng là niềm vinh hạnh của chúng tui,luôn đồng hành cùng khách hàng 24h/ngày và 7 ngày/tuần</p>

					</div>
					<div class="viettel-infomation__deep--right">
						<img class="viettel-infomation__deep--right-img" src="img/Picture/9.jpg" alt="Viettel Hỗ Trợ">
					</div>
				</div>

			</div>
		</section>
		<section class="wifi-detail">
			<a href="wifi-gia-dinh"><h1 class="heading-secondary u-margin-bottom-medium">Wifi Và Truyền Hình Viettel</h1></a>
			<div class="wifi-detail__info">
				<div class="wifi-detail__info--left">
					<ul class="wifi-detail__info--list">
						<li class="wifi-detail__info--list-text wifi-detail__info--list-text-1">
							<svg class="wifi-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-connection"></use>
							</svg>Internet Cáp Quang Tốc Độ Cao,Hàng Đầu Việt Nam
						</li>
						<li class="wifi-detail__info--list-text ">
							<svg class="wifi-detail__info--list-icon ">
								<use xlink:href="img/sprite.svg#icon-office"></use>
							</svg>Được nhiều khách hàng,doanh nghiệp tin dùng
						</li>
						<li class="wifi-detail__info--list-text wifi-detail__info--list-text-2">
							<svg class="wifi-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-display"></use>
							</svg>Hơn 160 Kênh Truyền Hình Và Chùm Kênh Thể Thao K+
						</li>
						<li class="wifi-detail__info--list-text">
							<svg class="wifi-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-rotate"></use>
							</svg>Xem Và Tua Lại Các Chương Trình Truyền Hình

						</li>
						<li class="wifi-detail__info--list-text wifi-detail__info--list-text-3">
							<svg class="wifi-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-hd"></use>
							</svg>Chất Lượng Hình Ảnh HD Độ Nét Cao

						</li>
						<li class="wifi-detail__info--list-text">
							<svg class="wifi-detail__info--list-icon">
								<use xlink:href="img/sprite.svg#icon-wrench"></use>
							</svg>Hỗ trợ nhanh chóng cho khách hàng Kiên Giang 24/7
						</li>
					</ul>

				</div>
				<div class="wifi-detail__info--right">
					<!-- <div class="card">
						<div class="card__side card__side--front">
							<img src="img/banner2-front.jpg" alt="Wifi Viettel" class="card__side--banner">
						</div>
						<div class="card__side card__side--back">
							<img src="img/banner2-back.jpg" alt="Wifi Viettel" class="card__side--banner">
						</div>	
					</div> -->
					<img src="img/img-s/wifi-router.png" alt="wifi router" class="wifi-detail__info--right-img">
				</div>
			</div>
		</div>
		<a href="wifi-gia-dinh" class="btn-text-2"><span class="btn-text-2-span">Tìm hiểu thêm &rarr;</span></a>
	</section>
	<section class="cardSkew">
		<div class="cardSkew__container">
			<div class="cardSkew__card">
				<div class="cardSkew__card__imgBx">
					<img src="img/wifi.svg" alt="Wifi Cáp Quang Viettel">
					<a href="wifi-gia-dinh" style="text-decoration: none;"><h3>Dịch Vụ Wifi</h3></a>
				</div>		
				<div class="cardSkew__card__content">
					<p>Chất lượng đường truyền wifi Viettel cao và ổn định.Xây dựng mức giá đa dạng và phù hợp nhất tới tất cả các đối tượng khách hàng từ sinh viên,hộ gia đình tới các quán game và doanh nghiệp lớn</p>
				</div>
			</div>
			<div class="cardSkew__card">
				<div class="cardSkew__card__imgBx">
					<img src="img/smartphone.svg" alt="Trả sau và trả trước Viettel">
					<a href="tra-sau-viettel" style="text-decoration: none;"><h3>Dịch Vụ Di Động</h3></a>
				</div>		
				<div class="cardSkew__card__content">
					<p>Viettel tặng nhiều gói khuyến mãi gọi thoại,lên mạng 4G dành cho khách hàng.Đăng kí trả sau Viettel tiết kiệm chi phí gọi điện 30%-50% với những mức giá hợp lí cho khách hàng </p>
				</div>
			</div>
			<div class="cardSkew__card">
				<div class="cardSkew__card__imgBx">
					<img src="img/customer-service.svg" alt="Hỗ Trợ Khách Hàng Viettel">
					<h3>Hỗ Trợ Khách Hàng 24/7</h3>
				</div>		
				<div class="cardSkew__card__content">
					<p>Hỗ trợ khách hàng trong khu vực Kiên Giang nhanh chóng trong 24h</p>
					<p>Hotline:<span style="color: #14AFB4">0383.61.71.61</span></p>
					<p>Tổng Đài Viettel:<span style="color: #14AFB4">1800.1098</span></p>
				</div>
			</div>
		</div>
	</section>
	<section class="phone-detail">
		<a href="tra-sau-viettel"><h1 class="heading-secondary u-margin-bottom-medium">Trả Sau Và Trả Trước Viettel</h1></a>
		<div class="phone-detail__info">
			<div class="phone-detail__info--left">
				<div class="card">
					<div class="card__side card__side--front">
						<img src="img/banner1-front.jpg" alt="Phone Viettel" class="card__side--banner">
					</div>
					<div class="card__side card__side--back">
						<img src="img/img-s/banner1-back-s.jpg" alt="Phone Viettel" class="card__side--banner">
					</div>	
				</div>
			</div>
			<div class="phone-detail__info--right">
				<ul class="phone-detail__info--list">
					<li class="phone-detail__info--list-text ">	
						<svg class="phone-detail__info--list-icon ">
							<use xlink:href="img/sprite.svg#icon-like"></use>
						</svg>Nhiều gói cước hấp dẫn và khuyễn mãi
					</li>
					<li class="phone-detail__info--list-text">
						<svg class="phone-detail__info--list-icon phone-detail__info--list-icon-1">
							<use xlink:href="img/sprite.svg#icon-wallet"></use>
						</svg>Tiết kiệm tiền khi gọi điện và lên mạng 4G

					</li>
					<li class="phone-detail__info--list-text ">
						<svg class="phone-detail__info--list-icon ">
							<use xlink:href="img/sprite.svg#icon-phone"></use>
						</svg>Cung cấp dịch vụ 4G tốt nhất Việt Nam
					</li>
					<li class="phone-detail__info--list-text">
						<svg class="phone-detail__info--list-icon phone-detail__info--list-icon-2">
							<use xlink:href="img/sprite.svg#icon-checkmark"></use>
						</svg>Gói trả sau cho thuê bao với mức giá hợp lí

					</li>
					<li class="phone-detail__info--list-text ">
						<svg class="phone-detail__info--list-icon ">
							<use xlink:href="img/sprite.svg#icon-office"></use>
						</svg>Được nhiều khách hàng,doanh nghiệp tin dùng
					</li>
					<li class="phone-detail__info--list-text">
						<svg class="phone-detail__info--list-icon phone-detail__info--list-icon-3">
							<use xlink:href="img/sprite.svg#icon-wrench"></use>
						</svg>Hỗ trợ nhanh chóng cho khách hàng Kiên Giang 24/7
					</li>
				</ul>
			</div>
		</div>
		<a href="tra-sau-viettel" class="btn-text-2"><span class="btn-text-2-span">Tìm hiểu thêm &rarr;</span></a>
	</section>
	<section class="gallary">
		<div class="gallary__info">
			<h1 class="gallary__info--text">Hỗ Trợ Khách Hàng 24/7</h1>
			<p class="gallary__info--textsmail">Hotline:<span style="color: ghostwhite">0383.61.71.61</span></h1>
				<h1 class="gallary__info--textsmail">Tổng đài Viettel:<span style="color: ghostwhite">1800.1098</span> </h1>
			</div>
			<figure class="gallary__item gallary__item--1">
				<img src="img/Picture/1.jpg" alt="Viettel Picture 1" class="gallary__img">	
			</figure>
			<figure class="gallary__item gallary__item--2">
				<img src="img/img-s/2-s.jpg" alt="Viettel Picture 2" class="gallary__img">	
			</figure>
			<figure class="gallary__item gallary__item--3">
				<img src="img/Picture/3.jpg" alt="Viettel Picture 3" class="gallary__img">	
			</figure>
			<figure class="gallary__item gallary__item--4">
				<img src="img/img-s/16-s.jpg" alt="Viettel Picture 4" class="gallary__img">	
			</figure>
			<figure class="gallary__item gallary__item--5">
				<img src="img/Picture/5.jpg" alt="Viettel Picture 5" class="gallary__img">	
			</figure>
			<figure class="gallary__item gallary__item--6">
				<img src="img/img-s/15-s.jpg" alt="Viettel Picture 6" class="gallary__img">	
			</figure>
			<figure class="gallary__item gallary__item--7">
				<img src="img/Picture/7.jpg" alt="Viettel Picture 7" class="gallary__img">	
			</figure>
			<figure class="gallary__item gallary__item--8">
				<img src="img/Picture/8.jpg" alt="Viettel Picture 8" class="gallary__img">	
			</figure>
			<figure class="gallary__item gallary__item--9">
				<img src="img/Picture/9.jpg" alt="Viettel Picture 9" class="gallary__img">	
			</figure>
		</section>
	</main>
	<?php
	include "view/footer.php";
	?>
	<!-- javascript -->
	<script src="ow_/vendors/jquery.min.js"></script>
	<!-- Form Validation -->
	<script>
		// function myFunction() {
		// 	let pattern = /((09|03|07|08|05)+([0-9]{8})\b)/g;
		// 	let elements = document.getElementsByClassName("form__input");

		// 	let error = [];
		// 	let formData = new FormData();


		// 	if (elements[0].value === "" || elements[1].value === "") {
		// 		error.push("form is blank");
		// 	} else if (pattern.test(elements[0].value) === false) {
		// 		error.push("Sdt ko hop le")
		// 	}

		// 	if (error.length === 0) {
		// 		for(var i=0; i<elements.length; i++)
		// 		{
		// 			formData.append(elements[i].name, elements[i].value);
		// 		}


		// 		var xmlHttp = new XMLHttpRequest();
		// 		xmlHttp.onreadystatechange = function()
		// 		{
		// 			if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
		// 			{
		// 				Swal.fire({
		// 					position: 'center',
		// 					icon: 'success',
		// 					title: 'Your work has been saved',
		// 					showConfirmButton: false,
		// 					timer: 1500
		// 				})
		// 			}
		// 		}
		// 		xmlHttp.open("post", "server.php"); 
		// 		xmlHttp.send(formData); 
		// 	}
		// }
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