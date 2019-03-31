@extends('default.layouts.layout')
 
@section('table-body')
<tbody>
@if (Route::has('login'))
    @auth
     @for($i = 0; $i < 10; $i++)
      <tr>
        <td>21.03.2019</td>
        <td>+380684557899</td>
        <td>John</td>
        <td>best friend</td>
        <td><button class="btn btn-xs btn-warning">Delete</button></td>
      </tr>
     @endfor
    @endauth
    @guest
    <!-- <div class="text-center">
           <br>
           <h1 >Welcome!!!</h1>
           <p>To get started, you must log in ...</p>
           <hr>
        </div> -->
         @for($i = 0; $i < 10; $i++)
           <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
          </tr>
         @endfor
    @endguest
@endif  
    </tbody>
  </table>
  @auth
  <ul class="pagination">
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
</ul>
@endauth
</div>
@endsection('table')
