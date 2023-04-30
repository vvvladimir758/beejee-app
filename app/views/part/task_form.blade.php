<form method="POST" action="{{$action}}">

@if(isset($taskId))
<input type="hidden" name="taskId" value="{{$taskId}}">

@endif

@if(isset($userId))
<input type="hidden" name="userId" value="{{$userId}}">

@endif

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

@if(isset($admin) && $admin==1 && $action==$sitePath.'update_task')
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="status" {{ $status == 1 ? 'checked' : ' '}}>
  <label class="form-check-label" for="flexCheckDefault">
    Выполнено 
  </label>
@endif


<button class="btn btn-primary" type="submit">отправить</button>
</form>