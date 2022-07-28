@extends('layouts.app')

@section('content')
<div class="bg-polka text-center c-pad">
  <div class="row">
    <h1 class="col-md-12 fw-bold" style="font-size: 5rem; margin-top: 4rem;">Search Result</h1>
    <p class="fs-4">Your search result.</p>
  </div>
  
  <div class="container c-mar">
    <div class="d-flex align-items-center justify-content-center mb-5">
      <form action="{{ url('/cari') }}" method="get" accept-charset="utf-8">
        <div class="form-search d-flex align-items-center">
            <div class="form-group me-2 " style="width: 48rem;">
                <input type="text" name="search_name" class="form-control bg-transparent border-dark" placeholder="search here..">
            </div>
            <button class="btn btn-dark " style="width: 6rem;">Search</button>
        </div>
      </form>
    </div>
    <div class="row gy-5 align-items-center justify-content-center mb-5">
      @foreach ($posts->slice(0, 6) as $post)
      <div class="col-3 glass py-3 mx-4">
        <a class="text-decoration-none text-dark" href="{{ route('show',$post->id) }}">
          <h2>{{ $post->title }}</h2>
          <p>{{ Str::limit($post->body, 150) }}</p>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
