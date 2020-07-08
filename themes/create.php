<?php
global $themes;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Создание мероприятия</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<? include_once "includes/nav_menu.php"; ?>
<section>
	<div class="container mt-5">	
		<div class="row">
			<div class="col">
				<div class="card border-primary">
					<div class="card-header">Создание мероприятия</div>
					<div class="card-body d-flex justify-content-center">
						<form action="/create/" method="POST" class="was-validated w-75">

							<div class="form-group row mt-2">
        <div class="col-10">
            <input name="header" type="text" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
        				<small id="passwordHelpInline" class="text-muted">Напишите название мероприятия</small>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-10">
            <textarea name="description" class="form-control is-invalid" id="validationTextarea" required></textarea>
            <small id="passwordHelpInline" class="text-muted">Опишите мероприятие</small>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-5">
            <input name="points" type="text" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
            <small id="passwordHelpInline" class="text-muted">Выставьте кол-во баллов за мероприятие,<br> которые получит каждый участник</small>
        </div>
        <div class="col-5">
        				<input name="event_date" type="text" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
        				<small id="passwordHelpInline" class="text-muted">Выберите дату мероприятия</small>
        </div>
    </div>

      <div class="form-group row">
      <div class="col-10 d-flex justify-content-center">
          <button type="submit" class="btn btn-primary">Создать</button>
      </div>
  		</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
			



</body>
</html>