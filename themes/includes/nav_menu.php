<nav class="navbar navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">
<a class="navbar-brand" href="/">
<img src="<?= $themes;?>img/Logo.png" alt="logo" style="width:70px;">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="/main/">Главная</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/events/">Мероприятия</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/members/">Актив</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/about/">О нас</a>
</li>
</ul>
</div>

    <?php if (isset($data['admin']) && $data['admin']) :?>
<div class="btn-group mr-3" role="group">
<button id="btnGroupDrop1" type="button" class="btn nav-link text-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Администрирование</button>
<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
   <a class="dropdown-item" href="/create/">Создать мероприятие</a>
   <a class="dropdown-item" href="/info_events/">Информация о мероприятиях</a>
   <a class="dropdown-item" href="/edit/">Изменить информацию актива</a>
</div>
</div>
        <a class="btn nav-link btn-outline-primary mr-3" href="/auth/" role="button">Выйти</a>
	<?php elseif ($data['user']) :?>
<a class="btn nav-link text-primary mr-3" href="/cabinet/" role="button"><?= $data['user']['name1'] . ' ' . $data['user']['name2'] . ' ' . $data['user']['name3'];?></a>
        <a class="btn nav-link btn-outline-primary mr-3" href="/auth/" role="button">Выйти</a>
    <?php else: ?>
        <a class="btn nav-link btn-outline-primary mr-3" href="/auth/" role="button">Войти</a>
<a class="btn nav-link btn-outline-primary mr-3" href="/registration/" role="button">Регистрация</a>
    <?php endif;?>
</nav>
