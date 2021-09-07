@extends('layouts.app')

@section('content')
        <h1 class="page-title-small">Cart</h1>

        <div class="card-container">
            @foreach ($cartProducts as $item)
                <div class="card">
                    <h1 style="color:black;">@php print_r($item); @endphp</h1>
                </div>
            @endforeach
        </div>
@endsection
