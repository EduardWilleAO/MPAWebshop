@extends('layouts.app')

@section('content')
    <h1 class="page-title-small">Peripherals</h1>

    <div class="card-container">
        @php
            $peripheralArr = ['Logitech G502', 'Logitech G815', 'HyperX Cloud II', 'AOC Monitor', 'Valve Index'];
            $i = 0;
            $c = 5;
        @endphp

        @while ( $i < $c )
            <div class="card">
                <h1 style="color:black;">@php echo $peripheralArr[$i]; @endphp</h1>
                <div class="card-img peripheral@php echo $i; @endphp"></div>
                <button class="card-button">Add to cart</button>
            </div>

            @php $i++; @endphp
        @endwhile
    </div>
@endsection
