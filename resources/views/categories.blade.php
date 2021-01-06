@extends('layouts.app')

@section('content')
    <h1 class="page-title">Categories</h1>

    <div id="category-container">
        <a href="{{ url('/category1') }}" class="category-item">Games</a>
        <a href="{{ url('/category2') }}" class="category-item">Chairs</a>
        <a href="{{ url('/category3') }}" class="category-item">Desks</a>
        <a href="{{ url('/category4') }}" class="category-item">Microphones</a>
        <a href="{{ url('/category5') }}" class="category-item">peripherals</a>
    </div>
@endsection
