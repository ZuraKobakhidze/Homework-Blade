@extends ('layouts.app')

@section('title', 'Welcome Page')

@push('head')
    <script src="{{ asset('scripts/main.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('styles/styles.css') }}">
@endpush

@section('header')
    <h1>Welcome content</h1>
@endsection

@section('content')
    @foreach ($data as $user)
        <div class="user">
            <p>Name: {{ $user['name'] }}</p>
            <p>Photo: {{ $user['photo'] }}</p>
            <p @class(['status', 'active' => $user['status'] == 'Active'])>Status: {{ $user['status'] }}</p>
        </div>
    @endforeach
@endsection