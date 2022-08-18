@extends('layouts.app')

@section('content')
     <div class="card p-4 m-4">
        <h1>{{$contact->contactName}}</h1>
      
        <small>{{$contact->contactNum}} | {{$contact->address}}</small>
        <small>Date added {{$contact->created_at}}</small>
        <br>

       <a href="/contacts/{{$contact->id}}/edit"><button class="btn btn-primary">Edit Contact</button></a><br>


       <form method="POST" action="/contacts/{{$contact->id}}">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger title="Delete Contact">Delete Contact</button>
       </form>
     </div>

       @if (count($message) > 0)
          @foreach ($message as $item)
               <div class="card m-4 p-4">
                    <h2>{{$item->msg}}</h2>
                    <small>Written on {{$item->created_at}}</small>
               </div>
          @endforeach
        @else
               <div>No messages from this contact.</div>
        @endif
  
@endsection