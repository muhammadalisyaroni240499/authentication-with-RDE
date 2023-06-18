


@extends('layouts')
@section('container') 
<h1>HELLO {{ Auth()->user()->namalengkap }}</h1>

<form action="/logout" method="POST">
    @csrf
    <button class="btn btn-danger">Logout</button>
</form>

<p>{{ Auth()->user()->updated_at }}</p>

@if ($download == true)
<form method="POST" action="/dashboard/download">
    @csrf
    <input type="hidden" name="url_coverimage" value="{{ Auth()->user()->email }}/{{ Auth()->user()->email }}RDE.png">
    <button type="submit" class="btn btn-primary">download</button>
</form>
@endif

@endsection