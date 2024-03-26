<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In - AHS</title>
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
            <a href="/users/register"
                class="p-3 px-6 pt-2 text-white bg-congressBlue hover:bg-cornflowerBlue rounded-full baseline text-lg lg:text-xl">
                Create an Account
            </a>
        </div>
    </nav>

    <section>
        <div class="container mx-auto w-auto rounded-md text-center md:bg-slate-300 md:shadow-xl md:p-4 md:w-96">
            <h2 class="text-base uppercase">
                sign in
            </h2>
            <form method="POST" action="/sign_in">
                @csrf
                <label for="username">
                    <p class="mt-3 md:text-left">Username</p>
                </label>
                <input type="text" name="username" placeholder="Username" value="{{ old('username') }}"
                class="bg-slate-300 p-2 w-64 rounded-md focus:border-2 focus:border-black md:bg-white md:w-80">
                @error('username')
                <p class="text-red-700 text-sm mt-1 md:text-left">{{ $message }}</p>
                @enderror

                <label for="username">
                    <p class="mt-3 md:text-left">Password</p>
                </label>
                <input type="password" name="password" placeholder="Password" value="{{ old('password') }}"
                class="bg-slate-300 p-2 w-64 rounded-md focus:border-2 focus:border-black md:bg-white md:w-80">
                @error('password')
                <p class="text-red-700 text-sm mt-1 md:text-left">{{ $message }}</p>
                @enderror

                <input type="submit" name="submit" value="ENTER"
                    class="p-2 mt-3 w-64 rounded-md text-white bg-congressBlue hover:cursor-pointer hover:bg-cornflowerBlue md:w-80">
            </form>
            <p class="mt-2">
                Don't have an account?
                <a href="/users/register" class="underline text-congressBlue hover:text-cornflowerBlue">Create an Account</a>
            </p>
        </div>
    </section>
</body>

</html>
