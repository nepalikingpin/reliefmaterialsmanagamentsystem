@extends('layout.master')
@section('content')
<div id="about"></div>
    <div style="margin-left:15em;">

        <div class="row" style="padding-top:20px;">
            <div style="border-right:2px solid #f15652; height:245px; float:left; width:500px;">
                <h2 style="text-align:center;">Trust</h2>
                <div style="border:2px solid #f15652; max-width: 8%;margin-left: 46%;margin-right: 46%;"></div>
                <h3 style="line-height:140%;text-align:center;font-family: 'IBM Plex Sans', sans-serif;">Trust is our core value and we always strive to earn your trust. We can assure that we will stand answerable and accountable to you.</h3>
            </div>
            <div style="border-right:2px solid #f15652;height: 245px;float:left;width:500px;">
                <h2 style="text-align:center;">Speed</h2>
                <div style="border:2px solid #f15652; max-width: 8%;margin-left: 46%;margin-right: 46%;"></div>
                <h3 style="line-height:140%;text-align:center;font-family: 'IBM Plex Sans', sans-serif;">We will make sure that the relief materials reach you on time. And your donations reach the souls in need as fast as possible!</h3>
            </div>
            <div style="height: 245px;float:left;width:500px;">
                <h2 style="text-align:center;">Transparent</h2>
                <div style="border:2px solid #f15652; max-width: 8%;margin-left: 46%;margin-right: 46%;"></div>
                <h3 style="line-height:140%;text-align:center;font-family: 'IBM Plex Sans', sans-serif;">All our functions are carried out with utter transparency. Starting from recieving donations from donors to makin them reach the victims, everything can be monitored.</h3>
            </div>
        </div>
    </div>

<div style="margin-left:45em;">
  <div style="height: 100px;float:left;">
      <h2 style="text-align:center;">Contact Us</h2>
      <div style="border:2px solid #f15652; max-width: 8%;margin-left: 46%;margin-right: 46%;"></div>
      <h3 style="line-height:140%; font-size:30px;text-align:center;font-family: 'IBM Plex Sans', sans-serif;">9898989898</h3>
      <h3 style="line-height:140%;font-size:30px;text-align:center;font-family: 'IBM Plex Sans', sans-serif;">rahat@rahat.com</h3>
  </div>

  <div style="height: 100px;">
<img src="/images/logo.png">
  </div>
</div>



    <div class="panel-group" id="accordion" style="width:700px; margin-top:75px;margin-left:40em;margin-top:120px;">
      <h1 style="text-align:center;font-family: 'IBM Plex Sans', sans-serif;"><b> FAQ </b></h1>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          <a style="text-decoration:none;" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
          How to donate?</a>
        </h3>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">We accept donations through cash and relief materials.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          <a style="text-decoration:none;" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
          How to request Relief Materials?</a>
        </h3>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">You can request relief materials through our online portal or through messages.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          <a style="text-decoration:none;" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
          How secure is the portal?</a>
        </h3>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">All the donation are safely directed to the corresponding NGOs.We will provide with you with an acknowledgement.</div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          <a style="text-decoration:none;" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
          What do we do?</a>
        </h3>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">We serve people during disasters.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          <a style="text-decoration:none;" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
          How to use the SMS feature?</a>
        </h3>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">You can message us the requirements along with the location to the provided number.</div>
      </div>
    </div>
  </div>

@endsection
