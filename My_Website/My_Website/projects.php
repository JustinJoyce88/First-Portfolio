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
					<div align="center"><font size="4">Projects</font></div>
                                        <hr style="color: #000; height: 5px;">
					<div id="blogbox">
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td>
									
									<font size ="4"><u>Software Development</u></font><br>
                                                                        <font size="2">These projects are not executables. It is just the source code.</font><br><br>
                                                                        
									Java Programming 2 - Fall 2012<br>   
									<a href="http://bit.ly/1kea8QT">Ghost Labyrinth</a><br>
                                                                        <b>Description:</b> Designed and developed a Java based labyrinth game in a team of 4 that utilized polymorphism, linked lists, and recursion.<br>
                                                                        <hr>
									Data Communications - Summer 2013<br>
									<a href="http://bit.ly/1kudqzP">Halo Rock Paper Scissors</a><br>
                                                                        <b>Description:</b> Designed and developed an online Java based rock paper scissors game in a team of 2 that utilized UDP sockets to establish a connection. 
                                                                        This game featured multiple game modes, images, and music. This version in particular is in scale for a 1366x768 resolution (most laptops).<br><br>
                                                                        This link contains a YouTube video demonstrating the game. <br>
                                                                        <a href="http://bit.ly/1oEbyac">Halo RPS demo</a><br>
                                                                        <hr>
                                                                        Component Based Software Development - Spring 2014<br>
                                                                        <a href="http://bit.ly/1kRZwH6">Stock Analyzer</a><br>
                                                                        <b>Description:</b> Developed an application in C# in a team of 2 that pulls stock information from an online XML file and displays a line graph of the stock’s 
                                                                        closing price and moving average for any specified date range.<br>
                                                                        <hr style="color: #000; height: 5px;">
                                                                        
                                                                        <font size ="4"><u>Networking</u></font><br><br>
                                                                        Applied Computer Networking - Spring 2013<br>
									<a href="http://www.scribd.com/doc/227267689/Network-Design">Network Design</a><br>
                                                                        <b>Description:</b> Engineered subnet tree, physical, and logical diagrams for a small network consisting of 6 subnets and 6 routers.<br>
                                                                        <hr>
                                                                        Advanced Network Management - Spring 2014<br>
                                                                        <b>Description:</b> Collaborated in a team of 4 to configure and manage a small network of Cisco IOS, Junos, and Quagga routers. 
                                                                        Responsibilities included assigning IP’s, static routes, NTP, Syslog, DNS, DHCP, dhcrelays, OSPF, BGP, VRRP, Spanning Trees, 802.1q Vlans, 
                                                                        Firewalling with ACL’s, and IPv6.<br>
                                                                        <hr style="color: #000; height: 5px;">
                                                                        
                                                                        <font size ="4"><u>System Administration</u></font><br><br>
                                                                        Unix System Administration - Fall 2013<br>
									<a href="http://bit.ly/1gJXLw4">Unix Journal</a><br>
                                                                        <b>Description:</b> Installed and managed a CentOS 5 server through VMware Server Console and SSH remotely. <br>
									
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