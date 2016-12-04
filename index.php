<?php

if (!$user) {
	$user = $_GET['user'];
}

if (!$page) {
	$page = $_GET['page'];
}

switch ($user) {
    case 'sw':
        $title = 'Social Worker';
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
						<span class="circle notification">1</span>
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
			 --><li class="display-inline-block width-one-third middle text-align-center">
					<h1>
						<a href="" title="Home" class="text-decoration-none" id="logo">COPARENTING</a>
						<dots ng-show="showLoading"></dots>
					</h1>
				</li><!--
			 --><li class="display-inline-block position-relative width-one-third text-align-right"><span class="welcome">Welcome, <?=$title ?></span><img src="http://placehold.it/20x20/" alt="profile pic" class="profile-thumbnail">
				</li>
			</ul>
		</header>

		<section class="clearfix" id="main">

			<?php include('sidebar.html'); ?>

			<?php if ($user == 'bp' && empty($page)) {
				include('upcoming_visitations.html');

				echo '<hr>';

				include('news_feed.html');
			} ?>

			<?php if ($user == 'bp' && $page == 'messages') {
				include('message_list.html');
			} ?>

			<?php if ($user == 'bp' && $page == 'message') {
				include('message.html');
			} ?>

			<?php if ($user == 'sw') {
				include('relationships_list.php');
			} ?>

		</section>

		<hr>

		<footer class="text-align-center">
			<nav id="tertiary" class="padding-1em">
				<ul class="nav-stackable with-pipes">
					<li><img src="fnt/Entypo+/chat.svg" class="chat"><a href="?user=bp&page=messages" title="" class="font-size-medium">Messages</a></li><!--
				 --><li><img src="fnt/Entypo+/calendar.svg" class="calendar"><a href="" title="" class="font-size-medium">Events</a></li><!--
			     --><li><img src="fnt/Entypo+/man.svg" class="man"><a href="" title="" class="font-size-medium">Child Profiles</a></li>
				</ul>
			</nav>
			<span class="copyright display-block padding-1em font-size-medium">&copy; 2016 Coparenting</span>
		</footer>

		<overlay class="overlay" style="display: none;" id="overlay">
			<div class="overlay-child narrow-width margin-0-auto padding-2em-1em bg-white">
				<h2 class="font-size-large font-weight-bold line-height-triple">Loading...</h2>
				<p class="font-size-medium line-height-single">We thank you for patience while we load your entertainment for this evening.</p>
			</div>
		</overlay>

		<script src="js/vendor/handlebars-v4.0.5.js"></script>

		<script id="child_info" type="text/html">

			<div class="content narrow">
				<div class="name">
					<h4>Name:</h4>
					<input value="{{child_name}}"/>
				</div>

				<br>

				<div>
					<h4>Allergies:</h4>
					{{#each allergy}}
						<div>
							<input type="checkbox" id="{{allergen_id}}" checked="{{is_allergic}}">
							<label for="{{allergen_id}}">{{name}}</label>
						</div>
					{{/each}}
				</div>

				<br>

				<div>
					<h4>Morning Routine:</h4>
					<div><textarea rows="4" cols="50">{{morning_routine}}</textarea></div>
				</div>

				<br>

				<div>
					<h4>Evening Routine:</h4>
					<div><textarea rows="4" cols="50">{{evening_routine}}</textarea></div>
				</div>
			</div>

		</script>

		<script id="event_planning" type="text/html">
			<div class="content narrow">
				<div class="name">
					Event Name:
					<input value="{{event_name}}"/>
				</div>

				<br>

				<div class="name">
					Event type: 
					<select>
						{{#each event_type}}
							{{#if selected}}
								<option selected="selected">{{name}}</option>
							{{else}}
								<option>{{name}}</option>
							{{/if}}
						{{/each}}
					</select>
				</div>

				<br>

				<div class="name">
					<div>Description:</div>
					<textarea rows="5" cols="50">{{description}}</textarea>
				</div>

				<br>

				<div>
					With:
					<ul>
						{{#each child}}
							<li><input type="checkbox" checked="{{chosen}}"/> {{child_name}} (with the
								<em>{{foster_family_surname}}</em>)
							</li>
						{{/each}}
					</ul>
				</div>
			</div>
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
			<div class="content narrow">
				{{#each parent}}
					<div style='padding: 10px; clear:left' class="name">
					Parent's Name:
					<em>{{parent_name}}</em>
				</div>

					<div style='padding: 10px; width: 40%; float: left; inline'>
						Communication allowed?
					{{#each foster_family}}
						<div>
							{{#if approved}}
								<input type="checkbox" name="foster_family_{{id}}_communication_approved" checked="{{approved}}"/>
							{{else}}
								<input type="checkbox" name="foster_family_{{id}}_communication_approved"/>
							{{/if}}
							<label for="foster_family_{{id}}_communication_approved">the <em>{{surname_plural}}</em></label>
						</div>
					{{/each}}
				</div>

				<div style='padding: 10px'>
					Visitations approved?
					<div>
						<div><input type="checkbox" checked="{{supervised_visits_approved}}">Supervised</div>
						<div><input type="checkbox" checked="{{unsupervised_visits_approved}}">Unsupervised</div>
					</div>
				</div>
				{{/each}}

				<div style='clear:left' align="center">
					<hr/>
					<button>Save</button>
					<button>Cancel</button>
				</div>
			</div>
		</script>

		<script src="js/app.js"></script>
	</body>
</html>