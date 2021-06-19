@extends('layouts.layout')

@section('title', $info['title'])

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="title">Welcome back, {{ $user['name'] }}!</div>

    @foreach ($items as $item)
        {{ $item['title'] }}
    @endforeach
@endsection