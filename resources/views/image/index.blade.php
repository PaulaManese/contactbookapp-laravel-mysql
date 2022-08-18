@extends('layouts.app')
 

@section('content')
        <h1>Add Image</h1>
        <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
           @csrf    
            <input type="file" class="form-control" name="image" id="image"><br>
            <button type="submit" class="btn btn-primary">Add Image</button>
        </form>
@endsection