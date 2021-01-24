@section('header-shop')
@endsection
<body>
    <div class="wrapper-header">
        @include('layout.header')
              <!-- 修正箇所 -->
              <nav class="header-nav-list">
                <ul class="main-nav">
                  @if(Auth::guard('shop')->check())
                    <li>
                      <a class="header-link1-1" href="{{ action('Shop\ShopLoginController@logout') }}">
                        ログアウト
                      </a>
                    </li>
                  @endif
                  <li>
                    <a class="header-link1-1" href="{{ url('/umashi') }}">RamenUmashiについて</a>
                  </li>
                </ul>
              </nav>