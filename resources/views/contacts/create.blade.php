@extends('layouts.app');

@section('content');
<div class="card m-4 p-4">
    <h1>Add New Contact</h1>
    <form action="{{url('contacts')}}" method="POST">
        {{-- "PUT or PATCH" --}}
        {{-- csrf cross request forgery  protect the form field from attacks --}}
        {!! csrf_field() !!}
        {{-- @method("PATCH") --}}

        <label class="form-label" for="contactName">Name</label>
        <input id="contactName" class="form-control" type="text" name="contactName">

        <label class="form-label" for="contactNum">Contact Number</label>
        <input id="contactNum"  class="form-control" type="text" name="contactNum" >
        
        <label class="form-label"  for="address">Address</label>
        <input id="address"  class="form-control" type="text" name="address">

        <input class="btn  btn-primary mt-4 col-2" type="submit" value="Add">
    </form>
</div>
    
@endsection