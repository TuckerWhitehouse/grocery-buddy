@extends('layout')

@section('content')
  @foreach($shoppingLists as $shoppingList)
    {{$shoppingList->name}}
    @foreach($shoppingList->items as $item)
      {{$item->quantity}}:
      {{$item->grocery->product->name}}
    @endforeach
  @endforeach
@endsection
