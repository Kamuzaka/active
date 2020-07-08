<?php
global $themes;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Мероприятия</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<? include_once "includes/nav_menu.php"; ?>
<section class="mt-5">
	<div class="container">
  <div class="row">
      <h1>Мероприятия</h1>
  </div>
  <br>
		<div class="row">
            <?php foreach($data['list'] as $item): ?>
			<div class="col">
				<div class="card border-primary" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title"><?=$item['header']; ?></h5>
						<div class="input-group-text d-flex justify-content-center font-weight-bold mb-2"><?=$item['event_date']; ?></div>
						<p class="card-text"><?=$item['description']; ?></p>
						<a href="#" class="btn btn-primary">Участвовать</a>
					</div>
				</div>
			</div>
            <?php endforeach;?>
		</div>
	</div>
</section>
</body>
</html>