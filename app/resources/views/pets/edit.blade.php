@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">プロフィール編集</div>

          <div class="card-body">
            <form action="{{ route('pets.update', ['pet' => $pet]) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <div class="form-group row align-items-center">
                <label for="profile_image" class="col-md-4 col-form-label text-md-right">{{ __('プロフィール画像') }}</label>

                <div class="col-md-6 d-flex align-items-center">
                  <img src="{{ asset('storage/profile_image/'.$pet->profile_image) }}" class="mr-2 rounded-circle" width="80" alt="profile_image">
                  <input type="file" name="profile_image" class="@error('profile_image') is-invalid @enderror" autocomplete="profile_image">

                  @error('profile_image')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('名前') }}</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value={{ $pet->name }} required autocomplete="name" autofocus>

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('種類') }}</label>

                <div class="col-md-6">
                  <select name="type"　class="type form-control @error('name') is-invalid @enderror" required>
                  　<option value="" disabled selected>---種類を選択してください---</option>
                    @foreach (Pet::TYPE as $key => $display)
                      <option value="{{ $key }}">{{ $display }}</option>
                    @endforeach
                  </select>

                  @error('type')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="breed" class="col-md-4 col-form-label text-md-right">{{ __('品種') }}</label>

                <div class="col-md-6">
                  <select class="breed form-control @error('breed') is-invalid @enderror" name="breed" required>
                    <option value="" class="msg" disabled selected>---品種を選択---</option>
                    @foreach (Pet::BREED as $type_key => $breeds)
                      @if ($type_key == 'DOG')
                        @foreach ($breeds as $breed_key => $value)
                          <option value="{{ $breed_key }}" data-val="{{ $type_key }}">{{ $value }}</option>
                        @endforeach
                      @elseif ($type_key == 'CAT')
                        @foreach ($breeds as $breed_key => $value)
                          <option value="{{ $breed_key }}" data-val="{{ $type_key }}">{{ $value }}</option>
                        @endforeach
                      @endif
                    @endforeach
                  </select>

                  @error('breed')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="profile_comment" class="col-md-4 col-form-label text-md-right">{{ __('プロフィールコメント') }}</label>

                <div class="col-md-6">
                  <textarea id="profile_comment"  class="form-control @error('profile_comment') is-invalid @enderror" name="profile_comment" autocomplete="profile_comment"></textarea>

                  @error('profile_comment')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button class="btn btn-primary">更新する</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('js/interlocking_select_box.js') }}"></script>
@endsection
