<?php

session_start();
include("connection.php");
$action = isset($_GET['a']) ? $_GET['a'] : "";
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>ISTYLEBYME</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	</script>
	<style>
	.submenu{
		display:none
	}

					
body { 
background-image: url(http://www.dhammada.net/wp-content/uploads/2011/04/camera.jpg) ; 
background-attachment:fixed; 
background-position:center center;
background-repeat: no-repeat;
margin-top: 0px;
background-size: 100%;
} 

</style>
<script type="text/javascript">
$(document).ready(function(){
$('.menu li').click(function(){
var index=$(this).index();
$('.menu li:eq('+index+') .submenu').slideToggle(200);
});
});
</script>
	</head>

<html>
<body>

<center><a href="http://www.uppic.org/share-EFA3_546CBA71.html"><img src="http://www.uppic.org/image-EFA3_546CBA71.jpg" width="1300px" height="250px"></a><center>
	<br>
	<br>	  
	   <?php include("header.php"); ?>
	
	<Table  Table width = "55%" bgcolor = "#FFFFFF" align = "center" cellspacing = "10px" cellpadding = "10px" >
	
		<TR>	
			<TD>
			<TD>
			
			<TD align="center">
			<html>


		<TABLE style = "padding-top:40px; padding-center:5px; padding-bottom:5px" cellspacing="0" cellpadding="10" >
		
		<a href="http://www.uppic.org/share-A573_546E2455.html"><img src="http://www.uppic.org/image-A573_546E2455.jpg"></a>
		<br>
		<br>
		
		<!-- Begin of mycalendar.org script --> <div align="Right" style="margin:15px 0px 0px 0px"> <noscript> <div align="center" style="width:140px;border:1px solid #ccc; background: #; color: #066800;font-weight:bold;font-size:12px;"> <a style="text-decoration: none; color: #066800;" href="http://mycalendar.org/Holiday/Thailand/">Thailand Calendar</a></div> </noscript> <script type="text/javascript" src="http://mycalendar.org/calendar.php?cp3_Hex=2E4900&cp2_Hex=FFFFFF&cp1_Hex=066800&ham=0&img=&hbg=1&hfg=1&sid=0&fwdt=180&text1=Holiday&text2=Thailand&group=Holiday&calendar=Thailand&widget_number=2"></script> </div> <!-- End of mycalendar.org script -->
		<br>
        <br>
		<br>
		<iframe src="http://www.tmd.go.th/daily_forecast_forweb.php" width="180" height="260" div align="Right"scrolling="no" frameborder=0></iframe>
				<TD width="10px" style="background-color:white;></TD>
				<TD height="30px" style="background-color:white;></TD>
				
				<br>
				<br>
				<
			</TR>
		</TABLE>
			</TD>
		</TR>
		<TR>
			<TD align = "center">
					
				<table align = "center" cellspacing = "10px" cellpadding = "10px" width = "10">
					<TR>
						<TD align = "center" style="padding-bottom:50px;">
						<?php
							$sql = "SELECT * from news order by news_date limit 6";
							$result = mysql_query($sql);
							
						?> 
							</TD> 
							</TR>

					<br>
					<br>
				
<TD>


<br>

				<table align = "center" cellspacing = "10px" cellpadding = "10px" width = "10">
					<TR>
						<TD align = "center" style="padding-bottom:50px;">
						<?php
							$sql = "SELECT * from news order by news_date limit 6";
							$result = mysql_query($sql);
							
						?> 
							</TD> 
							</TR>

					<TD>
					<center></font></b></center>
					<br>
					
					<br>
					<br>
					
					<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

					<script src="http://static.ak.fbcdn.net/connect.php/js/FB.Loader" type="text/javascript"></script>  
<script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>  
<table width="90" border="0">  
<tbody><tr>  
<td>  
  
  <br>
  <br>
  <div id="fb-root"></div>  

<br>
<br>

 <Right><div id="google_translate_element"></div></Right> 
<script>  
function googleTranslateElementInit() {  
  new google.translate.TranslateElement({  
    pageLanguage: 'th',  
    includedLanguages: 'ko,zh-TW,zh-CN,ja,th,fr,ms,de,en'  
  }, 'google_translate_element');  
}  
</script><script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</td>  
</tr>  
</tbody></table> 
					
					
     </b>
</center>
						<?php 
						?>
						</TD>
					</TR>
				</table>
			</TD>
		</TR>
		<TR>
			<TD>
				
			</TD>
		</TR>
		
	</Table>

	
	</BR>
	
	<?php include("footer.php"); ?>
	
</body>
</html>

<?php
	mysql_close($connect);
?>