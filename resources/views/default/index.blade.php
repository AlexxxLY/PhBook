@extends('default.layouts.layout')
 
@section('table-body')
<tbody id="myTable">
@if (Route::has('login'))
    @auth
     @foreach($contacts as $contact)
      <tr>
        <td>{{$contact->created_at}}</td>
        <td>{{$contact->number}}</td>
        <td>{{$contact->name}}</td>
        <td>{{$contact->notes}}</td>
        <td>
        <a href="{{route('main-delete',[$contact->id])}}" class="btn btn-xs btn-warning " 
           onclick="return confirm('Are you sure?')">Delete</a></td>
      </tr>
     @endforeach
    
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
