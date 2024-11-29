<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,600;0,900;1,400;1,600;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
    <section class="contact-header">
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
<h1>Connect with us to become a shareholder of a better tomorrow!</h1>
 
</div>

    </section>
 
    <section class="contact-row">

        <section class="aboutus">

     
            <section class="aboutus-column">
               
    
             <h1>About Us.</h1>
             <div class="aboutuslayer2">
                <img src="images/aboutus.jpg">
                <div class="aboutus-layer">
                    <!---<p>The Department of Agriculture (DOA) functions under the Ministry of Agriculture and is one of the largest government departments with a high profile community of agricultural scientists and a network of institutions covering different agro ecological regions island wide.</p>-->
                </div>
                </div>
             
             
             <p>Welcome to the Department of Agriculture, where we are dedicated to ushering in a new era of agriculture that harmonizes with nature. Our mission is clear: to champion ecological farming practices that nurture both the earth and its inhabitants. We believe in a future where vibrant, biodiverse farms flourish, producing wholesome, nutritious food for generations to come. With a steadfast commitment to innovation, education, and community collaboration, we empower farmers to embrace sustainable methods that enrich their lands while preserving the environment. Through a range of services, from technical training and research support to financial incentives and market access, we stand side by side with farmers, cultivating a greener, more resilient agricultural landscape. Join us in sowing the seeds of a sustainable future, where every harvest embodies the promise of a thriving planet. Together, we can make a difference. Together, we can grow sustainably.</p>
            
           
          <div class="sub-row">
              <h3>Vision</h3>
              <p>“Achieve excellence in agriculture for national prosperity”</p>
       
           </div>
           <div class="sub-row">
            <h3>Mision</h3>
              <p>“Achieve an equitable and sustainable agriculture development, ensuring nations food and nutrition security through development and dissemination of improved agriculture technology and provide the relevant services to the all stakeholders with more emphasis to the farmers”</p>
           </div>
              
        
       <div class="sub-row">
        <h3>Objectives</h3>
        <p>Maintaining and increasing productivity and production of the food crop sector for the purpose of enhancing the income and living condition of the farmer and making food available at affordable prices to the consumer.</p>
    </div>  
        
             
       
            
            
           
           

    
            </section>
           
        </section>
    
        <section class="contactus">
    
            <section class="faq contactus-column">
    
                
                    <h1>Get in Touch!</h1>

                    <div class="query-box">
                        <h3>Ask a Question or Leave a Comment.</h3>

                        <form action="contact_submit.php" method="post" class="comment-form">
                            <input type="text" name="name" placeholder="Enter Your Name">
                            <input type="email" name="email" placeholder="Enter Your Email">
                            <input type="text" name="contact_number"placeholder="Enter Your Contact Number">
                            <textarea rows="5" name="question"placeholder="Ask a Question or Post a Comment"></textarea>
                        <div class="button">
                            <button type="submit" class="submit-button">Submit</button>
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

            else if(strpos($fullUrl,"submit=success")==true){
                echo "<p class='success'>Your Question has been submitted!</p>";
                exit();
            }
            ?>
           </div>

            <p class="sub-row">Department of Agriculture, P.O.Box. 01, Peradeniya </p>
            <p class="sub-row">Contact us:+94 812 388331/32/34</p>
            <p class="sub-row">Email:info@doa.gov.lk</p>
            <p class="sub-row">Open Hours:Mon to Fri - 8.30am to 4.15pm (Closed on weekends and public holidays)</p>
                    
    
            </section>
    
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