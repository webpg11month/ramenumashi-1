@section('header-shop')
@endsection
<body>
    <div class="wrapper-header">
        @include('layout.shop.header')
              <!-- 修正箇所 -->
              <div class="page-header wrapper">
              <img id="ramen-logo" src="/img/logo/ramen-log.png" alt="">
              <h1  id="logo-font">
                RamenUmashi
              </h1>   
              <nav class="header-nav-list">
                <ul class="main-nav">
                  @if(Auth::guard('shop')->check())
                    <li>
                      <a class="header-link1-1" href="{{ action('Shop\ShopLoginController@logout') }}">
                        ログアウト
                      </a>
                    </li>
                  @endif
                </ul>
              </nav>