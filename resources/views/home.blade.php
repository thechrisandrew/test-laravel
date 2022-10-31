@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @foreach ($Posts as $post)
                    <img src="{{ $post->user->avatarUrl }}" alt="" width="48px" height="48px">
                    {{ $post->user->username }}
                    <br>
                    {{ $post->text }}
                    <br>
                    {{ $post->created_at }}
                    <br><br>
                    @endforeach

                    {{$Posts->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection