@extends('layout.app')

@section('title')
    Основная
@endsection

@section('content')

@php
$action = $sitePath.'store_task';
@endphp

@include('part.task_form',['action'=> $action])


@endsection