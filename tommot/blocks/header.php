
<header class="header">
  <div class="header__container">
    <div class="header__logo"></div>
    <div class="header__phone">+7(924)468-60-00</div>

    <div class="header__home-internet"><a href="home.php">Домашний интернет</a></div>

    <button class="header__button">
      Перезвонить
      <form class="header__button-form" action="blocks/callback.php" method="post">
        <input type="text" name="name" placeholder="Ваше полное имя">
        <input type="text" name="phone" placeholder="Ваш номер телефона">
        <input type="submit" name="submit" value="Заказать звонок">
      </form>

    </button>

    <div class="header__tv"><a href="tv.php">ТВ тарифы</a></div>

    <div class="header__to-user">Абоненту</div>
    <div class="header__account"><button formaction="https://stat.tommot.net">Личный кабинет</button></div>
    <div class="header__menu" id="header__menu">МЕНЮ
      <ul class="header__menu-list" id="header__menu-list">
        <li class="header__menu-element" onclick="open_main()">Главная</li>
        <li class="header__menu-element" id="goPage1">Контакты</li>
        <li class="header__menu-element" id="goPage2">Предоставление услуг</li>
        <li class="header__menu-element" id="goPage3">Подключение/тарифы</li>
      </ul>
    </div>

  </div>
  <div class="strip"></div> <!-- Зеленая полоска -->
</header>
