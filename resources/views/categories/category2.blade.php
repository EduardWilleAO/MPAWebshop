@extends('layouts.app')

@section('content')
    <h1 class="page-title-small">Chairs</h1>

    <div class="card-container">
        @php $chairArr = ['Omega', 'Titan', 'Titan XL', 'Office Chair', 'DX Razor']; @endphp

        @foreach ( $chairArr as $chairArray )
            <div class="card">
                <h1 style="color:black;">@php echo $chairArr[$loop->index]; @endphp</h1>
                <div class="card-img chair@php echo $loop->index; @endphp"></div>
                <button class="card-button">Add to cart</button>
            </div>
        @endforeach
    </div>
@endsection
