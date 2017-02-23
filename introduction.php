<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>

<html>
<head>
<title>Introduction/mowinet</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 

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

    <h2 style="    color: floralwhite; font-size: 55px;">Introduction</h2>
  </div>
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="#" style="color: floralwhite;">Mobile</a></li>
      <li><a href="#" style="color: floralwhite;">Wireless</a></li>
      <li><a href="#" style="color: floralwhite;">Network</a></li>
      <li><a href="#" style="color: floralwhite;">Research Group</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->
      <h6>Menu</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="Introduction.php">Introduction</a></li>
          <li><a href="gallery.php">Gallery</a>
          </li>
          <li><a href="membersform.php">Membership Form</a>
            <ul>
              <li><a href="detailsmembership.php">About Membership</a></li>
              <li><a href="http://iiita.ac.in">IIIT Allahabad</a>
              </li>
            </ul>
          </li>
          <li><a href="#">Details about Members</a></li>
          <li><a href="funding.php">Fundings</a></li>
        </ul>
      </nav>
      <div class="sdb_holder">
        <h6>The Collaborators</h6>
        <address>
        <p>The IIT, IIIT, NIT or any institute/college of similar stature and any prestigious company working in the field of the wireless and mobile communication are eligible to become a collaborator of the MOWINET research group. </p>
        <a href="collaborator.php">Following are the current collaborators:</a>
        </address>
      </div>
      <div class="sdb_holder">
        <article>
          <h6>The Host Institute:</h6>
          <p>The IIIT Allahabad acts as the host institute of this group. However, the executive committee (with 2/3 majority) may decide to designate any other institute as the host institute at any point of time. The host institute is required to maintain the website of the group on its own server. </p>
          <a href="http://iiita.ac.in">Main site</a>
        </article>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->
      <h1 style="font-size: 40px;">Introduction</h1>
      <img class="imgr borderedbox inspace-5" src="1.jpg" alt="" style="height: 137px; width: 137px;">
      <p> Due to the rapid growth of new mobile and wireless applications and services, the mobile and wireless technology has emerged as the most vibrant field for the research community</p>
      <p>All developed countries have already set up special research groups to reap maximum benefits out of the technology advancements in this field. </p>
      <img class="imgl borderedbox inspace-5" src="2.jpg" alt="" style="height: 137px; width: 137px;">
      <p>Such countries have inter-institute and industry-academia research groups to strengthen the field of mobile and wireless communication.</p>
      <p>They all together come up with the new ideas and designs to make the mobile and wireless technologies more robust and reliable.</p>
      <p>As a result of this, these countries are leading in the mobile and wireless technology. </p>
      <p>The India is far behind in mobile and wireless technology advancements as we do not have any such group. These groups are necessary where we can discuss and share our ideas thoroughly for the current and future technology trends, and implement them for the commercial use.</p>
      <p>Therefore, this research group is constituted for catering following objectives;</p>
  
      <div id="comments">
        <h2 style="font-size: 40px;">Objectives</h2>
        <ul>
          <li>
            <article>
                
              <div class="comcont">
                    <p>1) The main objective of the group is to strengthen the research and development activities pertaining to following focused areas:</p>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Massive MIMO Systems:</strong>Development of novel encoding schemes such as Spatial Multiplexing, Space-Time Coding, Space-Time Block Codes, and analysis of capacity limits and multiplexing gains for large MIMO systems.</p>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Cooperative and Cognitive Relaying Communication: </strong>Performance evaluation and optimization of efficient relaying techniques such as one-way relaying and two-way relaying, and underlay and overlay cognitive relaying.</p>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Applications of Network coding and D2D Communication in Cellular Networks: </strong>Development of novel protocols to alleviate scarcity of resources in cellular network using D2D, Network Coding and other allied technologies.</p>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Wireless Sensor Networks: </strong>Development of novel physical layer strategies and the supporting hardware for WSN node, Data Management, Aggregation, Query Processing, Inference, Compressed Sensing, Routing, Privacy, IoTs and its applications, Software Defined Networks, Mobility and Localization, Adhoc Networks. </p>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Visible Light Communication:</strong>Li-Fi, Vehicle to Vehicle Communication.</p>

              </div>
            </article>
          </li>
          <li>
            <article>
             
              <div class="comcont">
                <p>2) To provide opportunities to the young researchers for implementing their ideas in the aforesaid fields by allowing them to access various resources available with thepremier institutes and companies.</p>
              </div>
            </article>
          </li>
          <li>
            <article>
            
              <div class="comcont">
                <p>3) To envision the technologies that may have commercial potential in near future and developing prototypes for realizing such technologies.</p>
              </div>
            </article>
          </li>
          <li>
            <article>
            
              <div class="comcont">
                <p>4) To extend the consultancy services to various government and non government agencies, Public/Private companies etc.</p>
              </div>
            </article>
          </li>
        </ul>

      </div>
    </div>
    <div class="clear"></div>
  </main>
</div>

<div class="wrapper row4 bgded overlay" style="background-image:url('images/demo/backgrounds/01.png')">
  <footer id="footer" class="hoc topspace-0 clear"> 
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


<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

<script src="layout/scripts/jquery.placeholder.min.js"></script>

</body>
</html>
