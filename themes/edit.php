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
      <th scope="col">Должность</th>
      <th scope="col">Баллы</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-primary">
      <th scope="row">1</th>
      <td><img src="<?= $themes;?>img/icon.png" alt="" class="rounded-circle" style="height: 30px" ></td>
      <td>Имя</td>
      <td>Фамилия</td>
      <td>Отчество</td>
      <td>Должность</td>
      <td>20</td>
      <td><a href="/edit_member/" class="btn btn-success" role="button" aria-pressed="true">Изменить</a></td>
      <td><button type="button" class="btn btn-danger">Удалить</button></td>
    </tr>
    <tr class="table-primary">
      <th scope="row">2</th>
      <td><img src="<?= $themes;?>img/icon.png" alt="" class="rounded-circle" style="height: 30px" ></td>
      <td>Имя</td>
      <td>Фамилия</td>
      <td>Отчество</td>
      <td>Должность</td>
      <td>20</td>
      <td><a href="/edit_member/" class="btn btn-success" role="button" aria-pressed="true">Изменить</a></td>
      <td><button type="button" class="btn btn-danger">Удалить</button></td>
    </tr>
    <tr class="table-primary">
      <th scope="row">3</th>
      <td><img src="<?= $themes;?>img/icon.png" alt="" class="rounded-circle" style="height: 30px" ></td>
      <td>Имя</td>
      <td>Фамилия</td>
      <td>Отчество</td>
      <td>Должность</td>
      <td>20</td>
      <td><a href="/edit_member/" class="btn btn-success" role="button" aria-pressed="true">Изменить</a></td>
      <td><button type="button" class="btn btn-danger">Удалить</button></td>
    </tr>
    <tr class="table-primary">
      <th scope="row">4</th>
      <td><img src="<?= $themes;?>img/icon.png" alt="" class="rounded-circle" style="height: 30px" ></td>
      <td>Имя</td>
      <td>Фамилия</td>
      <td>Отчество</td>
      <td>Должность</td>
      <td>20</td>
      <td><a href="/edit_member/" class="btn btn-success" role="button" aria-pressed="true">Изменить</a></td>
      <td><button type="button" class="btn btn-danger">Удалить</button></td>
    </tr>
  </tbody>
</table>
			</div>


		</div>
	</div>
</section>
</body>
</html>