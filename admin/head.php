<html>

<head>
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia"> -->

<style>

body{
  background-color: white;

}

.header {
  overflow:hidden;
  background-color: black;
  top: 0;
  width:100%;
  padding: 20px 5px;
  color:#FF0404  ;
}

/* Style the header links */
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
  font-weight:bold;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 40px;
  font-weight: bold;
  color:white  ;
  font-family: "Sofia", sans-serif;
  text-shadow: 3px 3px 3px #ababab;
}

/* Change the background color on mouse-over */
.header a:hover {
/*  background: linear-gradient(to right, #fd746c 0%, #ff9068 100%);*/
background-color: red;
color: white;
border-radius:30px;
}




/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
/* Style the active/current link*/
a.act{
background: red;
color: white;
border-radius:30px;
}
a.logo2{
  background-color: #d85f47;

}

</style>
</head>

<body>
  <div class="header">
    <a href="home.php" class="logo"><center>Donate blood and save lives </center></a>
    <!-- <div class="header-right">
    <a href="about_us.php"  <?php if($active=='about') echo "class='act'"; ?> >About Us</a>
    <a href="why_donate_blood.php"  <?php if($active=='why') echo "class='act'"; ?>>Why Donate Blood</a>
      <a href="donate_blood.php"  <?php if($active=='donate') echo "class='act'"; ?>>Become A Donor</a>
      <a href="need_blood.php" <?php if($active=='need') echo "class='act'"; ?>>Search for Blood</a>
      <a href="contact_us.php" <?php if($active=='contact') echo "class='act'"; ?>>Contact Us</a>
    </div> -->
  </div>

</body>
</html>
