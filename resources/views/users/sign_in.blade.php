<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create an Account - AHS</title>
    {{-- @vite('resources/css/reg.css') --}}
      <link rel="stylesheet"  href="{{asset('css/index.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
</head>

<body class="font-semibold">
    {{-- NavBar --}}
    
<div style="width: 50%; float:left;height:100vh">

 <a href="#" class="logo">
              <img src="{{ asset('images/ahs-logo.svg') }}" alt="">
        </a>
        
       <p class="center">Unleash Your Productivity <br> Any Seat, Anytime.</p>
        <img src="{{ asset('images/login.jpeg') }}" alt="" style="height:100vh;opacity:0.8">
       
     


</div>

<div style="width: 50%; float:right;background-color: #37465B;height:100vh">
 <section > 
      
        <div> 
          
<div class=welcome>
            <h1 class="text-base uppercase" style="color:#5AFFE7;font-size:35px;">
              WELCOME BACK!
            </h1>
            <p style="margin-left:17px">Sign in Here!</p>

</div>



            <form method="POST" action="/sign_in" class="formreg">
                @csrf
              
                <div style="font-size:8px; margin-bottom:10px">
                        <div style="position:relative;">
                            <i class="fa fa-user-circle-o" style="position:absolute;top:11px;left:10px;color:#6b6767;font-size:13px"></i>
                            <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" style="padding:8px;border-radius:10px;border:none;width:450px;padding-left:28px;">
                        </div>
                        @error('username')
                        <p style="color:rgb(233, 54, 54);font-size:12px">{{ $message }}</p>
                        @enderror
                    </div>
               

             
                <div style="font-size:8px;margin-bottom:10px"> 
 <div style="position:relative;">
                            <i class="fa fa-lock" style="position:absolute;top:11px;left:10px;color:#6b6767;font-size:15px"></i>
                <input type="password" name="password" placeholder="Password"  value="{{ old('password') }}"
               style="padding:8px;border-radius:10px;border:none;width:450px;padding-left:28px;"><br>
</div>
                @error('password')
                <p style="color:rgb(233, 54, 54);font-size:12px">{{ $message }}</p>
                @enderror

                </div>


                <input type="submit" name="submit" value="ENTER"
                   style="background-color: #212B38;cursor:pointer;padding:8px 100px;color:white;font-size:12px;border-radius:10px">
            </form>


            <p class="mt-2" style="color:white;font-size:12px;margin-left:10px;margin-top:10px">
                Don't have an account?
                <a href="/users/register" style="color:#5AFFE7;">Create an Account</a>
            </p>



        </div>
    </section>
</body>

</html>
