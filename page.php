<? 
require_once($_SERVER['DOCUMENT_ROOT']."/inc/config.inc.php");

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Главная</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="container">
				<div class="logo">
					<a href="/">						
						<img src="img/logo.png" alt="">
						<div class="text">						
							<p>3D панели</p>
							<span>Производство 3D панелей</span>
						</div>
					</a>
				</div>
				<div class="right">
					<a href="#call-popup" id="call-link">заказать обратный звонок</a>
					<p class="phone"><?= $_phone1 ?></p>
					<p class="phone"><?= $_phone2 ?></p>
				</div>
			</div>
		</header>
		<!-- end of header -->
		<div class="content">
			<div class="container">				
				<div class="page">
					<h1>Заявка</h1>
                    
                <? if(count( $_POST )): ?>    
<? 

$message = "Вам пришла заявка с сайта. Данные отправителя Вы можете посмотреть ниже "."\n\n";

                $message .= " Имя отправителя: ".$_POST['name']."\n";

                $message .= " Телефон: ".$_POST['phone']."\n";


               
    $frm = "Заявка на звонок с сайта ".$_SERVER['HTTP_HOST'];

	$headers = "Content-type: text/plain; charset=utf-8\r\n";
	

if (	mail($_email, "{$frm} ", $message, $headers)	)
{
	print_r("Заявка отправлена успешно");
	
	}
?>
                    
                <? endif; ?>
				</div>
			</div>
		</div>
		<!-- end of content -->
		<div class="for-footer"></div>
	</div>
	<footer>
		<div class="container">
			<div class="post-l left">
				<div class="request-form">
					<div class="title">
						<p>Форма обратной связи</p>
						<span>Наши специалисты с радостью вам помогут</span>
					</div>
					<form action="/page.php" method="post"> 
						<p class="title">оставить заявку</p>
						<input type="text" placeholder="Имя" name="name">
						<input type="text" placeholder="Телефон" name="phone">
						<button type="submit">отправить</button>
					</form>
				</div>
			</div>
			<div class="post-r right">
				<div class="address">
					<p>Контакты</p>
					<div class="address-in">
						<p class="adr"><?= $_adres ?></p>
						<p class="email">Email: <?= $_email ?></p>
						<p class="time"><?= $_time ?></p>
					</div>
				</div>
				<div class="phones">
					<p class="phone"><?= $_phone1 ?></p>
					<p class="phone"><?= $_phone2 ?></p>
				</div>
				<a href="#" class="map-link">Схема проезда</a>
			</div>
		</div>
	</footer>
	<!-- end of footer -->

	<div class="call-popup" id="call-popup">
		<div class="request-form">
			<form action="/page.php" method="post">
				<p class="title">оставить заявку</p>
				<input type="text" placeholder="Имя" name="name">
				<input type="text" placeholder="Телефон" name="phone">
				<button type="submit">отправить</button>
			</form>
		</div>
	</div>



	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.viewportchecker.js"></script>
	<script src="js/script.js"></script>
</body>
</html>