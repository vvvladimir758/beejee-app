@extends('layout.app')

@section('title')
    Основная
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-auto" style="margin:auto">
           <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Автор</th>
      <th scope="col">Текст</th>
      <th scope="col">Статус</th>
      @if(isset($admin) && $admin==1)
       <th scope="col">Действия</th>
      @endif
    </tr>
  </thead>
  <tbody>
            @foreach($tasks as $task)
            <tr>
            <td>{{$task->task_id}}</td>
            <td>{{$task->name}}</td>
            <td>{{$task->descripition}}</td>
            <td>{{ $task->status == 0 ? 'на выполнение' : 'выполнено '}}</td>
      @if(isset($admin) && $admin==1)
       <td><a href="{{$sitePath}}edit_task/{{$task->task_id}}">
       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg>
</a></th>
      @endif
            @endforeach
    </tbody>
    </table>
    
    
           <nav aria-label="Page navigation example">
  <ul class="pagination">
   <li class="page-item"><a class="page-link" href="{{$sitePath}}main/{{ ($page-1) > 0 ? ($page-1) : 1 }}"><</a></li>
  @foreach($pageCount as $n)
  
    <li class="page-item"><a class="page-link {{ $page == $n ? 'active' : '' }}" href="{{$sitePath}}main/{{$n}}">{{$n}}</a></li>
 
    @endforeach
       <li class="page-item"><a class="page-link" href="{{$sitePath}}main/ {{ ($page+1) < count($pageCount) ? ($page+1) : count($pageCount) }}">></a></li>
  </ul>
</nav> 
            
            </div>
        
        </div>
    </div>
    
@endsection