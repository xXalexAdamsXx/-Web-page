<?php
//HTMLheader.php
?>
<script src="JS/NavMuscle.js"></script>
<link rel="stylesheet" href="CSS/NavStyle.css">
<div id="nav-bar" class='nav-container'>
	<nav class="nav">
		<a class="home-link" href='index.php'>
			<img class="nav-logo" src='Assets/PKP-CoatofArms.png' alt='Company Logo Here' />
		</a>

		<div class='right-side'>
			<a href='LearnMore.php'>Learn More</a>
			<a id='sign-in' class="account-button">
				<img class="profile-picture" src='Assets/Empty-Profile.png' alt='Log-in image' />
				<span>Log-in</span>
			</a>

		</div>
	</nav>
</div>

<!-- The styling for the header is currently dynamically set to whatever the height of the nav-bar is styled as. This will ensure that the rest of the page will show -->
<div id='top-spacing'></div>