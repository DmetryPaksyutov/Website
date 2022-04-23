<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	

	<title>Lisakovsk</title>
	<meta name="description" content="Simple Starter Description">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel="icon" href="<?php echo $imagesPath; ?>favicon.png">
	<meta property="og:image" content="<?php echo $imagesPath; ?>preview.jpg">

	<link rel="stylesheet" href="<?php echo $sitePath; ?>libs/bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="<?php echo $sitePath; ?>libs/bootstrap/css/bootstrap-grid.min.css">

	<link rel="stylesheet" href="<?php echo $sitePath; ?>css/main.css">
	<link rel="stylesheet" href="<?php echo $sitePath; ?>css/media.css">

	<script src="<?php echo $sitePath; ?>libs/jquery/jquery-3.6.0.min.js" defer></script>

	<script src="<?php echo $sitePath; ?>js/common.js" defer></script>

</head>

<body>
	<div class="navbar">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<div class="logo">
						<a href="/" class="logo__link"><img src="<?php echo $imagesPath; ?>Logo.png" alt=""></a>
					</div>
				</div>
				<div class="col-md-10  menu-container">
					<i class="menu-togle"></i>
					<ul class="top-menu">
						<li class="top-menu__item"><a href="/forum" class="top-menu__link">Форум</a></li>
						<li class="top-menu__item"><a href="/" class="top-menu__link">Главная</a></li>
						<li class="top-menu__item"><a href="/articlesList" class="top-menu__link">Мероприятия</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

    
<?php
	include ($contentPage);
?>

    
 <section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-12 footer__wrapper">
				<P class="onas">О нас</P>
				<P class="soc">Мы в соц. сетях</P>
				<P class="onas-titel">19 марта В рамках празднования Наурыз мейрамы на территории молодежной зоны (ресторан «Орда») прошла праздничная программа «Восточные сказки Навруза»</P>
				<img class="insta" src="<?php echo $imagesPath; ?>fa-soc/white/instagram-brands.svg" alt="">
				<img class="face" src="<?php echo $imagesPath; ?>fa-soc/white/facebook-brands.svg" alt="">
				<a href="https://instagram.com/ltk_college?igshid=YmMyMTA2M2Y="><p class="insta_t">instagram</p></a>
				<a href="https://m.facebook.com/profile.php?id=100047097784869&refid=52&__tn__=C-R"><p class="face_t">facebook</p></a>
			</div>
		</div>
	</div>
	
</section>
</body>
</html>
