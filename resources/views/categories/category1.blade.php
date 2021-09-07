<?php session_start(); ?>
@extends('layouts.app')

@section('content')
    <h1 class="page-title-small">Games</h1>

    <div class="card-container">
        @php $gameArr = ['CyberPunk', 'BioMutant', 'Dark Souls 3', 'Horizon', 'Red Dead']; @endphp

        @foreach ( $gameArr as $gameArray )
            <div class="card">
                <h1 style="color:black;">@php echo $gameArr[$loop->index]; @endphp</h1>
                <div class="card-img game@php echo $loop->index; @endphp"></div>
                <a href="addToCart/<?php echo $gameArr[$loop->index] ?>"><button class="card-button add@php echo $gameArr[$loop->index]; @endphp">Add to cart</button></a>

                <a href="{{ url('/cart/add/' . $gameArr[$loop->index]) }}">
                    <button class="card-button add@php echo $gameArr[$loop->index]; @endphp">Add to cart Proper</button>
                </a>
            </div>
        @endforeach
    </div>
@endsection
