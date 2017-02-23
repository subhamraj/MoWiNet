<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>

<html>
<head>
<title>Collaborator/Mowinet</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
  .thumbnail p{
        font-size: 25px;
    text-align: center;
    color: darkgreen;
  }
</style>
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
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
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
  </header>
</div>

<div class="wrapper row2" style="background-image:url('images/demo/backgrounds/01.png')"">
  <div id="pagetitle" class="hoc clear"> 

    <h2 style="    color: floralwhite; font-size: 55px;">collaborators</h2>
  </div>
  <div id="breadcrumb" class="hoc clear"> 
    <ul>
      <li><a href="#" style="color: floralwhite;">Mobile</a></li>
      <li><a href="#" style="color: floralwhite;">Wireless</a></li>
      <li><a href="#" style="color: floralwhite;">Network</a></li>
      <li><a href="#" style="color: floralwhite;">Research Group</a></li>
    </ul>
  </div>
</div>
<div class="wrapper row3">
  <div class="container">
    <h1 style="text-align: center;">The academic Institute</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l1.gif" target="_blank">
              <img src="images/l1.gif" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption" >
              <p>:IIIT Allahabad</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l2.png" target="_blank">
              <img src="images/l2.png" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:IIT Kanpur</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l3.jpg" target="_blank">
              <img src="images/l3.jpg" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:IIT Delhi</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l4.jpg" target="_blank">
              <img src="images/l4.jpg" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:IIT Roorkee</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l5.jpg" target="_blank">
              <img src="images/l5.jpg" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:MNNIT Allahabad</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l6.png" target="_blank">
              <img src="images/l6.png" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>IIITM Gwalior</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l7.png" target="_blank">
              <img src="images/l7.png" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:IIITDM Jabalpur</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l8.png" target="_blank">
              <img src="images/l8.png" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:IIITDM kanchipuram</p>
              </div>
            </a>
          </div>
        </div>
      
       <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l9.png" target="_blank">
              <img src="images/l9.png" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:IIT Patna</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l10.jpg" target="_blank">
              <img src="images/l10.jpg" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:IIT Indore</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l11.png" target="_blank">
              <img src="images/l11.png" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:IIT Kharagpur</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l12.png" target="_blank">
              <img src="images/l12.png" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:IIIT Delhi</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l13.png" target="_blank">
              <img src="images/l13.png" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:TIFR Mumbai</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l14.jpg" target="_blank">
              <img src="images/l14.jpg" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:IIT Mandi</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l15.png" target="_blank">
              <img src="images/l15.png" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>IISc Banglore</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l16.gif" target="_blank">
              <img src="images/l16.gif" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:NIT Rourkela</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l17.png" target="_blank">
              <img src="images/l17.png" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:NIT Raipur</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l18.png" target="_blank">
              <img src="images/l18.png" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:IIT Bhubaneshwar</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l19.jpg" target="_blank">
              <img src="images/l19.jpg" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>: NIT Hamirpur</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l20.png" target="_blank">
              <img src="images/l20.png" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>: NIT Goa</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/l21.jpg" target="_blank">
              <img src="images/l21.jpg" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:IIIT Hyderabad</p>
              </div>
            </a>
          </div>
        </div>
  <h1 style="text-align: center;">The Companies:</h1>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/p1.jpg" target="_blank">
              <img src="images/p1.jpg" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:Anritsu</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/p2.png" target="_blank">
              <img src="images/p2.png" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:Scientech</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="images/p3.png" target="_blank">
              <img src="images/p3.png" alt="Lights" style="width:200px; height: 200px;">
              <div class="caption">
              <p>:Amitec</p>
              </div>
            </a>
          </div>
        </div>

    </div>
  </div>
<<div class="wrapper row4 bgded overlay" style="background-image:url('images/demo/backgrounds/01.png')">
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
</body>
</html>