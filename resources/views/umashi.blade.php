<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- 初期設定 -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ラーメン検索とラーメン空き情報を確認できる">
  <!-- CSS読込み -->
  <link href="css/header.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/footer.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link href="css/ress.css" rel="stylesheet">
  <!-- ファビコン -->
  <link rel="icon" type="img/png" href="img/favicon/favicon.png">
  <!-- タイトル -->
  <title>RamenUmashi | Umashi</title>
</head>

<body class="fade-main">
  <div class="wrapper-header">
    <header>
      <!-- 修正箇所 -->
      <!-- 背景画像読込=home -->
      <div id="ramen-home" class="big-bg">
        <div class="page-header wrapper">
          <a class="logo-flex" href="{{ url('/index') }}">
            <img class="fade-main" id="ramen-logo" src="img/logo/ramen-log.png" alt="">
          </a>
          <a class="logo-flex" href="{{ url('/index') }}">
            <h1  id="logo-font">
              RamenUmashi
            </h1>
          </a>
          <!-- 修正箇所 -->
          <nav class="header-nav-list">
            <ul class="main-nav">
              @guest
                <li>
                  <a class="header-link1-1" href="{{ url('/login') }}">Login</a>
                </li>
                <li>
                  <a class="header-link1-1" href="{{ url('/register') }}">Register</a>
                </li>
              @endguest
              @auth
                <li>
                    <a class="header-link1-1" href="{{ url('/mypage') }}">マイページ</a>
                </li>
                <li>
                  <a class="header-link1-1" href="{{ url('/logout') }}">
                    ログアウト
                  </a>
                </li>
              @endauth
              <li>
                <a class="header-link1-1" href="{{ url('/umashi') }}">ラーメン店主様ご利用の場合</a>
              </li>
            </ul>
          </nav>
          <!-- 修正箇所 -->
          <nav class="hamburger-none">
          <!-- 修正箇所 -->
            <input type="checkbox" id="hamburger-check" class="chekc-hidden">
            <!-- ハンバーガーアイコン -->
            <label for="hamburger-check" class="hamburger-open">
              <span></span>
            </label>
            <!-- メニュー -->
            <!-- 追加設定　ハンバーガー -->
            <label for="hamburger-check" class="hamburger-close"></label>
            <nav class="hamburger-content">
              <div id="hamburger-header-contents">
                <h1>Contents</h1>
              </div>
              <div class="hamburger-main-contents">
                <ul class="hamburger-list">
                  <li class="hamburger-item">
                    <a href="{{ url('/contact') }}">問い合わせ</a>
                  </li><!-- /.hamburger-item -->
                  <li class="hamburger-item">
                    <a href="{{ url('/help') }}">ヘルプ</a>
                  </li><!-- /.hamburger-item -->
                  <li class="hamburger-item">
                    <a href="{{ url('/register') }}">新規登録</a>
                  </li><!-- /.hamburger-item -->
                  <li class="hamburger-item">
                    <a href="{{ url('/login') }}">ログイン</a>
                  </li><!-- /.hamburger-item -->
                  <li class="hamburger-item">
                    <a href="{{ url('/role') }}">利用規約</a>
                  </li><!-- /.hamburger-item -->
                </ul><!-- /.hamburger-list -->
              </div>
              <div id="hamburger-footer-contents">
                <small>&copy;RamenUmashi</small>
              </div>
            </nav>
          </nav>
        </div>
      </div>
    </header>
    <main class="wrapper-umashi">
     <h1 class="main-umashi-center">RamenUmashiとは</h1>
      <section class="umashi-flex">
       <div class="umashi-special">
          <p id="umashi-item" >Umashiのここがすごい</p>
          <img class="fade-main" id="umashi-item2" src="img/main/ramen-list.jpg" alt="sample_img">
        </div>
        <article>
          <p id="umashi-text">
            この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！
          </p>
        </article>
      </section>
      <section class="umashi-flex">
       <div class="umashi-special">
          <p id="umashi-item3">Umashiのここがすごい</p>
          <img class="fade-main1" id="umashi-item4" src="img/main/ramen-list.jpg" alt="sample_img">
        </div>
        <article>
          <h1>
            
          </h1>
          <p id="umashi-text">
            この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！
          </p>
        </article>
      </section>
      <section class="umashi-flex">
       <div class="umashi-special">
          <p id="umashi-item5">Umashiのここがすごい</p>
          <img class="fade-main1" id="umashi-item6" src="img/main/ramen-list.jpg" alt="sample_img">
        </div>
        <article>
          <h1>
            
          </h1>
          <p id="umashi-text">
            この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！この一杯に感動を！！！！！
          </p>
        </article>
      </section>
    </main>
    <footer>
      <nav class="footer-nav-list">
        <ul class="footer-nav">
          <li>
            <a class="footer-link1-1" href="{{ url('/contact') }}">
              お問い合わせ
            </a>
          </li>
          <li>
            <a class="footer-link1-1" href="{{ url('/role') }}">サービス利用規約</a>
          </li>
          <li>
            <a class="footer-link1-1" href="{{ url('/privacy') }}">個人情報保護方針</a>
          </li>
          <li>
            <a class="footer-link1-1" href="{{ url('/privacy3') }}">個人情報だの第三者提供方針</a>
          </li>
          <li>
            <a class="footer-link1-1" href="{{ url('/help') }}">ヘルプ</a>
          </li>
          <li>
            <a class="footer-link1-1" href="{{ url('/cancellation') }}">解約</a>
          </li>
          <li class="hamburger-item">
            <a href="{{ url('/cancellation') }}">ラーメン店主様ご利用の場合</a>
          </li>
        </ul>
      </nav>
      <nav class="footer-nav-list-1">
        <ul class="footer-nav-1">
          <li>
            <a class="footer-link2-1" href="https://twitter.com">
              <i class="fab fa-twitter-square fa-6x"></i>
            </a>
            <p>Twitter</p>
          </li>
          <li>
            <a class="footer-link1-1" href="https://www.instagram.com/?hl=ja"><i class="fab fa-instagram fa-6x"></i></a>
            <p>instagram</p>
          </li>
          <li>
            <a class="footer-link1-1" href="https://ja-jp.facebook.com"><i class="fab fa-facebook-f fa-6x"></i></a>
            <p>FaceBook</p>
          </li>
        </ul>
      </nav>
      <h1 class="footer-umashi">RamenUmashi</h1>
      <small class="footer-umashi-1">© 2020 RamenCP UmashiGP Inc.
      </small>
    </footer>
    <div id="page_top"><a href="#"></a></div>
  </div>
</body>

</html>