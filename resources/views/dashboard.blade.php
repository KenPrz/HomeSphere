@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Welcome, {{ $user->first_name. ' '. $user->last_name }}!</h1>
        <p>Email: {{ $user->email }}</p>
    </div>
@endsection