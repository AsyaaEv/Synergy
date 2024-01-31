@extends('index')
@section('content')
    @livewire('pplg.dashboard.walikelas.wk-edit', ['id' => @intval($id)])
@endsection