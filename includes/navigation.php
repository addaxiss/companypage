<header class="header">
	<div class="clearfix">
		<div class="logo-block grid-child">
			<a href="index.php" class="logo">Gipke Industries</a>
		</div> <!-- /logo-block -->

		<nav class="nav-block">
			<ul class="ul-base nav">
				<li><a href="overview.php">Overview</a></li>
				<li><a href="teams.php">Teams</a></li>
				<li><a href="featured.php">Featured-Projects</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="#popup-sign-up" class='button-signup-trigger'>Sign-up</a></li>
			</ul>
		</nav>
	</div>
</header>


<div id='popup-sign-up' class='popup-inline mfp-hide'>
	<div class="heading-block">
		<div class='heading-secondary'>SIGN UP</div>
		<div class=sub-heading>From here, there is only up. </div>
	</div> <!-- /heading block -->
	<form class='form-sign-up js-form-validate'>
		<div class='grid-parent'>
			<div class='grid-child sign-up-each field-block'>
				<label for='s-username' class='label label-required'>Username</label>
				<input type="username" class='input-text input-required' id="s-username">
			</div><!-- form-sign-up-each-Username -->
			<div class='grid-child sign-up-each field-block'>
				<label for='s-email' class='label label-required'>Email Text</label>
				<input type="email" class='input-text' id="s-email">
			</div><!-- form-sign-up-each-Email -->
		</div>
		<!-- /grid-parent -->

		<div class='grid-parent'>
			<div class='grid-child sign-up-each field-block'>
				<label for='s-password' class='label label-required'>Password</label>
				<input type="password" class='input-text input-required' id="s-password">
			</div><!-- form-sign-up-each-->
			<div class='grid-child sign-up-each field-block'>
				<label for='s-password-confirm' class='label label-required'>Confirm Password</label>
				<input type="password" class='input-text input-required' id="s-password-confirm">
			</div><!-- form-sign-up-each-->
		</div><!--grid-parent -->
		
		<div class='field-block'>
			<input type="submit" class='button full-width' value='Submit'>
		</div>
		</form>
	<!-- /sign up pop-up form-->
</div> <!-- /pop-up block -->