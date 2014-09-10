
<!-- NAV BAR -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">eduNetworx</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Colleges <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <?php
				$query = mysql_query("SELECT * FROM colleges");
				while ($row = mysql_fetch_assoc($query)){
					$id = $row['collegeID'];
					$name = $row['name'];
					echo "<li><a href='results.php?collegeID=$id'>$name</a></li>";
				}
			?>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bars <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
             <?php
				$query = mysql_query("SELECT * FROM bars ORDER BY name ASC");
				while ($row = mysql_fetch_assoc($query)){
					$id = $row['barID'];
					$name = $row['name'];
					echo "<li><a href='ownPage.php?id=$id'>$name</a></li>";
				}
			?>
          </ul>
        </li>
        
        <?php if ($_SESSION['username'] || $_SESSION['admin']){ ?>
        <li><a href='request_bar.php'>Request A Bar</a></li>
        <?php } ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      
        	<?php if (!$_SESSION['username'] && !$_SESSION['admin']){ ?>
			<li><a href='login.php'>Login</a></li>
			<li><a href='register.php'>Register</a></li>
		<?php }else if ($_SESSION['username']){ ?>
				
			<li><a href='profile.php?id=<?php echo $_SESSION['userID'] ?>'><?php echo $_SESSION['username'] ?></a></li>
			<li><a href='logout.php'>Logout</a></li>
			<?php }else if ($_SESSION['admin']){ ?>
				<li><a href='a_index.php'>Admin</a></li>
				<li><a href='logout.php'>Logout</a></li>
			<?php } ?>
        
      </ul>
      <form class="navbar-form navbar-right" action='results.php' method='GET' role="search">
        <div class="form-group">
          <input type="text" class="form-control" name='q' placeholder="Search Bars">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- NAV BAR END-->

<!-- Rows and Spans-->


<div class="row" >
        <div class="span4">
          <h2>Username Based</h2>
           <p>All users only have a username to prevent anyone from being given poor service due to a bad review.  Say what you want and review how you like without having to worry!</p>
        </div>
        <div class="span4">
          <h2>.edu Email Only</h2>
           <p>We are students wanting students opinions.  This also allows for a lack of duplicate emails since a student cannot create multiple .edu email accounts</p>
       </div>
       <div class="span4">
          <h2>Request</h2>
           <p>We know we are not perfect.  May it be a wrong special, a missing bar, whatever! We allow YOU the user to request these missing items to be added.</p>
 <!-- Rows and Spans END-->        
 <!-- carousel -->  
       </div>
   <!-- Rows and Spans END-->
   <div id="this-carousel-id" class="carousel slide" >
        <div class="carousel-inner">
          <div class="item active">
             <img style='margin-left:auto; margin-right:auto;' src="images/mizzou.jpeg" alt="Mizzou" />
            
            
          </div>
          <div class="item">
              <img style='margin-left:auto; margin-right:auto;' src="images/oregon.jpeg" alt="Carina Caterpillar" />
            
          </div>
          
        </div><!-- .carousel-inner -->
        <!--  next and previous controls here
              href values must reference the id for this carousel -->
          <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
      </div>
<!-- END carousel -->

   <!-- Buttons-->
<button class='btn btn-info' style='float:right; margin-right:10px; margin-bottom:10px;' id='upPic'>
   <!-- Buttons END-->


