@extends('layout.app')

@section('title')
    Основная
@endsection

@section('content')
   






<form class="row g-3 mt-5" method="POST" action="{{$sitePath}}authentificate">
  <div class="col-auto">
    <label for="staticEmail2" class="">логин</label>
    <input type="text"  name="login" class="form-control" value="">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="">пароль</label>
    <input type="password" name="password" class="form-control"  placeholder="пароль">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary mb-3">войти</button>
  </div>
  *пароль 123 , логин admin 
</form>

@endsection
