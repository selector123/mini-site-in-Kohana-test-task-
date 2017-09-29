<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">


	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<!-- BOOTSTRAP -->

	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

	<!-- ТАБЛИЦА СТИЛЕЙ -->

	<link href="/assets/css/style.css" rel="stylesheet" type="text/css" >
	
	<title><?php echo $title; ?></title>
</head>
<body>
<section>
<div class="container">
	<div class="row">

		<!-- Полоса навигации -->


		<?php echo $navbar; ?>
	
	<div class="container">
		<div class="row">
      		<div class="col-lg-1 col-md-1"><h5><?php echo $title; ?></h5></div>
      		<div class="col-lg-11 col-md-11"><hr></div>
		</div>
	</div>


			<!-- основная часть -->



			<?php echo $content; ?>




	</div>
</div>
</section>


		<!-- footer -->


<footer>
<div class="container">
	<div class="row">
		<hr>
	</div>
</div>
	<div class="container">
		<div class="row">
			<ul>
				<li>Все права защищены&copy;<?php echo date('Y'); ?></li>
			</ul>
		</div>
	</div>
</footer>

		<!-- отвечает за отображение новостей -->

<script src="/assets/script/salvattore.min.js"></script>

			<!-- lightbox -->

<script src="http://atmpl.ru/design/galleries/2015/lightbox/lightbox.js"></script>
<script>
lightbox.option({
'showImageNumberLabel': false
})
</script>
</body>
</html>