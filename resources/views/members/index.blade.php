@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Members</div>

                    <div class="card-body">
                        @foreach ($members as $member)
                            <div class="row no-gutters border border-secondary mb-2">
                                <div class="col-md-8">
                                    <h5 class="card-title">Member #{{$loop->iteration}}</h5>
                                    <p class="card-text">Name: <a href="">{{ $member->name }}</a></p>
                                    <p class="card-text">Email: {{ $member->email }}</p>
                                    <p class="card-text">Phone: {{ $member->phone }}</p>
                                </div>
                            </div>
                        @endforeach

                        {{ $members->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection