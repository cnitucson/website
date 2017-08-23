<nav class="navbar">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="./">CALL &#38; NICHOLAS</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li <?php echo ($page == 'index') ? 'class="active"' : '';?>> <a href="/">Home</a></li>
				<li <?php echo ($page == 'about') ? 'class="active"' : '';?>> <a href="./about.php">About</a></li>
				<li><a href="./publications.php">Publications</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li <?php echo ($page == 'openpit') ? 'class="active"' : '';?>> <a href="./openpit.php">OPEN PIT</a></li>
						<li <?php echo ($page == 'underground') ? 'class="active"' : '';?>> <a href="./underground.php">UNDERGROUND</a></li>
						<li <?php echo ($page == 'hydrogeology') ? 'class="active"' : '';?>> <a href="./hydrogeology.php">HYDROGEOLOGY</a></li>
						<li <?php echo ($page == 'geology') ? 'class="active"' : '';?>> <a href="./geology.php">GEOLOGY</a></li>
						<li <?php echo ($page == 'other') ? 'class="active"' : '';?>> <a href="./other.php">OTHER SERVICES</a></li>
					</ul>
				</li>
				<li><a href="./contact.php">Contact</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>