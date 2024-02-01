@extends('index')
@section('content')
    @livewire('pplg.profil-guru', ['nama' => @strval($nama)])
@endsection