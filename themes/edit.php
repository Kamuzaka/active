<?php
global $themes;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Актив</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

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
				<table id="dtOrderExample" class="table table-striped table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col"></th>
      <th scope="col">Имя</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Группа</th>
      <th scope="col">Должность</th>
      <th scope="col">Баллы</th>
      <th scope="col">Мероприятия</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($data['list'] as $key =>$item) :?>
    <tr class="table-primary">
      <th scope="row"><?=($key+1) ?></th>
      <td><img src="<?= $themes;?>img/icon.png" alt="" class="rounded-circle" style="height: 30px" ></td>
      <td><?=$item['name2']; ?></td>
      <td><?=$item['name1']; ?></td>
      <td><?=$item['name3']; ?></td>
      <td>Должность</td>
      <td><?=$item['points']; ?></td>
      <td><?=$item['count_events']; ?></td>
      <td><a href="/edit_member/" class="btn btn-success" role="button" aria-pressed="true">Изменить</a></td>
      <td><button type="button" class="btn btn-danger">Удалить</button></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
			</div>


		</div>
	</div>
</section>
<script>
    $(document).ready( function () {
        $('#dtOrderExample').DataTable({
            searching: false,
            paging: false,
            info: false
        });
    });
</script>
</body>
</html>