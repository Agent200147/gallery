<?php
	if($_COOKIE['user'] == '')
		header('Location:/me.php');
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
<link rel="stylesheet" href="css/main_auth.css">
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

<!-- 	<div class="preloader">
  		<div class="preloader__row">
    		<div class="preloader__item"></div>
    		<div class="preloader__item"></div>
  		</div>
	</div>
 -->






	<header id="header"class="header">
		<div class="container1">


			<div class="shapka animate__animated animate__fadeIn animate__delay-0.4s">
				
				<img src="img/logo1.png" alt="">

				<h1 class="f_1">Все фото</h1>
						<div class="user">
							<div class="avatar"><img src="img/avatar.png" alt=""></div>
							<?=$_COOKIE['user']?>
							<div class="trial"><img src="img/trial.svg" alt=""></div>

								<ul class="menu"> 

									<li class="item"> <a href="#">Загрузить фото</a> </li>

									<li class="item"> <a href="#">Пользователи</a> </li>

									<li class="item"> <a href="/exit.php">Выйти</a> </li>

							</ul>
						</div>


			</div>






		</div>
	</header>


	<div class="slider wow animate__animated animate__fadeInLeft animate__delay-0.5s animation__duration-5s" id="slider">
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

	<section id="two" class="two">
		<div class="container">
			<h1 class="f_2">
				Ваши фото
			</h1>

			<div class="sw swiper-container">
				<div class="left">
					<img src="img/left1.svg" alt="">
				</div>


				<div class="sw_wrapper swiper-wrapper">
					<div class="sw_slide swiper-slide sl show">
						<div class="sw_image firstrow">


				<?php
				include 'db_connection.php';

				$username = $_COOKIE['user'];

				$user = $mysqll->prepare("SELECT `id_user` FROM `userr` WHERE `login` = :username ");

				$user->bindParam(':username', $username);
				$user->execute();

				$result = $user->fetch();
				$id_user = $result['id_user'];

				$str = 3;
				$const_3 = 3;

				$stmt = $mysqll->prepare("SELECT * FROM element  WHERE id_user = :id_user ORDER BY id_element DESC LIMIT :str");

				$stmt->bindParam(':id_user', $id_user);

				$stmt->bindValue(':str', $str, PDO::PARAM_INT);

				$stmt->execute();


				while($row = $stmt->fetch()){
					//$show_img = base64_encode($row['foto_min']);?>
					<img src="<?php echo $row[foto_min] ?>" alt="">

				<?php } ?>
					</div>




					<div class="sw_image secondrow">
				<?php


				$stmt = $mysqll->prepare("SELECT * FROM element  WHERE id_user = :id_user ORDER BY id_element DESC LIMIT :str, :const_3");

				$stmt->bindParam(':id_user', $id_user);
				$stmt->bindValue(':str', $str, PDO::PARAM_INT);
				$stmt->bindValue(':const_3', $const_3, PDO::PARAM_INT);

				$stmt->execute();

				while($row = $stmt->fetch()){
					//$show_img = base64_encode($row['foto_min']);
					$str += 1;?>
					<img src="<?php echo $row[foto_min] ?>" alt="">
				<?php } ?>
					</div>




					<div class="sw_image thirdrow">
				<?php


				$stmt = $mysqll->prepare("SELECT * FROM element  WHERE id_user = :id_user ORDER BY id_element DESC LIMIT :str, :const_3");

				$stmt->bindParam(':id_user', $id_user);
				$stmt->bindValue(':str', $str, PDO::PARAM_INT);
				$stmt->bindValue(':const_3', $const_3, PDO::PARAM_INT);

				$stmt->execute();

				while($row = $stmt->fetch()){
					//$show_img = base64_encode($row['foto_min']);
					$str += 1;?>
					<img src="<?php echo $row[foto_min] ?>" alt="">
				<?php } ?>
					</div>
					</div>











					<div class="sw_slide swiper-slide non">
						<div class="sw_image firstrow "  >
						<?php


				//$stmt = $mysqll->prepare("SELECT * FROM element  WHERE id_user = :id_user ORDER BY id_element DESC LIMIT :str, :const_3");

				$stmt->bindParam(':id_user', $id_user);
				$stmt->bindValue(':str', $str, PDO::PARAM_INT);
				$stmt->bindValue(':const_3', $const_3, PDO::PARAM_INT);

				$stmt->execute();

				while($row = $stmt->fetch()){
					//$show_img = base64_encode($row['foto_min']);
					$str += 1;?>
					<img src="<?php echo $row[foto_min] ?>" alt="" class ="comon">
				<?php } ?>
					</div>

					<div class="sw_image secondrow">
						<?php


				$stmt = $mysqll->prepare("SELECT * FROM element  WHERE id_user = :id_user ORDER BY id_element DESC LIMIT :str, :const_3");

				$stmt->bindParam(':id_user', $id_user);
				$stmt->bindValue(':str', $str, PDO::PARAM_INT);
				$stmt->bindValue(':const_3', $const_3, PDO::PARAM_INT);

				$stmt->execute();

				while($row = $stmt->fetch()){
					$show_img = base64_encode($row['foto_min']);
					$str += 1;?>
					<img src="data:image/jpeg;base64, <?php echo $show_img ?>" alt="" class ="comon">
				<?php } ?>
					</div>

					<div class="sw_image thirdrow">
						<?php


				$stmt = $mysqll->prepare("SELECT * FROM element  WHERE id_user = :id_user ORDER BY id_element DESC LIMIT :str, :const_3");

				$stmt->bindParam(':id_user', $id_user);
				$stmt->bindValue(':str', $str, PDO::PARAM_INT);
				$stmt->bindValue(':const_3', $const_3, PDO::PARAM_INT);

				$stmt->execute();

				while($row = $stmt->fetch()){
					$show_img = base64_encode($row['foto_min']);
					$str += 1;?>
					<img src="data:image/jpeg;base64, <?php echo $show_img ?>" alt="" class ="comon">
				<?php } ?>
					</div>
					</div>






					<div class="sw_slide swiper-slide non">
						<div class="sw_image firstrow">
						<?php


			$stmt = $mysqll->prepare("SELECT * FROM element  WHERE id_user = :id_user ORDER BY id_element DESC LIMIT :str, :const_3");

				$stmt->bindParam(':id_user', $id_user);
				$stmt->bindValue(':str', $str, PDO::PARAM_INT);
				$stmt->bindValue(':const_3', $const_3, PDO::PARAM_INT);

				$stmt->execute();

				while($row = $stmt->fetch()){
					$show_img = base64_encode($row['foto_min']);
					$str += 1;?>
					<img src="data:image/jpeg;base64, <?php echo $show_img ?>" alt="" class ="comon">
				<?php } ?>
					</div>

					<div class="sw_image secondrow">
						<?php


				$stmt = $mysqll->prepare("SELECT * FROM element  WHERE id_user = :id_user ORDER BY id_element DESC LIMIT :str, :const_3");

				$stmt->bindParam(':id_user', $id_user);
				$stmt->bindValue(':str', $str, PDO::PARAM_INT);
				$stmt->bindValue(':const_3', $const_3, PDO::PARAM_INT);

				$stmt->execute();

				while($row = $stmt->fetch()){
					$show_img = base64_encode($row['foto_min']);
					$str += 1;?>
					<img src="data:image/jpeg;base64, <?php echo $show_img ?>" alt="" class ="comon">
				<?php } ?>
					</div>

					<div class="sw_image thirdrow">
						<?php


				$stmt = $mysqll->prepare("SELECT * FROM element  WHERE id_user = :id_user ORDER BY id_element DESC LIMIT :str, :const_3");

				$stmt->bindParam(':id_user', $id_user);
				$stmt->bindValue(':str', $str, PDO::PARAM_INT);
				$stmt->bindValue(':const_3', $const_3, PDO::PARAM_INT);

				$stmt->execute();

				while($row = $stmt->fetch()){
					$show_img = base64_encode($row['foto_min']);
					$str += 1;?>
					<img src="data:image/jpeg;base64, <?php echo $show_img ?>" alt="" class ="comon">
				<?php } ?>
					</div>
					</div>








					<div class="sw_slide swiper-slide non">
						<div class="sw_image firstrow">
						<?php


				$stmt = $mysqll->prepare("SELECT * FROM element  WHERE id_user = :id_user ORDER BY id_element DESC LIMIT :str, :const_3");

				$stmt->bindParam(':id_user', $id_user);
				$stmt->bindValue(':str', $str, PDO::PARAM_INT);
				$stmt->bindValue(':const_3', $const_3, PDO::PARAM_INT);

				$stmt->execute();

				while($row = $stmt->fetch()){
					$show_img = base64_encode($row['foto_min']);
					$str += 1;?>
					<img src="data:image/jpeg;base64, <?php echo $show_img ?>" alt="" class ="comon">
				<?php } ?>
					</div>

					<div class="sw_image secondrow">

						<?php


				$stmt = $mysqll->prepare("SELECT * FROM element  WHERE id_user = :id_user ORDER BY id_element DESC LIMIT :str, :const_3");

				$stmt->bindParam(':id_user', $id_user);
				$stmt->bindValue(':str', $str, PDO::PARAM_INT);
				$stmt->bindValue(':const_3', $const_3, PDO::PARAM_INT);

				$stmt->execute();

				while($row = $stmt->fetch()){
					$show_img = base64_encode($row['foto_min']);
					$str += 1;?>
					<img src="data:image/jpeg;base64, <?php echo $show_img ?>" alt="" class ="comon">
				<?php } ?>
					</div>

					<div class="sw_image thirdrow">
						<?php


				$stmt = $mysqll->prepare("SELECT * FROM element  WHERE id_user = :id_user ORDER BY id_element DESC LIMIT :str, :const_3");

				$stmt->bindParam(':id_user', $id_user);
				$stmt->bindValue(':str', $str, PDO::PARAM_INT);
				$stmt->bindValue(':const_3', $const_3, PDO::PARAM_INT);

				$stmt->execute();

				while($row = $stmt->fetch()){
					$show_img = base64_encode($row['foto_min']);
					$str += 1;?>
					<img src="data:image/jpeg;base64, <?php echo $show_img ?>" alt="" class ="comon">
				<?php } ?>
					</div>
					</div>


				</div>
				<div class="right ">
					<img src="img/right1.svg" alt="">
				</div>

			</div>

				
				<!-- <div class="sw_wrapper swiper-wrapper">
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

			</div> -->
			<div class="rounds">
					<div class="round "></div>
					<div class="round "></div>
					<div class="round "></div>
					<div class="round "></div>

					<div class="round"></div>
					<div class="round"></div>
					<div class="round"></div>
					<div class="round"></div>

					<div class="round"></div>
					<div class="round"></div>
					<div class="round"></div>
					<div class="round"></div>

					<div class="round"></div>
					<div class="round"></div>
					<div class="round"></div>
					<div class="round"></div>

					<div class="round"></div>
					<div class="round"></div>
					<div class="round"></div>
					<div class="round"></div>

					<div class="round"></div>
					<div class="round"></div>
					<div class="round"></div>
					<div class="round"></div>

			</div>

