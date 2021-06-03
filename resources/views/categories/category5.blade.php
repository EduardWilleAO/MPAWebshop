@extends('layouts.app')

@section('content')
    <h1 class="page-title-small">Peripherals</h1>

    <div class="card-container">
        @php $peripheralArr = ['Logitech G502', 'Logitech G815', 'HyperX Cloud II', 'AOC Monitor', 'Valve Index']; @endphp

        @foreach ( $peripheralArr as $peripheralArray )
            <div class="card">
                <h1 style="color:black;">@php echo $peripheralArr[$loop->index]; @endphp</h1>
                <div class="card-img peripheral@php echo $loop->index; @endphp"></div>
                <button class="card-button">Add to cart</button>
            </div>
        @endforeach
    </div>
@endsection
