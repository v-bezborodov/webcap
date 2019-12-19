@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @can('admin-panel')
                            <p>If you see that, you was logged as admin</p>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection