@extends('default.layouts.layout')

@section('content')
<br>
<div class="container">

<button class="btn btn-lg btn-info">Add Contact</button>
<button class="btn btn-lg btn-warning">Delete</button>
<br>
<!-- <div class = "text-center">
  <h2>Phone Book</h2>
  <p>demo version 1.0</p>
</div>           -->
<br>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>

  <table class="table table-bordered table-striped">  
    <thead>
      <tr>
        <th>Date</th>
        <th>Number</th>
        <th>Name</th>
        <th>Other</th>
        <th>Operations</th>
      </tr>
    </thead>
    <tbody>
    @for($i = 0; $i < 10; $i++)
      <tr>
      @if (Route::has('register'))
        <td>21.03.2019</td>
        <td>+380684557899</td>
        <td>John</td>
        <td>best friend</td>
        <td>X</td>
        @else
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      @endif
      </tr>
    @endfor
    </tbody>
  </table>
  <ul class="pagination">
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
</ul>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


@endsection