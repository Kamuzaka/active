<?php
global $themes;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Информация о мероприятиях</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<? include_once "includes/nav_menu.php"; ?>
<section class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card border-primary">
<div class="card-header">Название мероприятия</div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Описание Описание Описание Описание Описание Описание Описание</p>
      <p class="card-text"><small class="text-muted">Количество участников - </small></p>
      <p class="card-text"><small class="text-muted">Уровень мероприятия - </small></p>
      <p class="card-text"><small class="text-muted">Форма проведения - </small></p>
    </blockquote>
    <table class="table table-sm mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"></th>
      <th scope="col">Имя</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Отчество</th>
      <th scope="col">Группа</th>
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
      <td>Группа</td>
      <td><button type="button" class="btn btn-danger">Удалить из списка</button></td>
    </tr>
  </tbody>
</table>
  </div>
  <div class="card-footer text-muted text-center">13 июля 2019</div>
</div>

    </div>
  </div>
  </div>
</section>
</body>
</html>