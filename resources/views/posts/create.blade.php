@extends('layouts.admin')
@section('content')
<div class="container text-center cm-adm-ce">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header pt-4 pb-3">
                    <h1>New Post</h1>
                </div>
                <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                        <div class="form-group">
                            <textarea class="form-control" style="height:150px" name="body" placeholder="Content"></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="mx-2">
                            <a class="btn btn-danger" href="{{ route('posts.index') }}">Cancel</a>
                        </div>

                        <div class="mx-2">
                                <button type="submit" class="btn btn-primary">Publish</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection