@extends('layout.master')
@section('content')

<table class="table table-hover" style="font-family: 'IBM Plex Sans', sans-serif; font-size: 24px; width:50%; margin-left:25%">
  <thead>
    <tr>
      <th scope="col">Address</th>
      <th scope="col">Contact</th>
      <th scope="col">Material</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($users as $user)
    <tr>
      <td>{{ $user->address }}</td>
      <td>{{ $user->contact }}</td>
      <td>{{ $user->materials }}</td>
    </tr>
@endforeach
</table>
@endsection
