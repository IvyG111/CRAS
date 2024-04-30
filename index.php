<<<<<<< HEAD
<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
?>
Something is wrong with the XAMPP installation :-(
=======
<?php 
	include 'php/includes/header.php'; 	


?>

<!-- Add a CSS style block to apply background image -->
<style>
    /* Define a CSS style block */
    #slider-background {
        /* Set the background image path and style */
        background-image: url('images/ksmu.png');
        background-size: cover; /* Adjust background size */
        background-repeat: no-repeat; /* Prevent background from repeating */
        background-position: center center; /* Center the background image */
        /* Add more CSS properties as needed */
    }
</style>


	<div class="container" id="wrapper">
		<div id="header">
			<div class="mainLogo">
           			 <div class="logo"><img src="images/lg.jpg" width="60px" height="50px"/>CRAS <span>SYSTEM</span></div>
       	    </div>
			<div id="login">
				<?php if(isset($_SESSION['email'])){?>
					You are logged in as: <b><?php echo $_SESSION['email']; ?></b>
				<?php } else { ?>
				<a href="login.php">Login</a> | <a href="register.php">Register</a>
				<?php } ?>
			</div>
		</div>
		<div style="clear:both;"></div>
		<div id="nav">
			<?php include 'php/includes/navigation.php'?>
		</div>
		<div id="main">
			<div class="row" id="slider-background">
				<div class="col-sm-3">
		<div class="leftSidebar">
        	<div class="titleBlock">
        	  <p>What we investigate</p>
       	    </div>
            <div class="blockList">
            	<ul>
                	<li><a href="alerts.php">Terrorism</a></li>
                	<li><a href="alerts.php">Cyber Crime</a></li>
                	<li><a href="alerts.php">Public Curruption</a></li>
					<li><a href="alerts.php">Civil Rights</a></li>
					<li><a href="alerts.php">Drug Dealers</a></li>
           	  </ul>
          </div>
		  
		  <div class="titleBlock">
        	  <p>Most Wanted</p>
       	    </div>
            <div class="blockList">
            	<ul>
                	<li><a href="alerts.php">Ten most wanted</a></li>
                	<li><a href="alerts.php">Most wanted</a></li>
                	<li><a href="alerts.php">Other Criminals</a></li>
           	  </ul>
          </div>
		  <div class="titleBlock">
        	  <p>Alerts</p>
       	    </div>
            <div class="blockList">
            	<ul>
                	<li><a href="alerts.php">Road accidents</a></li>
                	<li><a href="alerts.php">Traffic alerts</a></li>
					<li><a href="alerts.php">Terrorist alerts</a></li>
           	  </ul>
          </div>
            
            
        </div>
				</div>
				
		
	</div>
	
<?php include 'php/includes/footer.php'; ?>
>>>>>>> 55eddb9 (First commit)
