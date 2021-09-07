@extends('layouts.app')

@section('content')
        <h1 class="page-title-small">Cart</h1>

        <div class="card-container">
            @php if($cartProducts){ @endphp
            @foreach ($cartProducts as $item)
                <div class="card">
                    <h1 style="color:black;">@php print_r($item); @endphp</h1>
                </div>
            @endforeach
            @php } else{ @endphp

            <div class="card">
                <h1 style="color:black;">Cart is currently Empty!</h1>
            </div>

            @php } @endphp
        </div>
@endsection
