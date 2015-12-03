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
					<div align="center"><font size="4">Contact</font></div>
                                        <hr style="color: #000; height: 5px;">
					<div id="blogbox">
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td>
									Cell: (786) 376-4318<br>
									Email: <a href="mailto:justinjoyce88@gmail.com">justinjoyce88@gmail.com</a><br>
									<a href="http://www.linkedin.com/pub/justin-joyce/47/269/52b">
          							<img src="http://www.linkedin.com/img/webpromo/btn_myprofile_160x33.png" width="160" height="33" border="0" alt="View Justin Joyce's profile on LinkedIn">
        							</a>
								</td>
							</tr>
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
									<br><font size="2" face="Helvetica">A portfolio of my projects</font>
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
