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
               <div class="col">
                  <div class="card border-primary">
                     <div class="container">
                        <div class="row px-5 py-3">
                           <h1><?= $data['user']['name1'] . ' ' . $data['user']['name2'] . ' ' . $data['user']['name3'];?> ПМИ-341</h1>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-5 d-flex justify-content-center align-items-center flex-column">
                           <img src="<?= $themes;?>img/Icon.png" alt="фото профиля" class="rounded d-block w-50 mb-3">
                           <div class="btn-group w-50 mb-3" role="group">
                              <button id="btnGroupDrop1" type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Профиль</button>
                              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                 <a class="dropdown-item" href="#">Редактировать профиль</a>
                                 <a class="dropdown-item" href="#">Загрузить фото профиля</a>
                                 <a class="dropdown-item text-danger" href="#" role="button" aria-pressed="true">Удалить профиль</a>
                              </div>
                           </div>
                        </div>
                        <div class="col">
                           <div class="row">
                              <div class="col">
                                 <p class="card-text"><small class="text-muted">Количество посещенных мероприятий:</small></p>
                                 <p class="text-monospace">54
                                 <hr class="mr-5">
                                 </p>
                              </div>
                              <div class="col">
                                 <p class="card-text"><small class="text-muted">Баллы:</small></p>
                                 <p class="text-monospace">467
                                 <hr class="mr-5">
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                           	<div class="col">
		                           <p class="card-text"><small class="text-muted">Телефон:</small></p>
			                        <p class="text-monospace"><?= $data['user']['phone']; ?>
			                        <hr class="mr-5">
			                        </p>
                           	</div>
                           	<div class="col">
                           		<p class="card-text"><small class="text-muted">Почта:</small></p>
                           		<p class="text-monospace"><?= $data['user']['email']; ?>
                           <hr class="mr-5">
                           </p>
                           	</div>
                           </div>

                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer class="mt-5">
         <div class="container"></div>
      </footer>
   </body>
</html>