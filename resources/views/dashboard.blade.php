@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="sm:grid sm:grid-cols-3 sm:gap-10">
            <div class="sm:col-span-2 py-4">
                <h1 class="text-xl">{{$user->name}}のタスク一覧</h1>
            </div>

            <div class="sm:col-span-2 py-4">
                <h2 class="text-decoration underline">new task</h2>
                {{--タスク登録フォーム--}}
                @include('tasks.form')
            </div>
            <div class="sm:col-span-2 py-4">
                <h2 class="text-decoration underline">my task list</h2>
                {{-- 投稿一覧 --}}
                @include('tasks.tasks')
            </div>
        </div>
    @else
        <div class="prose hero bg-base-200 mx-auto max-w-full rounded">
            <div class="hero-content text-center my-10">
                <div class="max-w-md mb-10">
                    <h2>Welcome to the tasks</h2>
                    {{-- ユーザ登録ページへのリンク --}}
                    <a class="btn btn-primary btn-lg normal-case" href="{{ route('register') }}">Sign up now!</a>
                </div>
            </div>
        </div>
    @endif
@endsection
