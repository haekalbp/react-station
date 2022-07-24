@extends('layouts.admin')
@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header pt-4 pb-3">
                    <h1>{{ $post->title }}</h1>
                </div>
                <div class="card-body">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update',$post->id) }}" method="POST">
        @csrf

        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                <div class="form-group">
                    <textarea class="form-control" style="height:150px" name="body" placeholder="Post Body">{{ $post->body }}</textarea>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="mx-2">
                    <a class="btn btn-danger" href="{{ route('posts.index') }}">Cancel</a>
                </div>
                <div class="mx-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection