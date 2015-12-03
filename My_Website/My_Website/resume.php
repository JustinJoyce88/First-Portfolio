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
					<div align="center"><font size="4">Resume</font></div>
                                        <hr style="color: #000; height: 5px;">
					<div id="blogbox" align="left">
                                            <p  style=" margin: 12px auto 6px auto; font-family: Helvetica,Arial,Sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-size: 14px; line-height: normal; font-size-adjust: none; font-stretch: normal; -x-system-font: none; display: block;"></p>
                                            <iframe class="scribd_iframe_embed" src="//www.scribd.com/embeds/227280040/content?start_page=1&view_mode=scroll&show_recommendations=true" data-auto-height="false" data-aspect-ratio="undefined" scrolling="no" id="doc_3156" width="100%" height="600" frameborder="0"></iframe>			
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