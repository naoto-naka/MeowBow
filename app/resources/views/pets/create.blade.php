@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">ペット登録</div>

          <div class="card-body">
            <form action="{{ route('pets.store') }}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="form-group row align-items-center">
                <label for="profile_image" class="col-md-4 col-form-label text-md-right">{{ __('プロフィール画像') }}</label>

                <div class="col-md-6 d-flex align-items-center">
                  <img src="" class="mr-2 rounded-circle" width="80" alt="profile_image">
                  <input type="file" name="profile_image" class="@error('profile_image') is-invalid @enderror" autocomplete="profile_image">

                  @error('profile_image')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="screen_name" class="col-md-4 col-form-label text-md-right">{{ __('名前') }}</label>

                <div class="col-md-6">
                  <input id="screen_name" type="text" class="form-control @error('screen_name') is-invalid @enderror" name="screen_name" value="" required autocomplete="screen_name" autofocus>

                  @error('screen_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('種類') }}</label>

                <div class="col-md-6">
                    <select name="type"　class="form-control @error('name') is-invalid @enderror" required>
                    　<option value="" disabled selected>---種類を選択してください---</option>
                      @foreach (Pet::TYPE as $key => $display)
                        <option value="{{ $key }}">{{ $display }}</option>
                      @endforeach
                    </select>

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('品種') }}</label>

                <div class="col-md-6">
                    <select class="form-control @error('email') is-invalid @enderror" name="email" disab>
                      <option value="" disabled selected>---品種を選択---</option>
                      @foreach (Pet::BREED as $key => $breed)
                        @if ($key == "DOG")
                          @foreach ($breed as $key => $value)
                            <option value="{{ $value }}" data-val="DOG">{{ $value }}</option>
                          @endforeach
                        @elseif ($key == "CAT")
                          @foreach ($breed as $key => $value)
                            <option value="{{ $value }}" data-val="CAT">{{ $value }}</option>
                          @endforeach
                        @endif
                      @endforeach
                    </select>

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button class="btn btn-primary">登録する</button>
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
