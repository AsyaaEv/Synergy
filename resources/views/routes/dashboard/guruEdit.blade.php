@extends('index')
@section('content')
    @livewire('pplg.dashboard.guru-edit', ['id' => @intval($id)])
@endsection