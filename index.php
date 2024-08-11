<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="assets\style\style.css">
  <title>Главная</title> <!-- Заголовок страницы -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Таблица символов RU -->
</head>

<body>
  <nav> <!-- nav-navigation(по сайту)-->
    <a href="/">Главная</a> <a href="/profile">Профиль</a>
  </nav>
  <div class="gray"><!-- Блоки для разделения контента-->
    <h3>Лучшие шутеры в истории</h3> <!-- H заголовок третьего уровня -->
    <ol> <!--устанавливает нумерованный список-->
      <li>Стефен Карри <br> <img width="100px" src="/assets\images\SC.jpg
      "></li> <!-- отдельный элемент списка-->
      <li>Рэй Аллен <br><img width="100px" src="/assets\images\RA.jpg
      "></li>
      <li>Джеймс Харден <br> <img width="100px" src="/assets\images\JH.jpg
      "></li>
      <li>Дамиан Лиллард <br> <img width="100px" src="/assets\images\DM.jpg
      "></li>
      <li>Реджи Миллер <br> <img width="100px" src="/assets\images\RA.jpg
      "></li>
    </ol>
  </div>
  <div class="grey">
    <h3 id="color-red">Хайлайты</h3>
    <video controls="controls" loop="loop">
      <source src="/assets\videos\highlight.webm">
    </video>
  </div>
  <div>
    <h3> Поля формы</h3>
    <form>
      <fieldset>
        <legend>Пару вопросиков</legend>
        <label for="username"></label> 1.Ваше имя </label>
        <input type="text" name="username" id="username">
        <label for="birthday"></label> 2.Дата рождения. </label>
        <input type="date" name="birthday" id="birthday">
        <label for="time"></label> 3.Сколько занимаетесь баскетболом? </label>
        <input type="text" name="time" id="time">
        <label> 3.Хотели бы стать проф. баскетболистом? </label>
        <input type="checkbox" name="options" value="Yes" checked> Да
        <input type="checkbox" name="options" value="No"> Нет
        <input type="checkbox" name="options" value="More yes than no"> Скорее да, чем нет
        <input type="checkbox" name="options" value="More no than yes"> Скорее нет, чем да
      </fieldset>
    </form>
  </div>
</body>