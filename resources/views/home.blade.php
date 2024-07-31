<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOUSE OF POWER</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900" id="all">

     <div class="navbar">
        @livewire('navbar')
     </div>

     <div class="container2">2024<br><br> OUR YEAR OF TESTIMONIES</div>

     <div class="church">
        <div class="come">
        <div class="community">
           <h1>Our Community </h1>
            <div class="we">We are committed and responsible disciples of Jesus Christ</div>
        </div>
        </div>

        <div class="mission">
        <div class="community">
           <h1>Church Mission </h1>
            <div class="we">We are the heart that embrace all with love.</div>
        </div>
        </div>

        <div class="join">
        <div class="community">
           <h1>Join an Expression </h1>
            <div class="we">We are an International Light House.</div>
        </div>
        </div>


        <div class="believe">
        <div class="community">
           <h1>Church Beliefs</h1>
            <div class="we">We are committed to the maturity of the Saints.</div>
        </div>
        </div>
     </div>



    <div class="meet">
    <div class="pic"><img class="img" src="{{ asset('storage/images/2021_12_17_22_09_IMG_7279.JPG') }}" alt="Your Image"></div>

    <div>
       <i>Welcome to House of Power International Christian Center</i>
       <div class="lead">OUR LEAD PASTOR</div>
       <div class="pastor">
       Pator Femi Ige is the Lead Pastor of House Of Power International Christian Center - A church <br>
       beyond a church, an unprecedented revolution, a movement breaking limits, ravaging <br>
       long standing systems and structures crossing lines and taking the world by storm.  <br>
       House Of Power International Christian Center has spread over USA, Canada <br>
       </div>

    </div>

    </div>




    <div class="footer">
        <div>
         <div class="house">
            House Of Power is made up of people from many 
            ethnic backgrounds and nationalities with strong passion 
            to serve God, love one another, saturating our 
            environment and the world with tangible proofs that 
            What God Cannot Do Does Not Exist!</div>
        </div>

        <div class="socials"></div>
    </div>

</div> 
</body>
</html>