<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
	<head>
		<title>
			Portfolio
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<?php 
			$cssFile = "stylesheet.css";
			echo "<link rel='stylesheet' href='". $cssFile ."'>";
		?>
	</head>
	<body>
		<?php require 'includes/navbar.php'; ?>

		
		<div id="bodydiv" align="center">
			<div id="inbody">
				<div id="divcontent">
					<div align="center"><font size="4">Home</font></div>
                                        <hr style="color: #000; height: 5px;">
					<div id="blogbox">
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td>
									<p>
									   I am a recent graduate from Florida International University and my goal is to become a successful, career driven individual. As part
									   of that goal I wanted to create a simple portfolio website to showcase my projects and certifications. I have a LinkedIn as well and the link
                                                                           to that can be found under the Contact tab.
								       <br><br>
									</p>
								</td>
							</tr>
							<!-- Blog post #2 -->
							<tr>
								<td>
									<hr>
									<p>
										
										A couple updates to the site were done. My Resume is now available to view and I have added my projects. For the time being, my 
                                                                                Kaseya Certification can be found here.
                                                                                <a href ="http://www.scribd.com/doc/227269293/Kaseya-Certification">Kaseya Certification</a>
										<br>
									</p>									
									<p align="right">
										Submitted: 05/30/2014
									</p>
									<hr>
								</td>
								<!-- End of blog post #2 -->
							</tr>
							<!-- Blog post #1 -->
							<tr>
								<td>
									<p>
										
										This is just a test of how I will be writing news updates for whatever reason in the future.
									</p>
									<p align="right">
										Submitted: 03/03/2013
									</p>
									<hr>
								</td>
							</tr>
							<!-- End of blog post #1 -->
						</table>
					</div>	
						
				</div>
					<table id="head_mid_table" cellspacing="0" cellpadding="0"> 
						<tr>
							<td width="100">
								<div align="left">
									<img class ="headerimages" src="images/headericon.jpg" width="161" height="70" border=0 alt="headericon">
								</div>
							</td>
							<td>
								<div align="center">
									<font size="4" face="Helvetica"><b>Justin Joyce</b></font>
									<br><font size="2" face="Helvetica">My Portfolio</font>
								</div>
						    </td>
							<td width="161">
							<div align="right">
									<img class ="headerimages" src="images/me.jpeg"  alt="Justin Joyce" width="90" height="70" border=0>
								</div>
							</td>
						</tr>
					</table>			
			</div>
			<div id="footer"> 
				<?php require 'includes/footerinfo.php'; ?>
			</div>
		</div>
	</body>
</html>
