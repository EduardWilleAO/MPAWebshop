@section('navbar')

<ul>
    <li><a href="{{ url('/') }}">Homepage</a></li>
    <li class="has-dropdown"><a href="{{ url('/categories') }}">Categories</a>
        <ul id="dropdown-container">
            <li class="dropdown"><a href="{{ url('/category1') }}">Category 1</a></li>
            <li class="dropdown"><a href="{{ url('/category2') }}">Category 2</a></li>
            <li class="dropdown"><a href="{{ url('/category3') }}">Category 3</a></li>
            <li class="dropdown"><a href="{{ url('/category4') }}">Category 4</a></li>
            <li class="dropdown"><a href="{{ url('/category5') }}">Category 5</a></li>
        </ul>
    </li>
</ul>
