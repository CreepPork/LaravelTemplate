@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Welcome to Laravel!
        </div>
        <div class="card-body text-center">
            <h1>{{__('testMessages.helloworld')}}</h1>
            <div class="links">
                <a href="https://laravel.com/docs">{{__('testMessages.docs')}}</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">{{__('testMessages.news')}}</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>
@endsection