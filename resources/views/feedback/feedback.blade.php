@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Submit new Feedback</div>
                    <div class="card-body">
                        <form action="{{route('feedback.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                {{--<div class="form-group row">--}}
                                    {{--<label class="col-md-4 col-form-label text-md-right" for="name">Name</label>--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<input id="name"--}}
                                               {{--name="name"--}}
                                               {{--type="text"--}}
                                               {{--class="form-control @error('name') is-invalid @enderror"--}}
                                               {{--required--}}
                                               {{--value="{{ old('name') }}"--}}
                                               {{--autocomplete="name">--}}

                                        {{--@error('name')--}}
                                        {{--<span class="invalid-feedback" role="alert">--}}
                                                {{--<strong>Wrong! {{$message}}</strong>--}}
                                            {{--</span>--}}
                                        {{--@enderror--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="form-group row">--}}
                                    {{--<label class="col-md-4 col-form-label text-md-right" for="email">Email</label>--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<input id="email"--}}
                                               {{--name="email"--}}
                                               {{--type="email"--}}
                                               {{--required--}}
                                               {{--class="form-control @error('email', 'login') is-invalid @enderror"--}}
                                               {{--value="{{ old('email') }}">--}}

                                        {{--@error('email')--}}
                                            {{--<span class="invalid-feedback" role="alert">--}}
                                                {{--<strong>Wrong! {{$message}}</strong>--}}
                                            {{--</span>--}}
                                        {{--@enderror--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right" for="phone">Phone</label>
                                    <div class="col-md-6">
                                        <input id="phone"
                                               name="phone"
                                               type="text"
                                               class="form-control @error('phone') is-invalid @enderror">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>Wrong!{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right" for="body">Text</label>
                                    <div class="col-md-6">
                                        <textarea id="body"
                                                name="body"
                                                type="textarea"
                                                required
                                                class="form-control @error('body') is-invalid @enderror">
                                            {{ old('body') }}
                                        </textarea>
                                        @error('body')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>Wrong!{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <p class="col-md-4 col-form-label text-md-right" for="stars1">Star</p>

                                    <div class="col-md-6">
                                        <label class="col-form-label text-md-right" for="stars0">0</label>
                                        <input id="stars0"
                                                name="stars"
                                                type="radio"
                                                value=0
                                                required>
                                        </input>
                                        <label class="col-form-label text-md-right" for="stars1">1</label>
                                        <input id="stars1"
                                               name="stars"
                                               type="radio"
                                               value=1
                                               required>
                                        </input>
                                        <label class="col-form-label text-md-right" for="stars2">2</label>
                                        <input id="stars2"
                                               name="stars"
                                               type="radio"
                                               value=2
                                               required>
                                        </input>
                                        <label class="col-form-label text-md-right" for="stars3">3</label>
                                        <input id="stars3"
                                               name="stars"
                                               type="radio"
                                               value=3
                                               required>
                                        </input>
                                        <label class="col-form-label text-md-right" for="stars4">4</label>
                                        <input id="stars4"
                                               name="stars"
                                               type="radio"
                                               value=4
                                               required>
                                        </input>
                                        <label class="col-form-label text-md-right" for="stars5">5</label>
                                        <input id="stars5"
                                               name="stars"
                                               type="radio"
                                               value=5
                                               checked
                                               required>
                                        </input>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right" for="file">Attach file</label>
                                    <div class="col-md-6">
                                        <input id="file"
                                               name="file"
                                               type="file"
                                               class="form-control @error('file') is-invalid @enderror">
                                        @error('file')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>Wrong!{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </div>

                            </div>
                            {{--<button type="submit" class="btn btn-primary">Submit</button>--}}


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection