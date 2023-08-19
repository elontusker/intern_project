<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Html Website 2020</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--/*font awesome icons*/-->
    <link type="text/css" rel="stylesheet" href="css\font-awesome.min.css">

    <!--rubik font family -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&amp;family=Rubik:ital,wght@0,400;0,700;1,700&amp;display=swap" rel="stylesheet">

    <!--custom css-->
    <link type="text/css" rel="stylesheet" href="css\style.css">

    <!--media css-->
    <link type="text/css" rel="stylesheet" href="css\media.css">

    <!--jquery ui files-->
    <link type="text/css" rel="stylesheet" href="js\jquery-ui.structure.min.css">
    <link type="text/css" rel="stylesheet" href="js\jquery-ui.theme.min.css">

    <!--owl carousel-->
    <link type="text/css" rel="stylesheet" href="css\owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href="css\owl.theme.default.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<header id="home">
        <div class="container">
            <div class="top-bar">
                <div class="nav-col">
                    <div class="logo">
                        <img src="html\img\Free_Sample_By_Wix-removebg-preview.png" class="img-responsive" alt="logo" width="100px" height="100px">
                    </div>
                    <!--logo-->
                    <div class="menu">
                        <a class="active" href="#home">Home</a>
                        <a href="index.php#why-choose-us">About US</a>
                        <a href="index.php#expand">Services</a>
                        <a href="index.php#project">Portfolio</a>
                        <a href="index.php#blog">Blog</a>
                        <a href="index.php#contact">Contact Us</a>
                    </div>
                    <div class="clear"></div>
                    <!--clear-->
                </div>
                <!--nav-col-->
                <div class="cnt-info-col">
                    <a href="tel:9879012345"><span>Call US:</span>9798012345</a>
                    <a href="login.html"><h4>Login</h4></a>
                </div>
                <div class="clear"></div>
                <!--clear-->
            </div>
            <!--top-bar-->
        </div>
    </header>


    <center>
  <?php
    // servername => localhost
    // username => root
    // password => empty
    // database name => staff
    $conn = mysqli_connect("localhost:3307", "root", "", "intern");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    $name = $_REQUEST['name'];
    $email=$_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $website = $_REQUEST['website'];

    $sql = "INSERT INTO contact VALUES ('','$name','$email','$phone','$website')";
		if(mysqli_query($conn, $sql))
    {
			echo "<h3>Your Contact request has been registered!</h3>";
      $query = "SELECT name,contact_id FROM contact where contact_id=LAST_INSERT_ID()";
      echo " <br> <br>";

      if ($result = mysqli_query($conn,$query)) 
      {

          while ($row = $result->fetch_assoc()) 
          {
              $name = $row["name"];
              $con = $row["contact_id"];
              echo "<h4>Name:  ".$name."<br></h4>";
              echo "<h4>Contact ID:  ".$con."<br></h4>";
          }
          
          /*freeresultset*/
          $result->free();
      }
		} 
    else
    {
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
    echo '<br>';
    echo '<br>';
		
		// Close connection
		mysqli_close($conn);
		?>
    <br>
    </center>

    <footer>
            <div class="container">
                <div class="footer-col">
                    <h3>About Us</h3>
                    <p>We focus on the needs of small to middle market businesses to improve and grow their return.so that your site will withstand the test of time. We care about your business, which is why we work with you.</p>
                    <div class="social-icons-footer">
                        <i class="fa fa-facebook-square"></i>
                        <i class="fa fa-twitter-square"></i>
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-youtube-square"></i>
                    </div>
                </div>
                <!--footer-col-->
                <div class="footer-col footer-2-col">
                    <h3>Quick Links</h3>
                    <ul>
                        <li>Home</li>
                        <li>About Us</li>
                        <li>Services</li>
                        <li>Portfolio</li>
                        <li>Blog</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
                <!--footer-col-->
                <div class="footer-col">
                    <h3>Contact Us</h3>
                    <p><i class="fa fa-envelope-o"></i> <a href="mailto:digiket@gmail.com">digiket@gmail.com</a></p>
                    <p><i class="fa fa-mobile-phone"></i> <a href="tel:9798324712">9798324712</a></p>
                    <p><i class="fa fa-map-o"></i> <span>45 Lincoln St, New York, NY 10321, US</span></p>
                </div>
                <!--footer-col-->
                <div class="clear"></div>
                <hr class="footer-hr">
                <p class="copyright-footer">© 2023 — Digiket. All Rights Reserved.</p>
            </div>
        </footer>

        <script type="text/javascript" src="js\jquery-3.2.1.min.js"></script>
        <script src="js\jquery-ui.min.js"></script>
        <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.2/dist/circle-progress.js"></script>
        <script type="text/javascript" src="js\owl.carousel.min.js"></script>
        <script src="js\extrenaljq.js" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        $("#toggle-bar").click(function() {
            $(".menu").slideToggle(400);
        });
    });

</script>

</html>
