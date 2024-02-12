@extends('index')
@section('content')
    @livewire('pplg.dashboard.guru-view', ['id' => @intval($id)])
@endsection