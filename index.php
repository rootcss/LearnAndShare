<?php
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['type']) && !empty($_POST['feed']))
{
	$fp = fopen('feed_data.htm', 'a+');
	$data=$_POST['name']."<br>".$_POST['email']."<br>".$_POST['type']."<br>".date('d/m/y#H:i:s')."<br>".$_POST['feed']."<hr>";	
	fwrite($fp, $data);
	echo'<script>alert("Thanks for your Feedback.")</script>';
}	
?>
<html>
<head>
<title>Learn & Share</title>
<style>
body{margin:0px auto;background: #eeeeee;}
#wrapper{height: 650px;width: 1200px;margin: 0px auto; background: #cccccc;border-radius: 5px;}
#header{height: 50px;width: 100%;background: #333333;border-radius: 5px 5px 0px 0px;}
#container{height: 550px;width: 100%;}
#footer{height: 50px;width: 100%;background: #333333;border-radius: 0px 0px 5px 5px;text-align: center;}
#logo{font-size: 30px;color: #fafafa;padding: 5px;float: left;}
#logo a{color: #fafafa;text-decoration: none;}
#logo a:visited{color: #fafafa;}
#center{width: 840px;height: 100%;float: left;background: url(center.png) no-repeat center center / auto 150%;}
#right{width: 320px;height: 100%;float: right;text-align: center;padding:20px; }
.heading{font-size: 20px;}
#right form{}
#right .sub{line-height: 25px;font-size: 14px;}
#right input, textarea, option, select{font-size: 16px;border:0px;border-radius: 2px;}
#navbar{float: right;padding-top: 13px;padding-right: 20px;}
.li{font-size: 20px;color: #cccccc;padding-left: 20px;}
text:hover{color: #fafafa;border-top: 1px solid #cccccc;cursor: pointer;}
.li a{color: #cccccc;text-decoration: none;}
.li a:visited{color: #cccccc;}
.foot{color: #fafafa;line-height: 45px;float: left;padding-left: 20px;}
</style>
<script>
</script>
</head>
<body>
		<div id="fb-root"></div>	
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=609820605705853";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	<div id="wrapper">
		<div id="header">			
			<div id="navbar">
				<span class="li"><a target="_blank" href="http://cshekharsingh.blogspot.in"><text>Blog</text></a></span>
				<span class="li"><a target="_blank" href="https://skydrive.live.com/redir?resid=A6BBE529352F92C3!112&authkey=!ABQiVESqgqtcX78"><text>Tutorials / eBooks</text></a></span>
				<span class="li"><a target="_blank" href="https://www.facebook.com/LearnShareTech"><text>Facebook</text></a></span>
			</div>	
			<div id="logo">
				<a href="index.php">Learn &amp; Share</a>
			</div>
		</div>
		<div id="container">
			<div id="center">
			</div>
			<div id="right">
				<span class="heading">Share an Idea !<br>Or<br>Give your Feedback</span><br>
				<span class="sub">
					(If you have any Idea or any Doubt related to any field. Do Inbox me !)
				</span>
				<form action="" method="POST">
					<input type="text" name="name" placeholder="Name" required><br><br>
					<input type="text" name="email" placeholder="Email ID" required><br><br>
					<select name="type">
						<option value="feedback">Feedback</option>
						<option value="idea">Idea</option>
						<option value="suggestion">Suggestion</option>
						<option value="doubt">Doubt</option>
					</select><br><br>	
					<textarea name="feed" placeholder="Your text here..." rows=10 cols=24 required></textarea><br><br>
					<input type="submit" value="Submit">
				</form>	
			</div>	
		</div>
		<div id="footer">
			<span class="foot">Learn &amp; Share 2013. &nbsp;&nbsp;&nbsp;
				<div class="fb-like" data-href="https://www.facebook.com/LearnShareTech" data-width="450" data-layout="button_count" data-show-faces="true" data-send="true">
			</div>
			</span>
		</div>	
	</div>
</body>
<html>

<!--
FB page add-on
Tutz link
Blog Link
-->
