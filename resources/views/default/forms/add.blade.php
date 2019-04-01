@extends('default.layouts.layout')

@section('content')

<div class="container">
  <h2>Add Contact</h2>
  <form method="POST" class="form-horizontal" action="{{route('main-add')}}" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label class="control-label col-sm-2" for="text">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="text">Number:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="number" placeholder="Enter phone number" name="number">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="text">Other:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="other" placeholder="Other..." name="notes">
      </div>
      <input type="hidden" value = "{{Auth::user()->id}}" name="user_id">
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
        <a href="{{ url('/') }}" class="btn btn-default">Cancel</a>
      </div>
    </div>
    
  </form>
  
</div>


@endsection