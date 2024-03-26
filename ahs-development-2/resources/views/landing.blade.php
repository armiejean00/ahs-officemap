<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{asset('css/index.css')}}">
      <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title>ApexHubSpot</title>
    @vite('resources/css/app.css')
</head>

<body class="font-semibold landing">
    {{-- NavBar --}}
    <nav class="relative container mx-auto p-4 text-center md:p-6">
        {{-- Flex Container --}}
        <div class="flex items-center justify-between">
            {{-- Logo --}}
            <a href="/" class="pt-2">
                <h3 class="font-bold text-2xl text-congressBlue lg:text-3xl" style="display:flex">
                    <img class="display: inline-block h-8 pb-2 lg:h-10 lg:pb-3" src="{{ asset('images/ahs-ape.svg') }}"
                        alt="A">pexHubSpot
                </h3>
            </a>

            {{-- Menu --}}
            <div class="hidden space-x-6 text-xl md:flex lg:text-2xl">
                <a href="#features" class="hover:text-cornflowerBlue" style="font-size:20px">About Hotdesking</a>
                <a href="#team" class="hover:text-cornflowerBlue"  style="font-size:20px">Our Team</a>
            </div>

            {{-- Button --}}
            <a href="/users/register"
                class="hidden p-3 px-6 pt-2 text-white bg-congressBlue hover:bg-cornflowerBlue rounded-full baseline text-lg md:block lg:text-xl">
                Get Started
            </a>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section id="hero">
        {{-- Flex Container --}}
        <div class="container flex flex-col-reverse item-center px-6 mx-auto mt-0 md:mt-10 space-y-0 md:flex-row">
            {{-- Left Item --}}
            <div class="flex flex-col mb-32 space-y-6 md:space-y-12 md:w-1/2">
                <h1 class="max-w-md text-4xl text-center md:text-5xl md:text-left">
                    Where <span class="text-darkOlive">Flexibility</span> Meets <span
                        class="text-mulberryWood">Productivity</span> in Every Seat
                </h1>
                <p class="max-w-sm mx-auto text-xl text-center text-mainBlue md:text-left">
                    Step into the future of work with hotdesking, where the landscape of productivity transforms.
                    Unleash your productivity, any seat, anytime.
                </p>
                <div class="flex justify-center md:justify-start">
                    
                </div>
            </div>

            {{-- Image --}}
            <div class="md:1/2">
                <img src="{{ asset('images/hero.png') }}" alt=" " class="h-72 mx-auto md:w-96 md:h-auto">
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section id="features" class="pt-7">
        {{-- Flex Container --}}
        <div class="container flex flex-col item-center px-4 mx-auto mt-7 space-y-0 md:flex-row">
            {{-- Definition --}}
            <div class="flex flex-col mb-32 space-y-7 md:w-1/2">
                <h1 class="max-w-md text-4xl text-center md:text-left">
                    What is Hotdesking?
                </h1>
                <p class="max-w-sm mx-auto text-xl text-center text-mainBlue md:text-left">
                    Hotdesking is a flexible office arrangement where employees do not have assigned desks, but instead
                    can choose from a pool of available workstations each day. In our system, employees can book a desk
                    through our online platform or mobile app.
                </p>
                 <img src="{{ asset('images/hotdesk.jpg') }}" alt=" " class="h-72 mx-auto md:w-96 md:h-auto">
            </div>
            {{-- Offer --}}
            <div class="flex flex-col mb-32 space-y-10 md:w-1/2">
                <h1 class="max-w-md text-4xl text-center md:text-left">
                    Service We Offer
                </h1>
                <p class="max-w-sm mx-auto text-xl text-center text-mainBlue md:text-left">
                    To reserve a hotdesk, employees can log into our system using their credentials and access the
                    hotdesking feature. They can view the availability of desks for a specific date and time, and select
                    a desk that suits their requirements. Once they have made a reservation, the desk will be reserved
                    under their name for the designated time slot.

                </p>
                
                <p class="max-w-sm mx-auto text-xl text-center text-mainBlue md:text-left">
                    In our hotdesking system, employees can use a desk for the designated time slot they have reserved.
                    The time is full day, depending on their preference and
                    availability.
                </p>
           
            </div>
        </div>
    </section>

    <section class="team" id="team">
        <div class="heading">
            <h2>Our TEAM</h2>
        </div>
        <div class="customers-container">
            <div class="box">
                <div class="stars">
                 

                    <a href="https://github.com/zafiedvwn" target="_blank"><i class='bx bxl-github'></i></a>
                    
                </div>
              
                <p>Project Manager</p>
                <h2>Aurora Zafra Bactol</h2>
               <img src="{{ asset('images/aurora.jpg') }}" alt="" style="margin-left:130px">
            </div>
            <div class="box">
                 <div class="stars">
                    <a href="https://www.facebook.com/HMR36" target="_blank"><i class='bx bxl-facebook'></i></a>

                    <a href="https://github.com/Harry-Reyes" target="_blank"><i class='bx bxl-github'></i></a>
                     <a href="https://gitlab.com/Harry-Reyes" target="_blank"><i class='bx bxl-gitlab'></i></a>
                   
                </div>
                
                <p>Lead Developer</p>
                <h2>Harry Reyes</h2>
                <img src="{{ asset('images/harry.gif') }}" alt="" style="margin-left:130px">
            </div>
            <div class="box">
                 <div class="stars">
                    <a href="https://www.facebook.com/jshallador19" target="_blank"><i class='bx bxl-facebook'></i></a>

                    <a href="https://github.com/Josu119" target="_blank"><i class='bx bxl-github'></i></a>
                  
                </div>
              
                <p>Co-Developer</p>
                <h2>Joshua Allador</h2>
                <img src="{{ asset('images/joshua.png') }}" alt="" style="margin-left:130px">
            </div>
            <div class="box">
                 <div class="stars">
                    <a href="https://www.facebook.com/armie.miranda18/" target="_blank"><i class='bx bxl-facebook'></i></a>

                    <a href="https://github.com/armiejean00" target="_blank"><i class='bx bxl-github'></i></a>
                     <a href="https://www.instagram.com/_t3rriee/" target="_blank"><i class='bx bxl-instagram'></i></a>
                </div>
               
                <p>UI/UX Design Lead</p>
                <h2>Armie Jean Miranda</h2>
                <img src="{{ asset('images/armie.png') }}" alt="" style="margin-left:130px">
            </div>
            <div class="box">
                 <div class="stars">
                    <a href="https://www.facebook.com/Paula.Soleil.Jabinal" target="_blank"><i class='bx bxl-facebook'></i></a>

                    <a href="https://github.com/Leisol" target="_blank"><i class='bx bxl-github'></i></a>
                     <a href="https://www.instagram.com/p.soleil.s.j/" target="_blank"><i class='bx bxl-instagram'></i></a>
                </div>
                
                <p>Co-Developer</p>
                <h2>Paula Soleil Jabinal</h2>
                <img src="{{ asset('images/paula.jpg') }}" alt="" style="margin-left:130px">
            </div>
            <div class="box">
                 <div class="stars">
                    <a href="https://www.facebook.com/jossamarie.advincula" target="_blank"><i class='bx bxl-facebook'></i></a>

             
                     <a href="https://www.instagram.com/josh_mariahh/" target="_blank"><i class='bx bxl-instagram'></i></a>
                </div>
               
                <p>Project Coordinator</p>
                <h2>Jossa Marie Advincula</h2>
                <img src="{{ asset('images/jossa.jpg') }}" alt="" style="margin-left:130px">
            </div>
        </div>
    </section>


     <section class="footer">
        <div class="footer-box">
            <h3>ApexHubSpot</h3>
            <p>If you have any concern, contact use via:</p>
            <div class="social">
              
            </div>
<br>
            
        </div>


        <div class="footer-box">
            <h3>Contact</h3>
            <div class="contact">
                
                
                <span><i class='bx bxs-envelope'></i>apexhubspot@gmail.com</span>
             

            </div>
        </div>
    </section>

    <div class="copyright">
        <p>&#169; AHS 2024</p>
    </div>



     <script src="{{asset('javascript/index.js')}}"></script>
</body>

</html>
