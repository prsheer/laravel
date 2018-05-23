@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Forum Threads</div>

                    <div class="card-body">
                        <article>
                            <h4>{{ $thread->title }}</h4>
                            <p>{{ $thread->body }}</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
