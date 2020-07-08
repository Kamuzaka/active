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
<div class="btn-group mr-3" role="group">
<button id="btnGroupDrop1" type="button" class="btn nav-link text-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Администрирование</button>
<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
   <a class="dropdown-item" href="/create/">Создать мероприятие</a>
   <a class="dropdown-item" href="/info_events/">Информация о мероприятиях</a>
   <a class="dropdown-item" href="/edit/">Изменить информацию актива</a>
</div>
</div>
<a class="btn nav-link text-primary mr-3" href="/cabinet/" role="button">Фамилия Имя Отчество</a>
<a class="btn nav-link btn-outline-primary mr-3" href="/auth/" role="button">Войти</a>
<a class="btn nav-link btn-outline-primary mr-3" href="/registration/" role="button">Регистрация</a>
</nav>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>