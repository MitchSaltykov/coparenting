<?php

if (!$user) {
	if ($_GET['user']) {
		$user = $_GET['user'];		
	} else {
		$user = 'bp';
	}
}

if (!$page) {
	$page = $_GET['page'];
}

switch ($user) {
    case 'sw':
        $title = 'Social Worker';
        $case_id = 1;
        break;
    case 'fp':
        $title = 'Foster Parent';
        break;
    case 'bp':
        $title = 'Biological Parent';
        break;
    default:
    	$title = 'Social Worker';
}

?>
<html>
	<head>
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

		<meta name="viewport" content="initial-scale=1.0,width=320.1,user-scalable=no,minimum-scale=1.0, maximum-scale=1.0">
		
		<link rel="stylesheet" type="text/css" href="css/framework/reset.css">
		<link rel="stylesheet" type="text/css" href="css/framework/global.css">
		<link rel="stylesheet" type="text/css" href="css/framework/typography.css">
		<link rel="stylesheet" type="text/css" href="css/framework/colors.css">
		<link rel="stylesheet" type="text/css" href="css/framework/structure.css">
		<link rel="stylesheet" type="text/css" href="css/framework/effects.css">
		<link rel="stylesheet" type="text/css" href="css/framework/forms.css">
		<link rel="stylesheet" type="text/css" href="css/framework/navs.css">
		<link rel="stylesheet" type="text/css" href="css/framework/slidepanel.css">
		<link rel="stylesheet" type="text/css" href="css/framework/buttons.css">
		<link rel="stylesheet" type="text/css" href="css/framework/images.css">
		<link rel="stylesheet" type="text/css" href="css/framework/lightbox.css">
		<link rel="stylesheet" type="text/css" href="css/framework/overlay.css">
		<link rel="stylesheet" type="text/css" href="css/framework/states.css">

		<link rel="stylesheet" type="text/css" href="css/app.css">
		<link rel="stylesheet" type="text/css" href="css/framework/media-phone.css">
		<link href="//fonts.googleapis.com/css?family=Arvo&subset=latin" rel="stylesheet" type="text/css">
		<style>
		* {
		 font-family: 'Arvo', sans-serif!important;
		}
		</style>
	</head>
	<body class="enhanced gray-333333 has-header-fixed">

		<header class="nav bg-gray full-width position-fixed to-top z-index-1 touch-height" id="main_header">
			<ul>
				<li class="display-inline-block width-one-third text-align-left hamburger">
					<form>
						<label for="nav_primary_toggle" class="media-mobile white touch-height touch-width"></label>
		 				<input type="checkbox" class="nav-collapsible-toggle media-mobile touch-height touch-width is-hidden-via-opacity" name="nav_primary_toggle" id="nav_primary_toggle">
						<nav class="slidepanel left with-transition font-size-medium bg-gray text-align-left">
							<div>
								<h3 class="bg-gray-e1e1e8 padding-0-1em font-weight-bold">General</h3>
								<ul class="gray-eeeeee padding-1em">
									<li><a href="" class="gray-eeeeee text-decoration-none full-width touch-height">Home</a></li>
									<li><a href="" class="gray-eeeeee text-decoration-none full-width touch-height">Playlists</a></li>
									<li><a href="" class="gray-eeeeee text-decoration-none full-width touch-height">Change Language</a></li>
								</ul>
							</div>
							<div>
								<h3 class="bg-gray-e1e1e8 padding-0-1em font-weight-bold">My Cases</h3>
								<ul class="gray-eeeeee padding-1em">
									<li><a href="" class="gray-eeeeee text-decoration-none full-width touch-height">Ana Gutierrez</a></li>
									<li><a href="" class="gray-eeeeee text-decoration-none full-width touch-height">Ana Gutierrez</a></li>
									<li><a href="" class="gray-eeeeee text-decoration-none full-width touch-height">Ana Gutierrez</a></li>
								</ul>
							</div>
							<div>
								<h3 class="bg-gray-e1e1e8 padding-0-1em font-weight-bold">My Account</h3>
								<ul class="gray-eeeeee padding-1em">
									<li><a href="" class="gray-eeeeee text-decoration-none full-width touch-height">My Preferences</a></li>
									<li><a href="" class="gray-eeeeee text-decoration-none full-width touch-height">Change Password</a></li>
									<li><a href="" class="gray-eeeeee text-decoration-none full-width touch-height">Change Email</a></li>
									<li><a href="" class="gray-eeeeee text-decoration-none full-width touch-height">Log Out</a></li>
								</ul>
							</div>
							<div>
								<h3 class="bg-gray-e1e1e8 padding-0-1em font-weight-bold">Help</h3>
								<ul class="gray-eeeeee padding-1em">
									<li><a href="" class="gray-eeeeee text-decoration-none full-width touch-height">F.A.Q.</a></li>
									<li><a href="" class="gray-eeeeee text-decoration-none full-width touch-height">Contact Us</a></li>
								</ul>
							</div>
						</nav>
					</form>
				</li><!--
			 --><li class="display-inline-block width-one-third middle text-align-center" id="tackle_me">
					<h1>
						<a href="?user=<?=$user ?>" title="Home" class="text-decoration-none" id="logo">PAIRED PARENTING</a>
						<dots ng-show="showLoading"></dots>
					</h1>
				</li><!--
			 --><li class="display-inline-block position-relative width-one-third text-align-right"><span class="welcome">Welcome, <?=$title ?></span><img src="http://placehold.it/20x20/" alt="profile pic" class="profile-thumbnail" onclick="APP.showOverlay()">
				</li>
			</ul>
		</header>

		<section class="clearfix" id="main">

			<aside class="sidebar">
			<?php include('sidebar.php'); ?>
			</aside>

			<?php if ($user == 'bp' && empty($page)) {
				include('upcoming_visitations.php');
			?>
			<hr>

			<?php

				include('news_feed.html');
			} ?>

			<?php if ($user == 'bp' && $page == 'messages') {
				include('hardcoded_html/messages.html');
			} ?>

			<?php if ($user == 'bp' && $page == 'message') {
				include('message.html');
			} ?>

			<?php if ($user == 'bp' && $page == 'event_review') {
				echo '<img src="img/lock_screen.png" id="lock_screen" style="z-index: 100000000; position: fixed;width:100%;top:0" onclick="APP.lockScreen()">';
				include('hardcoded_html/event_review.html');
			} ?>

			<?php if ($user == 'sw' && empty($page)) {
				include('sw_welcome.html');
			} elseif ($user == 'sw' && $page == 'relationships_list') {
				include('relationships_list.php');
			} ?>

			<?php
			if ($user == 'fp' && empty($page)) {
				include('relationships_list_fp.php');
			}?>

			<?php
			if ($user == 'fp' && $page == 'messages') {
				include('hardcoded_html/messages_fp.html');
			}?>

		</section>

		<hr>

		<footer class="text-align-center">
			<nav id="tertiary" class="padding-1em">
				<ul class="nav-stackable with-pipes">
					<li><img src="fnt/Entypo+/chat.svg" class="chat"><a href="?user=bp&page=messages" title="" class="font-size-medium">Messages</a></li><!--
				 --><li><img src="fnt/Entypo+/calendar.svg" class="calendar"><a href="?user=bp" title="" class="font-size-medium">Events</a></li><!--
			     --><li><img src="fnt/Entypo+/man.svg" class="man"><a href="" title="" class="font-size-medium">Child Profiles</a></li>
				</ul>
			</nav>
			<span class="copyright display-block padding-1em font-size-medium">&copy; 2016 Paired Parenting</span>
		</footer>

		<overlay class="overlay" style="display: none;" id="overlay">
			<div class="overlay-content narrow-width margin-0-auto padding-2em-1em bg-white">
				<div class="overlay-child">
				</div>
				<button class="btn-with-icon btn-close" onclick="APP.closeOverlay()"><img src="fnt/Entypo+/circle-with-cross.svg" alt="cross" class="circle-with-cross icon"></button>
			</div>
		</overlay>

		<script src="js/vendor/handlebars-v4.0.5.js"></script>

		<script id="child_info" type="text/html">
		<?php include('child_info.mustache') ?>
		</script>

		<script id="event_planning" type="text/html">
		<?php include('event_planning.mustache') ?>
		</script>

		<script id="messages" type="text/html">
			<div class="content narrow">
				<div style='padding: 10px' class="name">
					with the <em>{{foster_family_surname}}</em>
				</div>

				{{#each message}}
					<div style="padding: 10px">
						{{#if incoming_message}}
							<div align="right"><em>{{timestamp}}</em></div>
							<div style="background-color: #F9DBBD; border-width:1px;border-style:solid;padding:5px;border-radius:7px;">
								{{text}}
							</div>
						{{else}}
							<div align="left"><em>{{timestamp}}</em></div>
							<div style="background-color: #D0C4DF; border-width:1px;border-style:solid;padding:5px;border-radius:7px;">
								{{text}}
							</div>
						{{/if}}
					</div>
				{{/each}}
				<div style='padding: 10px' class="name">
					<textarea rows="15" cols="50"></textarea>
				</div>
			</div>
		</script>

		<script id="permissions" type="text/html">
		<?php include('permissions.mustache') ?>
		</script>

		<script src="js/app.js"></script>
	</body>
</html>