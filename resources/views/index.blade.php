@extends('partials.layout')
@section('title', 'Home Page')
@section('content')
    @for($i = 0; $i<10; $i++)
        <li>{{ $i }}</li>
    @endfor
@endsection
