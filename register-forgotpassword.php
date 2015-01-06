
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ThaiTicketMajor : ไทยทิคเก็ตเมเจอร์ - บริการ ขายตั๋ว จองตั๋ว สำรองที่นั่ง คอนเสิร์ต การแสดง ท่องเที่ยว ละครเวที สัมมนา กีฬา ภาพยนตร์ - ระบบจำหน่ายบัตร ให้คุณได้รับความสะดวกสบายที่สุดแล้ววันนี้!</title>
<link rel="stylesheet" type="text/css" media="screen" href="http://www.thaiticketmajor.com/css/reset.css" />
<link rel="stylesheet" type="text/css" media="screen" href="http://www.thaiticketmajor.com/css/style.css" />
<link rel="stylesheet" type="text/css" media="screen" href="http://www.thaiticketmajor.com/css/menu.css" />
<link type="text/css" href="http://www.thaiticketmajor.com/themes/base/jquery.ui.all.css" rel="stylesheet" />
<link type="text/css" href="http://www.thaiticketmajor.com/css/demos.css" rel="stylesheet" />
<script type="text/javascript" src="http://www.thaiticketmajor.com/js/searchfield.js"></script>
<script type="text/javascript" src="http://www.thaiticketmajor.com/js/jquery-1.6.2.js"></script>
<script type="text/javascript" src="http://www.thaiticketmajor.com/ui/jquery.ui.core.js"></script>
<script type="text/javascript" src="http://www.thaiticketmajor.com/ui/jquery.ui.widget.js"></script>
<script type="text/javascript" src="http://www.thaiticketmajor.com/ui/jquery.ui.tabs.js"></script>

<script language="JavaScript" type="text/javascript">
/*<![CDATA[*/
var Lst;

function CngClass(obj){
 if (Lst) Lst.className='';
 obj.className='tab-selected';
 Lst=obj;
}

/*]]>*/
</script>

<script type="text/javascript">
	$(function() {
		//Search Box
		$("ul#navi_containTab > li").click(function(event){
				var menuIndex=$(this).index();
				$("ul#navi_containTab > li").removeClass('tab-selected');
				$("ul#detail_containTab > li:visible").hide();
				$(this).addClass('tab-selected');
				$("ul#detail_containTab > li").eq(menuIndex).show();
		});
		
		//Latest Events
		$("#tabs").tabs({
			ajaxOptions: {
				error: function(xhr, status, index, anchor) {
				$(anchor.hash).html("Couldn't load this tab. We'll try to fix this as soon as possible. If this wouldn't be a demo.");
				}
			}
		});
		$(".layoutswitch").toggle(function(){
			$(this).toggleClass("switch2");
			$(".itemlist ul").fadeOut("fast", function() {
				$(this).removeClass("layout1").addClass("layout2").fadeIn("fast");
			});
		}, function () {
			$(this).toggleClass("switch2");
			$(".itemlist ul").fadeOut("fast", function() {
				$(this).removeClass("layout2").addClass("layout1").fadeIn("fast");
			});
		}); 
		
		//$(".all-event ul a").bigTarget();

	});
	</script> 
    

<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>


</head>
<body>

<div id="wrapper">




	    <script type="text/javascript" src="http://www.thaiticketmajor.com/js/textsizer.js"></script>
<!--<div align="center"><img src="http://www.thaiticketmajor.com/images/celebrate-2014.gif" width="1000"></div>-->

<style media="all">
#searchBar {
  background: transparent url("../images/bg-bar2.jpg") repeat-x;
  width: 1000px;
  margin: 0;
  height: 62px;
}

#searchBar ul {
	list-style:none;
}
#searchBar li{
	display:block;
	float:left;
	margin:0;
	height:55px;
	width:148px;
	color:#414141;
	
}

#searchBar .headBar{width:430px; }

#searchBar .searchBox{width:190px; height:47px; padding-top:12px; padding-left:193px;}

#searchBar .howtoBuy{width:170px; height:47px; padding-top:12px; flo }


 /* New Search Box */

#search-form {
	background: #e1e1e1; /* Fallback color for non-css3 browsers */
	width: 175px;
	height:32px;
	
	/* Gradients */
	background: -webkit-gradient( linear,left top, left bottom, color-stop(0, rgb(243,243,243)), color-stop(1, rgb(225,225,225)));
	background: -moz-linear-gradient( center top, rgb(243,243,243) 0%, rgb(225,225,225) 100%);
	
	/* Rounded Corners */
	border-radius: 7px; 
	-webkit-border-radius: 7px;
	-moz-border-radius: 7px;
	
	/* Shadows */
	box-shadow: 1px 1px 2px rgba(0,0,0,.3), 0 0 2px rgba(0,0,0,.3); 
	-webkit-box-shadow: 1px 1px 2px rgba(0,0,0,.3), 0 0 2px rgba(0,0,0,.3);
	-moz-box-shadow: 1px 1px 2px rgba(0,0,0,.3), 0 0 2px rgba(0,0,0,.3);
}

