@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">プロフィール編集</div>

          <div class="card-body">
            <form action="{{ route('users.update', ['user' => $user]) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <div class="form-group row align-items-center">
                <label for="profile_image" class="col-md-4 col-form-label text-md-right">{{ __('プロフィール画像') }}</label>

                <div class="col-md-6 d-flex align-items-center">
                  <img src="{{ asset('storage/profile_image/'.$user->profile_image) }}" class="mr-2 rounded-circle" width="80" alt="profile_image">
                  <input type="file" name="profile_image" class="@error('profile_image') is-invalid @enderror" autocomplete="profile_image">

                  @error('profile_image')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="screen_name" class="col-md-4 col-form-label text-md-right">{{ __('アカウント名') }}</label>

                <div class="col-md-6">
                  <input id="screen_name" type="text" class="form-control @error('screen_name') is-invalid @enderror" name="screen_name" value={{ $user->screen_name }} required autocomplete="screen_name" autofocus>

                  @error('screen_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ユーザ名') }}</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value={{ $user->name }} required autocomplete="name">

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                <div class="col-md-6">
                  <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value={{ $user->email }} required autocomplete="email">

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button class="btn btn-primary">更新する</button>
                  <form action="{{ route('users.destroy',['user' => $user]) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger" onclick="return confirm('本当に退会しますか？')">退会する</button>
                  </form>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
