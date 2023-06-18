<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <h1>Ini Halaman Program</h1>
    </body>
</html> -->

@extends('layouts.app')

@section('titlePage', 'home')

@section('content')

    @parent
    <h1>Ini halaman Program</h1>
    @foreach ($data as $d)
        {{ $d->nama }} tanggal {{ $d->tanggal }}
    @endforeach

@endsection