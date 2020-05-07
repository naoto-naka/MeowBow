@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <i class="fas fa-dog fa-5x"></i>
        <i class="fas fa-cat fa-5x"></i>
            <div class="card">
                <div class="card-header">MeowBow(V1.0)とは</div>

                <div class="card-body">
                  <p>Twitterのクローンサイトです。<br>
                     飼ってるペットの悩みや可愛さ自慢、これから飼う人へのアドバイスなど<br>
                     ペットに関するつぶやきをするサイトです。<br><br>
                     V1.0ではつぶやきやフォロー、いいね機能など基本的な機能が使えます。<br>
                     以降のVupで画像投稿やペット登録機能を追加予定です。
                  </p>
                    <a href="{{ route('register') }}"><button>新規登録はこちら</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
