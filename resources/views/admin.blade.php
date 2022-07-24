@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header pt-4 pb-3"><h2>You're logged in as an Admin!</h2></div>
                <div class="card-body">
                    <h2></h2>
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="text-center my-2 mb-3">
                                <a class="btn btn-success" href="{{ url('/posts') }}">Go to Dashboard</a>
                            </div>
                        </div>
                    </div>
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
