@extends('layouts.app')

@section('content')
    <h1 class="page-title-small">Desks</h1>

    <div class="card-container">
        @php $deskArr = ['The Looker', 'The Industrial', 'The Full Package', 'The Little Space', 'The Stand Up']; @endphp

        @foreach ( $deskArr as $deskArray )
            <div class="card">
                <h1 style="color:black;">@php echo $deskArr[$loop->index]; @endphp</h1>
                <div class="card-img desk@php echo $loop->index; @endphp"></div>
                <button class="card-button">Add to cart</button>
            </div>
        @endforeach
    </div>
@endsection
