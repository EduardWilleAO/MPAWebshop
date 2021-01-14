@extends('layouts.app')

@section('content')
    <h1 class="page-title-small">Games</h1>

    <div class="card-container">
        @php
            $gameArr = ['CyberPunk', 'BioMutant', 'Dark Souls 3', 'Horizon', 'Red Dead'];
            $i = 0;
            $c = 5;
        @endphp

        @while ( $i < $c )
            <div class="card">
                <h1 style="color:black;">@php echo $gameArr[$i]; @endphp</h1>
                <div class="card-img game@php echo $i; @endphp"></div>
                <a href="recieveItems/<?php echo $gameArr[$i] ?>"><button class="card-button add@php echo $gameArr[$i]; @endphp">Add to cart</button></a>
            </div>

            @php $i++; @endphp
        @endwhile
    </div>
@endsection
