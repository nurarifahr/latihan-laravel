@extends('layouts.main')
    @section('container')
        <h1>Halaman About</h1>
        <h4>{{ $nama }}</h4>
        <h4>{{ $email }}</h4>
        <img src="img/{{ $img }}" alt="" width=80>
    @endsection