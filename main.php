<?php
	$development = 1;
	if ($development == 1){
		echo 
		"<center>
		<h1>This app is under development</h1>
		<h3>Please Try Again Later or Contact <a href='http://devsysa.tk/boblan'>boblan</a> for details</h3>
		</center>";
	}elseif ($development == 2){
		echo
		"<center>
		<h1>This app is under maintenance</h1>
		<h3>Please Try Again Later or Contact <a href='http://devsysa.tk/boblan'>boblan</a> for details</h3>
		</center>";
	}elseif ($development == 0){
		echo "
		<center>
		<div id='game-header' class='game-header'>
			<div class='game-header-name-area'>
				<span>Welcome, <a class='game-header-user' href='{$sUserProfileUrl}'>{$sCurrentUserName}</a>!</span>
			</div>
		</div>
		<br>
		<div id='game-container' class='game-container'></div>
		<br>
		<div id='game-footer' class='game-footer'>
		<div class='game-footer-links'>
				<a href='http://devsysa.tk/boblan'>Support</a><br> || <a href='http://devsysa.tk/blog/7/explore-equestria-faq/'>FAQ</a>
				<span>My Little Pony (c) Hasbro Inc. 2016</span><br>
				<span>All characters and stories belong to their respected owners</span>
			</div>
		</div>
		</center>
			";
	}
?>
