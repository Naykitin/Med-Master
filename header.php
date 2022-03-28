<div class="header" >
  <div class="header_top">
    <div class="header_top-logo">
      <a href="/"><img src="img/logo.png" alt="MedMaster"></a>
      <p>Med-Master</p>
    </div>
    <div class="header_top-menu">
      <ul class="menu">
        <li><a href="#onas">О нас</a></li>
        <li><a href="#service">Услуги</a></li>
        <li><a href="#certificates">Серитификаты</a></li>
        <li><a href="#work">Как мы работаем</a></li>
        <li><a href="#contacts">Контакты</a></li>
      </ul>
    </div>
    <div class="header_top-info">
      <p>Телефоны для справок</p>
      <a href="tel:" class="info_tel">+7(xxx)xxx-xx-xx</a>
      <a href="/" class="callbackhead">Заказать обратный звонок</a>
    </div>

    <!-- <div class="header_switch">
      <label class="switch">
        <input type="checkbox" id="checkbox" checked>
        <span class="slider round theme-button" id="theme-button"></span>
      </label>
    </div> -->

    <div id="change__theme-btn"></div>
    
    <style>
      .toggle {
      --size: 2rem;
      appearance: none;
      outline: none;
      cursor: pointer;
      width: var(--size);
      height: var(--size);
      box-shadow: inset calc(var(--size) * 0.33) calc(var(--size) * -0.25) 0;
      border-radius: 999px;
      color: #e6e6ff;
      transition: all 500ms;
      }
      .toggle:checked {
      --ray-size: calc(var(--size) * -0.4);
      --offset-orthogonal: calc(var(--size) * 0.65);
      --offset-diagonal: calc(var(--size) * 0.45);
      transform: scale(0.75);
      color: #fa0;
      box-shadow: inset 0 0 0 var(--size),
                  calc(var(--offset-orthogonal) * -1) 0 0 var(--ray-size),
                  var(--offset-orthogonal) 0 0 var(--ray-size),
                  0 calc(var(--offset-orthogonal) * -1) 0 var(--ray-size),
                  0 var(--offset-orthogonal) 0 var(--ray-size),
                  calc(var(--offset-diagonal) * -1) calc(var(--offset-diagonal) * -1) 0 var(--ray-size),
                  var(--offset-diagonal) var(--offset-diagonal) 0 var(--ray-size),
                  calc(var(--offset-diagonal) * -1) var(--offset-diagonal) 0 var(--ray-size),
                  var(--offset-diagonal) calc(var(--offset-diagonal) * -1) 0 var(--ray-size);
      }
      .toggle {
        z-index: 1;
      }

    </style>
  </div>
  <div class="header_form">
    <div class="callback"></div>
  </div>

</div>
