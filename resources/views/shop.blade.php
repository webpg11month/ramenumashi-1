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
  {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
  <link href="css/ress.css" rel="stylesheet">
  <!-- ファビコン -->
  <link rel="icon" type="img/png" href="img/favicon/favicon.png">
  <!-- タイトル -->
  <title>RamenUmashi</title>
</head>

<body>
  <div class="wrapper-header">
    <header>
      <!-- 修正箇所 -->
      <!-- 背景画像読込=home -->
      <div id="ramen-home" class="big-bg">
        <div class="page-header wrapper">
          <a class="logo-flex" href="{{ url('/') }}">
            <img class="fade-main" id="ramen-logo" src="img/logo/ramen-log.png" alt="">
          </a>
          <a class="logo-flex" href="{{ url('/') }}">
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
                <a class="header-link1-1" href="{{ url('/umashi') }}">RamenUmashiについて</a>
              </li>
              <li>
                <a class="header-link1-1" href="{{ url('/shop/shop_info') }}">ラーメン店主様ご利用の場合</a>
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
                    <a href="{{ url('/umashi') }}">RamenUmashiとは</a>
                  </li><!-- /.hamburger-item -->
                  <li class="hamburger-item">
                    <a href="{{ url('/role') }}">利用規約</a>
                  </li><!-- /.hamburger-item -->
                  <li class="hamburger-item">
                    <a href="{{ url('/cancellation') }}">ラーメン店主様ご利用の場合</a>
                  </li>
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
    <main class="main-width">
    </form>
    @foreach ($shops as $shop)
      <input type="hidden" name="password[]" value={{ $shop->password }}>
      <ul class="gnav">
        <li id="shop-top">
          <a href="">店舗トップ</a>
        </li>
        <li id="shop-menu"><a href="">メニュー▼</a>
          <ul>
            <li><a href="">ラーメン</a></li>
            <li><a href="">ドリンク</a></li>
            <li><a href="">ご飯もの</a></li>
            <li><a href="">サイドメニュー</a></li>
          </ul>
        </li>
        <li id="sheet-top"><a href="">座席▼</a>
          <ul>
            <li><a href="">カウンター</a></li>
            <li><a href="">テーブル</a></li>
          </ul>
        </li>
        <li id="kodawari-top">
          <a href="">こだわり</a>
        </li>
        <li id="kutikomi-top">
          <a href="">口コミ</a>
        </li>
      </ul>
      <section id="location">
        <div class="wrapper">
          <div class="location-map">
            <img class="fade-main" src="{{asset('storage/image/'.$shop->img)}}" alt="ラーメン画像">
          </div>
          <div class="location-info">
              <table id="shop-table" border="5px">
                <h1 id="shop-info">店舗情報</h1>
                <tr>
                  <td class="shop-table-td">店舗名</td>
                  <td class="shop-table-td">{{ $shop->shop_name }}</td>
                </tr>
                <tr>
                  <td class="shop-table-td">残座席数</td>
                  <td class="shop-table-td">{{ $shop->seat }}席</td>
                </tr>
                <tr>
                  <td class="shop-table-td">平均価格</td>
                  <td class="shop-table-td">{{ $shop->avarage_price }}</td>
                </tr>
                <tr>
                  <td class="shop-table-td">予約時刻</td>
                  <td class="shop-table-td">2020-12-12-14:11</td>
                </tr>
                <tr>
                  <td class="shop-table-td">予約状況</td>
                  <td class="shop-table-td">〇（予約してます）</td>
                </tr>
                <tr>
                  <td class="shop-table-td">予約日時</td>
                  <td class="shop-table-td">2020/12/22 12:00</td>
                </tr>
              </table>
            <div class="main-reserve">
              <form action="{{action('ReserveController@reserve')}}" method="GET">
                <input  class="button" id="rese" type="submit" value="予約">
              </form>
              <form action="index.html" method="GET">
                <input  class="button" id="cancel" type="submit" value="キャンセル">
              </form>  
            </div>
          </div>
        </div>
        <div class="wrapper">
          <div class="location-map">
            <h1>住所</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.904429485663!2d135.49409751487664!3d34.70759039035754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e68fe86b593f%3A0x8d2c6ab0eb3b0ba!2z44CSNTMwLTAwMTIg5aSn6Ziq5bqc5aSn6Ziq5biC5YyX5Yy66Iqd55Sw77yS5LiB55uu77yZ4oiS77yS77yQIOWtpuWckuODk-ODqw!5e0!3m2!1sja!2sjp!4v1608088086312!5m2!1sja!2sjp" width="800" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="location-info">
            <form action="#">
              <table id="shop-table-1" border="5px">
                <h1>アクセス情報</h1>
                <tr>
                  <td class="shop-table-td">住所</td>
                  <td class="shop-table-td">{{ $shop->shop_address }}</td>
                </tr>
                <tr>
                  <td class="shop-table-td">決済</td>
                  <td class="shop-table-td">JCBオンリー～！！現金不可！！！</td>
                </tr>
                <tr>
                  <td class="shop-table-td">営業時間</td>
                  <td class="shop-table-td">月・火・水・木・金休み～月・火・水・木・金休み～月・火・水・木・金休み～月・火・水・木・金休み～月・火・水・木・金休み～月・火・水・木・金休み～月・火・水・木・金休み～</td>
                </tr>
                <tr>
                  <td class="shop-table-td">電話番号</td>
                  <td class="shop-table-td">090-1111-1111</td>
                </tr>
              </table>
            </form>
          </div>
        </div>
        <hr style="width: 1200px; margin: 0 auto;">
        @endforeach
        <div class="pager-links">
          {{-- {{ $shops->appends(Request::only('keyword'))->links() }} --}}
          {{-- {{$shops->appends(request()->input())->render()}} --}}
          {{-- {!!$shops->appends(['keyword','keyword1'])->render()!!} --}}
          {{-- {!!$shops->appends(['shop_name'=>$shop_name,'shop_address'=>$shop_address])->render()!!}} --}}
          {{$shops->appends(request()->input())->render()}}

        </div>
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
