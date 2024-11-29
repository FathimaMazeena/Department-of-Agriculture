<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,600;0,900;1,400;1,600;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
    <section class="farmer-header">
        <nav>
            <a href="ïndex.html"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="signup.php">REGISTER</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="sub-header-title">
        <h1>Welcome!</h1>
        </div>

    </section>

    
    <section class="register">
    
        <section class="faqs registerbox">
            <h1>Register for Our Services!</h1>

        <div class="query-box register-login-box">
            <h3>Register.</h3>

            <form action="register_for_service.php" method="post" class="comment-form">
                <input type="text" name="first_name" placeholder="First Name">
                <input type="text" name="last_name" placeholder="Last Name">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="contact_number" placeholder="Contact Number">
               

                <div class=" radio-container">
                    Select Service: 
                    <input type="radio" name="service" value="Technical Assistance and Training" required> Technical Assistance and Training
                    <input type="radio" name="service" value="Financial Support" required> Financial Support
                    <input type="radio" name="service" value="Certifications" required> Certifications
                    <input type="radio" name="service" value="Market Access and Promotions" required> Market Access and Promotions
                </div>
             
              
            <div class="button">
                <button type="submit" name="register" class="submit-button">Register</button>
            </div>
            </form>


            <?php
            $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            if(strpos($fullUrl,"error=empty")==true){
                echo "<p class='error'>You did not fill in all fields!</p>";
                exit();
            }

            else if(strpos($fullUrl,"error=invalidemail")==true){
                echo "<p class='error'>You used invalid Email!</p>";
                exit();
            }

            else if(strpos($fullUrl,"error=emailexists")==true){
                echo "<p class='error'>You have already registered for a service with this email!</p>";
                exit();
            }

            
            else if(strpos($fullUrl,"register=success")==true){
                echo "<p class='success'>Successfully registered! Hang in there we will provide more information soon!</p>";
                exit();
            }
            ?>
        </div>
        </section>
        
    </section>

    <section class="footer">
        <h4>DEPARTMENT OF AGRICULTURE</h4>
        <p>Department of Agriculture, P.O.Box. 01, Peradeniya </p>
        <p>Contact us:+94 812 388331/32/34</p>
        <p>Email:info@doa.gov.lk</p>
        <p>Open Hours:Mon to Fri - 8.30am to 4.15pm (Closed on weekends and public holidays)</p>
        <p class="copyright">Copyright © 2023 Department of Agriculture Sri lanka. All rights reserved.</p>
    </section>
    














<!----------javascript for toggle menu---------->
    <script>
       var navLinks=document.getElementById("navlinks");
       function showMenu(){
        navLinks.style.right="0";
       }

       function hideMenu(){
        navLinks.style.right="-200px";
       }
       
    </script>
    
</body>
</html>