@extends ('layouts.app')

@section('title', 'Welcome Page')

@push('head')
 <script src="{{ asset('main.js')}}"></script>
 <link rel="stylesheet" href="{{asset('style.css')}}">
@endpush

@section ('content')
<h1>Welcome content</h1>
@endsection