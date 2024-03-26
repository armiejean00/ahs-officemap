<x-layout :cssPaths="$cssPaths" :title="$title">

    <section id="sidebar" class="hide">
        <span class="brand opacity-0">

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
            <li>
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


            @auth
                <a href="/profile" class="profile"
                    style="background-color:black;padding:5px 20px;color:white;border-radius:10px;border:1px solid black;">
                    {{ auth()->user()->username }}
                </a>
            @else
                <a href="/profile" class="profile font-bold">Profile</a>
            @endauth
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    @unless (auth()->user()->role == 'user' || auth()->user()->role == 'office_manager')
                        <img src="{{ asset('images/admin.jpg') }}" alt="" style="height:100px;border-radius:50px">
                    @endunless

                    @unless (auth()->user()->role == 'admin' || auth()->user()->role == 'office_manager')
                        <img src="{{ asset('images/dummy.png') }}" alt="" style="height:100px;border-radius:50px">
                    @endunless

                    @unless (auth()->user()->role == 'admin' || auth()->user()->role == 'user')
                        <img src="{{ asset('images/manager.jpg') }}" alt="" style="height:100px;border-radius:50px">
                    @endunless


                    <div class="profile">


                        <div class="user">
                            @auth
                                @php
                                    if (auth()->user()->role == 'admin') {
                                        $role = 'Administrator';
                                    } elseif (auth()->user()->role == 'office_manager') {
                                        $role = 'Office Manager';
                                    } elseif (auth()->user()->role == 'user') {
                                        $role = 'User';
                                    }
                                @endphp
                                <p style="font-size: 30px;"> {{ auth()->user()->first_name }}
                                    {{ auth()->user()->last_name }}</p>
                                <p style="font-size: 20px; color: rgb(29, 58, 91);">{{ $role }}</p>
                            @else
                                <p style="font-size: 30px;">Hello, user!</p>
                                <p style="font-size: 20px; color: rgb(29, 58, 91);">Guest</p>
                            @endauth
                        </div>
                    </div>
                    <div style="border: 1px solid #3a425f;" class="mt-2"></div>
                    @auth
                        <p>{{ auth()->user()->email }}</p>
                    @endauth
                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    {{ $bookings->links() }}
                    <div class="head">
                        <table>
                            <tr>
                                <th>Desk Number</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($bookings as $booking)
                                <tr>
                                    @php
                                        $today = Carbon\Carbon::now()->toDateString();
                                        $book_date = \App\Models\AvailableDesk::find($booking->available_desk_id)->date;
                                    @endphp
                                    <td>
                                        Desk {{ \App\Models\Desk::find($booking->desk_id)->desk_number }}
                                    </td>
                                    <td>
                                        {{ $book_date }}
                                    </td>
                                    <td>
                                        @if ($today == $book_date)
                                        <span class="status bg-orange-400 !text-black">On Going</span>
                                        @else
                                        <span class="status bg-emerald-400 !text-black">Accepted</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form method="post" action="/profile/bookings/{{ $booking->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="status bg-dangerRed !text-white">Cancel</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </table>

                    </div>


                </div>

            </div>

        </main>

    </section>

    <script src="{{ asset('js/booking.js') }}"></script>
</x-layout>
