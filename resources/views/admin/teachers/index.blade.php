@extends('layouts.admin')
@section('content')
<div class="container">
    <table class="table table-hover">
        <thead class="table-info">
<tr>
    <th scope="col">Teacher Id</th>
    <th scope="col"> Name</th>
    <th scope="col"> Phone No</th>
    <th scope="col">Approve/Block</th>
    <th scope="col">Button</th>
</tr>
</thead>
<tbody>
    @foreach($teachers as $teacher)
    <tr>

    <td>{{$teacher->id}}</td>
     <td>{{$teacher->user->name}}</td>
     <td>{{$teacher->phone}}</td>
      <td>
        @if($teacher->approved)
        <a href="/admin/teachers/block/{{$teacher->id}}">block</a>
        @else
            <a href="/admin/teachers/approve/{{$teacher->id}}">approve</a>
        @endif
      </td>
      <td>
        <form method="post" style="display: inline;" action="/admin/teachers/{{$teacher->id}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">delete</button>
        </form>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>

    </div>
 @endsection
