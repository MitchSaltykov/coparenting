<h2 class="content text-align-center page-heading with-underline">Upcoming Visitations</h2>
<?php
if ($_GET['event_submitted']) { ?>
<div class="notification padding-left-1em fade-in-and-out">Visit proposed.</div>
<br>
<? }
?>
<div class="horizontal-scroll-outer">
	<ul class="horizontal-scroll-inner">
		<li class="card calendar" onclick="alert('Coming soon.')">
			<ul>
				<li class="calendar-date">December</li>
				<li class="calendar-image"><span class="number">6</span><img src="fnt/Entypo+/calendar.svg" alt="child"></li>
				<li class="calendar-copy">Visitation</li>
			</ul>
		</li>
		<li class="card calendar" onclick="alert('Coming soon.')">
			<ul>
				<li class="calendar-date">December</li>
				<li class="calendar-image"><span class="number">9</span><img src="fnt/Entypo+/calendar.svg" alt="child"></li>
				<li class="calendar-copy">Visitation</li>
			</ul>
		</li>
		<li class="card calendar" onclick="alert('Coming soon.')">
			<ul>
				<li class="calendar-date">December</li>
				<li class="calendar-image"><span class="number">10</span><img src="fnt/Entypo+/calendar.svg" alt="child"></li>
				<li class="calendar-copy">Visitation</li>
			</ul>
		</li>
		<li class="card calendar" onclick="alert('Coming soon.')">
			<ul>
				<li class="calendar-date">December</li>
				<li class="calendar-image"><span class="number">16</span><img src="fnt/Entypo+/calendar.svg" alt="child"></li>
				<li class="calendar-copy">Visitation</li>
			</ul>
		</li>
		<li class="card calendar" onclick="alert('Coming soon.')">
			<ul>
				<li class="calendar-date">December</li>
				<li class="calendar-image"><span class="number">20</span><img src="fnt/Entypo+/calendar.svg" alt="child"></li>
				<li class="calendar-copy">Visitation</li>
			</ul>
		</li>
		<li class="card calendar" onclick="alert('Coming soon.')">
			<ul>
				<li class="calendar-date">December</li>
				<li class="calendar-image"><span class="number">24</span><img src="fnt/Entypo+/calendar.svg" alt="child"></li>
				<li class="calendar-copy">Visitation</li>
			</ul>
		</li>
		<li class="card calendar" onclick="alert('Coming soon.')">
			<ul>
				<li class="calendar-date">January</li>
				<li class="calendar-image"><span class="number">2</span><img src="fnt/Entypo+/calendar.svg" alt="child"></li>
				<li class="calendar-copy">Visitation</li>
			</ul>
		</li>
		<li class="card calendar" onclick="alert('Coming soon.')">
			<ul>
				<li class="calendar-date">January</li>
				<li class="calendar-image"><span class="number">5</span><img src="fnt/Entypo+/calendar.svg" alt="child"></li>
				<li class="calendar-copy">Visitation</li>
			</ul>
		</li>
		<li class="card calendar" onclick="alert('Coming soon.')">
			<ul>
				<li class="calendar-date">January</li>
				<li class="calendar-image"><span class="number">8</span><img src="fnt/Entypo+/calendar.svg" alt="child"></li>
				<li class="calendar-copy">Visitation</li>
			</ul>
		</li>
		<li class="card calendar" onclick="alert('Coming soon.')">
			<ul>
				<li class="calendar-date">January</li>
				<li class="calendar-image"><span class="number">12</span><img src="fnt/Entypo+/calendar.svg" alt="child"></li>
				<li class="calendar-copy">Visitation</li>
			</ul>
		</li>
	</ul>
</div>

<?php if ($_GET['allowed'] == 'true') { ?>
<button class="btn display-block text-align-center btn-with-icon-and-text" style="margin: 0 auto;" onclick="APP.showOverlay('event_planning')"><img src="fnt/Entypo+/circle-with-plus.svg" class="icon circle-with-plus">Propose Visit</button>
<?php } ?>