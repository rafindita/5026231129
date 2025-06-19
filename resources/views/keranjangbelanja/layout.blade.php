@extends('welcome') {{-- Extends your main layout --}}

@section('content')
    <div class="container mt-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="content-panel">
            @yield('keranjang_content')
        </div>
    </div>
@endsection