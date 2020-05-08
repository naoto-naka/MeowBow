

## MeowBowとは
Twitterのクローンサイトです。  
ペットの悩みや可愛さ自慢、これから飼う人へのアドバイスなど  
飼い主さんがペットに関するつぶやきをすることを目的としたサイトです。

V1.0では以下の機能が使えます。


- つぶやき機能
- いいね機能
- フォロー機能
- つぶやきに対するコメント機能

V2.0以降で下記の機能を追加予定です。

- 写真投稿機能
- ペット登録機能
- auth認証機能

## インストール

DockerとComposeが必要となりますので導入後下記の手順を  
行ってください

`git clone https://github.com/naoto-naka/MeowBow.git`

ダウンロードしたファイルへ移動

`cd Meowbow`

Docker composeファイルからコンテナの作成

`docker-compose up -d`

ブラウザにてlocalhostの8080ポートへアクセス
