@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to the Administration Area, {{Auth::user()->name}}</h1>
    </div>
@endsection