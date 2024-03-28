

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
    
</head>


<body>
    <header>
        <a href="#" class="logolanding">
              <img src="{{ asset('images/ahs-logo.svg') }}" alt="">
        </a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <ul class="navbar">
            <li> <a href="#home">Home</a></li>
            <li> <a href="#about">FAQ's</a></li>
            
            <li> <a href="#userguide">User Guide</a></li>
            <li> <a href="#team">Our Team</a></li>
        </ul>
        <div class="header-icon" style="background-color:#08C6AB;border-radius:5px">
            <a href="/users/sign_in" style="font-size: 15px;margin:5px;color:black;">Get Started</a>



        </div>



    </header>

    <section class="home" id="home">
        <div class="home-text">
            <h1>Where Flexibility Meets Productivity<br>
                in Every Seat</h1>
            <p>Step into the future of work with Hotdesk, where the landscape of productivity transforms.<br>
                Unleash Your Productivity, Any Seat, Anytime.</p>

        </div>

    </section>

 <section class="about" id="about">
        <div class="about-img">
             <img src="{{ asset('images/hotdesks.jpg') }}" alt="">
             <img src="{{ asset('images/faqs.jpg') }}" alt="">
        </div>
        <div class="about-text">
            <h4>What is hotdesking and how does it work in our system?</h4>
            <p>Hotdesking is a flexible office arrangement where employees do not have assigned desks, but instead can choose from a pool of available workstations each day. In our system, employees can book a desk through our online platform or mobile app</p>
           <h4>How do I reserve a hotdesk in our system?</h4>
<p>To reserve a hotdesk, employees can log into our system using their credentials and access the hotdesking feature. They can view the availability of desks for a specific date, and select a desk that suits their requirements. Once they have made a reservation, the desk will be reserved under their name for the designated time slot.</p>
           <h4>Can I reserve a hotdesk in advance?</h4>
<p>Yes, our system allows employees to reserve hotdesks in advance. They can book a desk for a future date and time, ensuring they have a workspace available when they need it. However, it is important to note that reservations are subject to availability, so it is advisable to book in advance to secure a desired desk.</p>
           <h4>Can I choose the same hotdesk every day?</h4>
<p>While our hotdesking system offers flexibility and the ability to choose from available desks, it does not guarantee the same desk every day. The availability of desks and the overall concept of hotdesking is based on a first-come, first-served basis. Employees can choose any available desk each day, depending on their needs and preferences.</p>
          
        </div>

    </section>

    <section class="about" id="userguide">
       
        <div class="about-text">
            <h2>User Guide</h2>

            <h4>Creating an Account:</h4>
<p>
    To access the hotdesk booking system, you need to create a user account. Follow these steps: <br>
    a. Open the website and click on the "Get Started" option. <br>
b. Open the website and click on the "Register" option. <br>
c. Fill out the required information, such as your firstname,lastname, email address, and password. <br>
d. Click on the "Create Account" button to complete the registration process.
</p>      

<h4>Logging in:</h4>
<p>
  Once you have registered, follow these steps to log in: <br>
a. Visit the website's homepage. <br>
b. Click on the "Get Started". <br>
c. Click on the "Login" option. <br>
d. Enter your registered email address and password. <br>
e. Click on the "Login" button.
</p>     

<h4>How to Book a Desk:</h4>
<p>
 Booking a hotdesk, you can use the following steps: <br>
a. On the website's home, Find Booking. <br>
b. enter desk number. <br>
c. Specify the desired date. <br>
d. Then click "Book Now"
</p>  
            

        </div>
         <div class="about-img">
          <img src="{{ asset('images/faqs.jpg') }}" alt="">
            <img src="{{ asset('images/faqs.jpg') }}" alt="">
            
        </div>

    </section>




   <section class="team" id="team">
        <div class="heading">
            <h2>Meet the TEAM</h2>
        </div>
        <div class="customers-container">
            <div class="box">
                <div class="stars">
                 

                    <a href="https://github.com/zafiedvwn" target="_blank"><i class='bx bxl-github'></i></a>
                    
                </div>
              
                <p>Project Manager</p>
                <h2>Aurora Zafra Bactol</h2>
               <img src="{{ asset('images/aurora.jpg') }}" alt="">
            </div>
            <div class="box">
                 <div class="stars">
                    <a href="https://www.facebook.com/HMR36" target="_blank"><i class='bx bxl-facebook'></i></a>

                    <a href="https://github.com/Harry-Reyes" target="_blank"><i class='bx bxl-github'></i></a>
                     <a href="https://gitlab.com/Harry-Reyes" target="_blank"><i class='bx bxl-gitlab'></i></a>
                   
                </div>
                
                <p>Lead Developer</p>
                <h2>Harry Reyes</h2>
                <img src="{{ asset('images/harry.gif') }}" alt="">
            </div>
            <div class="box">
                 <div class="stars">
                    <a href="https://www.facebook.com/jshallador19" target="_blank"><i class='bx bxl-facebook'></i></a>

                    <a href="https://github.com/Josu119" target="_blank"><i class='bx bxl-github'></i></a>
                  
                </div>
              
                <p>Co-Developer</p>
                <h2>Joshua Allador</h2>
                <img src="{{ asset('images/joshua.png') }}" alt="">
            </div>
            <div class="box">
                 <div class="stars">
                    <a href="https://www.facebook.com/armie.miranda18/" target="_blank"><i class='bx bxl-facebook'></i></a>

                    <a href="https://github.com/armiejean00" target="_blank"><i class='bx bxl-github'></i></a>
                     <a href="https://www.instagram.com/_t3rriee/" target="_blank"><i class='bx bxl-instagram'></i></a>
                </div>
               
                <p>UI/UX Design Lead</p>
                <h2>Armie Jean Miranda</h2>
                <img src="{{ asset('images/armie.png') }}" alt="">
            </div>
            <div class="box">
                 <div class="stars">
                    <a href="https://www.facebook.com/Paula.Soleil.Jabinal" target="_blank"><i class='bx bxl-facebook'></i></a>

                    <a href="https://github.com/Leisol" target="_blank"><i class='bx bxl-github'></i></a>
                     <a href="https://www.instagram.com/p.soleil.s.j/" target="_blank"><i class='bx bxl-instagram'></i></a>
                </div>
                
                <p>Co-Developer</p>
                <h2>Paula Soleil Jabinal</h2>
                <img src="{{ asset('images/paula.jpg') }}" alt="">
            </div>
            <div class="box">
                 <div class="stars">
                    <a href="https://www.facebook.com/jossamarie.advincula" target="_blank"><i class='bx bxl-facebook'></i></a>

             
                     <a href="https://www.instagram.com/josh_mariahh/" target="_blank"><i class='bx bxl-instagram'></i></a>
                </div>
               
                <p>Project Coordinator</p>
                <h2>Jossa Marie Advincula</h2>
                <img src="{{ asset('images/jossa.jpg') }}" alt="">
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
        <p>&#169; AHS </p>
    </div>




   <script src="{{asset('javascript/index.js')}}"></script>
</body>

</html>