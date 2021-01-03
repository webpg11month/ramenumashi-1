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
  <title>RamenUmashi</title>
</head>

<body class="fade-main">
  <!-- ラッピングにて -->
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
              <li>
                <a class="header-link1-1" href="{{ url('/login') }}">Login</a>
              </li>
              <li>
                <a class="header-link1-1" href="{{ url('/register') }}">Register</a>
              </li>
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
    <main class="wrapper-privacy">
      <h1 class="mainTitle">プライバシーポリシー</h1>
  
      <p>
        本プライバシーポリシーは、株式会社UmashiPartners（以下「当社」という。）が収集し、利用する全ての個人情報をその対象として、当社の個人情報に関する基本的な考え方や指針をご説明させていただくものです。Reluxにかかるサービスに限らず、当社が運営するサービスに対して適用させていただくものといたします。
      </p>
      <h3 class="ttl">１．個人情報</h3>
      <p>
        個人情報とは、個人の氏名、生年月日、年齢、性別、住所、電話番号、家族構成、趣味、嗜好、電子メールアドレス、ID、IPアドレスおよびタイムスタンプ、位置情報、勤務先、所属、勤務先住所、勤務先電話番号、クレジットカード番号、銀行口座番号、訪れたホームページの情報、苦情、ご相談またはお問い合せの情報等であって、これらのうちの1つあるいは2つ以上を組み合せることによって、特定の個人を識別できるものを指します。
      </p>
      <h3 class="ttl">２．個人情報の利用目的</h3>
      <p>
        （１）当社は、個人情報を以下の目的に利用させていただきます。<br>
        ①当社サービスの提供と当社サービスのご案内をお送りするため<br>
        ②カスタマー（Reluxの会員IDの登録を行っているか否かを問いません。以下同様です。）へサービスの利用料金を請求するため<br>
        ③カスタマーへの連絡、商品・サービスの案内、プレゼントの発送等のため<br>
        ④カスタマーの年齢、職業、性別、趣味・嗜好等に合わせて当社サービスのページ上の情報、サービスおよび広告配信をカスタマイズするため<br>
        ⑤当社サービスの改善や新サービスの開発等に役立てるため<br>
        ⑥当社サービスの利用規約に違反する態様でのご利用を防止するため<br>
        ⑦当社サービスに関して、個人を識別できない形式に加工した統計データを作成するため<br>
        （２）当社サイト内で個人情報の利用目的について別途定めている場合は当該利用目的の記述を優先します。
      </p>
      <h3 class="ttl">３．利用目的による制限</h3>
      <p>
        （１）当社は、取得した個人情報を利用目的に必要な範囲内で取り扱います。<br>
        （２）個人情報を利用目的の範囲外で取り扱う場合は、あらかじめカスタマー本人の同意を得るものとします。ただし、以下の場合はこの限りではありません。<br>
        ①法令に基づく場合<br>
        ②人の生命、身体または財産の保護のために必要がある場合であって、ご本人の同意を得ることが困難であるとき<br>
        ③公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって、ご本人の同意を得ることが困難であるとき<br>
        ④国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、ご本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき
      </p>
      <h3 class="ttl">４．情報の取得</h3>
      <p>
        （１）当社は、個人情報の入手を適法かつ公正な手段によって行い、カスタマーの意思に反する不正な方法により入手いたしません。<br>
        （２）当社は、個人情報を間接的に入手する場合は、入手する個人情報について、提供者がご本人から適正に入手したものであるかどうかを確認します。
      </p>
      <h3 class="ttl">５．取得に際しての利用目的の通知等</h3>
      <p>
        （１）当社は、個人情報を取得する際は、その利用目的をあらかじめ通知または公表します。<br>
        （２）利用目的を変更する場合、カスタマーに通知または公表し、同意を取ります。
      </p>
      <h3 class="ttl">６．個人情報の適切な保護</h3>
      <p>
        当社は、カスタマーの個人情報を、正確、最新のものとするよう適切な処置を講じます。また、カスタマーの個人情報を適切かつ安全に管理します。
      </p>
      <h3 class="ttl">７．委託先の監督</h3>
      <p>
        当社は、取得した個人情報の取扱いを委託する場合があります。その場合には、個人情報の預託に係わる基本契約等の必要な契約を締結し、委託を受けた者に対する必要かつ適切な監督をおこないます。
      </p>
      <h3 class="ttl">８．個人情報の第三者への提供</h3>
      <p>
        当社は、カスタマーの個人情報について、カスタマーご本人の同意を得ずに第三者に提供することは原則としておこないません。提供先・提供内容を特定したうえで、カスタマーの同意を得た場合に限り、提供します。ただし、以下の場合はこの限りではありません。<br>
        ①法令に基づく場合<br>
        ②人の生命、身体または財産の保護のために必要がある場合であって、ご本人の同意を得ることが困難であるとき<br>
        ③公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって、ご本人の同意を得ることが困難であるとき<br>
        ④国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、ご本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき
      </p>
      <h3 class="ttl">９．個人情報の開示等の手続き</h3>
      <p>
        当社は、カスタマーご本人より当該本人の個人情報の利用目的の通知、開示、内容の訂正、追加または削除、利用の停止、消去および第三者提供の停止（開示等という）を求められた場合には、遅滞なく応じます。ただし、以下の場合は、その全部または一部を開示しない場合があります。<br>
        ①カスタマーご本人または第三者の生命、身体、財産その他の権利利益を害するおそれがある場合<br>
        ②当社の業務の適正な実施に著しい支障を及ぼすおそれがある場合<br>
        ③他の法令に違反するおそれがある場合
      </p>
      <h3 class="ttl">10．免責</h3>
      <p>
        以下の場合は、第三者による個人情報の取得に関し、当社は何らの責任を負いません。<br>
        ①カスタマーご本人が当社サービスの機能または別の手段を用いて第三者に個人情報を明らかにした場合<br>
        ②カスタマーが当社サービス上に入力した情報等により、個人が識別できてしまった場合
      </p>
      <h3 class="ttl">11．統計データの利用</h3>
      <p>
        当社は、取得したカスタマーの個人情報をもとに、個人を識別できないように加工した統計データを作成することがあります。個人を識別できない統計データについては、当社は何ら制限なく利用することができるものとします。
      </p>
      <h3 class="ttl">12．クッキーの使用等について</h3>
      <p>
        （１）当社は、カスタマーが、当社や当社の提携先等のサービスをご利用になったり、ページをご覧になったりする際に、カスタマーのクッキー情報やカスタマーがご覧になった広告・ページ、カスタマーのご利用環境などの情報をカスタマーのブラウザから自動的に受け取り、サーバーに記録します。<br>
        （２）当社は、新しいサービスを検討したり、提供しているサービスや広告の内容をよりカスタマーに適したものとするために、性別、職業、年齢、ご覧になったページ・広告、ご利用時間帯、ご利用の方法、ご利用環境等のカスタマーに関する情報を利用する場合があります。<br>
        （３）当社は、広告主や情報提供元、サービス提供元などに、どのような広告や情報、サービスなどを掲載または提供していただくことが効果的であるかを分析して提供するために、カスタマーに関する情報を分析したり、分析のためのアンケートの対象の抽出を行う場合があります。なお、個人が識別できるような情報が分析結果に含まれることはありません。<br>
        （４）当社は、当社のサイトに掲載される広告の一部の表示および配信を第三者企業に委託する場合があります。これらの第三者企業がクッキーを設定している場合には、情報は第三者企業のサーバーに記録され、第三者企業のプライバシーポリシーのもとで管理されます。<br>
        （５）クッキーの使用を許可するかどうかはカスタマーが設定できます。ほとんどのWebブラウザでは自動的にクッキーの使用が許可されますが、必要に応じてクッキーを禁止するようにブラウザの設定を変更する事ができます。クッキーの使用を禁止した場合、サイト内のサービスを正常にご利用できない、あるいはクッキーを必要とする広告設定を反映できなくなる可能性があります。
      </p>
      <h3 class="ttl">13．プライバシーポリシーの改定について</h3>
      <p>
        当社は、本プライバシーポリシーの全部または一部を改定することがあります。重要な変更がある場合には、サイト上でお知らせします。
      </p>
      <h3 class="ttl">14．お問い合わせ先</h3>
      <p>
        個人情報に関するお問い合わせ先および苦情・相談に関するお申し出先<br>
        【Webの場合】　<a href="/umashi/">こちら</a>の問合せフォームより送信してください。<br>
        【郵送の場合】ZZZZZZZZZZZZZZZZZZZZF<br>
      </p>
      <p>
        最終改訂　201９年6月28日<br>
        株式会社UmashiPartners
      </p>
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