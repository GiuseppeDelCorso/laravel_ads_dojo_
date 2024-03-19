@extends('layouts.app')

@section('content')
<h1>Dati da config/data.js: {{ $home }}</h1>
<p>Home.blade.php</p>
<a class="nav-link text-white {{ Route::currentRouteName() == 'modalpage' ? 'bg-secondary' : '' }}"
        href="{{ route('modalpage') }}">
        <i class="fa-solid fa-cart-arrow-down fa-lg fa-fw"></i> Pagina Modale Esericizo
</a>
@endsection