<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create an Account - AHS</title>
    @vite('resources/css/app.css')
</head>

<body class="font-semibold">
    {{-- NavBar --}}
    <nav class="relative container mx-auto p-4 text-center md:p-6">
        {{-- Flex Container --}}
        <div class="flex items-center justify-between">
            {{-- Logo --}}
            <a href="/" class="pt-2">
                <h1 class="font-bold text-2xl text-congressBlue lg:text-3xl">
                    <img class="display: inline-block h-8 pb-2 lg:h-10 lg:pb-3" src="{{ asset('images/ahs-ape.svg') }}"
                        alt="A">pexHubSpot
                </h1>
            </a>

            {{-- Button --}}
            <a href="/users/sign_in"
                class="p-3 px-6 pt-2 text-white bg-congressBlue hover:bg-cornflowerBlue rounded-full baseline text-lg lg:text-xl">
                Sign In
            </a>
        </div>
    </nav>

    <section>
        <div class="container mx-auto w-auto mb-5 rounded-md text-center md:bg-slate-300 md:shadow-xl md:p-4 md:w-96">
            <h2 class="text-base uppercase">
                create an account
            </h2>
            <form method="POST" action="/register">
                @csrf
                <label for="username">
                    <p class="mt-3 md:text-left">Username</p>
                </label>
                <input type="text" name="username" placeholder="Username" value="{{ old('username') }}"
                class="bg-slate-300 p-2 w-64 rounded-md focus:border-2 focus:border-black md:bg-white md:w-80">
                @error('username')
                <p class="text-red-700 text-sm mt-1 md:text-left">{{ $message }}</p>
                @enderror

                <label for="first_name">
                    <p class="mt-3 md:text-left">First Name</p>
                </label>
                <input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}"
                class="bg-slate-300 p-2 w-64 rounded-md focus:border-2 focus:border-black md:bg-white md:w-80"><br>
                @error('first_name')
                <p class="text-red-700 text-sm mt-1 md:text-left">{{ $message }}</p>
                @enderror

                <label for="last_name">
                    <p class="mt-3 md:text-left">Last Name</p>
                </label>
                <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}"
                class="bg-slate-300 p-2 w-64 rounded-md focus:border-2 focus:border-black md:bg-white md:w-80"><br>
                @error('last_name')
                <p class="text-red-700 text-sm mt-1 md:text-left">{{ $message }}</p>
                @enderror

                <label for="email">
                    <p class="mt-3 md:text-left">Email</p>
                </label>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                class="bg-slate-300 p-2 w-64 rounded-md focus:border-2 focus:border-black md:bg-white md:w-80"><br>
                @error('email')
                <p class="text-red-700 text-sm mt-1 md:text-left">{{ $message }}</p>
                @enderror

                <label for="password">
                    <p class="mt-3 md:text-left">Password</p>
                </label>
                <input type="password" name="password" placeholder="Password"  value="{{ old('password') }}"
                class="bg-slate-300 p-2 w-64 rounded-md focus:border-2 focus:border-black md:bg-white md:w-80"><br>
                @error('password')
                <p class="text-red-700 text-sm mt-1 md:text-left">{{ $message }}</p>
                @enderror

                <label for="password_confirmation">
                    <p class="mt-3 md:text-left">Confirm Password</p>
                </label>
                <input type="password" name="password_confirmation" placeholder="Confirm Password"
                class="bg-slate-300 p-2 w-64 rounded-md focus:border-2 focus:border-black md:bg-white md:w-80"><br>

                <input type="submit" name="submit" value="JOIN"
                    class="p-2 mt-5 w-64 rounded-md text-white bg-congressBlue hover:cursor-pointer hover:bg-cornflowerBlue md:w-80">
            </form>
            <p class="mt-2">
                Already have an account?
                <a href="/users/sign_in" class="underline text-congressBlue hover:text-cornflowerBlue">Sign In</a>
            </p>
        </div>
    </section>
</body>

</html>
