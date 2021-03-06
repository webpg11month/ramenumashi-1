<h1>RamenUmashi</h1>

## 環境構成(Construction environment)
<p align="center"></p>
<img src="https://user-images.githubusercontent.com/65721613/105109042-0612fc80-5aff-11eb-8989-3c1c342377d8.png">



## gitブランチ構成(git-branch Construction)

```
main/
├─ laravel_react    # react導入して良ければ
├─ umashi_login     # ログイン機能を開発（ほどんど機能していないのでBK）
├─ umashi_register  # 新規登録機能を開発（margeする際のBK）
```

umashi_loginとlaravel_reactをmergeして問題なければ、mainに処理を追加していく。
umashi_loginとlaravel_reactがもとにもとに戻せない場合は、laravel_registerをbkとして利用する。

## レンタルサーバーの導入手順
コスト面と汎用性が高いのと中小企業などが多数利用している為、後学の為利用する。
※AWSの導入は、今後レンタルサーバ→AWSの場面が多くなる為2月末までに着手予定（1年間無料枠利用予定）

FTP環境：WinSCP
Terminal：Teraterm

１．BKをとる（レンタルサーバーとローカル）

２．ローカル環境にレンタルサーバーのプロジェクトをダウンロードする。

３．Winmergeにて差分チェックする。

４．上記差分チェック完了後にデプロイを行う。

５．ログインやミドルウェアや導入環境やレイアウトなどのテストを行う。

## Laravelの主要ディレクトリ構成

```
ramenumashi/
    ├─app
    │  ├─Console
    │  ├─Exceptions
    │  ├─Http
    │  │  ├─Controllers
    │  │  │  ├─Auth
    │  │  │  └─Shop
    │  │  ├─Middleware
    │  │  └─Requests
    │  ├─Model
    │  ├─Providers
    │  └─Table
    ├─bootstrap
    │  └─cache
    ├─config
    ├─database
    │  ├─factories
    │  ├─migrations
    │  └─seeds
    ├─node_modules
    ├─public
    │  ├─css
    │  │  └─shop
    │  ├─img
    │  │  ├─etc
    │  │  ├─favicon
    │  │  ├─logo
    │  │  └─main
    │  ├─js
    │  └─storage
    │      └─image
    ├─resources
    │  ├─js
    │  │  └─components
    │  ├─lang
    │  │  ├─en
    │  │  └─ja
    │  ├─sass
    │  └─views
    │      ├─auth
    │      │  └─passwords
    │      ├─layout
    │      │  └─shop
    │      ├─layouts
    │      ├─message
    │      ├─mypage
    │      └─shop
    ├─routes
    ├─storage
    │  ├─app
    │  │  └─public
    │  │      └─image
    │  ├─framework
    │  │  ├─cache
    │  │  │  └─data
    │  │  ├─sessions
    │  │  ├─testing
    │  │  └─views
    │  └─logs
    ├─tests
    │  ├─Feature
    │  └─Unit
    └─vender
```

