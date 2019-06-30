@extends('layout.master')
@section('content')
<form style="width: 400px; margin-left:45em" action="/donate" method="post" name="donor-info">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name" name="name" required>
  </div>
  <div class="form-group" >
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email" name="email" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Contact</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your contact" name="contact" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Donation Material</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Material" name="materials" required>
  </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Donation Address</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter address to donate" name="address" required>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Enter date to donate</label>
      <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Enter Material" name="date" required>
    </div>

      <button type="submit" name="submit" id="submit_form" value="submit" class="button btn first" style="margin-left:8em">Donate</button>
</form>

@endsection
