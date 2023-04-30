@extends('layout.app')

@section('title')
    Основная
@endsection

@section('content')

@php
$action = $sitePath.'update_task';
@endphp

@include('part.task_form',['action'=> $action,'status'=>$status, 'taskId'=>$taskId, 'descripition'=>$descripition,'name'=>$name,'email'=>$email,'userId'=>$userId])


@endsection