/*** TEXT BOX ***/
#search-form input[type="text"]{
	background: #fafafa; /* Fallback color for non-css3 browsers */
	
	/* Gradients */
	background: -webkit-gradient( linear, left bottom, left top, color-stop(0, rgb(250,250,250)), color-stop(1, rgb(230,230,230)));
	background: -moz-linear-gradient( center top, rgb(250,250,250) 0%, rgb(230,230,230) 100%);
	
	border: 0;
	border-bottom: 1px solid #fff;
	border-right: 1px solid rgba(255,255,255,.8);
	font-size: 14px;
	
	margin: 4px 3px 3px 4px;
	padding: 5px 4px 4px 5px;
	width: 85px;
	height:13px;
	
	/* Rounded Corners */
	border-radius: 7px; 
	-webkit-border-radius: 7px;
	-moz-border-radius: 7px;
	
	/* Shadows */
	box-shadow: -1px -1px 2px rgba(0,0,0,.3), 0 0 1px rgba(0,0,0,.2);
	-webkit-box-shadow: -1px -1px 2px rgba(0,0,0,.3), 0 0 1px rgba(0,0,0,.2);
	-moz-box-shadow: -1px -1px 2px rgba(0,0,0,.3), 0 0 1px rgba(0,0,0,.2);
}

/*** USER IS FOCUSED ON TEXT BOX ***/
#search-form input[type="text"]:focus{
	outline: none;
	background: #fff; /* Fallback color for non-css3 browsers */
	
	/* Gradients */
	background: -webkit-gradient( linear, left bottom, left top, color-stop(0, rgb(255,255,255)), color-stop(1, rgb(235,235,235)));
	background: -moz-linear-gradient( center top, rgb(255,255,255) 0%, rgb(235,235,235) 100%);
}

