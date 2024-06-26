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

            <li class="active">
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
                    <h1>Available Desks</h1>
                </div>
            </div>
            @unless (auth()->user()->role == 'user')
                <a href="/desks" class="px-3 py-1 text-white text-center leading-10 bg-orange-700 rounded-full">Manage
                    Desks</a>
            @endunless
            <div class="table-data">
                <div class="order">
                    <div>
                        @php
                            $today = Carbon\Carbon::now()->toDateString();
                            $future_day_span = 13;
                            $end = Carbon\Carbon::parse($today)
                                ->addDays($future_day_span)
                                ->toDateString();
                        @endphp
                        <form action="/desks/available/search">
                            <label for="date" class="font-bold">Date:</label>
                            <input type="date" name="date" value="{{ $today }}" min="{{ $today }}"
                                max="{{ $end }}" class="ml-2 rounded-xl border-2 border-black px-2">
                            <button type="submit"
                                class="ml-2 h-7 w-20 text-white text-center leading-5 bg-congressBlue rounded-full">
                                Search
                            </button>
                        </form>
                    </div>
                    <div>
                        {{ $available_desks->links() }}
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Desk</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @unless (count($available_desks) == 0)
                                @foreach ($available_desks as $available_desk)
                                    <tr>
                                        <td>
                                            Desk {{ \App\Models\Desk::find($available_desk->desk_id)->desk_number }}
                                        </td>
                                        <td>
                                            {{ $available_desk->date }}
                                        </td>
                                        <td>
                                            @unless (\App\Models\Desk::find($available_desk->desk_id)->is_out_of_order == 1)
                                            <form method="POST"
                                                action="/book/{{ $available_desk->id }}"
                                                style="display: inline-block">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="date" value="{{ $available_desk->date }}">
                                                <button class="status bg-congressBlue !text-white">BOOK NOW</button>
                                            </form>
                                            @else
                                            <span class="status bg-red-400 !text-black">Disabled</span>
                                            @endunless
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>No available desk found.</td>
                                </tr>
                            @endunless
                            {{-- @unless (count($desks) == 0)
                                @foreach ($desks as $desk)
                                <x-desk_row :desk="$desk"/>
                                @endforeach

                            @endunless --}}
                        </tbody>
                    </table>
                </div>
            </div>

        </main>

    </section>

</x-layout>
