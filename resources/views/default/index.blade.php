@extends('default.layouts.layout')

@section('content')

<div class="container">
<!-- <div class = "text-center">
  <h2>Phone Book</h2>
  <p>demo version 1.0</p>
</div>           -->
  <table class="table table-dark table-striped text-center">  
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
        <td>21.03.2019</td>
        <td>+380684557899</td>
        <td>John</td>
        <td>best friend</td>
        <td>X</td>
      </tr>
    @endfor
    </tbody>
  </table>
</div>





            <!-- <div class="content">
                <div class="title m-b-md">
                    PhoneBookFuck
                </div> -->      
        <!-- </div> -->
@endsection