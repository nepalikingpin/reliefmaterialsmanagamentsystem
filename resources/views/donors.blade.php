@extends('layout.master')
@section('content')


<table class="table table-hover" style="font-family: 'IBM Plex Sans', sans-serif; font-size: 24px; width:50%; margin-left:25%">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($users as $user)
    <tr>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->contact }}</td>
    </tr>
@endforeach
</table>


<div style="margin:30px auto;max-width:900px;">

    <!-- Insert to your webpage where you want to display the slider -->
    <div id="amazingslider-1" style="display:block;position:relative;margin:16px auto 32px;">
        <ul class="amazingslider-slides" style="display:none;">
            <li><img src="images/2wx__banner02.jpg"/></li>
            <li><img src="images/aNS__ziplinebanner.jpg" alt="Nepal"/></li>
            <li><img src="images/cc3__nepal-banner.jpg" alt="Nepal"/></li>
            <li><img src="images/d4t__banner03.jpg" alt="Nepal"/></li>
            <li><img src="images/fF9__banner.jpg" alt="Nepal"/></li>
            <li><img src="images/ljj__ultralightbanner.jpg" alt="Nepal"/></li>
            <li><img src="images/MvB__ktm-durbar-square-banner.jpg" alt="Nepal"/></li>
            <li><img src="images/PLB__manasalu-banner.jpg" alt="Nepal"/></li>
            <li><img src="images/sdA__paraglidingbanner.jpg" alt="Nepal"/></li>
            <li><img src="images/SF1__bhaktapur-durbar-square-banner.jpg" alt="Nepal"/></li>
            <li><img src="images/v5G__wildlife-banner.jpg" alt="Nepal"/></li>
            <li><img src="images/wwG__banner04.jpg" alt="Nepal"/></li>
        </ul>
    </div>
</div>

@endsection
