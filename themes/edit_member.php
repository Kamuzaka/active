<?php
global $themes;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Редактирование</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<? include_once "includes/nav_menu.php"; ?>
<section class="mt-5">
	<div class="container">
  <div class="row">
			<div class="col">
				  	<div class="card">
  		<div class="card-header">Редактирование участника</div>
  		<div class="card-body">
  			<form action="/registration/" method="POST" class="was-validated">

                                <div class="form-group row mt-2">
                                    <label class="col-md-4 col-form-label text-md-right">Фамилия</label>
                                    <div class="col-md-6">
                                        <input name="name1" type="text" value="Фамилия" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Имя</label>
                                    <div class="col-md-6">
                                        <input name="name2" type="text" value="Имя" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Отчество</label>
                                    <div class="col-md-6">
                                        <input name="name3" type="text" value="Отчество" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Группа</label>
                                    <div class="col-md-6">
                                        <select class="custom-select mr-sm-2 form-control is-invalid" name="group_of_member" id="inlineFormCustomSelect" aria-describedby="validatedInputGroupPrepend" required>
                                            <option selected value="Группа">Группа</option>
                                            <option value="ИСТ-311">ИСТ-311</option>
                                            <option value="ПРИ-311">ПРИ-311</option>
                                            <option value="ИБ-311">ИБ-311</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Номер телефона</label>
                                    <div class="col-md-6">
                                        <input name="phone" type="tel" value="Номер телефона" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">E-Mail</label>
                                    <div class="col-md-6">
                                        <input name="email" type="email" value="E-Mail@exaple" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Должность</label>
                                    <div class="col-md-6">
                                        <input name="login" type="text" value="Должность" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Кол-во посещений</label>
                                    <div class="col-md-6">
                                        <input name="count_events" type="text" value="20" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                                    </div>
                                </div>

                               <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Баллы</label>
                                    <div class="col-md-6">
                                        <input name="code" type="text" value="20" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">Сохранить</button>
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