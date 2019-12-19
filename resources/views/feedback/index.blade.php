@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Feedbacks</div>

                    <div class="card-body">
                        @foreach ($feedbacks as $feedback)
                            <div class="row no-gutters border border-secondary mb-2">
                                <div class="col-md-4">
                                    <img src="{{$feedback->file_path_feedback}}"  class="card-img" alt="{{$feedback->name}}">
                                </div>
                                <div class="col-md-8">
                                    <h5 class="card-title">Feedback #{{$loop->iteration}}</h5>
                                    <p class="card-text">Author: <a href="">{{ $feedback->user->name }}</a></p>
                                    <p class="card-text">{{ $feedback->body }}</p>
                                    <p class="card-text"><small class="text-muted"><span>Stars:</span>&nbsp;{{ $feedback->stars }}</small></p>
                                </div>
                            </div>
                        @endforeach

                        {{ $feedbacks->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection