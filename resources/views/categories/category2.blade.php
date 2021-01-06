@extends('layouts.app')

@section('content')
    <h1 class="page-title-small">Chairs</h1>

    <div class="card-container">
        @php
            $chairArr = ['Omega', 'Titan', 'Titan XL', 'Office Chair', 'DX Razor'];
            $i = 0;
            $c = 5;
        @endphp

        @while ( $i < $c )
            <div class="card">
                <h1 style="color:black;">@php echo $chairArr[$i]; @endphp</h1>
                <div class="card-img chair@php echo $i; @endphp"></div>
                <button class="card-button">Add to cart</button>
            </div>

            @php $i++; @endphp
        @endwhile
    </div>
@endsection
