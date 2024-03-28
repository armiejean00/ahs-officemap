<x-layout :cssPaths="$cssPaths" :title="$title">

    <!-- SIDEBAR -->
    <section id="sidebar" class="hide">
        <span class="brand opacity-0">
            <img src="{{ asset('images/main/logo.png') }}" alt="" style="width:60px">
        </span>
        <ul class="side-menu top">
            <li >
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

        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Create Desk</h1>
                </div>
            </div>

            <form method="POST" action="/desks">
                @csrf {{-- Prevents cross-site scripting attacks --}}
                <div class="table-data">
                    <div class="todo">
                        <div class="head">
                        </div>
                        <ul class="todo-list mb-3">
                            <p class="font-bold" style="display: inline">Desk Number:</p><br>
                            <select name="desk_number" class="p-1 border-2 rounded-2xl active:rounded-2xl">
                                @for ($i = 1; $i <= 56; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            @error('desk_number')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </ul>
                        <ul class="todo-list mb-3">
                            <p class="font-bold">Accessible?</p>
                            <input type="radio" name="is_out_of_order" value="0" id="out_of_order" required>
                            <label for="out_of_order">Yes</label><br>
                            <input type="radio" name="is_out_of_order" value="1" id="available" required>
                            <label for="available">No</label>
                            @error('is_out_of_order')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </ul>
                        <ul class="todo-list" style="margin-top: 10px;">
                            <button type="submit" class="px-3 py-1 bg-darkOlive text-white rounded-xl">Add Desk</button>
                            {{-- <button class="px-3 py-1 bg-red-700 text-white rounded-xl">Clear</button> --}}
                        </ul>
                    </div>
                </div>
            </form>

        </main>

    </section>

</x-layout>
