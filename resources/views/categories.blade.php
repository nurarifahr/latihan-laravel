@extends('layouts.main')
    @section('container')
        <h1>Post Categories</h1>

        <div class="container mt-5">
            <div class="row">
                @foreach($categories as $category)
                <div class="col-md-4 mb-3">
                    <a href="/blog?category={{ $category->slug }}">
                    <div class="card bg-dark text-white">
                        @if($category->image)
                            <div style="max-height: 500px;overflow:hidden;">
                                <img src="{{ asset('storage/'. $category->image) }}" alt="{{ $category->name }}" class="img-fluid mt-3">
                            </div>
                        @else
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        @endif
                        <div class="card-img-overlay d-flex align-items-center p-0">
                          <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color:rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                        </div>
                      </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

    @endsection