@extends('default.layouts.layout')

@section('content')

<div class="container">
  <h2>Add Contact</h2>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="text">Name:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="text">Number:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="number" placeholder="Enter phone number" name="number">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="text">Other:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="other" placeholder="Other..." name="other">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
        <!-- <a href="{{ url('/') }}"><span class="glyphicon glyphicon-arrow-left">Back</span></a>
        <a href="{{ url('/') }}">  Cancel</a> -->
      </div>
    </div>
    
  </form>
  
</div>


@endsection