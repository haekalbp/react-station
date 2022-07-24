@extends('layouts.user')

@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header pt-4 pb-3">
                    <h2>Posts</h2>
                </div>
                <div class="card-body pb-1 mt-2">
                    <div class="row col-md-12 mb-3">
                        <form action="{{ url('/search') }}" method="get" accept-charset="utf-8" class="d-flex align-items-center">
                            <div class="form-search d-flex align-items-center">
                                <div class="form-group me-2 " style="width: 58.5rem;">
                                    <input type="text" name="search_name" class="form-control" placeholder="search here..">
                                </div>
                                <button class="btn btn-primary " style="width: 6rem;">Search</button>
                            </div>
                        </form>
                    </div>
                    <table class="table table-bordered">
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Content</th>
                    </tr>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ Str::limit($post->title, 10) }}</td>
                        <td class="text-start">{{ $post->body }}</td>
                    </tr>    
                    @endforeach
                    </table>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
