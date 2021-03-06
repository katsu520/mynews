@extends('layouts.profile')
@section('title', 'プロフィールの編集')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>プロフィールの編集</h2>
        <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
          @if(count($errors) > 0)
            <ul>
              @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
              @endforeach
            </ul>
          @endif
          <div class="form-group row">
            <label class="col-md-2" for="title">氏名</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="title" value="{{ $profile_form->title }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="body">性別</label>
            <div class="col-md-10">
              <input type="text" name="body" value="{{ $profile_form->body }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="body">趣味</label>
            <div class="col-md-10">
              <input type="text" name="body" value="{{ $profile_form->body }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="body">自己紹介欄</label>
            <div class="col-md-10">
              <textarea class="form-control" name="body" rows="20">{{ $profile_form->body }}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-10">
              <input type="hidden" name="id" value="{{ $profile_form->id}}">
              {{ csrf_field() }}
              <input type="submit" class="btn btn-primary" value="更新">
            </div>
          </div>
        </form>
        <div class="row mt-5">
          <div class="col-md-4 mx-auto">
            <h2>編集履歴</h2>
            <ul class="list-group">
              @if ($profile_form->histories !=NULL)
                @foreach ($profile_form->histories as history)
                  <li class="list-group-item">{{ $history->edited_at }}</li>
                @endforeach
              @endif
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" contact="IE=edge">
    <meta name="viewport" content="width=device">

    <title>MyProfile</title>
  </head>
  <body>
    <h1>MyProfile作成画面</h1>
  </body>
</html>
