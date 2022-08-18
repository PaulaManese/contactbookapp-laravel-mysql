@extends('layouts.app')

@section('content')
     <div>
        <h1>Edit Contact</h1>

        <form action="/contacts/{{$contact->id}}" method="POST">
            {!! csrf_field() !!}

            @method("PATCH")
            <input type="hidden" name="id"  id="id"value="{{$contact->id}}">
            <label>Name</label>

            <input type="text" name="contactName" id="contactName" value="{{$contact->contactName}}"
            class="form-control"><br>

            <label>Contact Number</label>
            <input type="text" name="contactNum" id="contactNum" value="{{$contact->contactNum}}"
            class="form-control"><br>

            <label>Address</label>
            <input type="text" name="address" id="address" value="{{$contact->address}}"
            class="form-control"><br>


            <input type="submit" value="Update" class="btn btn-primary">
        </form>

     </div>
@endsection