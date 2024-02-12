@extends('index')
@section('content')
    @livewire('pplg.dashboard.guru-view', ['nama' => @strval($nama)])
@endsection