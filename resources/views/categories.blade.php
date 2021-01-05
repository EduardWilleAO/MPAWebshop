@extends('layouts.app')

@section('content')
    <h1 class="page-title">Categories</h1>

    <div id="category-container">
        <a href="{{ url('/category1') }}" class="category-item">Category 1</a>
        <a href="{{ url('/category2') }}" class="category-item">Category 2</a>
        <a href="{{ url('/category3') }}" class="category-item">Category 3</a>
        <a href="{{ url('/category4') }}" class="category-item">Category 4</a>
        <a href="{{ url('/category5') }}" class="category-item">Category 5</a>
    </div>
@endsection
