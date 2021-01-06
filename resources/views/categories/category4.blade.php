@extends('layouts.app')

@section('content')
    <h1 class="page-title-small">Microphones</h1>

    <div class="card-container">
        @php
            $micArr = ['Blue Yeti', 'Rode NT', 'Shure Sm 7 B', 'HyperX QuadCast', 'Blue Snowball'];
            $i = 0;
            $c = 5;
        @endphp

        @while ( $i < $c )
            <div class="card">
                <h1 style="color:black;">@php echo $micArr[$i]; @endphp</h1>
                <div class="card-img mic@php echo $i; @endphp"></div>
                <button class="card-button">Add to cart</button>
            </div>

            @php $i++; @endphp
        @endwhile
    </div>
@endsection
