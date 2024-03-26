<x-layout :cssPaths="$cssPaths" :title="$title">

    <!-- SIDEBAR -->
    <section id="sidebar" class="hide">
        <span class="brand opacity-0">
            <img src="{{ asset('images/main/logo.png') }}" alt="" style="width:60px">
        </span>
        <ul class="side-menu top">
             <li>
    <a href="/dashboard">
        <?php if (auth()->user()->role == 'user'): ?>
            <i class='bx bxs-home bx-sm'></i>
            <span class="text">Home</span>
        <?php else: ?>
            <i class='bx bxs-dashboard bx-sm'></i>
            <span class="text">Dashboard</span>
        <?php endif; ?>
    </a>
</li>
                @unless (auth()->user()->role == 'user')
            <li>
                <a href="/bookings">
                    <i class='bx bxs-book-alt bx-sm'></i>
                    <span class="text">Booking</span>
                </a>
            </li>
            @endunless
            <li>
                <a href="/office_map">
                    <i class='bx bxs-map bx-sm'></i>
                    <span class="text">Office Map</span>
                </a>
            </li>
         @unless (auth()->user()->role == 'user' || auth()->user()->role == 'office_manager')
            <li>
                <a href="/users">
                    <i class='bx bxs-group bx-sm'></i>
                    <span class="text">Manage Users</span>
                </a>
            </li>
            @endunless

            <li>
                <a href="/desks/available">
                    <i class='bx bx-desktop bx-sm'></i>
                    <span class="text">Manage Desks</span>
                </a>
            </li>
            {{-- <li>
                <a href="/roles">
                    <i class='bx bx-user-pin bx-sm'></i>
                    <span class="text">Manage Roles</span>
                </a>
            </li> --}}
        </ul>
        <ul class="side-menu">
            <li>
                <a href="/faqs">
                    <i class='bx bx-question-mark bx-sm'></i>
                    <span class="text">FAQs</span>
                </a>
            </li>
            <li class="active">
                <a href="/guide">
                    <i class='bx bxs-component bx-sm'></i>
                    <span class="text">User Guide</span>
                </a>
            </li>
            <li>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="logout">
                        <i class='bx bxs-log-out-circle bx-sm'></i>
                        <span class="text">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu bx-sm'></i>
            <h1 class="font-bold text-md text-congressBlue lg:text-xl flex">
                <img class="inline-block h-7 pb-2 lg:h-9 lg:pb-3" src="{{ asset('images/ahs-ape.svg') }}"
                    alt="A">pexHubSpot
            </h1>

            <form action="#">
                <div class="form-input">

                </div>
            </form>

            {{-- <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a> --}}
            @auth
             <a href="/profile" class="profile" style="background-color:black;padding:5px 20px;color:white;border-radius:10px;border:1px solid black;">
                {{ auth()->user()->username }}
            </a>
            @else
            <a href="/profile" class="profile font-bold">Profile</a>
            @endauth
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <section>
            <div class="background-section">
                <div class="faqs-section">
                    <h2>User Guide</h2>

                    <div class="faq-item" onclick="toggleAnswer(this)">
                        <h3>Creating an Account:</h3>
                        <p>To access the hotdesk booking system, you need to create a user account. Follow these
                            steps:<br>
                             Open the website and click on the "Get Started"<br>
                                <img src="{{ asset('images/landing.png') }}" alt="" style="height:300px"> <br>
                            a. click on the  "Register"<br>
                            b. Fill out the required information, such as your username, firstname, lastname, email address, and password.<br>
                            c. Click on the "Join" button to complete the registration process. <br>
                              <img src="{{ asset('images/create.png') }}" alt="" style="height:300px"> <br>
                            d. After you complete the registration, you can see that it is hold at the moment <br>
                              <img src="{{ asset('images/hold.png') }}" alt="" style="height:300px"> </p>
                    </div>

                    <div class="faq-item" onclick="toggleAnswer(this)">
                        <h3>Logging In:</h3>
                        <p>Once you have registered, follow these steps to log in:<br>
                            a. Visit the website's homepage.<br>
                            b. Click on the "Login" option.<br>
                            c. Enter your registered email address and password.<br>
                            d. Click on the "Enter" button. <br>
                              <img src="{{ asset('images/login.png') }}" alt="" style="height:300px">
                        </p>
                    </div>

                    <div class="faq-item" onclick="toggleAnswer(this)">
                        <h3>How to Book?:</h3>
                        <p>Booking a hotdesk, you can use the following steps:<br>
                            a. On the website's home, Click "Book Now".<br>
                              <img src="{{ asset('images/home.png') }}" alt="" style="height:300px"> <br>
                         
                            b. Specify the desired date, click "Search".<br>
                            c. A list of available desk will be shown, choose your desk! then click "Book Now" <br>
                              <img src="{{ asset('images/booking.png') }}" alt="" style="height:300px"></p>
                    </div>
                </div>
            </div>
        </section>
    </section>

</x-layout>
