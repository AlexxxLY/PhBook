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
            <a href="{{route('delete',[$contact->id])}}" class="btn btn-xs btn-warning "
                onclick="return confirm('Are you sure?')">Delete</a></td>
    </tr>
    @endforeach
    @endauth
    @guest
    @for($i = 0; $i < 10; $i++) <tr>
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
<div class="text-center">{{ $contacts->links() }} </div>
@endauth
</div>
@endsection('table')