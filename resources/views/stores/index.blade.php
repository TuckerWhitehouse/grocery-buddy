@extends('layout')

@section('content')
  @foreach($stores as $store)
    {{$store->name}}
    @foreach($store->groceries as $grocery)
      {{$grocery->product->name}}
    @endforeach
  @endforeach
@endsection
