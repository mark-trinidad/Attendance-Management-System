<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.google.com/specimen/Orelega+One?query=ele">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css" integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <title>Attendance Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/main-css.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
   
    
    <link rel="stylesheet" href="assets/css/style.css" />


    <style>
        /* CSS RESET */

        .sub-header {
            margin-top: 1px;
            margin-left: 0%;
            margin-right: 0%;
            margin-bottom: 1%;
            border: 1px solid #000000;
            background-color: lightblue;
        }

        .inputBx select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: none;
        border-bottom: 2px solid #3498db; /* Add an underline effect */
        background-color: transparent;
        color: white;
        border-radius: 0;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        cursor: pointer;
        transition: border-bottom 0.3s ease-in-out;
      }
      .custom-border {
            border-bottom: 2px solid black; /* You can adjust the border thickness (4px) to your desired value. */
        }
        .custom-border2 {
            border-top: 2px solid black;
        }
    </style>
</head>

<body style="background-color: black;">
<div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>This website is created by <em>Jawad, Abrar, Zaid, Mark and Abdus</em> </p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container" style="height:53px;">
          <div class="row">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.php" class="logo">
                          University of <span style="color: #ff8630;">Bolton</span>
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="index.php">HOME</a></li>
                          <li><a href=courses.html>COURSES</a></li>
                          <li><a href="AboutUs.html">ABOUT US</a></li>
                          <li><a href="login.php" class="active" style="color: white;">Log in</a></li>
                      </ul>        
                    
                      <!-- ***** Menu End ***** -->
                  </nav>
              
          </div>
      </div>
  </header>

    <!-- Logo starts here -->
        <br><br><br><br>
        <center>
    <div class="square">
        <i style="--clr: #d3af37"></i>
        <i style="--clr: #191970"></i>
        <i style="--clr: #ffffff"></i>
        <div class="login">
            <h2>Login</h2>
            <form action="authentication.php" method="POST">
                <br>
            <div class="inputBx">
                <label for="role">Select Role:</label>
                <select id="role" name="role">
                    <option value="admin">Admin</option>
                    <option value="teacher">Teacher</option>
                    <option value="student">Student</option>
                </select>
                <br><br>
            </div>
            <div class="inputBx">
                <input name ="username" id="username" type="text" placeholder="Username" />
            </div>
            <br>
            <div class="inputBx">
                <input id="password" name="password" type="password" placeholder="Password" />
            </div>
  <br>
            <div class="inputBx">
                <input type="submit" value="Sign in" />
            </div>
    </form>
            <div class="links">
                <a href="#">Forget Password</a>
            </div>
    </div>
      </div>
    </center>
</body>
</html>
