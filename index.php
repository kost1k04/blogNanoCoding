<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<!-- ===== google font ==== -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<!-- ==== bootstrap ==== -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php include "php/header.php"; ?>
	<div class="content">
		<div class="container">
			<div class="row">
				<?php include "php/aside.php"; ?>
				<article class="art-simple col-md-9 col-sm-9">
					<p class="art-simple__date">20 September</p>
					<h2 class="art-simple__title">No difference how many peaks you reach if there was no pleasure in the climb.</h2>
					<hr class="art-simple__hr">
					<p class="art-simple__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, velit ratione in expedita pariatur praesentium ducimus, natus laboriosam consequatur modi iusto animi consectetur repellat tenetur hic asperiores enim harum perspiciatis rerum quisquam accusantium? Magni vero voluptatem neque esse illum omnis et animi, hic quo in, sapiente numquam illo nisi quidem sit! Dignissimos sint eum earum laudantium, illo ab perferendis sapiente ipsam optio aperiam repellendus expedita dicta nisi, necessitatibus consequuntur delectus.</p>
					<a href="article.php" class="btn btn_hover">Read More</a>
				</article>
				<article class="art-medium art-medium_pos art-simple col-md-9 col-sm-9">
					<div class="art-medium__img"></div>
					<p class="art-simple__date">15 September</p>
					<h2 class="art-simple__title">Nature and Books belong to the eyes that see them.</h2>
					<hr class="art-simple__hr">
					<p class="art-simple__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, velit ratione in expedita pariatur praesentium ducimus, natus laboriosam consequatur modi iusto animi consectetur repellat tenetur hic asperiores enim harum perspiciatis rerum quisquam accusantium? Magni vero voluptatem neque esse illum omnis et animi, hic quo in, sapiente numquam illo nisi quidem sit! Dignissimos sint eum earum laudantium, illo ab perferendis sapiente ipsam optio aperiam repellendus expedita dicta nisi, necessitatibus consequuntur delectus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, quod, praesentium! Harum voluptatibus, quis omnis ea ex porro accusamus repellendus veritatis ducimus nostrum, dicta consequuntur quaerat dolore, autem. Labore, quas.</p>
					<a href="article.php" class="btn btn_hover">Read More</a>
				</article>
				<article class="art-simple col-md-9 art-medium_pos col-sm-9">
					<p class="art-simple__date">6 September</p>
					<h2 class="art-simple__title">Everything in the universe has a rhythm, everything dances.</h2>
					<hr class="art-simple__hr">
					<p class="art-simple__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, velit ratione in expedita pariatur praesentium ducimus, natus laboriosam consequatur modi iusto animi consectetur repellat tenetur hic asperiores enim harum perspiciatis rerum quisquam accusantium? Magni vero voluptatem neque esse illum omnis et animi, hic quo in, sapiente numquam illo nisi quidem sit! Dignissimos sint eum earum laudantium, illo ab perferendis sapiente ipsam optio aperiam repellendus expedita dicta nisi, necessitatibus consequuntur delectus.</p>
					<a href="article.php" class="btn btn_hover">Read More</a>
				</article>
			</div>
		</div>
	</div>
	<?php include "php/footer.php"; ?>
</body>
</html>