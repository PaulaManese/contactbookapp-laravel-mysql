@extends('layouts.app')

@section('content')
  <h1>Contacts List</h1>

    @if (count($contacts) > 0)
        @foreach ($contacts as $item)
            <div class="card p-4 m-4">
                <a href="/contacts/{{$item->id}}"><h2>{{$item->contactName}}</h2></a>
                <h2>{{$item->contactName}}</h2>
                <h5>{{$item->contactNum}}</h2>
                <h5>{{$item->address}}</h2>
                <small>{{$item->created_at}}</small>
            </div>          
        @endforeach 

        <div class="m-4">
                {{$contacts->links()}}
                <br>
                <a href="/contacts/create"><button class="btn btn-primary">Add New Contact</button></a>
            </div>    
    @endif
@endsection