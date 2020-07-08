<?php
global $themes;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
<body>
    <? include_once "includes/nav_menu.php"; ?>
    <section class="mt-5">
        <div class="cotainer">
            <div class="row d-flex justify-content-center w-100">
                <div class="col-md-8">
                    <div class="card border-primary">
                        <div class="card-header">Регистрация</div>
                        <div class="card-body">
                            <form action="/registration/" method="POST" class="was-validated">

                                <div class="form-group row mt-2">
                                    <label class="col-md-4 col-form-label text-md-right">Фамилия</label>
                                    <div class="col-md-6">
                                        <input name="name1" type="text" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Имя</label>
                                    <div class="col-md-6">
                                        <input name="name2" type="text" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Отчество</label>
                                    <div class="col-md-6">
                                        <input name="name3" type="text" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Пол</label>
                                    <div class="col mt-2 ml-5">
                                        <div class="custom-control custom-radio">
                                            <input value="1" name="sex" type="radio" class="custom-control-input" id="customControlValidation2" required>
                                            <label class="custom-control-label" for="customControlValidation2">Мужской</label>
                                        </div>
                                    </div>
                                    <div class="col mt-2 mr-5">
                                        <div class="custom-control custom-radio">
                                            <input value="0" name="sex" type="radio" class="custom-control-input" id="customControlValidation3" required>
                                            <label class="custom-control-label" for="customControlValidation3">Женский</label>
                                        </div>  
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Группа</label>
                                    <div class="col-md-6">
                                        <select class="custom-select mr-sm-2 form-control is-invalid" name="group_of_member" id="inlineFormCustomSelect" aria-describedby="validatedInputGroupPrepend" required>
                                            <option selected disabled value=""></option>
                                            <option value="ИСТ-311">ИСТ-311</option>
                                            <option value="ПРИ-311">ПРИ-311</option>
                                            <option value="ИБ-311">ИБ-311</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Номер телефона</label>
                                    <div class="col-md-6">
                                        <input placeholder="+7 *** *** ** **" name="phone" type="tel" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">E-Mail</label>
                                    <div class="col-md-6">
                                        <input name="email" type="email" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Логин</label>
                                    <div class="col-md-6">
                                        <input name="login" type="text" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Пароль</label>
                                    <div class="col-md-6">
                                        <input name="password" type="password" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                                    </div>
                                </div>

<!--                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Код потдверждения</label>
                                    <div class="col-md-6">
                                        <input name="code" type="text" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                                    </div>
                                </div> -->

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
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