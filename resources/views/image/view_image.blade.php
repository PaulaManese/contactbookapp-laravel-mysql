@extends('layouts.app')
 

@section('content')
        <h1>Images</h1>
       @foreach ($imageData as $item)
            <p>{{$item->id}}</p>
            <img src="{{ url('public/Image/' . $item->image) }}" style="height: 150px; width: 150px"/>
           
       @endforeach
@endsection