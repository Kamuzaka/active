<?php
global $themes;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Актив</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<? include_once "includes/nav_menu.php"; ?>
<section class="mt-5">
	<div class="container">
  <div class="row">
      <h1>Актив</h1>
  </div>
  <br>
  <div class="row mb-5">
    <div class="col">
      <div class="btn-group">
  <button type="button" class="btn btn-secondary">Сортировать</button>
  <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Алфавиту</a>
    <a class="dropdown-item" href="#">Баллам</a>
    <a class="dropdown-item" href="#">Группе</a>
    <a class="dropdown-item" href="#">Мероприятиям</a>
  </div>
</div>
    </div>
  </div>
		<div class="row">
			<div class="col">
				<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"></th>
      <th scope="col">Имя</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Группа</th>
      <th scope="col">Баллы</th>
      <th scope="col">Мероприятия</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-primary">
      <th scope="row">1</th>
      <td><img src="<?= $themes;?>img/icon.png" alt="" class="rounded-circle" style="height: 30px" ></td>
      <td>Имя</td>
      <td>Фамилия</td>
      <td>Группа</td>
      <td>20</td>
      <td>20</td>
    </tr>
  </tbody>
</table>
			</div>


		</div>
	</div>
</section>
</body>
</html>