/*** SEARCH BUTTON ***/
#search-form input[type="submit"]{

	border: solid 1px #da7c0c;
	background: #f47c20;
	background: -webkit-gradient(linear, left top, left bottom, from(#f88e11), to(#f06015));
	background: -moz-linear-gradient(top,  #f88e11,  #f06015);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f88e11', endColorstr='#f06015');
	border: 0;
	color: #eee;
	cursor: pointer;
	float: right;
	font: 13px Arial, Helvetica, sans-serif;
	font-weight: bold;
	height: 27px;
	margin: 2px 5px 0;
	width: 60px;
	outline: none;
	
	/* Rounded Corners */
	border-radius: 7px; 
	-webkit-border-radius: 7px;
	-moz-border-radius: 7px;
	
	/* Shadows */
	box-shadow: -1px -1px 1px rgba(255,255,255,.5), 1px 1px 0 rgba(0,0,0,.4);
	-moz-box-shadow: -1px -1px 1px rgba(255,255,255,.5), 1px 1px 0 rgba(0,0,0,.2);
	-webkit-box-shadow: -1px -1px 1px rgba(255,255,255,.5), 1px 1px 0 rgba(0,0,0,.4);
}
/*** SEARCH BUTTON HOVER ***/
#search-form input[type="submit"]:hover {
		
	/*background: #f78d1d;
	background: -webkit-gradient(linear, left top, left bottom, from(#faa51a), to(#f47a20));
	background: -moz-linear-gradient(top,  #faa51a,  #f47a20);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#faa51a', endColorstr='#f47a20');*/
	border: solid 1px #da7c0c;
	background: #f47c20;
	background: -webkit-gradient(linear, left top, left bottom, from(#f88e11), to(#f06015));
	background: -moz-linear-gradient(top,  #f88e11,  #f06015);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f88e11', endColorstr='#f06015');
	
}
#search-form input[type="submit"]:active {
	/*color: #fcd3a5;
	background: -webkit-gradient(linear, left top, left bottom, from(#f47a20), to(#faa51a));
	background: -moz-linear-gradient(top,  #f47a20,  #faa51a);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f47a20', endColorstr='#faa51a');*/
	border: solid 1px #da7c0c;
	background: #f47c20;
	background: -webkit-gradient(linear, left top, left bottom, from(#f88e11), to(#f06015));
	background: -moz-linear-gradient(top,  #f88e11,  #f06015);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f88e11', endColorstr='#f06015');
}

</style>

	<div id="header">
    		  <div id="headerLogin">
             <ul>
			    <li class="language"><a href="#"><img src="http://www.thaiticketmajor.com/images/txt-big.gif" width="20" height="13" /></a> <a href="#"><img src="http://www.thaiticketmajor.com/images/txt-small.gif" width="27" height="13" /></a>
                &nbsp;&nbsp;
		<a href="/tickets/register-forgotpassword.php?mbEmail=my_diary_zazie@hotmail.com&security_code=dv8twh&la=th"><img src="http://www.thaiticketmajor.com/images/icon-th.png" width="23" height="17" /></a><a href="/tickets/register-forgotpassword.php?mbEmail=my_diary_zazie@hotmail.com&security_code=dv8twh&la=en"><img src="http://www.thaiticketmajor.com/images/icon-en.png" width="23" height="17" /></a>                </li>
                
			<li class="icon-delivery"><a href="http://www.thaiticketmajor.com/delivery/delivery.php" target="_blank" class="tt"><img src="http://www.thaiticketmajor.com/images/delivery-ems-icon.png" name="Delivery" width="22" height="23" border="0"/> <span class="tooltip"><span class="top">Post track & trace</span></a></li>                
                
<form action="http://www.thaiticketmajor.com/members/checkuser.php" method="post" name="login" id="login" target="_parent">
                <li class="login"><strong>Welcome,</strong> <a href="http://www.thaiticketmajor.com/register/index.php?la=en">Sign in</a> | 
                <a href="http://www.thaiticketmajor.com/regis/index_eng.php?la=en" target="_parent">Register</a>&nbsp;&nbsp;</li>
</form>
            
                   <li class="social">
                   <a href="http://www.facebook.com/ThaiTicketMajor" target="_blank"><img src="http://www.thaiticketmajor.com/images/social-fb-ttm.png" name="facebook" width="30" height="31" border="0"/></a>
                   <a href="http://twitter.com/ThaiTicketMajor" target="_blank"><img src="http://www.thaiticketmajor.com/images/social-tw-ttm.png" name="TW" width="30" height="31" border="0"  /></a>
                   <a href="http://instagram.com/thaiticketmajor" target="_blank"><img src="http://www.thaiticketmajor.com/images/social-ins-ttm.png" name="RSS" width="30" height="31" border="0"/></a>	
                   <a href="http://www.thaiticketmajor.com/rss" target="_blank"><img src="http://www.thaiticketmajor.com/images/social-rss-ttm.png" name="RSS" width="30" height="31" border="0"/></a></li>				   </li>
		     </ul>
         </div> 
     <div class="clear"></div> 
     
     <div id="logoBanner">
             <ul>
                <li class="logo"><h1><a href="http://www.thaiticketmajor.com/index.php?la=en" title="ThaiTicket Major"><img src="http://www.thaiticketmajor.com/images/logo-ttm.png" alt="ThaiTicket Major" width="209" height="49"/></a></h1></li>
               <li class="truhits">
            <a target="_blank" href="#"><img height="17" width="14" border="0" alt="Thailand Web Stat" src="http://lvs.truehits.in.th/goggen.php?hc=q0027437&amp;bv=7&amp;rf=bookmark&amp;test=TEST&amp;web=/AZk4doNUTg2S%2beebEi14w%3D%3D&amp;bn=Netscape&amp;ss=1920*1080&amp;sc=24&amp;sv=1.3&amp;ck=y&amp;ja=y&amp;vt=45DC12F1.953&amp;fp=&amp;fv=10.2 r153&amp;truehitspage=&amp;truehitsurl=http%3a//www.thaiticketmajor.com/index.php"></a> </li>
                
                <li class="bannerLeaderBoard">
                         
     <iframe id='a8e026c6' name='a8e026c6' src='http://ads.thaiticketmajor.com/www/delivery/afr.php?zoneid=1&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;ct0=INSERT_CLICKURL_HERE' frameborder='0' scrolling='no' width='728' height='90'><a href='http://ads.thaiticketmajor.com/www/delivery/ck.php?n=a7193ad4&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://ads.thaiticketmajor.com/www/delivery/avw.php?zoneid=1&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a7193ad4&amp;ct0=INSERT_CLICKURL_HERE' border='0' alt='' /></a></iframe>
    
   
                </li>	
		     </ul>
      </div>
    </div> <!--End Header-->
    
 <div class="clear"> </div>
 

    <ul id="menu">
    
    <li><a href="http://www.thaiticketmajor.com/index.php">HOME</a><!-- Begin Home Item -->
    
        <div class="dropdown_2columns"><!-- Begin 2 columns container -->
    
            <div class="col_2">
                <h2>Welcome !</h2>
            </div>
    
            <div class="col_2">
                <p>Welcome to ThaiTicketMajor the Largest Entertainment <strong>Thailand Ticket Center</strong>.</p>             
    </div>
            <div class="col_2">
                <p>Connect all the latest updates of entertainment here. Hot Promotion &amp; Lastest Concert Live Show Update.</p>             
            </div>
            <div class="col_2">
                <p><strong>Follow us</strong> 
                <img src="http://www.thaiticketmajor.com/images/iconsocial/ttm_fb_icon_w.gif" border="0" onclick="window.location = 'http://www.facebook.com/ThaiTicketMajor'"> 
                <img src="http://www.thaiticketmajor.com/images/iconsocial/ttm_tw_icon_w.gif" border="0" onclick="window.location = 'http://twitter.com/#!/ThaiTicketMajor'"> 
                <img src="http://www.thaiticketmajor.com/images/iconsocial/ttm_m_icon_w.gif" border="0" onclick="window.location = 'http://mobile.thaiticketmajor.com/'"> 
                <img src="http://www.thaiticketmajor.com/images/iconsocial/ttm_rss_icon_w.gif" border="0" onclick="window.location = 'http://www.thaiticketmajor.com/rss'">
              </p>
            </div>
            <div class="col_2">
                <p>Bus Ticket Service avaliable 24-hour.</p>
            </div>
          
    </div><!-- End 2 columns container -->
    
    </li><!-- End Home Item -->

    <li><a href="http://www.thaiticketmajor.com/all-event.php?la=en">ALL EVENTS</a><!-- Begin 5 columns Item -->
    
        <!-- End 5 columns container -->
    
    </li><!-- End 5 columns Item -->

    <li><a href="http://www.thaiticketmajor.com/concert/index.php?la=en">CONCERT</a><!-- Begin 4 columns Item -->
      <div class="dropdown_3columns align_left"><!-- Begin 3 columns container -->
          <div class="col_3">
              <h2>Slot Machine : The First Contact</h2>
        </div>
            
            <div class="col_3"><a href="http://www.thaiticketmajor.com/concert/concert-detail.php?sid=2454&amp;la=en"><img src="http://www.thaiticketmajor.com/concert/images/slot-machine-the-first-contact-2014/spot.jpg" alt="Slot Machine : The First Contact" title="Slot Machine : The First Contact" width="160" height="70" border="0" class="img_left imgshadow" /></a>
     <p><strong>Slot Machine : The First Contact </strong> <a href="http://www.thaiticketmajor.com/concert/concert-detail.php?sid=2454&amp;la=en"> Read more</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
  <a href="http://www.thaiticketmajor.com/concert/concert-detail.php?sid=2447&amp;la=en"><img src="http://www.thaiticketmajor.com/concert/images/the-palace-friends-2014/spot.jpg" alt="Crystal presents THE PALACE &amp; FRIENDS" title="Crystal presents THE PALACE & FRIENDS" width="160" height="70" border="0" class="img_left imgshadow" /></a>
     <p><strong>Crystal presents THE PALACE & FRIENDS </strong> <a href="http://www.thaiticketmajor.com/concert/concert-detail.php?sid=2447&amp;la=en"> Read more</a></p>
        </div>
        <div style=" clear:both;"></div>
        <div class="menu-view-all"><a href="http://www.thaiticketmajor.com/concert/index.php?la=en" title="คอนเสิร์ต" target="_parent">View all Concert</a></div>
      </div>
      <!-- End 4 columns container -->
    
    </li><!-- End 4 columns Item -->

	<li><a href="http://www.thaiticketmajor.com/performance/index.php?la=en">LIVE SHOW</a><!-- Begin 5 columns Item -->
	  <div class="dropdown_3columns align_left"><!-- Begin 3 columns container -->
          <div class="col_3">
              <h2>See Phan Din the Musical - Thursday 17 July 2014. At Muangthai Rachadalai Theatre</h2>
        </div>
            
            <div class="col_3"><a href="http://www.thaiticketmajor.com/performance/performance-detail.php?sid=2277&amp;la=en"><img src="http://www.thaiticketmajor.com/performance/images/see-phan-din-2014/spot.jpg" alt="See Phan Din the Musical" title="See Phan Din the Musical" width="160" height="70" border="0" class="img_left imgshadow" /></a>
     <p><strong>See Phan Din the Musical</strong> -  The return of stage performance of Rattanakosin which impressed more than 100,000 viewers <a href="http://www.thaiticketmajor.com/performance/performance-detail.php?sid=2277&amp;la=en">Read more</a></p>
              <a href="http://www.thaiticketmajor.com/performance/performance-detail.php?sid=2382&amp;la=en"><img src="http://www.thaiticketmajor.com/performance/images/icp-2014/spot.jpg" alt="ICP 2014 : Bangkok's 16th International Festival of Dance &amp; Music" title="ICP 2014 : Bangkok's 16th International Festival of Dance & Music" width="160" height="70" border="0" class="img_left imgshadow" /></a>
     <p><strong>ICP 2014 : Bangkok's 16th International Festival of Dance & Music</strong> <a href="http://www.thaiticketmajor.com/performance/performance-detail.php?sid=2382&amp;la=en">Read more</a></p>
        </div><div style=" clear:both;"></div>
        <div class="menu-view-all"><a href="http://www.thaiticketmajor.com/performance/index.php?la=en" title="การแสดง" target="_parent">View all Performance</a></div>
      </div>
	  <!-- End 5 columns container -->
    
    </li><!-- End 5 columns Item -->
    
    <li><a href="http://www.thaiticketmajor.com/travel/index.php?la=en">TRAVEL</a><!-- Begin 5 columns Item -->
      <div class="dropdown_3columns align_left"><!-- Begin 3 columns container -->
          <div class="col_3">
              <h2><a href="http://www.thaiticketmajor.com/travel/hotels/radisson-blu-plaza-resort" title="Radisson Blu Plaza Resort">Radisson Blu Plaza Resort รีสอร์ท ระดับ 5 ดาว ตั้งอยู่ที่แหลมพันวา ภูเก็ต เป็นสถานที่พักสำหรับผู้ที่แสวงหาการผ่อนคลาย และความเป็นส่วนตัวในการเข้าพัก</a>
</h2>
        </div>
            
            <div class="col_3">
              <a href="http://www.thaiticketmajor.com/travel/international/package-5-days-3-nights-asiangames-korea"><img src="http://www.thaiticketmajor.com/travel/images/719-program-Korea-5d3n/asiangames-spot.jpg" title="package 5 days 3 nights asiangames korea" alt="package 5 days 3 nights asiangames korea" width="160" height="70" border="0" class="img_left imgshadow" /></a>
              <p><strong>Package 5 days 3 nights Asiangames Korea</strong> -  <a href="http://www.thaiticketmajor.com/travel/international/package-5-days-3-nights-asiangames-korea">More Details ...</a></p>
<p><a href="http://www.thaiticketmajor.com/travel/thailand/day-trip-parting-sea"><br />
                  <br />
                <img src="http://www.thaiticketmajor.com/travel/images/571-parting-sea/spot.jpg" alt="Day Trip Parting Sea" width="160" height="70" border="0" class="img_left imgshadow" /></a>              </p>
              <p><strong>Day Trip Parting Sea</strong>.   <a href="http://www.thaiticketmajor.com/travel/thailand/day-trip-parting-sea">More Details ...</a></p>
                  
        </div><div style=" clear:both;"></div>
        
        <div class="menu-view-all"><a href="http://www.thaiticketmajor.com/travel/" title="แพ็คเกจท่องเที่ยว" target="_parent">View all package tour</a></div>
      </div>
    </li>
    <!-- End 5 columns Item -->
    
    <li><a href="http://www.thaiticketmajor.com/shopping/index.php?la=en">SHOPPING</a><!-- Begin 5 columns Item -->
      <div class="dropdown_3columns align_left">
    <!-- Begin 3 columns container -->
      <div class="col_3">
        <div class="col_3">
              <h2> T-shirt ขนนกกับดอกไม้ THE ORIGINAL RETURNS</h2>
      </div>
            
             <div class="col_3">
            
             <a href="http://www.thaiticketmajor.com/shopping/shopping-detail.php?sid=2350"><img src="http://www.thaiticketmajor.com//shopping/images/bird-the-original-return-t-shirt/spot.jpg" alt="Day Trip ทะเลแหวก" width="160" height="70" border="0" class="img_left imgshadow" /></a>
                  <p><strong>T-shirt ขนนกกับดอกไม้ THE ORIGINAL RETURNS</strong>. ของแท้ สามารถสั่งซื้อเป็น เจ้าของได้แล้ววันนี้!!! <a href="http://www.thaiticketmajor.com/shopping/shopping-detail.php?sid=2350">อ่านเพิ่ม...</a></p>
                 <br />
                <a href="http://www.thaiticketmajor.com/shopping/shopping-detail.php?sid=2434"><img src="http://www.thaiticketmajor.com/shopping/images/781-volleyball-shirt-no-screen/spot.jpg" alt="Day Trip ทะเลแหวก" width="160" height="70" border="0" class="img_left imgshadow" /></a>
                <p><strong>เสื้อวอลเล่ย์บอล 2014</strong>. ของแท้ ผลิตโดยบริษัท แกรนด์สปอร์ต มีทั้งสี น้ำเงิน สีดำ และสีขาว ไซส์ S M L XL 3L และ 4L สั่งซื้อได้แล้ววันนี้!!! <a href="http://www.thaiticketmajor.com/shopping/shopping-detail.php?sid=2434">อ่านเพิ่ม...</a></p>
          <div style=" clear:both;"></div>
          <div class="menu-view-all"><a href="http://www.thaiticketmajor.com/shopping/" title="สินค้า" target="_parent">ดูสินค้าทั้งหมด</a></div>
  
      </div>
      <!-- End 3 columns container -->
      </div>
      <!-- End 3 columns container -->
    
    </li><!-- End 5 columns Item -->
    
<li><a href="http://www.thaiticketmajor.com/movie/index.php?la=en">MOVIE</a><!-- Begin 3 columns Item -->
  
  <!-- End 3 columns container -->
        
    </li><!-- End 3 columns Item -->
    
<li><a href="http://www.thaiticketmajor.com/sport/index.php?la=en">SPORT</a><!-- Begin 3 columns Item -->
  
  <!-- End 3 columns container -->
        
    </li><!-- End 3 columns Item -->
    
   <li><a href="http://www.thaiticketmajor.com/seminar/index.php?la=en">SEMINAR</a><!-- Begin 3 columns Item -->
     
     <!-- End 3 columns container -->
        
    </li><!-- End 3 columns Item -->
    
   <li><a href="http://www.thaiticketmajor.com/bus/index.php?la=en">TRANSPORTATION</a><!-- Begin 3 columns Item -->
     
     <!-- End 3 columns container -->
        
    </li><!-- End 3 columns Item -->
    
    <div style="float:right">
    <a href="http://www.thaiticketmajor.com/member"><img src="http://www.thaiticketmajor.com/images/member-menu.jpg" width="122" height="38" border="0" /></a>
    </div>

    <!-- End 3 columns Item -->


</ul>


    <div class="clear"> </div>
    
<div class="grid_12 " id="searchBar">
         <ul>
			  <li class="headBar">

<iframe id='a15c7536' name='a15c7536' src='http://ads.thaiticketmajor.com/www/delivery/afr.php?zoneid=129&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;ct0=INSERT_CLICKURL_HERE' frameborder='0' scrolling='no' width='635' height='62'><a href='http://ads.thaiticketmajor.com/www/delivery/ck.php?n=aa1fc53e&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://ads.thaiticketmajor.com/www/delivery/avw.php?zoneid=129&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=aa1fc53e&amp;ct0=INSERT_CLICKURL_HERE' border='0' alt='' /></a></iframe> 
               
     </li>
     <li class="searchBox"> 
<script>
function validateSearch(obj){
	if(obj.keysearch.value == ""){
		alert("Please specify keyword.");
		obj.keysearch.focus();
		return false;
	}
	return true;
}
</script>     

		<form id="search-form" method="get" name="frmSearch" action="http://www.thaiticketmajor.com/search/result.php?la=en" onsubmit="return validateSearch(this)">
  <input type="text"  name="keysearch" onfocus="if(this.value=='search event')this.value=''" onblur="if(this.value=='')this.value='search event'" value="search event"/>
		<input type="submit" value="Search" />
		</form>

    
          </li>
          <li class="howtoBuy-new howtobuy-btn"><a href="http://www.thaiticketmajor.com/helpchart.php?la=en" target="_parent">HOW TO BUY <font color="#000000">TICKETS</font></a>
          <div style="margin-left:4px; margin-top:-2px; float:right;"><img src="http://www.thaiticketmajor.com/images/question-icon.png" width="21" height="21" /></div> </li>	
		</ul>
</div>
    <div class="clear"> </div> 
    
   <!--<div id="bannerPushDown"> <a href="#"><img src="images/banner-pushdown.jpg" width="961" height="50" /></a></div>-->
    
     <div class="clear"> </div> 

<div align="center">
<table width="1000px" border="0" cellspacing="0" cellpadding="0" bgcolor="#F7F7F7">
  <tr>
    <td style="text-align:center" colspan="2" ><!--<a href="all.php"><h1><b>HOME</b></h1></a>-->
	</td>
  </tr>
  <tr>
  <td align="left"  >&nbsp;&nbsp;<font color="#0000FF">
	</font></td>
    <td  style="text-align:right" ><a href="/tickets/register-forgotpassword.php?mbEmail=my_diary_zazie@hotmail.com&security_code=dv8twh&lang=th&la=th"><img src="http://www.thaiticketmajor.com/tickets/images/thai.gif" border="0" /></a>&nbsp;<a href="/tickets/register-forgotpassword.php?mbEmail=my_diary_zazie@hotmail.com&security_code=dv8twh&lang=en&la=en"><img src="http://www.thaiticketmajor.com/tickets/images/eng.gif" border="0" /></a>&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td align="center" colspan="2" >&nbsp;
	</td>
  </tr>
</table> 
</div>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="http://www.thaiticketmajor.com/tickets/js/jquery.js"></script>
<script type="text/javascript" src="http://www.thaiticketmajor.com/tickets/js/jquery.tooltip.js"></script>
<script type="text/javascript" src="http://www.thaiticketmajor.com/tickets/js/boxover.js"></script>
 <script type="text/javascript" src="http://www.thaiticketmajor.com/tickets/js/ui/minified/jquery-ui.min.js?2.0"></script>

<link rel="stylesheet" href="http://www.thaiticketmajor.com/tickets/css/theme1/main.css" />
<link rel="stylesheet" href="http://www.thaiticketmajor.com/tickets/css/theme1/jquery.tooltip.css" />
<link rel="stylesheet" type="text/css" href="http://www.thaiticketmajor.com/tickets/css/ui/base/ui.all.css?2.0"/>

<div id="loading" style="
    display:none;
    position:absolute;
    top:50%;
    left:50%;
    width:100px;
    height:20px;
    padding:5px 10px;
    margin-left:-63px;
    margin-top:-16px;
    background: #F0F0F0;
    border:5px solid #CCCCCC;
    text-align: center;
    vertical-align: middle;
    z-index:100;">
    <img id="loading-image" src="http://www.thaiticketmajor.com/tickets/images/en/large-loading.gif" style="width:16px;height:16px;border:none;vertical-align: middle;">
    <span id="loading-text" style="font-family:Tahoma;font-size:13px;color:#000000;"> Loading ...</span>
</div>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Thanks Page</title>
</head>

<body>
<form name="frmmain" id="frmmain"  method="post">
<table width="100%" height="300" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#F7F7F7">
  <tr>
    <td height="19" align="center" valign="top" bgcolor="#F7F7F7"><table width="690" border="0" cellspacing="0" cellpadding="0" bgcolor="#F7F7F7" align="center">
   
      <tr>
        <td align="center"><div align="center" class="style1"><span class="style2"><br>
          <br>
          <b>Please enter your e-mail. The system will send it via email.</b></span><br>
          <br>
          </div></td>
      </tr>
    </table>
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="2" bgcolor="#FFFFFF">
       <tr>
          <td width="30%" height="20">&nbsp;</td>
          <td width="70%">&nbsp;</td>
        </tr>
        <tr>
          <td height="30"><div align="right"><span class="style1"><b>Email&nbsp;:</b>&nbsp;</span></div></td>
          <td><div align="left">
            <input name="mbEmail" id="mbEmail" type="text" size="30" class="text">
          </div></td>
        </tr>
       <tr>
          <td height="30"><div align="left"></div></td>
          <td><div align="left"><span class="style1">E-mail address used to register.</span></div></td>
        </tr>
          <tr>
          <td height="30"><div align="left"></div></td>
          <td><div align="left"><span class="style1"><img src="gencaptcha.php?width=180&height=32" /></span></div></td>
        </tr>
           <tr>
          <td height="30"><div align="left"></div></td>
          <td><div align="left"><span class="style1"><input type="text" id="security_code" name="security_code" placeholder="Security Code" size="24"></span></div></td>
        </tr>
        
        <tr>
          <td height="30"><div align="left"></div></td>
          <td><div align="left"><input type="button"  value="Submit" class="Button" onclick="checkForgot(this)"></div></td>
        </tr>
      </table></td>
  </tr>
</table>
</form>
</body>
<script>
function checkForgot(obj) {
	alert($("#frmmain").serialize());
	if ($.trim($("#mbEmail").val()) == '') {
		alert('Please insert email!');
		return false;
	}
	if ($.trim($("#security_code").val()) == '') {
		alert('Please insert security code!');
		return false;
	}
	$.post('http://www.thaiticketmajor.com/tickets/register-forgotpassword.ajax.php', $("#frmmain").serialize(),
        function(data, status)
        {
            //alert(data);
            var re = eval ('(' + data + ')');
            if(re.result==true)
            {
				location.href="http://www.thaiticketmajor.com/tickets/register-forgotpassword_complete.php";

            }else{
                 location.href="http://www.thaiticketmajor.com/tickets/register-forgotpassword_fail.php";  
            }
        }
    );
	obj.disabled = true;
}
</script>
</html>


<div id="event-concert-footer">
	 
<div id="footer-new" class="bg-red">
  <div class="box-socail">FOLLOW US <br />

	<div class="social-box">
    <ul>
    
    <li><a href="http://www.facebook.com/ThaiTicketMajor" target="_blank"><img src="http://www.thaiticketmajor.com/images/facebook-i.png" width="35" height="35" border="0" /></a></li>
    <li><a href="http://twitter.com/#!/ThaiTicketMajor" target="_blank"><img src="http://www.thaiticketmajor.com/images/twitter-i.png" width="35" height="35" border="0" /></a></li>
    <li><a href="http://instagram.com/thaiticketmajor" target="_blank"><img src="http://www.thaiticketmajor.com/images/instargram-i.png" width="35" height="35" border="0" /></a></li>
    <li><a href="https://plus.google.com/113763184491207536689" target="_blank"><img src="http://www.thaiticketmajor.com/images/google-footer-logo.png" width="35" height="35" border="0" /></a></li>
    <li><a href="http://www.thaiticketmajor.com/rss" target="_blank"><img src="http://www.thaiticketmajor.com/images/rss-i.png" width="35" height="35" border="0" /></a></li>
    <li><a href="http://www.thaiticketmajor.com/contact/?la=en" target="_blank"><img src="http://www.thaiticketmajor.com/images/mail-i.png" width="35" height="35" border="0" /></a></li>
    
    </ul>
    </div>
	</div>
   
  <div class="box-service">OUR SERVICE
    <div class="box-text"> <a href="http://www.thaiticketmajor.com/all-event.php?la=en" target="_blank"> &bull; All Event Ticket</a><br />
      <a href="http://www.thaiticketmajor.com/bus/index.php?la=en" target="_blank"> &bull; Bus Ticket</a><br />
      <a href="http://www.thaiticketmajor.com/travel/flights.php?la=en" target="_blank"> &bull; Air Ticket</a><br />
      <a href="http://www.thaiticketmajor.com/travel/hotel.php?la=en" target="_blank"> &bull; Hotel</a><br />
      <a href="http://www.thaiticketmajor.com/travel/tour.php?la=en" target="_blank"> &bull; Package Tour</a><br />
    <a href="http://www.thaiticketmajor.com/movie/index.php?la=en" target="_blank"> &bull; Movie Ticket</a>  </div>
</div>
  
  <div class="box-news-events">UPCOMING EVENTS
    <div class="box-text">
    <a href="http://www.thaiticketmajor.com/concert/concert-detail.php?sid=2466&la=en" target="_blank">• Kamikaze Concert</a><br />
    <a href="http://www.thaiticketmajor.com/concert/concert-detail.php?sid=2499&la=en" target="_blank">• Lenyai Concert</a><br />
    <a href="http://www.thaiticketmajor.com/concert/concert-detail.php?sid=2494&la=en" target="_blank">• 2PM WORLD TOUR</a><br />
    <a href="http://www.thaiticketmajor.com/concert/concert-detail.php?sid=2498&la=en" target="_blank">• BRING ME THE HORIZON</a><br />
    <a href="http://www.thaiticketmajor.com/performance/performance-detail.php?sid=2492&la=en" target="_blank">• Dek-D's Admission On Stage</a><br />
    </div>
</div>

  
 <div class="box-hot-events">&nbsp;&nbsp;HOT EVENTS
    <div class="box-text">
    <a href="http://www.thaiticketmajor.com/performance/performance-detail.php?sid=2277&la=en" target="_blank">• See Phan Din the Musical</a><br /> 
    <a href="http://www.thaiticketmajor.com/concert/concert-detail.php?sid=2373&la=en" target="_blank">• ONE DIRECTION THE ON THE ROAD</a><br />
    <a href="http://www.thaiticketmajor.com/concert/concert-detail.php?sid=2454&la=en" target="_blank">• Slot Machine : The First Contact</a><br />
    <a href="http://www.thaiticketmajor.com/concert/concert-detail.php?sid=2446&la=en" target="_blank">• Give Me Five : Concert Rate A</a><br />
    <a href="http://www.thaiticketmajor.com/concert/concert-detail.php?sid=2414&la=en" target="_blank">• GREEN CONCERT # 17</a><br /> 
   </div>
 </div>
  
    <div class="box-buy">HELP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="box-text">
<a href="http://www.thaiticketmajor.com/helpchart.php?la=en" target="_blank">&bull; How to buy ticket</a><br />
    <a href="http://www.thaiticketmajor.com/outlets.php?la=en" target="_blank">&bull; Outlets</a><br />
	<a href="http://www.thaiticketmajor.com/bus/payment-bus.php?la=en" target="_blank">&bull; Payment Point</a><br />
 <a href="http://www.thaiticketmajor.com/venue/venue_guideE.php" target="_blank">&bull; Venues  </a><br />
    <a href="http://www.thaiticketmajor.com/policies.php?la=en" target="_blank">&bull; Policies  </a><br />
    <a href="http://www.thaiticketmajor.com/contact.php?la=en" target="_blank">&bull; Contact us </a><br />

    </div>
  </div>
  

  <div class="navigationmenu">
   <div class="navigationmenu-text-en">
       <ul>
       
       <li><a href="http://www.thaiticketmajor.com/advertisement.php" target="_blank">Advertisement</a>
       </li>
       
       <li>|</li>
       
       <li><a href="http://www.thaiticketmajor.com/jobs/?la=en" target="_blank">Careers </a>	
       </li>
       
       <li>|</li>
       
       <li><a href="http://www.thaiticketmajor.com/sitemap.php?la=en" target="_blank">Sitemap</a>
       </li>
       
       <li>|</li>
       
       <li><a href="http://www.thaiticketmajor.com/feedback.php?la=en" target="_blank">Feedback</a>
		</li>
        
        <li>|</li>       
        
        <li><a href="http://www.thaiticketmajor.com/regis/unsub_eng.htm" target="_blank">Unsubscribe Email</a>
        </li>
        
        <li>|</li>
        
        <li><a href="http://www.thaiticketmajor.com/contact.php?la=en" target="_blank">Contact us</a>	
        </li>
        
        <li>|</li>
        
		<li><a href="http://www.thaiticketmajor.com/about.php?la=en" target="_blank">About Us </a>
        </li>

        </ul>
    </div>
  </div>
  
   
<div class="logo-sponsor">
         <div class="logo-sponsor-logottm"> <a href="http://www.thaiticketmajor.com/index_eng.php"><img src="http://www.thaiticketmajor.com/images/logo-ttm.jpg" alt="" width="129" height="31" border="0" /></a> </div>
         <div class="logo-sponsor-details-text"><a href="http://www.thaiticketmajor.com/license/index.php?la=en" target="_blank">Copyright</a> &copy; 2000-2014  Thaiticket Major All Rights Reserved.  <br />
         </div>
         <div class="logo-sponsor-logosponsor"> <img src="http://www.thaiticketmajor.com/images/logo-sponsor.jpg" alt="" width="469" height="33" border="0" usemap="#Map2" />
          <map name="Map2" id="Map232">
           <area shape="rect" coords="4,0,43,28" href="http://www.thaiticketmajor.com/citibank-2014.php" target="_blank" alt="citibank" />
           <area shape="rect" coords="66,2,93,32" href="http://www.central.co.th" target="_blank" alt="Central Plaza" />
           <area shape="rect" coords="117,0,137,29" href="http://www.majorcineplex.com/" target="_blank" alt="Major Cineplex" />
           <area shape="rect" coords="162,6,197,28"href="http://www.majorcineplex.com/" target="_blank" alt="Major Cineplex" />
           <area shape="rect" coords="219,3,261,30" href="http://www.majorcineplex.com/paragoncineplex/" target="_blank" alt="Paragon Cineplex" />
           <area shape="rect" coords="277,2,327,32" href="http://www.majorcineplex.com/esplanadecineplex/" target="_blank" alt="Esplanade Cineplex" />
           <area shape="rect" coords="350,3,413,31" href="http://www.thaiticketmajor.com/ticketprotect/index.php" target="_blank" alt="Ticket Protect " />
           <area shape="rect" coords="428,2,461,32" href="http://www.thaiticketmajor.com/newhamshire_toursure.php" target="_blank" alt="Tour Sure" />
          </map>
         </div>
</div>


     <div style=" clear:both"></div>  
<!-- Start of Google Analytics script -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-2666540-2");
pageTracker._trackPageview();
</script>
<!-- End of Google Analytics script -->
	
	 </div>

</div>
</body>
</html>
