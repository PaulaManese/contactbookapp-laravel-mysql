@extends('layouts.app')


@section('content')
    
    <h1>Message List</h1>

    <div class="card p-4 m-4">
        @foreach ($contacts as $item)
            <div class="card p-4 m-4">
               
           @foreach($item->message as $items)
                <h5>{{$items->msg}}</h2>
            @endforeach
                <small>Written By: {{$item->contactName}}</small>
            </div>          
        @endforeach 
        </div>
@endsection