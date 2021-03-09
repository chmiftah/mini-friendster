@extends('layouts.app',['title'=>'your time line'])

@section('content')
  <div class="p-4">
    <livewire:status.create/>
    <livewire:status.index/>
  </div>

@endsection
