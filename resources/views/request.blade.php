@extends('layout.master')
@section('content')
<form style="width: 400px; margin-left:45em" action="/request" method="post" name="request-info">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="exampleFormControlInput1">Address</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your address" name="address" required>
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
      <label for="exampleFormControlInput1">Mode</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter mode" name="mode" required>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Date</label>
      <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Enter Date" name="date" required>
    </div>

      <button type="submit" name="submit" id="submit_form" value="submit" class="button btn first" style="margin-left:8em">Request</button>
</form>

@endsection
