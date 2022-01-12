

<!DOCTYPE html>

<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>看板つ〜はん</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
    <link
      href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
      rel="stylesheet"
    />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Kaisei+HarunoUmi:wght@500&display=swap");
    </style>
  </head>
  <body>
    <div class="all">
      <header>
        <div class="hamburger-menu">
          <input type="checkbox" id="menu-btn-check" />
          <label for="menu-btn-check" class="menu-btn"><span></span></label>
          <!--ここからメニュー-->
          <div class="menu-content">
            <ul class="menu">
              <li class="menulist">
                <a href="#">HOME</a>
              </li>
              <li class="menulist">
                <a href="sign.html">看板の種類</a>
              </li>
              <li class="menulist">
                <a href="#">blog</a>
              </li>
              <li class="menulist">
                <a href="beginner.html">初めての方へ</a>
              </li>
              <li class="menulist">
                <a href="#">お問い合わせ</a>
              </li>
            </ul>
          </div>
          <!--ここまでメニュー-->
        </div>

        <!--ここからメニュー-->
        <div class="pc-menu-content">
          <ul class="pc-menu">
            <li class="pc-menulist">
              <a href="#">HOME</a>
            </li>
            <li class="pc-menulist">
              <a href="sign.html">看板の種類</a>
            </li>
            <li class="pc-menulist">
              <a href="#">blog</a>
            </li>
            <li class="pc-menulist">
              <a href="beginner.html">初めての方へ</a>
            </li>
            <li class="pc-menulist">
              <a href="#">お問い合わせ</a>
            </li>
          </ul>
        </div>
        <!--ここまでメニュー-->
      </header>
      <?php wp_head(); ?>