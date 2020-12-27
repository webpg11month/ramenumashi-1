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

<body>
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
                    <a href="{{ url('/umashi') }}">RamenUmashiとは</a>
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
    <main class="wrapper-role">
    <h1 class="mainTitle">サービス利用規約</h1>

    <h2 class="ttl">第１条(規約の適用)</h2>
    <p>1. 本規約は、株式会社UmashiGP Partners(以下「当社」といいます。)が管理・運営するインターネットウェブサイト｢RamenUmashi｣(以下「RamenUmashi」といいます。)を通じてRamenUmashi宿泊施設等予約サービス(以下「本サービス」といいます。具体的な定義は、次条第1項に従います。)を利用するカスタマー(以下「カスタマー」といい、会員IDの登録の有無を問いません。なお、会員IDの登録を行ったカスタマーを、以下「会員」といい、会員IDの登録を行っていないカスタマーを、以下「ビジター」といいます。)が行う一切の行為に適用されるものとし、カスタマーは、本規約に同意のうえ本サービスを利用するものとします。<br>
      2. 当社が本サービス上において提示する諸注意等(以下｢諸注意等｣といいます。)が存在する場合には、諸注意等はそれぞれ本規約の一部を構成するものとします。<br>
      3. 当社は、カスタマーが本サービスを利用した場合、本規約及びプライバシーポリシーの全ての項目に同意したものとみなします。<br>
      4. 当社がカスタマーとの間で宿泊予約販売基本契約その他の契約を締結している場合、当該契約が本規約に優先して適用されるものとし、当該契約に定めのない事項については、本規約の定めが適用されるものとします。<br>
      5. ビジターによる本サービスの利用については、本規約および当社が定めるその他の規約に明示された事項以外についても、利用できないサービス・機能(例えば、クーポン、コンシェルジュサービス等)がある場合があります。詳細については、各サービス・機能の注意書き等をよくお読みください。
    </p>

    <h2 class="ttl">第２条(本サービスの定義および契約の成立)</h2>
    <p>1. 本サービスとは、カスタマーが自ら又はその代理人（当社が承認する者に限る。）により、RamenUmashiを通じて、RamenUmashiに掲載された旅館等の宿泊施設(以下「掲載施設」といいます)が予め登録した客室または施設等(以下「客室等」といいます)の予約手配を行うことを可能にするインターネットサービスです。<br>
      2. 掲載施設は、自己の責任において宿泊および施設利用等にかかるサービス(以下「施設提供サービス」といいます。)を提供しており、当社は、施設提供サービスの提供に関し何らの関与もしません。<br>
      3. カスタマーが、自ら、インターネットを通じて施設提供サービスの利用にかかる予約の申込みをした場合、当該予約の申込みにつき、RamenUmashiにて「予約ナンバー」が発行され、本サービスの画面上に明示された時点をもって、掲載施設とカスタマー(予約を行うカスタマーと実際に掲載施設を利用する者が異なる場合には、当該掲載施設の実際の利用者とします。このような利用者を、以下「施設利用者」といいます。また、第3条および第4条に定める利用料金、キャンセル料、損害賠償等については、施設利用者が支払義務を負うものとします。さらに、予約を行うカスタマーは、施設利用者がかかる支払義務を負うことにつき、当該施設利用者との間で事前に合意する義務を負うものとします。)の間に当該施設提供サービス利用に係る契約(宿泊契約または施設もしくはサービスの利用契約を指します。以下「利用契約」といいます。)が成立するものとします。ただし、通信事情、コンピュータの不具合など何らかの事情で、「予約ナンバー」が発行されたにもかかわらずカスタマーのコンピュータの画面に表示されなかったとしても、カスタマーがRamenUmashiの「予約照会/変更/取消」機能を使用して、予約内容を確認できる状態になれば、利用契約は成立したものとみなされます。<br>
      4. 前項の場合、当社は、利用契約の成立を証するため、「予約ナンバー」を記載した「予約確認メール」をカスタマーが予め指定したメールアドレスに配信します。但し、通信事情や当該メールアドレスの誤記等、当社に責のない事由に基づき「予約確認メール」をカスタマーが受信することができない場合等の事態が生じても、利用契約の成立に影響を与えません。<br>
      5. 本条の定めに基づき掲載施設とカスタマーとの間で利用契約が成立した場合、カスタマーは、当該掲載施設にて別途定めるキャンセル料の負担等の義務が自己に生じることを承諾したものとみなされます。
    </p>

    <h2 class="ttl">第３条(本サービスにおける利用料金の考え方)</h2>
    <p>本サービスを利用して予約した施設の利用料金支払については、以下の現地支払、または事前クレジットカード支払のみの方法をとるものとします。<br>
      1. 現地支払の場合<br>
      カスタマー(予約を行うカスタマーと施設利用者が異なる場合には、施設利用者とします。)が当該施設に対し直接支払うものとします。<br>
      2. 事前クレジットカード支払の場合<br>
      カスタマーが予約を完了した時点でクレジットカード決済を行う方法によるものとします。<br>
      (1)決済に利用できるクレジットカードは、カスタマー(予約を行うカスタマーと施設利用者が異なる場合には、施設利用者とします。)本人名義のクレジットカードに限るものとします。ただし、予約を行うカスタマーと施設利用者が異なる場合であっても、当社が認めた場合は、予約を行うカスタマー名義のクレジットカードを用いることができるものとします。<br>
      (2)カスタマーおよび施設利用者は、他人のクレジットカードの利用、虚偽のクレジットカード情報の入力、その他当社が不適切と認める行為を行ってはなりません。当社は、カスタマーまたは施設利用者がかかる行為を行ったことにより生じた損害について、当該施設利用者および予約を行ったカスタマーに対して賠償を求めることができるものとします。<br>
      (3)カスタマーまたは施設利用者が決済に利用しもしくは利用を選択したクレジットカードにつき、カード会社が何らかの理由によりその利用を拒否した場合、カスタマーが第25条第1項各号のいずれかに該当した場合、または、これらの場合に該当するおそれがある場合、当社は、施設利用者および予約を行ったカスタマーの同意を得ることなく、決済方法の変更、予約の取消、その他当社が必要と認める措置をとることができるものとし、これにより施設利用者および予約を行ったカスタマーに生じた損害について一切責任を負いません。但し、当社の責に帰すべき事由がある場合はこの限りではない。<br>
      3. カスタマー(予約を行うカスタマーと施設利用者が異なる場合には、施設利用者を含みます。本条において、以下同様です。)は、掲載施設の提供する空室状況または施設提供サービスの利用に係る料金(以下「利用料金」といいます。)等に関する情報が、時期・季節や、他の媒体で提供される情報と異なる場合があることを了承します。なお、掲載施設の提供する利用料金には、消費税が含まれておりますが、サービス料やその消費税以外の税金(ホテル税、入湯税等)については含まれている場合と含まれていない場合があります。<br>
      4. カスタマーは、掲載施設の提供する利用料金が変更されることを了承します。変更後の料金は、変更後に利用契約が成立したカスタマーにのみ適用され、変更前に利用契約が成立したカスタマーには変更前の利用料金が適用されます。<br>
      5. 本サービスを利用して予約した施設の利用料金に対してサービス料および消費税以外の税金(ホテル税、入湯税等)ならびに別途利用の飲食料金等が発生する場合、カスタマーは、所定の金額を当該施設へ直接支払うものとします。<br>
      6. RamenUmashiサイトでは、利用料金その他の料金に関して、日本円から他の外国通貨に換算した金額を表示することがありますが、あくまで参考価格の表示を目的とするものであり、本条に基づく利用料金等の決済はすべて日本円で行われるものとします。 また、RamenUmashiサイト上で外国通貨により表示した金額は、第三者機関から提供された過去の一時点の為替レートにより計算される価格にすぎず、当該レートは時間の経過その他の事情によりカスタマーによる予約時点の実際の為替レートとは異なっている場合があり、当社はかかるレートにより算定される外国通貨表示の金額について、その正確性を保証するものではありません。
    </p>

    <h2 class="ttl">第４条(予約の変更・キャンセルの成立と無連絡キャンセルの禁止)</h2>
    <p>1. カスタマーは、客室等の予約をキャンセルする場合(予約を行ったカスタマーと施設利用者が異なる場合において、施設利用者がキャンセルする場合を含みます。本条において、以下同様とします。)、インターネットを通じた予約については、RamenUmashiサイト上の「予約内容照会画面」を通じて、予約内容を確認の上、インターネット上でキャンセルの手続きをすることとします。なお、インターネットを通じて予約したカスタマーは、予約内容照会画面における「インターネットからの変更可能日時」を超えて予約をキャンセルしようとする場合、予約した掲載施設に対して直接連絡のうえ、速やかにキャンセルの手続きをすることとします。但し、カスタマーが、自らの予約内容の確認に必要な予約ナンバーが分からなくなった場合や、予約ナンバーと確認キーが記載されたメールが何らかの事情でカスタマーに到達しなかった場合等、予約内容の確認が困難または不可能な状況となった場合、カスタマーは、RamenUmashi上の「予約内容照会画面」を通じて、予約ナンバーと確認キーが記載されたメールの再送信を当社に請求し、当該メールの受信後すみやかに、キャンセルの手続きをすることとします。万一、再送信されたメールが、何らかの事情で当社所定の期間内にカスタマーに受信されなかった場合には、カスタマーは、当社の指定する連絡先に対して問い合わせを行なった上で、当該掲載施設に対し、キャンセルの手続きをすることとします。これらの手続きをカスタマーが怠った結果、当該掲載施設に損害が発生した場合、カスタマーは当該損害について賠償する責任を負担します。<br>
    2. カスタマーが予約のキャンセルを行う場合、以下に定める時点（日本時間を基準とする。）をもって、キャンセルが成立するものとします。<br>
    (1) カスタマーが自らインターネットを通じて予約のキャンセルを行う場合：RamenUmashiの「予約状況照会画面」から予約内容が消去された時点<br>
    (2) 掲載施設に直接連絡し、予約のキャンセルを行う場合：掲載施設が、カスタマーに対し、予約キャンセルを了承した旨通知した時点<br>
    (3) その他の方法による場合：当社が所定の方法に従い予約キャンセル完了の通知をした時点<br>
    3. カスタマーは、施設提供サービス利用予定日に当該サービスを利用することができないことが判明したとき、速やかに当該掲載施設へその旨連絡し、当該掲載施設の指示に従うものとします。なお、カスタマーが当該掲載施設に対しキャンセル料を支払う義務を負担している場合、当該掲載施設が定めるキャンセル料を、決められた期日および所定の方法で支払うものとします。<br>
    4. 当社および掲載施設は、カスタマーが、事前に何らの連絡もなく施設提供サービス利用予定日当日に姿を現さず、当該掲載施設を利用しなかった場合には、無連絡キャンセルとみなし、当該カスタマーの本サービスを含む、RamenUmashiに係る一切のサービスの利用停止または会員資格の剥奪等必要な措置(法的措置を含みます。)を取ることができるものとします。なお、カスタマーは、当該掲載施設が定めるキャンセル料を、決められた期日および所定の方法で支払わなければなりません。<br>
    5. 会員が、成立した予約の変更をする場合は、インターネット経由で変更手続きをすることとします。なお、会員は、予約内容照会画面における「変更可能日時」を超えて予約の内容を変更しようとする場合、予約した掲載施設に対して直接連絡のうえ、速やかに予約内容変更の手続きを行うものとします。ビジターは、RamenUmashiを通じた予約の変更を行うことはできません。ビジターが、成立した予約の変更をする場合は、当該予約をキャンセルした上で、新しく再度予約をしていただくものとします。なお、その際に発生したキャンセル料その他の費用はいかなる場合でも、当社は負担しないものとします。<br>
    6. カスタマーが予約の変更を行う場合、以下に定める時点（日本時間を基準とする。）をもって、変更が完了するものとします。<br>
    (1) 会員が自らインターネットを通じて予約の変更を行う場合：RamenUmashiサイトの「予約状況照会画面」に表示される予約内容が変更された時点<br>
    (2) 掲載施設に直接連絡をし、予約の変更を行う場合：当該掲載施設が、カスタマーに対し、予約変更を了承した旨通知した時点<br>
    (3) その他の方法による場合：当社が所定の方法に従い予約変更の確認通知をした時点<br>
    7. 成立した予約の変更手続の実施日によっては、当該掲載施設が定めるキャンセル料が発生することがあります。 その場合、カスタマーは、当該掲載施設に指定された期日までに所定の方法でキャンセル料を支払わなければならないこととします。<br>
    8. カスタマーが予約のキャンセルを希望しない場合においても、当社が、カスタマーによる施設提供サービス利用に係る予約内容につき、法令等に抵触すると判断しうる場合または合理的に不適切と判断できる場合には、当社ならびに当該掲載施設が、当該予約をキャンセルする権利を有するものとします。</p>

    <h2 class="ttl">第５条(カスタマーの遵守事項)</h2>
    <p>1. カスタマーは、RamenUmashiを利用することにより得られる情報を、当社および掲載施設の事前の承諾なく自己の私的利用以外の目的で複製・送信しない他、方法の如何を問わず第三者による利用に供しないものとします。<br>
      2. カスタマーは、予約金等が必要な掲載施設を予約する際には、当該掲載施設の定める期日までに当該予約金等を納めるものとします。なお、カスタマー(予約を行ったカスタマーと施設利用者が異なる場合の施設利用者を含みます。)が当該掲載施設の定める期日までに予約金等を支払わなかった場合においても、当該予約はキャンセルされません。<br>
      3. 前項で、掲載施設が、カスタマーの登録したカスタマーまたは施設利用者の連絡先へ電子メール等により予約金等の支払の催告を行ったにもかかわらず支払が為されない場合、または連絡が取れない場合には、当該掲載施設が当該予約を無連絡キャンセルされたものと判断する権利を有することを、カスタマーは予め承諾します。ただし、当該掲載施設からカスタマーに対し、当該予約を取り消した旨の通知がない段階では、当該予約は有効であるものとします。<br>
      4. カスタマー(予約を行ったカスタマーと施設利用者が異なる場合の施設利用者を含みます。)は、自己の責任において直接掲載施設との契約を履行するものとし、施設提供サービスに関する問い合わせ・要望等は当該掲載施設に対して直接行うものとします。<br>
      5. カスタマー(予約を行ったカスタマーと施設利用者が異なる場合の施設利用者を含みます。)は、掲載施設が別途定める条件・規則等を十分に理解し遵守するものとします。
    </p>

    <h2 class="ttl">第６条(カスタマーの遵守事項の違反)</h2>
    <p>1. 当社は、カスタマー(予約を行ったカスタマーと施設利用者が異なる場合の施設利用者を含みます。以下、本条において同じです。)が前条の遵守事項に違反した場合、その他当社が本サービスの運営上不適当と判断した場合には、当該行為を停止させ、当該カスタマーと当該掲載施設の利用契約をキャンセルし、または掲載情報を削除する権利を留保するとともに、当該カスタマーの本サービスに係る一切のサービスの利用停止、会員資格 の剥奪・登録削除もしくは損害賠償請求等必要な措置(法的措置を含みます。)を取ることができるものとします。<br>
      2. 当社は、カスタマーが前条の遵守事項に違反していると推測される場合、その他当社が本サービスの運営上不適当と合理的に判断した場合には、当該行為の詳細についてカスタマーに確認させていただくことがあります。<br>
      3. 本条または本規約の他の規定に基づき、当社が会員資格の剥奪または登録削除を行った場合、その時点で当該会員が保有するポイントおよびクーポンは、全て無効となります。
    </p>

    <h2 class="ttl">第７条(RamenUmashiポイントサービスについて)</h2>
    <p>当社は、対象サービスの一環として、本サービスにおいて、当社所定の方法に従った利用行為(以下「ポイント付与対象取引」といいます。)を行った会員に対し当社所定の条件(以下「ポイント付与条件」といいます。)に従い当社独自のRamenUmashiポイント(以下「ポイント」といいます。)を発行し、会員がポイントを本サービスにおける当社所定の利用行為(以下「ポイント利用対象取引」といいます。)を行うにあたり、当社所定の方法(以下「ポイント利用条件」といいます。)に従い利用できるポイントサービス(以下「ポイントサービス」といいます。)を運営するものとします。なお、ビジターはポイントサービスを利用できません。また、予約を行う会員と施設利用者が異なる場合には、ポイントは当該予約を行った会員に付与されるものとします。
    </p>

    <h2 class="ttl">第８条(ポイント付与対象取引について)</h2>
    <p>当社は、以下のポイント付与対象取引があった場合に、会員に対しポイントを付与します。<br>
      (1) 本サービスを利用し、ポイント付与対象取引の宿泊予約を行った場合<br>
      (2) 本サービスの会員が当社所定の方法により、新規会員の招待をし、その被招待会員が宿泊を実施した場合<br>
    </p>

    <h2 class="ttl">第９条(ポイント付与条件について)</h2>
    <p>当社は、以下のポイント付与条件を満たした場合に、会員に対しポイントを付与します。<br>
      1. 会員が第８条(1)に規定のポイント付与対象取引を行った場合<br>
      (1) ポイント付与対象となる金額は、本サービスの予約画面上で表示される予約金額の合計料金(日本円で表示されたものに限ります。)をいいます。ただし、以下は付与対象の金額に含みません。<br>
      　ⅰ) 会員が本サービスを通さずに予約および申込みを行ったオプショナル・食事等の追加料金<br>
      　ⅱ) 本サービスに金額が包括表示されていない税金・サービス料金等<br>
      (2) ポイントの付与率は、本サービス上の予約画面上で表示される率を適用しますが、すべての宿泊予約に適用されるわけではありません。<br>
      (3) ポイントの付与タイミングは、チェックアウト日から起算して7日後以降とします。<br>
      (4) ポイントの有効期限は、最後に共通ポイント(通常)を利用または付与された月の12か月後の月の月末までとします。ただし、当該有効期限までに新たにポイント利用対象取引を行った場合、当該利用に基づき新たに付与されるポイントの付与月の12か月後の月の月末までポイントの有効期限は延長されるものとし、以降も同様とします。
    </p>

    <h2 class="ttl">第１０条(ポイント利用対象取引について)</h2>
    <p>会員は、本サービス上でポイント利用の対象とされた掲載施設に対する宿泊予約について、宿泊予約の完了前に本サービス上でポイントの利用を申請することより、ポイントを利用できるものとします。
    </p>

    <h2 class="ttl">第１１条(ポイント利用条件について)</h2>
    <p>会員は、1ポイント＝1円とし、1回の行使につき100,000ポイントを上限として、1円単位でポイントを利用できるものとします。
    </p>

    <h2 class="ttl">第１２条(例外について)</h2>
    <p>前項までの内容にかかわらず、当社はポイントを異なるポイント条件で発行する場合があるものとし、この場合、ポイントの発行時にポイント条件を明示するものとします。なお、当社指定のページに記載される内容と会員に対し発行時に明示するポイント条件が異なる場合には、会員に対し発行時に明示するポイント条件が優先するものとします。
    </p>

    <h2 class="ttl">第１３条(ポイントの付与)</h2>
    <p>1. 当社は、ポイント付与対象取引を行った会員に対し、ポイント付与条件に従いポイントを付与するものとします。<br>
      2. 会員は、前項に基づき付与されたポイント数に疑義のある場合、自己が本サービス上でポイント付与対象取引の対象となるサービス・商品等の提供を受けた企業や店舗等(以下「本ポイント付与対象取引サービス提供企業」といいます。)に直接問い合わせるものとします。会員は、当該疑義について会員と本ポイント付与対象取引サービス提供企業との間で解決するものとします。当社は、自己の故意や過失により会員に付与するポイント数を誤っ
      た場合を除き、一切の責任を負わないものとします。<br>
      3. 第８条および第９条に従い当社が会員に対しポイントを付与した後でも、会員の本規約違反やその他当社がポイントを付与することが不適切であると判断する事情が判明した場合、またはポイント付与対象取引が変更された場合等には、当社は当該会員に対して付与済みのポイントの全部または一部を取り消すことができるものとします。<br>
      4. 当社が前項に基づき、ポイントの取消を行おうとする際に、会員がすでに取消の対象となるポイントを利用している等の理由により取消可能なポイントが存在しない場合または不足する場合、当社は会員に対し、前項に基づき取消対象となるポイントのうち取消を行うことができなかったポイント相当額(1ポイント＝1円で換算するものとします。)の金銭を請求することができるものとします。
    </p>

    <h2 class="ttl">第１４条(ポイントの利用)</h2>
    <p>1. 会員は、自己が保有するポイントを、ポイント利用条件に従いポイント利用対象取引の全部または一部の支払いに利用できるものとします。<br>
      2. 会員が、前項に基づきポイントの利用申請を当社に対して行った後に、当該利用が取り消された場合、もしくはポイント利用時に支払いに利用するポイント数が減少した場合等には、ポイントまたは金品で、ポイントの返還ができなかったポイント相当額を返還するものとします。<br>
      3. 会員が自己の保有するポイントをポイント利用対象取引の全部または一部の支払いに利用することを申請した後に、当該会員が利用申請したポイントが取消の対象であることが判明した場合、当社は当該支払の対象となる取引を取消または保留することがあります。その場合、会員はその後の対応について当社の指示に従うものとします。<br>
      4. 会員は当社指定のページで明示的に定める場合を除き、ポイントを第三者（同一人物であっても、会員アカウントが異なる場合は第三者とみなします。）に譲渡・相続できず、また金品に交換することもできません。
    </p>

    <h2 class="ttl">第１５条(レビュー)</h2>
    <p>会員は、宿泊した掲載施設につきレビューへの投稿ができるものとします。ビジターはレビューへの投稿はできません。詳細は、別途レビュー利用規約に定めるものとします。<br>
      レビュー利用規約：<a href="http://mylabo/~mansho202/manshou_htmlcss/index.html">http://mylabo/~mansho202/manshou_htmlcss/index.html</a>    </p>

    <h2 class="ttl">第１６条(著作権)</h2>
    <p>1. カスタマーは、RamenUmashiを通じて提供されるすべてのコンテンツについて、当社の事前の承諾なく著作権法で定めるカスタマー個人の私的利用の範囲を超える使用をしてはならないものとします。<br>
      2. 本条の規定に違反して紛争が発生した場合、カスタマーは、自己の費用と責任において、当該紛争を解決するとともに、当社および第三者に一切の損害を与えないものとします。
    </p>

    <h2 class="ttl">第１７条(RamenUmashi掲載施設の加減)</h2>
    <p>1. RamenUmashiに掲載される施設は、当社または掲載施設の都合により、カスタマーへの事前の通知なく変更(追加および参画の終了を含みます。本条において以下同様です。)される場合があり、カスタマーは予めこれを承諾するものとします。<br>
      2. 前項の規定に基づき、掲載施設が変更された時点において、カスタマーと当該掲載施設の間で利用契約が成立している場合には、当該契約は有効に存続するものとし、掲載施設の変更は、当該利用契約に対し何らの影響も及ぼさないものとします。<br>
    </p>

    <h2 class="ttl">第１８条(RamenUmashiおよび本サービスの一時的な停止)</h2>
    <p>当社は、次の各号に該当する場合にはカスタマーへ事前に通知することなく、RamenUmashiおよび本サービスの一時的な運営の停止を行うことがあります。<br>
      (1) RamenUmashiの保守または仕様の変更を行う場合<br>
      (2) 天災地変その他非常事態が発生し、または発生するおそれがあり、RamenUmashiおよび本サービスの運営ができなくなった場合<br>
      (3) 当社が、やむを得ない事由によりRamenUmashi本サービスの運営上一時的な停止が必要と判断した場合<br>
    </p>

    <h2 class="ttl">第１９条(当社の免責)</h2>
    <p>1. 当社は、掲載施設の営業状況等につき調査する義務を負わないものとします。<br>
      2. 当社は、施設提供サービス等について何等の保証もいたしません。また、掲載施設等に関する情報は、当該掲載施設が直登録したものであり、当社は、当該情報の正確性、完全性または有用性等についても保証いたしません。万一、施設提供サービス等に関連して何らかのトラブルがカスタマーまたは施設利用者と掲載施設の間で生じた場合にも、当該トラブルが当社の責に帰すべき事由による場合を除き、当社は何らの責任も負いません。<br>
      3. 自然災害、回線の輻輳(ふくそう)、機器の障害または保守のための停止、掲載施設の参画の終了等による情報の損失、遅延、誤送、または第三者による情報の改竄や漏洩等により発生した損害について、当社の責に帰すべき事由による場合を除き、当社は、何ら責任を負いません。<br>
      4. 会員は、当社が会員に付与した会員IDおよびパスワードを適切に管理するものとし、これを第三者が使用して本システムを使用した場合は、当社はこれを会員が使用したものとみな
      します。この場合において会員に生じた損害について当社は、当社の責に帰すべき事由が存在する場合を除き、一切の責任を負いません。<br>
      5. 前各項の他本サービスに関連して発生したカスタマーまたは施設利用者と掲載施設間の一切の紛争について、当該紛争が当社の責に帰すべき事由による場合を除き、当社は何ら責任を負いません。<br>
      6. 前各項の規定に則り当社が責任を負う場合であっても、当社の故意または重過失がない限り当社の責任は直接かつ通常の損害に限られ、かつ責任の上限は責任の原因となった予約につき当社が受領した手数料相当額を上限とします。<br>
    </p>

    <h2 class="ttl">第２０条(規約の変更)</h2>
    <p>1. 当社は、本規約について変更を行う場合には、変更後の本規約の適用開始日の14日前までに、①本規約を変更する旨、②変更内容・条件（以下「変更条件」といいます）、③適用開始日を、カスタマーに対して本サービスの画面上での表示もしくは電子メールにより通知（以下「変更通知」といいます）するものとします。なお、カスタマーが、変更条件の適用開始後に本サービスを利用した場合、当社は、当該カスタマーが変更条件を承諾したものとみなします。<br>
      2. カスタマーは、変更通知を受領し、変更条件を承諾しない場合には、通知日より10日以内に、当社に対して異議申し立てをするものとします。<br>
      3. 前項の規定によりカスタマーより異議申し立てがあった場合には、当該変更条件適用開始日の前日をもって、当社は、当該カスタマーの本サービスに係る一切のサービスの利用停止又は会員資格の剥奪・登録削除を行うことができるものとします。<br>
      4. 前各項の定めにかかわらず、当社は、本規約についてカスタマーの一般の利益に適合する変更を行う場合には、カスタマーに事前の通知をすることなく、本規約を変更することができるものとします。</p>

    <h2 class="ttl">第２１条(権利義務の譲渡禁止)</h2>
    <p>1. カスタマーは、本サービスに関するカスタマーとしての地位および当該地位に基づく権利義務を、当社が予め承諾した場合を除き、第三者に譲渡し、または担保に供してはならないものとします。<br>
      2. カスタマーが前項に違反した場合、当社は、当該カスタマー(予約を行ったカスタマーと施設利用者が異なる場合の施設利用者を含みます。)と当該掲載施設の利用契約をキャンセルし、または掲載情報を削除する権利を留保するとともに、当該カスタマーの本サービスを含む、RamenUmashiに係る一切のサービスの利用停止、会員資格の剥奪もしくは損害賠償請求等必要な措置(法的措置を含みます。)を取ることができるものとします。
    </p>

    <h2 class="ttl">第２２条(返金規定)</h2>
    <p>会員が本サービスを利用して予約した施設の宿泊プランの利用料金が、他の宿泊予約サイトの同一の宿泊プランよりも高額の場合、当社は宿泊費の返金に応じるものとします。ただし、その返金については別途定める最低価格保証規約に従うものとします。ビジターに対しては、最低価格保証は適用されません。<br>
      最低価格保証規約について：<a href="/umashi/umashi/">https://umashi.jp/Umashi/RamenUsmashi</a>    </p>

    <h2 class="ttl">第２３条(外部サービス連携)</h2>
    <p>1. 本サービスにおいて会員登録などをする際に、会員がFacebook等の外部サービス(以下「外部サービス」といいます。)との連携機能を利用する場合、会員は、かかる連携により、会員が行動した情報などの外部サービスへの投稿を当社が会員に代行して行うこと、および、当社が会員に代行して外部サービスへの投稿にあたり、URLなどを付加して投稿することを予め承諾するものとします。なお、会員は、連携機能を利用してログインする際に、当社がデータにアクセスすることについての許可を求められることがあり、かかる内容を確認の上、許可した場合に限り、連携機能を利用することができるものとします。<br>
      2. 外部サービスのユーザーIDの登録・利用を含む全ての外部サービスの利用については、会員は、外部サービスの運営者が規定する各規約の定めに従うものとします。<br>
      3. 外部サービスを利用する場合、会員は、自己の責任において当該サービスを利用するものとし、当社は、当該サービスを利用したことにより生じた損害、当該サービスの運営者・他の利用者等との間に生じたトラブルその他の当該サービスに関連する一切の事項について何らの責任も負わないものとします。<br>
      4. 会員が外部サービスを解約その他理由の如何を問わず退会したことより当該会員が本サービスにログインすることができなくなったとしても、当社は、これについて何らの責任も負わないものとします。当該会員が保有するポイントおよびクーポンは、全て無効となり、当社は、ポイントの返還や、他のアカウントへのポイントまたはクーポンの移行は行いません。
    </p>

    <h2 class="ttl">第２４条(個人情報の取扱い)</h2>
    <p>1.当社は、別途定めるプライバシーポリシーに従い、カスタマーの個人情報を管理するものとし、会員はこれに同意します。<br>
      2.当社は、以下の通り個人情報を第三者に提供し、会員はこれに同意します。<br>
      (1)提供先<br>
      ・KDDI株式会社（以下「KDDI」といいます。）及びKDDIの関係会社（財務諸表等の用語、様式及び作成方法に関する規則第8条第8項に定める意味を有するものとし、KDDIと総称して「KDDI等」といいます。）<br>
      (2)提供する情報<br>
      ・会員登録時の情報（RamenUmashiの会員登録日時、会員ID等を含みます）<br>
      ・会員の宿泊予約履歴<br>
      ・会員のauID<br>
      (3)目的<br>
      KDDI等はRamenUmashiの個人情報を用いて、KDDI等が提供する商品、各種サービス (電気通信サービス、コンテンツサービス、auスマートパス、auスマートパスプレミアム、auでんき、auの生命ほけん、auの損害ほけん、auのローン等を含みます。)の案内、各種情報の提供、ターゲティング広告を含む広告の実施、広告の効果分析および広告効果の改善等を行います。なお、KDDI等は上記を行うにあたり、RamenUmashiの個人情報をKDDI等が保有するauID等の情報と突合してマーケティングのために分析・利用することがあります。
    </p>

    <h2 class="ttl">第２５条(会員の禁止事項)</h2>
    <p>1. RamenUmashiの利用に際して、カスタマーは以下の行為を行ってはならないものとします。<br>
      (1) 他のカスタマー、第三者もしくは弊社の著作権その他の権利を侵害し、または侵害する恐れのある行為<br>
      (2) 他のカスタマー、第三者もしくは弊社の財産またはプライバシーを侵害し、または侵害する恐れのある行為<br>
      (3) 上記(1)(2)の他、他のカスタマー、第三者もしくは弊社に不利益または損害を与え、または与える恐れのある行為<br>
      (4) 公序良俗に反する行為、またはその恐れのある行為<br>
      (5) 犯罪行為、または犯罪行為に結びつく行為、もしくはその恐れのある行為<br>
      (6) 弊社の承諾なく、本システムを通じてまたは本システムに関連して行われる営利を目的とした行為、またはその準備を目的とした行為<br>
      (7) 会員IDおよびパスワードを不正に使用する行為<br>
      (8) 虚偽の情報による会員登録を行う行為<br>
      (9) コンピュータウィルス等の有害なプログラムを、本システムを通じてまたは本システムに関連して使用し、または提供する行為<br>
      (10) 法令に違反し、または違反する恐れのある行為<br>
      (11) その他、弊社が不適切と判断する行為<br>
      2. 前項に該当する行為が認められた場合、弊社は、何らの通知をなくして、本サービスを含む、RamenUmashiに係る一切のサービスの利用停止または会員資格の剥奪・登録削除等必要な措置をとる事ができるものとします。また、カスタマーは他のカスタマー、第三者もしくは弊社に損害を与えないよう細心の注意を払うようにし、万一、他のカスタマー、第三者もしくは弊社に損害を生じさせた場合、すべての法的責任を負うものとします。
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