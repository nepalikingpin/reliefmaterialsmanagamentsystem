@extends('layout.master')
@section('content')

<table class="table" style="font-family: 'IBM Plex Sans', sans-serif; font-size: 24px; width:50%; margin-left:25%">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Material</th>
      <th scope="col">Address</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($users as $user)
    <tr>
      <td>{{ $user->name }}</td>
      <td>{{ $user->materials }}</td>
      <td>{{ $user->address }}</td>
      <td>{{ $user->date }}</td>
    </tr>
@endforeach
</table>

@endsection
