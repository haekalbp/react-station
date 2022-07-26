@extends('layouts.admin')

@section('content')
<div class="bg-admin-polka py-5">
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header pt-4 pb-3"><h1>Dashboard</h1></div>
                <div class="card-body">
                    <div class="row">
                        <form action="{{ url('/posts/search') }}" method="get" accept-charset="utf-8" class="col-md-10 d-flex align-items-center">
                            <div class="form-search d-flex align-items-center">
                                <div class="form-group me-2 " style="width: 48rem;">
                                    <input type="text" name="search_name" class="form-control" placeholder="search here..">
                                </div>
                                <button class="btn btn-dark" style="width: 6rem;">Search</button>
                            </div>
                        </form>
                        <div class="col-md-2">
                            <div class="text-end my-3">
                                <a class="btn btn-success px-3" href="{{ route('posts.create') }}">Create New Post</a>
                            </div>
                        </div>
                    </div>
                
                    <table class="table table-bordered">
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ Str::limit($post->title, 10) }}</td>
                            <td class="text-start">{{ Str::limit($post->body, 195) }}</td>
                            <td class="d-flex justify-content-center">
                                <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">View</a>
                                <a class="btn btn-primary mx-3" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
