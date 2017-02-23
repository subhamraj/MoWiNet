<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>

<html>
<head>
<title>Mowinet.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script src="js/jquery-1.10.2.js"></script>
</head>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i> +91-7408228819</li>
        <li><i class="fa fa-envelope-o"></i> Mowinet.iiita@gmail.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><img src="Mowinet.jpg" style="  width: 122px;   margin-top: -20px;"></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a class="drop" href="#">Members</a>
          <ul>
            <li><a href="collaborator.php">collaborator</a></li>
            <li><a href="#">Details about Members</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Membership</a>
          <ul>
            <li><a href="membersform.php">Membership form</a></li>
            <li><a href="detailsmembership.php">Details about Membership</a>
            </li>
            <li><a href="http://iiita.ac.in">IIIT Allahabad</a></li>
          </ul>
        </li>
  <?php if (isset($_SESSION['usr_id'])) { ?>
        <li><p class="navbar-text" style="color: orangered;">Welcome <?php echo $_SESSION['usr_name']; ?>!!</p></li>
        <li><a href="logout.php" style="color: orangered;">Log Out</a></li>
        <?php } else { ?>
        <li><a href="login.php" style="color: orangered;">Login</a></li>
        <li><a href="register.php" style="color: orangered;">Sign Up</a></li>
        <?php } ?>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="relative wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png')">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="introtxt">
      <h2 class="heading">MoWInet  <br>     <h4 style="    color: whitesmoke;font-size: 22px; margin-top: -20px;">      Mobile Wireless Network Research group</h4></h2>
      <p><a class="btn" href="membersform.php" style="margin-top: 10px;">Click here to Join</a></p>
    </div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div id="areas" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace group">
      <li class="one_quarter first">
        <div class="group"><i class="icon fa fa-bank"></i>
          <p class="heading"><a href="Introduction.php">Introduction</a></p>
        </div>
      </li>
      <li class="one_quarter">
        <div class="group"><i class="icon fa fa-bullhorn"></i>
          <p class="heading"><a href="Introduction.php">Objectives</a></p>
        </div>
      </li>
      <li class="one_quarter">
        <div class="group"><i class="icon fa fa-building-o"></i>
          <p class="heading"><a href="membersform.php">Membership Form</a></p>
        </div>
      </li>
      <li class="one_quarter">
        <div class="group"><i class="icon fa fa-plus"></i>
          <p class="heading"><a href="#">View all areas</a></p>
        </div>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <h2 style="font-size: 40px;">MoWINet</h2>
      <p>Mobile Wireless Network Research group</p>
    </div>
    <article class="one_third first"><i class="btmspace-20 coloured fa fa-4x fa-ship"></i>
      <hr class="btmspace-20">
      <h3>Introduction:</h3>
      <p>Due to the rapid growth of new mobile and wireless applications and services, the mobile and wireless technology has emerged as the most vibrant field for the research community. </p>
      <footer><a href="Introduction.php">Read More &raquo;</a></footer>
    </article>
    <article class="one_third"><i class="btmspace-20 coloured fa fa-4x fa-shield"></i>
      <hr class="btmspace-20">
      <h3>The Objectives:</h3>
      <p>1)	The main objective of the group is to strengthen the research and development activities pertaining to following focused areas,</p>
      <footer><a href="Introduction.php">Read More &raquo;</a></footer>
    </article>
    <article class="one_third"><i class="btmspace-20 coloured fa fa-4x fa-cubes"></i>
      <hr class="btmspace-20">
      <h3>The Membership: </h3>
      <p>Any faculty member/research scholar working in any IIT, IIIT, NIT or any institute/ college of similar stature and the employees of any prestigious company working in the field of the wireless and mobile communication are eligible to become the member of this group. </p>
      <footer><a href="detailsmembership.php">Read More &raquo;</a></footer>
    </article>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <h2>Faculty Members</h2>
      <p>Mobile Wireless Network Research Group</p>
    </div>
    <article class="one_quarter first"><img class="btmspace-30" src="images/demo/1.jpg" alt="" style="width: 200px;">
      <h4 class="font-x1 nospace">Dr. Suneel yadav</h4>
      <p class="font-xs nospace btmspace-15">Assistiant Professor, IIIT Allahabad</p>
      <hr>
      <footer><a href="https://www.facebook.com/suneel.yadav.14">Full Profile &raquo;</a></footer>
    </article>
    <article class="one_quarter"><img class="btmspace-30" src="images/demo/2.jpeg" alt="">
      <h4 class="font-x1 nospace">Dr. Neetesh Purohit</h4>
      <p class="font-xs nospace btmspace-15">Associate Professor, IIIT Allahabad</p>
      <hr>
 
      <footer><a href="http://profile.iiita.ac.in/np/">Full Profile &raquo;</a></footer>
    </article>
    <article class="one_half"><img class="btmspace-30" src="images/demo/3.jpg" alt="" style="height: 200px; width: 488px;">
      <h4 class="font-x1 nospace">IEEE SB Branch</h4>
      <p class="font-xs nospace btmspace-15">IEEE SB, IIIT Allahabad</p>
      <hr>

      <footer><a href="https://www.ieee.org/index.html">View Details &raquo;</a></footer>
    </article>
    <div class="clear"></div>
  </section>
