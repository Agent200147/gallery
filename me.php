<?php
	if($_COOKIE['user'] != '')
		header('Location:/me_auth.php');
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gallery</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Podkova&family=Poiret+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>

<link rel="shortcut icon" href="img/a.svg" type="image/png">

</head>

<body>

	<div class="preloader">
  		<div class="preloader__row">
    		<div class="preloader__item"></div>
    		<div class="preloader__item"></div>
  		</div>
	</div>



<!-- <?php ?> -->
							



<!-- -----РЕГИСТРАЦИЯ----
-----РЕГИСТРАЦИЯ----
-----РЕГИСТРАЦИЯ---- -->

<div class="forma u">
				<div class="reg" id="regg">
				<p>Регистрация</p>
				<img src="img/reg.png" alt="">
				<div class="close close_r"><img src="img/close.png" alt=""></div>
			</div>
<form action="check.php" method="post" class="regf" onsubmit="return checkform(this)">
<!-- 	onsubmit="return checkform(this)" -->



			<div class="log">
				<input type="text" name="usernamer" placeholder="Логин" class="login">
			</div>

			<div class="email">
				<input type="text" name="email" placeholder="E-mail">
			</div>

			<div class="tel">
				<input type="tel" name="number" placeholder="Телефон">
			</div>

			<div class="pass">
				<input type="password" name="userpassr" placeholder="Пароль">
			</div>

			<div class="pass1">
				<input type="password" name="userpass2" placeholder="Повторите пароль">
			</div>

			<div class="ch">
				<img src="img/Vector1.svg" alt="">
				<img src="img/Vector.svg" alt="">
				<p><input type="checkbox" name="sec"> Согласен на обработку персональных данных</p>
			</div>

			<div id="error"></div>

			<div class="knopkareg">
				<input type="submit" disabled="disabled" name="zareg" class="knop" value="Зарегистрироваться">
			</div>
		</form>


</div>

<!-- -----РЕГИСТРАЦИЯ-----
-----РЕГИСТРАЦИЯ-----
-----РЕГИСТРАЦИЯ----- -->







<!-- -----ВХОД------
-----ВХОД-----
-----ВХОД----- -->

	<div class="forma_v">

		<div class="vhod">
			<p>Вход</p>
			<img src="img/vhod.png" alt="">
		<div class="close close_v"><img src="img/close.png" alt=""></div>
		</div>
		
		<form action="auth.php" method="post" class="vhodf">

			<div class="log">
				<input type="text" name="usernamev" placeholder="Логин" class="login">
			</div>

			<div class="pass">
				<input type="password" name="userpassv" placeholder="Пароль">
			</div>


			<div class="knopkavhod">
				<input type="submit" name="zareg" class="knopv" value="Войти">
			</div>
	</form>

	</div>


