@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach ($Posts as $post)
                            {{ $post->user->username }}
                            <br>
                            {{ $post->text }}
                            <br>
                            {{ $post->created_at }}
                            <br><br>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
