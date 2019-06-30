@extends('layout.master')
@section('content')



<div class="grids">

<a href="/affected">
       <div class="card-one">
           <div class="card">
               <div class="card__side card__side--front" id="front-1">
                   <div class="text-box">

                       <h1 class="text-box-middle">Affected Areas</h1>

                   </div>
               </div>
               <div class="card__side card__side--back" id="back-1">
                   <div class="text-box">
                       <h1 class="text-box-middle">Affected Areas</h1>
                   </div>
               </div>
           </div>
       </div>
     </a>

     <a href="/donors">
       <div class="card-two">
           <div class="card">
               <div class="card__side card__side--front" id="front-2">
                   <div class="text-box">
                       <h1 class="text-box-middle">Our Donors</h1>
                   </div>
               </div>
               <div class="card__side card__side--back" id="back-2">
                   <div class="text-box">
                       <h1 class="text-box-middle">Our Donors</h1>
                   </div>
               </div>
           </div>
       </div>
     </a>

       <a href="/donate">
       <div class="card-three">
           <div class="card">
               <div class="card__side card__side--front" id="front-3">
                   <div class="text-box">
                       <h3 class="text-box-middle">Become a Donor</h3>
                   </div>
               </div>
               <div class="card__side card__side--back" id="back-3">
                   <div class="text-box">
                       <h3 class="text-box-middle">Become a Donor</h3>
                   </div>
               </div>
           </div>
       </div>
     </a>

       <a href="/donations">
       <div class="card-four">
           <div class="card">
               <div class="card__side card__side--front" id="front-4">
                   <div class="text-box">
                       <h1 class="text-box-middle">Donations</h1>
                   </div>
               </div>
               <div class="card__side card__side--back" id="back-4">
                   <div class="text-box">
                       <h1 class="text-box-middle">Donations</h1>
                   </div>
               </div>
           </div>
       </div>
     </a>

       <a href="/request">
       <div class="card-five">
           <div class="card">
               <div class="card__side card__side--front" id="front-5">
                   <div class="text-box">
                       <h1 class="text-box-middle">Request Relief</h1>
                   </div>
               </div>
               <div class="card__side card__side--back" id="back-5">
                   <div class="text-box">
                       <h1 class="text-box-middle">Request Relief</h1>
                   </div>
               </div>
           </div>
       </div>
     </a>

     <a href="/about">
     <div class="card-six">
         <div class="card">
             <div class="card__side card__side--front" id="front-6">
                 <div class="text-box">
                     <h1 class="text-box-middle">About Us</h1>
                 </div>
             </div>
             <div class="card__side card__side--back" id="back-6">
                 <div class="text-box">
                     <h1 class="text-box-middle">About Us</h1>
                 </div>
             </div>
         </div>
     </div>
   </a>

   </div>
</body>

<script>
    var flipCheck = 0;

    function rotateCards() {
        if (flipCheck === 0) {

            document.getElementById('front-2').classList.add('showGreen');
            document.getElementById('back-2').classList.add('showRed');

            document.getElementById('front-1').classList.add('showGreen');
            document.getElementById('back-1').classList.add('showRed');

            flipCheck = 1;


            setTimeout(function () {
                document.getElementById('front-4').classList.add('showGreen');
                document.getElementById('back-4').classList.add('showRed');

                document.getElementById('front-3').classList.add('showGreen');
                document.getElementById('back-3').classList.add('showRed');


                document.getElementById('front-5').classList.add('showGreen');
                document.getElementById('back-5').classList.add('showRed');

                setTimeout(function () {
                    document.getElementById('front-6').classList.add('showGreen');
                    document.getElementById('back-6').classList.add('showRed');
                }, 500);

            }, 500);

        } else {

            document.getElementById('front-2').classList.remove('showGreen');
            document.getElementById('back-2').classList.remove('showRed');

            document.getElementById('front-1').classList.remove('showGreen');
            document.getElementById('back-1').classList.remove('showRed');

            flipCheck = 0;

            setTimeout(function () {
                document.getElementById('front-3').classList.remove('showGreen');
                document.getElementById('back-3').classList.remove('showRed');

                document.getElementById('front-4').classList.remove('showGreen');
                document.getElementById('back-4').classList.remove('showRed');

                document.getElementById('front-5').classList.remove('showGreen');
                document.getElementById('back-5').classList.remove('showRed');

                setTimeout(function () {
                    document.getElementById('front-6').classList.remove('showGreen');
                    document.getElementById('back-6').classList.remove('showRed');
                }, 500);
            }, 500);
        }
    }

    setInterval(rotateCards, 3000); // Time in milliseconds
</script>

@endsection
