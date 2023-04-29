@extends('layout.app')

@section('title')
    Основная
@endsection

@section('content')


<form method="POST" action="{{$sitePath}}store_task">
<div class="mb-3 mt-5">
<label for="exampleFormControlInput1" class="form-label">Имя</label>
<input type="text" name="name" class="form-control"  value="{{ $name ?? '' }}" placeholder="Просто Вася (без Просто только)">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Email</label>
<input type="email" name="email" class="form-control" value="{{ $email ?? '' }}" placeholder="name@example.com">
</div>
<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Текст задачи</label>
<textarea class="form-control" name="descripition"   rows="3">{{ $descripition ?? '' }}</textarea>
</div>

<button class="btn btn-primary" type="submit">отправить</button>
</form>
@endsection