<!-- 			<div class="stran">1</div> -->

					

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

<!-- 			<div class="all_f">
				

			<?php


				

				$result = $mysqll->query("SELECT * FROM `element` ORDER BY id_element DESC ");

				while($row = $result->fetch()){
					//$show_img = base64_encode($row['foto_min']);
?>
					<img src="<?php echo $row[foto_min] ?>" alt="">
				<?php } ?>


			</div>  -->

				<div class="all_f"> 
				

			<?php



				$result = $mysqll->query("SELECT * FROM `element` ORDER BY id_element DESC ");

				echo "<table class='ttt'><tr><th>Id</th><th>foto</th><th>desription</th><th>rate_num</th><th>average_rate</th>
				<th>id_user</th></tr>";

				while($row = $result->fetch()){
					//$show_img = base64_encode($row['foto_min']);
?>
					<div class="f_item"> <?php 
						echo "<td>" . $row[id_element] . "</td>";
						?>
						<td><img src="<?php echo $row[foto_min] ?>" alt=""></td>
					<?php 


						echo "<td>" . $row[description] . "</td>";
            echo "<td>" . $row[rate_num] . "</td>";
            echo "<td>" . $row[average_rate] . "</td>";
            echo "<td>" . $row[id_user] . "</td>";

        echo "</tr>";

						 ?> </div>
				<?php } 
				echo "</table>";?>


			</div>

	</section>



	<section id="three">
		<div class="container">
				
				<form action="img_load1.php" method="post" enctype="multipart/form-data">
					
					<input type="file" name="img_load" class="mg_load">
					<input type="text" name="description" class="description_input" placeholder="Описание">
					<input type="submit" name="load" class="load" value="Загрузить">



				</form>
					


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
<script src="js/main2.js"></script>
</body>
</html>