@extends('layouts.app')
@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header pt-4 pb-3">
                    <h1>{{ $post->title }}</h1>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group text-start">
                                <p>{{ $post->body }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('posts.index') }}">Back to Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection