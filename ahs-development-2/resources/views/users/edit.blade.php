<x-layout :cssPaths="$cssPaths" :title="$title">

    <!-- SIDEBAR -->
    <section id="sidebar" class="hide">
        <span class="brand opacity-0">
            <img src="{{ asset('images/main/logo.png') }}" alt="" style="width:60px">
        </span>
        <ul class="side-menu top">
            <li>
                <a href="/dashboard">
                    <i class='bx bxs-dashboard bx-sm'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/bookings">
                    <i class='bx bxs-book-alt bx-sm'></i>
                    <span class="text">Booking</span>
                </a>
            </li>
            <li>
                <a href="/office_map">
                    <i class='bx bxs-map bx-sm'></i>
                    <span class="text">Office Map</span>
                </a>
            </li>
            <li>
                <a href="/users">
                    <i class='bx bxs-group bx-sm'></i>
                    <span class="text">Manage Users</span>
                </a>
            </li>

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
                    <h1>Edit {{ $user->username }}'s Profile</h1>
                </div>
            </div>

            <form method="POST" action="/users/{{ $user->id }}/edit">
                @csrf {{-- Prevents cross-site scripting attacks --}}
                @method('PUT')
                <div class="table-data">
                    <div class="todo">
                        <div class="head">
                        </div>
                        <ul class="todo-list">
                            <p class="font-bold">Username</p>
                            <input type="text" name="username" placeholder="Username" style="padding:10px;border-radius: 10px;width:80%" value="{{ $user->username }}" />
                            @error('username')
                                <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </ul>
                        <ul class="todo-list">
                            <p class="font-bold">First Name</p>
                            <input type="text" name="first_name" placeholder="First Name" style="padding:10px;border-radius: 10px;width:80%;margin-top: 10px;" value="{{ $user->first_name }}" />
                            @error('first_name')
                                <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </ul>
                        <ul class="todo-list">
                            <p class="font-bold">Last Name</p>
                            <input type="text" name="last_name" placeholder="Last Name" style="padding:10px;border-radius: 10px;width:80%;margin-top: 10px;" value="{{ $user->last_name }}" />
                            @error('last_name')
                                <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </ul>
                        @unless ($user->role === 'admin')
                        <ul class="todo-list mb-3">
                            <p class="font-bold">Role:</p>
                            <select name="role" class="p-1 border-2 rounded-2xl active:rounded-2xl">
                                @if ($user->role === 'user')
                                <option value="user" selected>User</option>
                                <option value="office_manager">Office Manager</option>
                                @elseif ($user->role === 'office_manager')
                                <option value="user">User</option>
                                <option value="office_manager" selected>Office Manager</option>
                                @endif
                            </select>
                            @error('role')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </ul>
                        {{-- <ul class="todo-list mb-3">
                            <p class="font-bold">Role</p>
                            @if ($user->role === 'user')
                            <input type="radio" name="role" value="user" id="user" checked required>
                            <label for="user">User</label><br>
                            <input type="radio" name="role" value="office_manager" id="office_manager" required>
                            <label for="office_manager">Office Manager</label>
                            @elseif ($user->role === 'office_manager')
                            <input type="radio" name="role" value="user" id="user" required>
                            <label for="user">User</label><br>
                            <input type="radio" name="role" value="office_manager" id="office_manager" checked required>
                            <label for="office_manager">Office Manager</label>
                            @endif
                            @error('role')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </ul> --}}
                        @endunless
                        {{-- <ul class="todo-list">
                            <input type="text" name="email" placeholder="Email" style="padding:10px;border-radius: 10px;width:80%;margin-top: 10px;" value="{{ $user->email }}" disabled />
                            @error('email')
                                <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </ul>
                        <ul class="todo-list">
                            <input type="password" name="password" placeholder="Password" style="padding:10px;border-radius: 10px;width:80%;margin-top: 10px;" value="{{ $user->password }}" disabled />
                            @error('password')
                                <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </ul> --}}
                        <ul class="todo-list" style="margin-top: 10px;">
                            <button type="submit" class="px-3 py-1 bg-orange-700 text-white rounded-xl">Update</button>
                            <a href="/users" class="px-3 py-1 bg-gray-300 text-black rounded-xl">Cancel</a>
                            {{-- <button class="px-3 py-1 bg-red-700 text-white rounded-xl">Clear</button> --}}
                        </ul>
                    </div>
                </div>
            </form>

        </main>

    </section>

</x-layout>
