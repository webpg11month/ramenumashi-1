@extends('layout.common-shop')
@section('title', 'ご店主様')
<body>
  <div class="wrapper-header">
    @include('layout.header-shop')
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
                      <a href="{{ url('#') }}">問い合わせ</a>
                    </li><!-- /.hamburger-item -->
                    <li class="hamburger-item">
                      <a href="{{ url('#') }}">ヘルプ</a>
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
    <div id="app"></div>
</body>
</html>