<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Field Officer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,600;0,900;1,400;1,600;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
    <section class="fieldOfficer-header">
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

 <section class="tables">

    <div class="query-table">
        <h1>Questions from Farmers.</h1>
    <table id="question-table">

        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Comments</th>
               
            </tr>
        </thead>

        <tbody>


        </tbody>
        

    </table>
    </div>
    

<div class="services-registrations">
    <h1>Registrations for the services.</h1>
    <table id="">

        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Registered Service</th>
    
    
            </tr>
    
        </thead>

        <tbody>
            <?php
            require_once 'databaseConnection.php';

            $sql = "SELECT * FROM registrations_for_services";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['first_name']}</td>
                            <td>{$row['last_name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['contact_number']}</td>
                            <td>{$row['service']}</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No registrations available</td></tr>";
            }

            mysqli_close($conn);
            ?>
           
        </tbody>
        
    </table>

    <script src="fetch_questions.js"></script>
 
</div>
 
    
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