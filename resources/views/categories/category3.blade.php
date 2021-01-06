@extends('layouts.app')

@section('content')
    <h1 class="page-title-small">Desks</h1>

    <div class="card-container">
        @php
            $deskArr = ['The Looker', 'The Industrial', 'The Full Package', 'The Little Space', 'The Stand Up'];
            $i = 0;
            $c = 5;
        @endphp

        @while ( $i < $c )
            <div class="card">
                <h1 style="color:black;">@php echo $deskArr[$i]; @endphp</h1>
                <div class="card-img desk@php echo $i; @endphp"></div>
                <button class="card-button">Add to cart</button>
            </div>

            @php $i++; @endphp
        @endwhile
    </div>
@endsection
