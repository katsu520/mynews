@extends('layouts.profile')

@section('title', 'Myプロフィール')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>ニュース新規作成</h2>
        <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

          @if (count(errors) > 0)
            <ul>
              @foreach(errors->all() as $e)
              <li>{{ $e }}</li>
            </ul>
          @endif
          <div class="form-group row">
            <label class="col-md-2" for="title">氏名</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="title" value="{{ old('title') }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="title">性別</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="title">趣味</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="title">自己紹介欄</label>
            <div class="col-md-10">
              <textarea name="introduction" rows="20">{{ old('body') }}</textarea>
            </div>
          </div>
          {{ csrf_field() }}
          <input type="submit" class="btn btn-primary" value="更新">
        </form>
      </div>
    </div>
  </div>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>

  <div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>Myプロフィール</h2>
        </div>
    </div>
  </div>
@endsection
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" contact="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>MyNews</title>
  </head>
  <body>
    <h1>Myニュース作成画面</h1>
  </body>
</html>
