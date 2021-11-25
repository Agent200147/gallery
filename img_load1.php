<?php
	include 'thumbs.php';
	include 'db_connection.php';
	if(isset($_POST['load']) and $_POST['description'] != ""){
		$username = $_COOKIE['user'];

		// $description = $_POST['description'];

		$stmt = $mysqll->prepare("SELECT `id_user` FROM `userr` WHERE `login` = :username ");

		$stmt->bindParam(':username', $username);
		$stmt->execute();

		$user = $stmt;
		$result = $user->fetch();
		$id_user = $result['id_user'];

		$img_type = substr($_FILES['img_load']['type'], 0, 5);
		$img_size = 10000 * 1024 * 1024;

		if(!empty($_FILES['img_load']['tmp_name']) and $img_type === 'image' and $_FILES['img_load']['size'] <= $img_size){

			$img = addslashes(file_get_contents($_FILES['img_load']['tmp_name']));

			$image = $_FILES['img_load'];

			$u = uniqid();

			copy($image['tmp_name'], 'img_users/' . $u .$image['name']);

			copy($image['tmp_name'], 'imgmin/min_' . $u .$image['name']);

			$image_1 = new Thumbs('imgmin/min_' . $u . $image['name']);
			$image_1->thumb(500, 288);
			// $image_1->reduce(288, 170);
			$image_1->save();

			$im1 = 'img_users/' . $u . $image['name'];
			$im2 = 'imgmin/min_' . $u . $image['name'];

			//$image_min = addslashes(file_get_contents('imgmin/min_' . $image['name']));

			$tag = "Припрода";
			$tags = $tag . ", ";
			$tagss = "ttttttt ";
			// copy($image_min['tmp_name'], 'imgmin/' . $image['name']);

			// echo $image, $image_min;

			
			// $img_minn = $img_min->reduce(200, 0);

			// $img_min_ser = addslashes(file_get_contents($img_minn));


			$stmt = $mysql->prepare("INSERT INTO `element` (`foto`, `foto_min`, `description`, `rate_num`, `average_rate`, `id_user`) VALUES('$im1', '$im2', :description, '4', '3', :id_user)"); 


			$description = filter_var(trim($_POST['description']), FILTER_SANITIZE_STRING);

			$stmt->bindParam(':description', $description);
			$stmt->bindParam(':id_user', $id_user);
			$stmt->execute();




			// $stmt->bindParam(':tags', $tags);
			// $stmt->execute();

			// $mysqll->query("INSERT INTO `test` (`e-test`, `num`, `id_t`) VALUES('ghhhhh', '3', '3')");


			// $mysqll->close();
			header('Location: ../me_auth.php');
		}

		else{

			echo "Error";
			echo $img_type;
			echo $_FILES['img_load']['size'];
		}
	}

	else{
		echo "Error";
	}