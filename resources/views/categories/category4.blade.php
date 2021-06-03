@extends('layouts.app')

@section('content')
    <h1 class="page-title-small">Microphones</h1>

    <div class="card-container">
        @php $micArr = ['Blue Yeti', 'Rode NT', 'Shure Sm 7 B', 'HyperX QuadCast', 'Blue Snowball']; @endphp

        @foreach ( $micArr as $micArray )
            <div class="card">
                <h1 style="color:black;">@php echo $micArr[$loop->index]; @endphp</h1>
                <div class="card-img mic@php echo $loop->index; @endphp"></div>
                <button class="card-button">Add to cart</button>
            </div>
        @endforeach
    </div>
@endsection