</div>

<div class="wrapper row2">
  <div class="hoc container clear"> 
    <section class="one_half first"> 
      <h2 class="heading">Latest news and events</h2>
      <hr class="btmspace-30">
      <div class="latest">
        <article>
          <time datetime="2045-04-06T08:15+00:00"><strong>Apr</strong> <em>06</em></time>
          <h3 class="heading">MoWiNet launching Date</h3>

          <p>MoWiNet launching Date</p>
        </article>
        <article>
          <time datetime="2045-03-24T08:15+00:00"><strong>Mar</strong> <em>23</em></time>
          <h3 class="heading">First project Launching date</h3>
          <p>First project Launching date</p>
        </article>
      </div>
      <!-- ################################################################################################ -->
    </section>
    <section class="one_half"> 
      <!-- ################################################################################################ -->
      <h2 class="heading">Expert Comments</h2>
      <hr class="btmspace-30">
      <div id="testimonials" class="flexslider flex-wrapper clear"> 
        <!-- ################################################################################################ -->
        <ul class="slides clear">
          <li>
            <blockquote>Comments here</blockquote>
            <figure class="clear"><img src="images/demo/1.jpg" alt="" style="height: 60px; width: 60px;">
              <figcaption><strong>Dr. Suneel yadav</strong><br>
                <em>Professor, IIIT Allahabad</em></figcaption>
            </figure>
          </li>
          <li>
            <blockquote>Comments here</blockquote>
            <figure class="clear"><img src="images/demo/2.jpeg" alt="" style="height: 60px; width: 60px;">
              <figcaption><strong>Dr. Neetesh purohit</strong><br>
                <em>Associate Professor, IIIT Allahabad</em></figcaption>
            </figure>
          </li>
        </ul>
      </div>
    </section>

    <div class="clear"></div>
  </div>
</div>
<div class="wrapper row4 bgded overlay" style="background-image:url('images/demo/backgrounds/01.png')">
  <footer id="footer" class="hoc topspace-0 clear"> 
    <!-- ################################################################################################ -->
    <div id="newsletter" class="clear">
      <div class="one_quarter first">
        <h6 class="heading"><i class="fa fa-newspaper-o"></i> Latest News</h6>
      </div>
      <form class="three_quarter" method="post" action="#">
        <div class="clear">
          <input class="one_third first" type="text" value="" placeholder="Name" required>
          <input class="one_third" type="email" value="" placeholder="Email" required>
          <button class="one_third" type="submit" title="Sign Up">Sign Up</button>
        </div>
      </form>
    </div>
    <!-- ################################################################################################ -->
    <div class="group">
      <div class="one_quarter first">
        <h6 class="title"><i class="fa fa-commenting"></i>Contact Us</h6>
        <address class="btmspace-30">
        IIIT Allahabad  Devghat,Jhalwa<br>
        Allahabad,Uttar Pradesh<br>
        Pin code-211012
        </address>
        <ul class="nospace">
          <li class="btmspace-10"><span class="fa fa-phone"></span> +91-7408228819</li>
          <li><span class="fa fa-envelope-o"></span> Mowinet@gmail.com</li>
        </ul>
      </div>
     <div class="one_quarter">
        <h6 class="title">MoWiNet.com</h6>
        <article>
          <h2 class="nospace font-x1"><a href="#">MoWiNet Launch Date</a></h2>
          <time class="font-xs" datetime="2017-04-06">Friday, 6<sup>th</sup> April 2017</time>
          <p>MoWiNet.com ( Mobile Wireless Network Research group ) was launched on this auspicious day</p>
        </article>
      </div>
      <div class="one_quarter">
        <h6 class="title">Important Links</h6>
        <ul class="nospace linklist">
          <li><a href="http://iiita.ac.in">IIIT Allahabad</a></li>
          <li><a href="ece.iiita.ac.in">ECE|| IIIT Allahabad</a></li>
          <li><a href="http://www.ieee.org/membership_services/membership/students/index.html">IEEE SB Branch</a></li>
          <li><a href="https://ieeespc.iiita.ac.in/">IEEE SP/C Joint Chapter</a></li>
          <li><a href="http://ww1.upras-ieee.org/">IEEE Robotics & Automation Chapter</a></li>
        </ul>
      </div>
      <div class="one_quarter" >
        <h6 class="title">The Publications:</h6>
        <p style="font-size: 12px;">The group may also decide to start its own journal for publishing the research and development work carried out by the group. </p><p style="font-size: 12px;">Further it may decide to enter in MOUs with IEEE, Elsevier, Springer, Wiley, Taylor and Francis, IET Journals etc. publication houses for publishing the material related to its activities.</p>
      </div>
    </div>
  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="http://ece.iiita.ac.in/MoWInet">MoWInet</a></p>
    <p class="fl_right">Developed by <a target="_blank" href="https://www.facebook.com/subham.choudhury.925" title="subham">Subham choudhury</a>  &amp;
    <a target="_blank" href="https://www.facebook.com/satyarth.agrahari" title="Satyarth">SatYarth Agrahari</a></p>
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
<!-- Homepage specific -->
<script src="layout/scripts/jquery.flexslider-min.js"></script>
<!-- / Homepage specific -->
</body>
</html>