<!-- -----ВХОД------
-----ВХОД-----
-----ВХОД----- -->





	<header id="header"class="header">
		<div class="container1">


			<div class="shapka animate__animated animate__fadeIn animate__delay-4s">
				<div class="ham"><img src="img/menu.svg" alt=""> <img src="img/close.svg"></div>
				
				<img src="img/logo1.png" alt="">

				<div class="navham">
							<div class="hammenu">

						<li>
							<a href="#header">
								Главная
							</a>
						</li>
						<li>
							<a href="#two1">
								Фото
							</a>
						</li>
						<li>
							<a href="#contact">
								Контакты
							</a>
						</li>

							</div>
					

					</div>

				<ul class="menu">
					<div class="nav">
							
						<li>
							<a href="#intro">
								Главная
							</a>
						</li>
						<li>
							<a href="#two1">
								Фото
							</a>
						</li>
						<li>
							<a href="#contact">
								Контакты
							</a>
						</li>

					</div>
							
						<div class="buttons">
							<!-- <li class="reg">
								<p>Регистрация</p>
							</li>
							<li class="vhod">
								<p>Вход</p>
							</li> -->

							<input type="button" name="zareg" class="regb" value="Регистрация">
							<input type="button" name="vhod" class="vhodb" value="Вход">
						</div>
						
				</ul>
			</div>
		</div>






		</div>
	</header>


	<div class="slider wow animate__animated animate__fadeInLeft animate__delay-5s animation__duration-5s" id="slider">
		<div class="lines line1">

		</div>

		<div class="sliderimg">
			<div class="half1">
				<img src="imgs/1.png" alt="">
				<img src="imgs/2.png" alt="">
				<img src="imgs/3.png" alt="">
				<img src="imgs/4.png" alt="">
				<img src="imgs/5.png" alt="">
				<img src="imgs/6.png" alt="">
				<img src="imgs/7.png" alt="">
				<img src="imgs/8.png" alt="">
				<img src="imgs/9.png" alt="">
				<img src="imgs/10.png" alt="">
				<img src="imgs/11.png" alt="">
				<img src="imgs/12.png" alt="">
				<img src="imgs/13.png" alt="">
				<img src="imgs/14.png" alt="">

				<img src="imgs/15.png" alt="">
				<img src="imgs/16.png" alt="">
				<img src="imgs/17.png" alt="">
				<img src="imgs/18.png" alt="">
				<img src="imgs/19.png" alt="">
				<img src="imgs/20.png" alt="">
				<img src="imgs/21.png" alt="">
				<img src="imgs/22.png" alt="">
				<img src="imgs/23.png" alt="">
				<img src="imgs/24.png" alt="">
				<img src="imgs/25.png" alt="">
				<img src="imgs/26.png" alt="">
				<img src="imgs/27.png" alt="">
				<img src="imgs/28.png" alt="">
			</div>
				
			<div class="half2">
				
			</div>
						
		</div>

		<div class="lines line2">
			
		</div>
	</div>


	<section id="one" class="one animate__animated animate__fadeIn animate__delay-5s">
		<div class="container">
			<div class="desc" id="regg">
				<h1>
					Добро пожаловать!
				</h1>
				<div class="content">
					Вы находитесь на странице Aesthetic Photos. Данный сайт подойдет для тех, кто хочет загрузить свои фотографии в сеть. Чтобы загрузить первые фото, загрегистрируйтесь или войдите в существующую учетную запись.
				</div>
			</div>

			<div class="cam">
				<img src="img/cam.png" alt="">
			</div>


		</div>
	</section>

	<div class="two1" id="two1">
		
	</div>

	<section id="two" class="two">
		<div class="container">
			<h1>
				Загружайте свои фотографии!
			</h1>

			<div class="sw swiper-container">
				<div class="left">
					<img src="img/left1.svg" alt="">
				</div>

				
				<div class="sw_wrapper swiper-wrapper">
					<div class="sw_slide swiper-slide sl">
						<div class="sw_image firstrow">
						<img src="img/gallery/1 1.png" alt="">
						<img src="img/gallery/2 1.png" alt="">
						<img src="img/gallery/3 1.png" alt="">
					</div>

					<div class="sw_image secondrow">
						<img src="img/gallery/4 1.png" alt="">
						<img src="img/gallery/5 1.png" alt="">
						<img src="img/gallery/6 1.png" alt="">
					</div>

					<div class="sw_image thirdrow">
						<img src="img/gallery/7 1.png" alt="">
						<img src="img/gallery/8 1.png" alt="">
						<img src="img/gallery/9 1.png" alt="">
					</div>
					</div>



					<div class="sw_slide swiper-slide">
						<div class="sw_image firstrow">
						<img src="img/gallery/7 1.png" alt="">
						<img src="img/gallery/8 1.png" alt="">
						<img src="img/gallery/9 1.png" alt="">
					</div>

					<div class="sw_image secondrow">
						<img src="img/gallery/4 1.png" alt="">
						<img src="img/gallery/5 1.png" alt="">
						<img src="img/gallery/6 1.png" alt="">
					</div>

					<div class="sw_image thirdrow">
						<img src="img/gallery/1 1.png" alt="">
						<img src="img/gallery/2 1.png" alt="">
						<img src="img/gallery/3 1.png" alt="">
					</div>
					</div>


					<div class="sw_slide swiper-slide">
						<div class="sw_image firstrow">
						<img src="img/gallery/4 1.png" alt="">
						<img src="img/gallery/5 1.png" alt="">
						<img src="img/gallery/6 1.png" alt="">
					</div>

					<div class="sw_image secondrow">
						<img src="img/gallery/1 1.png" alt="">
						<img src="img/gallery/2 1.png" alt="">
						<img src="img/gallery/3 1.png" alt="">
					</div>

					<div class="sw_image thirdrow">
						<img src="img/gallery/7 1.png" alt="">
						<img src="img/gallery/8 1.png" alt="">
						<img src="img/gallery/9 1.png" alt="">
					</div>
					</div>


					<div class="sw_slide swiper-slide">
						<div class="sw_image firstrow">
						<img src="img/gallery/4 1.png" alt="">
						<img src="img/gallery/5 1.png" alt="">
						<img src="img/gallery/6 1.png" alt="">
					</div>

					<div class="sw_image secondrow">

						<img src="img/gallery/7 1.png" alt="">
						<img src="img/gallery/8 1.png" alt="">
						<img src="img/gallery/9 1.png" alt="">
					</div>

					<div class="sw_image thirdrow">
						<img src="img/gallery/1 1.png" alt="">
						<img src="img/gallery/2 1.png" alt="">
						<img src="img/gallery/3 1.png" alt="">
					</div>
					</div>


				</div>
				<div class="right ">
					<img src="img/right1.svg" alt="">
				</div>

			</div>
			<div class="stran">1</div>

					

<!-- 			<div class="gallery">
				<div class="left">
					<img src="img/left.svg" alt="">
				</div>

				<div class="galleryimg">
					
					.slidee
					<div class="firstrow">
						<img src="img/gallery/1 1.png" alt="">
						<img src="img/gallery/2 1.png" alt="">
						<img src="img/gallery/3 1.png" alt="">
					</div>

					<div class="secondrow">
						<img src="img/gallery/4 1.png" alt="">
						<img src="img/gallery/5 1.png" alt="">
						<img src="img/gallery/6 1.png" alt="">
					</div>

					<div class="thirdrow">
						<img src="img/gallery/7 1.png" alt="">
						<img src="img/gallery/8 1.png" alt="">
						<img src="img/gallery/9 1.png" alt="">
					</div>


				</div>

				<div class="right">
					<img src="img/right.svg" alt="">
				</div>
			</div>
 -->





		</div>
	</section>




	<footer class="contact" id="contact">
		<div class="container">

			<div class="conhed">
				<h1>Контакты</h1>
			</div>

			<div class="icons">
				<a href="https://vk.com/nickitos2001" target="_blank"><img src="img/icons/vk2.png" alt=""></a>
				<a href="https://instagram.com/burlakov_n?utm_medium=copy_link" target="_blank"><img src="img/icons/insta2.png" alt=""></a>
				<a href="mailto:nickita20012001@mail.ru" target="_blank"><img src="img/icons/mail2.png" alt=""></a>
			</div>

			<div class="prav">
				<img src="img/icons/Vector.png" alt="">
				<h1>
					Все права защищены
				</h1>
			</div>

		</div>
	</footer>

<!-- <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->
<script src="js/main.js"></script>
</body>
</html>